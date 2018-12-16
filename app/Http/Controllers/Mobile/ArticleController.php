<?php

namespace App\Http\Controllers\Mobile;

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
            return view('mobile.article_article',compact('thisarticleinfos','thisBrandArticle','prev_article','next_article','xg_search','latestbrands','topbrands','latesenews'));
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
            return view('mobile.brand_article',compact('thisarticleinfos','pics','brandnews','topbrands','latesnews','latestbrands','latestbrandnews'));
        }
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
