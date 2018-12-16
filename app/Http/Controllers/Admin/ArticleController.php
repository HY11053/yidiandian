<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Acreagement;
use App\AdminModel\Admin;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\InvestmentType;
use App\Http\Requests\CreateArticleRequest;
use App\Helpers\UploadImages;
use App\Http\Requests\CreateBrandArticleRequest;
use App\Notifications\ArticlePublishedNofication;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Log;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**文档列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Index()
    {
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->orderBy('id','desc')->paginate(30);
        return view('admin.article',compact('articles'));
    }

    /**品牌文档查看
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Brands()
    {
        $articles=Brandarticle::withoutGlobalScope(PublishedScope::class)->orderBy('id','desc ')->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }
    /**品牌文档搜索
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function PostArticleBrandSearch(Request $request)
    {
        $articles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('title','like','%'.$request->input('title').'%')->latest()->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }

    /**普通文档创建
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Create()
    {
        $allnavinfos=Arctype::where('is_write',1)->where('mid',0)->pluck('typename','id');
        return view('admin.article_create',compact('allnavinfos'));
    }

    /**品牌文档创建
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function BrandCreate()
    {
        $allnavinfos=Arctype::where('is_write',1)->where('mid',1)->pluck('typename','id');
        $investments=InvestmentType::orderBy('id','asc')->pluck('type','id');
        $acreagements=Acreagement::orderBy('id','asc')->pluck('type','id');
        return view('admin.article_brandcreate',compact('allnavinfos','investments','acreagements'));
    }

    /**文档创建提交数据处理
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostCreate(CreateArticleRequest $request)
    {
        if(Archive::withoutGlobalScope(PublishedScope::class)->where('title',$request->title)->value('id'))
        {
            exit('标题重复，禁止发布');
        }
        $request['brandid']= !empty($request['bdname'])?Brandarticle::withoutGlobalScope(PublishedScope::class)->where('brandname','like','%'.$request['bdname'].'%')->value('id'):0;
        $request['brandid']=!empty($request['brandid'])?$request['brandid']:0;
        $this->RequestProcess($request);
        if ( Archive::create($request->all())->wasRecentlyCreated)
        {
            //百度相关数据提交
            $thisarticle=Archive::withoutGlobalScope(PublishedScope::class)->where('id',Archive::withoutGlobalScope(PublishedScope::class)->max('id'))->find(Archive::withoutGlobalScope(PublishedScope::class)->max('id'));
            if ($thisarticle->published_at>Carbon::now() || $thisarticle->ismake !=1)
            {
                auth('admin')->user()->notify(new ArticlePublishedNofication(Archive::latest() ->first()));
                return redirect(action('Admin\ArticleController@Index'));
            }else{
                $thisarticleurl=config('app.url').'/news/'.$thisarticle->id.'.shtml';
                $miparticleurl=str_replace('www.','mip.',config('app.url')).'/news/'.$thisarticle->id.'.shtml';
                $this->BaiduCurl(config('app.api'),$thisarticleurl,'百度主动提交');
                if ($request->xiongzhang)
                {
                    $this->BaiduCurl(config('app.mip_api'),$miparticleurl,'熊掌号实时推送');
                }else{
                    $this->BaiduCurl(config('app.mip_history'),$miparticleurl,'熊掌号历史提交');
                }
                auth('admin')->user()->notify(new ArticlePublishedNofication(Archive::latest() ->first()));
                return redirect(action('Admin\ArticleController@Index'));
            }
        }
    }

    /**
     * 品牌文档提交处理
     * @param CreateBrandArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function PostBrandArticle(CreateBrandArticleRequest $request)
    {
        if(Brandarticle::withoutGlobalScope(PublishedScope::class)->where('title',$request->title)->where('created_at','>',Carbon::today())->value('id'))
        {
            exit('标题重复，禁止发布');
        }
        $this->RequestProcess($request);
        if (Brandarticle::create($request->all())->wasRecentlyCreated)
        {
            $thisarticle=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',Brandarticle::withoutGlobalScope(PublishedScope::class)->max('id'))->find(Brandarticle::withoutGlobalScope(PublishedScope::class)->max('id'));
            if ($thisarticle->published_at>Carbon::now() || $thisarticle->ismake !=1)
            {
                return redirect(action('Admin\ArticleController@Brands'));
            }else{
                $thisarticleurl=config('app.url').'/xm/'.$thisarticle->id.'.shtml';
                $this->BaiduCurl(config('app.api'),$thisarticleurl,'百度主动提交');
                $miparticleurl=str_replace('www.','mip.',config('app.url')).'/xm/'.$thisarticle->id.'.shtml';
                if ($request->xiongzhang==1)
                {
                    $this->BaiduCurl(config('app.mip_api'),$miparticleurl,'熊掌号实时推送');
                }elseif($request->xiongzhang==2){
                    $this->BaiduCurl(config('app.mip_history'),$miparticleurl,'熊掌号历史提交');
                }
                return redirect(action('Admin\ArticleController@Brands'));
            }
        }
    }

    /**普通文档文档编辑
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Edit($id)
    {
        $articleinfos=Archive::withoutGlobalScope(PublishedScope::class)->findOrfail($id);
        $allnavinfos=Arctype::where('is_write',1)->where('mid',0)->pluck('typename','id');
        $pics=explode(',',Archive::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('imagepics'));
        return view('admin.article_edit',compact('id','articleinfos','allnavinfos','pics'));
    }
    public function BrandEdit($id)
    {
        $allnavinfos=Arctype::where('is_write',1)->where('mid',1)->pluck('typename','id');
        $pics=explode(',',Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('imagepics'));
        $articleinfos=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->first();
        if ($articleinfos->dutyadmin==1 && $articleinfos->editor_id==0 &&  Admin::where('id',auth('admin')->id())->value('type')==0)
        {
            exit('文档未领取,不能直接编辑');
        }
        if ($articleinfos->editor_id!=0 && $articleinfos->editor_id !=auth('admin')->id() &&  Admin::where('id',auth('admin')->id())->value('type')==0)
        {
            exit('文档不属于当前用户或您不是管理员，不能编辑');
        }
        $investments=InvestmentType::orderBy('id','asc')->pluck('type','id');
        $acreagements=Acreagement::orderBy('id','asc')->pluck('type','id');
        return view('admin.article_brandedit',compact('id','articleinfos','allnavinfos','pics','investments','acreagements'));
    }

    /**文档编辑提交处理
     * @param CreateArticleRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostEdit(CreateArticleRequest $request,$id)
    {
        $request['brandid']= !empty($request['bdname'])?Brandarticle::withoutGlobalScope(PublishedScope::class)->where('brandname','like','%'.$request['bdname'].'%')->value('id'):0;
        $request['brandid']=!empty($request['brandid'])?$request['brandid']:0;
        $this->RequestProcess($request);
        $thisarticleinfos=Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($id);
        $request['write']=$thisarticleinfos->write;
        $request['dutyadmin']=$thisarticleinfos->dutyadmin;
        if ($thisarticleinfos->ismake || $thisarticleinfos->published_at>Carbon::now() || $request->ismake !=1)
        {
            Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            return redirect(action('Admin\ArticleController@Index'));
        }else{
            $request['created_at']=Carbon::now();
            $request['updated_at']=Carbon::now();
            $request['published_at']=Carbon::now();
            Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            $thisarticleurl=config('app.url').'/news/'.$thisarticleinfos->id.'.shtml';
            $miparticleurl=str_replace('www.','mip.',config('app.url')).'/news/'.$thisarticleinfos->id.'.shtml';
            $this->BaiduCurl(config('app.api'),$thisarticleurl,'审核后百度主动提交');
            if ($request->xiongzhang)
            {
                $this->BaiduCurl(config('app.mip_api'),$miparticleurl,'审核后熊掌号实时推送');
            }else{
                $this->BaiduCurl(config('app.mip_history'),$miparticleurl,'审核后熊掌号历史提交');
            }
            return redirect(action('Admin\ArticleController@Index'));
        }
    }

    public function PostBrandArticleEditor(CreateBrandArticleRequest $request,$id)
    {
        $this->RequestProcess($request);
        $thisarticleinfos=Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id);
        $request['write']=$thisarticleinfos->write;
        $request['dutyadmin']=$thisarticleinfos->dutyadmin;
        if ($thisarticleinfos->ismake || $thisarticleinfos->published_at>Carbon::now() || $request->ismake !=1)
        {
            Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            return redirect(action('Admin\ArticleController@Brands'));
        }else{
            $request['created_at']=Carbon::now();
            $request['updated_at']=Carbon::now();
            $request['published_at']=Carbon::now();
            Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            $thisarticleurl=config('app.url').'/xm/'.$thisarticleinfos->id.'.shtml';
            $this->BaiduCurl(config('app.api'),$thisarticleurl,'百度主动提交');
            $miparticleurl=str_replace('www.','mip.',config('app.url')).'/xm/'.$thisarticleinfos->id.'.shtml';
            if ($request->xiongzhang)
            {
                $this->BaiduCurl(config('app.mip_api'),$miparticleurl,'熊掌号实时推送');
            }else{
                $this->BaiduCurl(config('app.mip_api_hostory'),$miparticleurl,'熊掌号历史提交');
            }
            return redirect(action('Admin\ArticleController@Brands'));
        }
    }

    /**
     *自定义文档属性及缩略图处理
     * @param Request $request
     * @return Request
     */
    private function RequestProcess(Request $request)
    {
        $request['keywords']=$request['keywords']?$request['keywords']:$request['title'];
        $request['click']=rand(100,900);
        $request['description']=(!empty($request['description']))?str_limit($request['description'],180,''):str_limit(str_replace(['&nbsp;',' ','　',PHP_EOL,'\t'],'',strip_tags(htmlspecialchars_decode($request['body']))), $limit = 180, $end = '');
        $request['write']=auth('admin')->user()->name;
        $request['dutyadmin']=auth('admin')->id();
        //自定义文档属性处理
        if(isset($request['flags']))
        {
            $request['flags']=UploadImages::Flags($request['flags']);
        }
        //缩略图处理
        if($request['image'])
        {
            $request['litpic']=UploadImages::UploadImage($request,'image');
            if(empty($request['flags']))
            {
                $request['flags'].='p';
            }else{
                $request['flags'].=',p';
            }
        }elseif (isset($request['litpic']) && !empty($request['litpic'])  && $request['litpic']!='/frontend/images/nopic.png')
        {
            $request['litpic']=$request['litpic'];
        }elseif (preg_match('/<[img|IMG].*?src=[\' | \"](.*?(?:[\.jpg|\.jpeg|\.png|\.gif|\.bmp]))[\'|\"].*?[\/]?>/i',$request['body'],$match)){
            $request['litpic']=$match[1];
            if(empty($request['flags']))
            {
                $request['flags'].='p';
            }else{
                $request['flags'].=',p';
            }
        }
        //首页推荐图处理
        if($request['indexlitpic']) {
            $request['indexpic'] = UploadImages::UploadImage($request, 'indexlitpic');
        }
        //图集处理
        $request['imagepics']=rtrim($request->input('imagepics'),',');
        return $request;
        if (Admin::where('id',auth('admin')->id())->value('type')!=1)
        {
            $request['ismake']=0;
        }
    }
    /**当前用户发布的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function OwnerShip()
    {
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->where('dutyadmin',auth('admin')->user()->id)->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }
    /**当前用户发布的品牌文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function BrandArticleOwnerShip()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('dutyadmin',auth('admin')->user()->id)->latest()->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }


    /**等待审核的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PendingAudit()
    {
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }
    /**等待审核的品牌文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PendingAuditBrandarticle()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->latest()->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }

    /**品牌文档领取中心
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function BrandarticlesReceive()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('dutyadmin',1)->orderBy('id','asc')->paginate(30);
        return view('admin.brand_article_receive',compact('articles'));
    }
    public function Brandreceives()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('editor_id','<>',0)->orderBy('id','asc')->paginate(30);
        return view('admin.brand_received',compact('articles'));
    }
    /**品牌文档领取异步更新
     * @param $id
     */
    public function UpdateBrabdReceive($id)
    {
        if (!Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('editor_id'))
        {
            Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('dutyadmin',1)->where('editor_id',0)->where('id',$id)->update(['editor'=>auth('admin')->user()->name,'editor_id'=>auth('admin')->id(),'received_at'=>Carbon::now()]);
            return [auth('admin')->user()->name,'已成功领取品牌'];
        }else{
            return [Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('editor'),'已经领取过该品牌，不可重复领取'];
        }

    }

    /**我已领取的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function ownBrandarticleRecevied(){
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('editor_id',auth('admin')->id())->latest()->paginate(30);
        return view('admin.brand_received',compact('articles'));
    }

    /**已领取未修改品牌汇总
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function BrandReceivednoMod()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('editor_id','<>',0)->where('isedit',0)->orderBy('id','asc')->paginate(30);
        return view('admin.brand_received',compact('articles'));
    }
    /**已领取未修改品牌汇总
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function BrandReceivedModedNomake()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('editor_id','<>',0)->where('isedit',1)->orderBy('id','asc')->paginate(30);
        return view('admin.brand_received',compact('articles'));
    }

    /**等待发布的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PedingPublished(){
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->where('published_at','>',Carbon::now())->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }

    /**普通文档删除
     * @param $id
     * @return string
     */
    function DeleteArticle($id)
    {
        if(auth('admin')->user()->id)
        {
            Archive::withoutGlobalScope(PublishedScope::class)->where('id',$id)->delete();
            return '删除成功';
        }else{
            return '无权限执行此操作！';
        }
    }

    /**品牌文档删除
     * @param $id
     * @return string
     */
    public function DeleteBrandArticle($id)
    {
        if(auth('admin')->user()->id)
        {
            dd('deny');
            Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->delete();
            return '删除成功';
        }else{
            return '无权限执行此操作！';
        }
    }


    /**文档搜索
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PostArticleSearch(Request $request)
    {
        $articles=Archive::withoutGlobalScope(PublishedScope::class)->where('title','like','%'.$request->input('title').'%')->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }


    /** 栏目文章查看
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Type($id)
    {
        switch (Arctype::where('id',$id)->value('mid'))
        {
            case 0:
                $articles=Archive::withoutGlobalScope(PublishedScope::class)->where('typeid',$id)->latest()->paginate(30);
                $view='admin.article';
                break;
            case 1:
                $articles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('typeid',$id)->latest()->paginate(30);
                $view='admin.brandarticle';
                break;
        }
        return view($view,compact('articles'));
    }


    /**百度主动推送
     * @param $thisarticleurl
     * @param $token
     * @param $type
     */
    private function BaiduCurl($token,$thisarticleurl,$type)
    {
        $urls = array($thisarticleurl);
        $ch = curl_init();
        $options =  array(
            CURLOPT_URL =>$token,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $urls),
            CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
        );
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        Log::info($thisarticleurl.$type);
        Log::info($result);
    }

    /**重复标题检测
     * @param Request $request
     * @return int
     */
    public function ArticletitleCheck(Request $request)
    {
        $title=Archive::withoutGlobalScope(PublishedScope::class)->where('title',$request->input('title'))->count();
        if (!$title)
        {
            $title=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('title',$request->input('title'))->value('title');
        }
        return $title?1:0;
    }

}
