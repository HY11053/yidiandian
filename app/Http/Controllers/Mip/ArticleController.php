<?php

namespace App\Http\Controllers\Mip;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\Production;
use Carbon\Carbon;
use App\Overwrite\Paginator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\AdminModel\Comment;

class ArticleController extends Controller
{
    /**普通文档界面
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function GetArticle(Request $request,$path,$id)
    {
        $thistypeinfos=Arctype::findOrFail(Arctype::where('real_path',$path)->value('id'));
        if ($thistypeinfos->mid==0)
        {
            $thisarticleinfos=Archive::find($id);
            if ($thisarticleinfos->brandid)
            {
                $thisBrandArticle=Brandarticle::find($thisarticleinfos->brandid);
            }
            $published=$thisarticleinfos->created_at;
            DB::table('archives')->where('id',$id)->update(['click'=>$thisarticleinfos->click+1,'published_at'=>$published]);
            $prev_article = Archive::latest('published_at')->find($this->getPrevArticleId($thisarticleinfos->id));
            $next_article = Archive::latest('published_at')->find($this->getNextArticleId($thisarticleinfos->id));
            $xg_search=Archive::where('typeid',$thisarticleinfos->typeid)->take(10)->latest()->get();
            $topbrands=Brandarticle::where('mid','1')->take(4)->orderBy('click','desc')->get();
            $latestbrands=Brandarticle::where('mid','1')->latest()->take(4)->orderBy('id','desc')->get();
            $latesenews=Archive::where('typeid','<>',$thisarticleinfos->arctype->id)->take(7)->latest()->get();
            return view('mip.article_article',compact('thisarticleinfos','thisBrandArticle','prev_article','next_article','xg_search','latestbrands','topbrands','latesenews'));
        }else{
            $thisarticleinfos=Brandarticle::findOrFail($id);
            $pics=array_filter(explode(',',$thisarticleinfos->imagepics));
            $brandnews=Archive::where('brandid',$id)->take(10)->orderBy('id','desc')->get();
            $topbrands=Brandarticle::take(4)->orderBy('click','desc')->get();
            $latesnews=Archive::take(5)->orderBy('id','desc')->get();
            $latestbrands=Brandarticle::take(5)->orderBy('id','desc')->get();
            $latestbrandnews=Archive::where('brandid','<>','')->take(10)->latest()->get();
            $published=$thisarticleinfos->created_at;
            DB::table('brandarticles')->where('id',$id)->update(['click'=>$thisarticleinfos->click+1,'published_at'=>$published]);
            return view('mip.brand_article',compact('thisarticleinfos','pics','brandnews','topbrands','latesnews','latestbrands','latestbrandnews'));
        }
   }

    /**品牌文档界面
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function BrandArticle($id)
    {

       }

    /**
     * 品牌产品界面
     * @param $id
     * @param int $pid
     * @param int $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function BrandProductionArticle($id,$pid=0,$page=0)
    {
        if($id>5013)
        {
            abort(404);
        }
        $thisarticleinfos=Brandarticle::findOrFail($id);
        $pics=array_filter(explode(',',$thisarticleinfos->imagepics));
        $brandnews=Archive::where('brandid',$id)->take(10)->orderBy('id','desc')->get();
        $typeid=Brandarticle::where('id',$id)->value('typeid');
        $typeids=Arctype::where('reid',$typeid)->pluck('id');
        $topbrands=Brandarticle::whereIn('typeid',$typeids)->orwhere('typeid',$typeid)->take(10)->orderBy('click','desc')->get();
        $latesnews=Archive::take(10)->orderBy('id','desc')->get();
        $latestbrands=Brandarticle::take(20)->orderBy('id','desc')->get();
        $cid=$id.'/'.$pid;
        $productionlists=Arctype::whereIn('id',Production::where('brandid',$id)->distinct()->pluck('typeid'))->get();
        $productions=Production::where('brandid',$id)->when($pid, function ($query) use ($pid) {
            return $query->where('typeid',$pid);
        })->paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page);
        $productions= Paginator::transfer(
            $cid,//传入分类id,
            $productions//传入原始分页器
        );

        $published=$thisarticleinfos->created_at;
        DB::table('brandarticles')->where('id',$id)->update(['click'=>$thisarticleinfos->click+1,'published_at'=>$published]);
        $indexname=$thisarticleinfos->nid?'干洗店投资网':'干洗店投资网';
        $abrandlists=Brandarticle::where('mid','1')->where('typeid',$thisarticleinfos->typeid)->where('flags','like','%'.'a'.'%')->take(4)->orderBy('id','desc')->get();
        return view('frontend.brand_production',compact('thisarticleinfos','productionlists','pid','productions','topbrands','pics','brandnews','latesnews','latestbrands','indexname','abrandlists'));
    }

    /**公司品牌介绍
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function BrandCompanyArticle($id)
    {
        if($id>5013)
        {
            abort(404);
        }
        $thisarticleinfos=Brandarticle::findOrFail($id);
        $pics=array_filter(explode(',',$thisarticleinfos->imagepics));
        $brandnews=Archive::where('brandid',$id)->take(10)->orderBy('id','desc')->get();
        $typeid=Brandarticle::where('id',$id)->value('typeid');
        $typeids=Arctype::where('reid',$typeid)->pluck('id');
        $topbrands=Brandarticle::whereIn('typeid',$typeids)->orwhere('typeid',$typeid)->take(10)->orderBy('click','desc')->get();
        $latesnews=Archive::take(5)->orderBy('id','desc')->get();
        $latestbrands=Brandarticle::take(5)->orderBy('id','desc')->get();
        $published=$thisarticleinfos->created_at;
        DB::table('brandarticles')->where('id',$id)->update(['click'=>$thisarticleinfos->click+1,'published_at'=>$published]);
        $indexname=$thisarticleinfos->nid?'干洗店投资网':'干洗店投资网';
        $comments=Comment::where('archive_id',$thisarticleinfos->id)->where('is_hidden',0)->get();
        $abrandlists=Brandarticle::where('mid','1')->where('typeid',$thisarticleinfos->typeid)->where('flags','like','%'.'a'.'%')->take(4)->orderBy('id','desc')->get();
        return view('frontend.brand_company',compact('thisarticleinfos','pics','brandnews','topbrands','latesnews','indexname','latestbrands','comments','abrandlists'));
    }

    /**品牌加盟详情
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function BrandJoinArticle($id)
    {
        if($id>5013)
        {
            abort(404);
        }
        $thisarticleinfos=Brandarticle::findOrFail($id);
        $pics=array_filter(explode(',',$thisarticleinfos->imagepics));
        $brandnews=Archive::where('brandid',$id)->take(10)->orderBy('id','desc')->get();
        $typeid=Brandarticle::where('id',$id)->value('typeid');
        $typeids=Arctype::where('reid',$typeid)->pluck('id');
        $topbrands=Brandarticle::whereIn('typeid',$typeids)->orwhere('typeid',$typeid)->take(10)->orderBy('click','desc')->get();
        $latesnews=Archive::take(5)->orderBy('id','desc')->get();
        $latestbrands=Brandarticle::take(5)->orderBy('id','desc')->get();
        $published=$thisarticleinfos->created_at;
        DB::table('brandarticles')->where('id',$id)->update(['click'=>$thisarticleinfos->click+1,'published_at'=>$published]);
        $indexname=$thisarticleinfos->nid?'干洗店投资网':'干洗店投资网';
        $comments=Comment::where('archive_id',$thisarticleinfos->id)->where('is_hidden',0)->get();
        $abrandlists=Brandarticle::where('mid','1')->where('typeid',$thisarticleinfos->typeid)->where('flags','like','%'.'a'.'%')->take(4)->orderBy('id','desc')->get();
        return view('frontend.brand_join',compact('thisarticleinfos','pics','brandnews','topbrands','latesnews','indexname','latestbrands','comments','abrandlists'));

    }

    /**品牌利润分析
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function BrandProfitArticle($id)
    {
        if($id>5013)
        {
            abort(404);
        }
        $thisarticleinfos=Brandarticle::findOrFail($id);
        $pics=array_filter(explode(',',$thisarticleinfos->imagepics));
        $brandnews=Archive::where('brandid',$id)->take(10)->orderBy('id','desc')->get();
        $typeid=Brandarticle::where('id',$id)->value('typeid');
        $typeids=Arctype::where('reid',$typeid)->pluck('id');
        $topbrands=Brandarticle::whereIn('typeid',$typeids)->orwhere('typeid',$typeid)->take(10)->orderBy('click','desc')->get();
        $latesnews=Archive::take(5)->orderBy('id','desc')->get();
        $latestbrands=Brandarticle::take(5)->orderBy('id','desc')->get();
        $published=$thisarticleinfos->created_at;
        DB::table('brandarticles')->where('id',$id)->update(['click'=>$thisarticleinfos->click+1,'published_at'=>$published]);
        $indexname=$thisarticleinfos->nid?'干洗店投资网':'干洗店投资网';
        $comments=Comment::where('archive_id',$thisarticleinfos->id)->where('is_hidden',0)->get();
        $abrandlists=Brandarticle::where('mid','1')->where('typeid',$thisarticleinfos->typeid)->where('flags','like','%'.'a'.'%')->take(4)->orderBy('id','desc')->get();
        return view('frontend.brand_profit',compact('thisarticleinfos','pics','brandnews','topbrands','latesnews','indexname','latestbrands','comments','abrandlists'));
    }

    /**品牌新闻
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function BrandNewsArticle($id,$page=0,Request $request)
    {
        if($id>5013)
        {
            abort(404);
        }
        $cid='brand/'.$id.'/news';
        $thisarticleinfos=Brandarticle::findOrFail($id);
        $pics=array_filter(explode(',',$thisarticleinfos->imagepics));
        $typeid=Brandarticle::where('id',$id)->value('typeid');
        $typeids=Arctype::where('reid',$typeid)->pluck('id');
        $topbrands=Brandarticle::whereIn('typeid',$typeids)->orwhere('typeid',$typeid)->take(10)->orderBy('click','desc')->get();
        $latesnews=Archive::take(10)->orderBy('id','desc')->get();
        $latestbrands=Brandarticle::take(20)->orderBy('id','desc')->get();
        $brandnews=Archive::where('brandid',$id)->paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page);
        $brandnews= Paginator::transfer(
            $cid,//传入分类id,
            $brandnews//传入原始分页器
        );
        $indexname=$thisarticleinfos->nid?'干洗店投资网':'干洗店投资网';
        $abrandlists=Brandarticle::where('mid','1')->where('typeid',$thisarticleinfos->typeid)->where('flags','like','%'.'a'.'%')->take(4)->orderBy('id','desc')->get();
        return view('frontend.brand_news',compact('thisarticleinfos','topbrands','pics','latesnews','brandnews','latestbrands','indexname','abrandlists'));

     }
    /**产品文档
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ProductionArticle($id)
    {
        $thisarticleinfos=Production::findOrFail($id);
        $typeid=Production::where('id',$id)->value('typeid');
        $cproductions=Production::where('typeid',$typeid)->take(8)->orderBy('id','desc')->get();
        $thisbrandinfo=Brandarticle::where('id',Production::where('id',$id)->value('brandid'))->first();
        $productionlists=Archive::where('brandid',$thisarticleinfos->brandid)->take(10)->orderBy('id','desc')->get();
        $hproductions=Production::where('flags','like','%h%')->take(10)->orderBy('click','desc')->get();
        if ($thisarticleinfos->brandid)
        {
            $brandtypeid=Brandarticle::where('id',$thisarticleinfos->brandid)->value('typeid');
            $topbrands=Brandarticle::where('mid','1')->where('typeid',$brandtypeid)->take(10)->orderBy('click','desc')->get();
        }else{
            $topbrands=Brandarticle::where('mid','1')->take(10)->orderBy('click','desc')->get();
        }
        $latestnewslists=Archive::take(9)->latest()->get();
        $abrandlists=Brandarticle::where('mid','1')->where('typeid',$thisarticleinfos->typeid)->where('flags','like','%'.'a'.'%')->take(4)->orderBy('id','desc')->get();
        $cnew=Archive::whereIn('brandid',Brandarticle::where('typeid',$brandtypeid)->pluck('id'))->where('brandid','<>',$thisarticleinfos->brandid)->latest()->first();
        $indexname=$thisarticleinfos->nid?'干洗店投资网':'干洗店投资网';
        return view('frontend.article_production',compact('thisarticleinfos','cproductions','thisbrandinfo','productionlists','hproductions','indexname','topbrands','latestnewslists','flashlingshibrands','abrandlists','cnew'));

    }

    protected function getPrevArticleId($id)
    {
        return Archive::where('id', '<', $id)->max('id');
    }
    protected function getNextArticleId($id)
    {
        return Archive::where('id', '>', $id)->min('id');
    }

}
