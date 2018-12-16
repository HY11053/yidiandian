<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Archive;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\Production;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;

class CheckToolsController extends Controller
{
    public function cheakUrls()
    {
        $archives=Archive::where('ismake',1)->get();
        foreach ($archives as $archive)
        {
            echo str_replace('www.','mip.',config('app.url')).'/index.php/news/'.$archive->id.'/'.'<br/>';
        }

    }
    public function checkarticles()
    {
        $ids=Archive::pluck('id');
        foreach ($ids as $id)
        {
            $thisarticle=Archive::find($id);
            Archive::where('id',$id)->update(['keywords'=>$thisarticle->title,'description'=>str_limit(str_replace(['&nbsp;',' ','　',PHP_EOL,'\t'],'',strip_tags(htmlspecialchars_decode($thisarticle->body))), $limit = 240, $end = '')]);
        }
        $bids=Brandarticle::pluck('id');
        foreach ($bids as $bid)
        {
            $thisarticle=Brandarticle::find($bid);
            Brandarticle::where('id',$bid)->update(['keywords'=>$thisarticle->title,'description'=>str_limit(str_replace(['&nbsp;',' ','　',PHP_EOL,'\t'],'',strip_tags(htmlspecialchars_decode($thisarticle->body))), $limit = 240, $end = '')]);
        }
        $pids=Production::pluck('id');
        foreach ($pids as $pid)
        {
            $thisarticle=Production::find($pid);
            Production::where('id',$pid)->update(['keywords'=>$thisarticle->title,'description'=>str_limit(str_replace(['&nbsp;',' ','　',PHP_EOL,'\t'],'',strip_tags(htmlspecialchars_decode($thisarticle->body))), $limit = 240, $end = '')]);
        }
    }

    public function checkbrandsurls()
    {
        $brandurls=Brandarticle::where('ismake',1)->get();
        foreach ($brandurls as $archive)
        {
            echo str_replace('www.','mip.',config('app.url')).'/index.php/brand/'.$archive->id.'/'.'<br/>';
        }
    }

    public function checkaskurls()
    {
        $asks=Ask::where('is_hidden',1)->get();
        foreach ($asks as $archive)
        {
            echo str_replace('www.','mip.',config('app.url')).'/wenda/'.$archive->id.'/'.'<br/>';
        }
    }
    public function updateBrands()
    {
        set_time_limit(0);
        $brandarticles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id','>',468)->where('id','<',3610)->get();

        foreach ($brandarticles as $brandarticle) {
            $imagepics=substr($brandarticle->imagepics, 0, -1);
            Brandarticle::withoutGlobalScope(PublishedScope::class)->find($brandarticle->id)->update(['imagepics'=>$imagepics]);
        }
        echo '更新完毕！@！！';
        }
        private function randArrays(array $arrays,$nums,$falg='、')
        {
            $newarrays=array_rand($arrays,$nums);
            $strs='';
            foreach ($newarrays as $newarray)
            {
                 $strs.=$arrays[$newarray].$falg;
            }
            return $strs;
        }

        public function updateMipCache()
        {
            $api = 'https://c.mipcdn.com/update-ping/refreshcache';
            $postData =array(
                "host"=>'mip.51xxsp.com',
                "path"=>"/",
                "authkey"=>'6f3219a1939ebe41c9ebf4f3daa76de5'
            );
            $postData=json_encode($postData);
            $url = $api;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
            $result = curl_exec($ch);
            curl_close($ch);
            Log::info($result);
        }

    /**
     * 文档内容排版处理
     */
        public function updateArticleContent()
        {
            $brandArticleIds=Brandarticle::pluck('id');
            $pattens=[
            '#<p>[\n	]+<br />[\n]+</p>#',
            '#<p >[\n	]+<br />[\n]+</p>#',
            '#<p>[\n	]+<br/>[\n]+</p>#',
            '#<p >[\n	]+<br/>[\n]+</p>#',
            '#<p><br/></p>#',
            '#<p><br /></p>#',
            '#<p ><br/></p>#',
            '#<p ><br /></p>#',
            '#<p><strong><br/></strong></p>#',
            '#<p ><strong><br /></strong></p>#',
            '#<p>[\s| |　]?<strong>[\s| |　]?</strong></p>#',
            '#<p>[\s| |　]?<strong>[\s| |　]+</strong></p>#',
            '#<p>[\s| |　]+<strong>[\s| |　]+</strong></p>#',
            '#<p>[\s| |　|\n\r]?<br/>[\s| |　|\n\r]?</p>#',
            '#<p>[\s| |　|\n\r]+<br/>[\s| |　|\n\r]+</p>#',
            '#<p>[\s| |　|\n\r]+<br />[\s| |　|\n\r]+</p>#',
            '#<p><strong><br/></strong></p>#',
            '#<p><strong><br /></strong></p>#',
            '#<p><strong><br></strong></p>#',
            '#<p><br></p>#',
            '#<p><br ></p>#',
            '#<p><br /></p>#',
            '#<p>[\s| |　]?</p>#',
            '#<p>[\s| |　]+</p>#',
            ];
            foreach ($brandArticleIds as $brandArticleId)
            {
            $brandarticle=Brandarticle::find($brandArticleId);
            $body=preg_replace($pattens,'',$brandarticle->body);
            $jmxq_content=preg_replace($pattens,'',$brandarticle->jmxq_content);
            $ppjs_content=preg_replace($pattens,'',$brandarticle->ppjs_content);
            $lrfx_content=preg_replace($pattens,'',$brandarticle->lrfx_content);
            Brandarticle::where('id',$brandArticleId)->update(['body'=>$body,'jmxq_content'=>$jmxq_content,'ppjs_content'=>$ppjs_content,'lrfx_content'=>$lrfx_content]);
            }
            $articles=Archive::pluck('id');
            foreach ($articles as $article)
            {
                $thisarticle=Archive::find($article);
                $body=preg_replace($pattens,'',$thisarticle->body);
                Archive::where('id',$article)->update(['body'=>$body]);
            }
            echo '更新完成！！！';
        }

        public function updatteFlags()
        {
            $brandArticleIds=Archive::pluck('id');
            foreach ($brandArticleIds as $brandArticleId)
            {
                $brandarticle=Archive::find($brandArticleId);
                $flags=str_split($brandarticle->flags);
                $newflgs='';
                foreach ($flags as $flag)
                {
                    $newflgs.=$flag.',';
                }
                $newflgs=rtrim($newflgs,',');
                Archive::where('id',$brandarticle->id)->update(['flags'=>$newflgs]);
            }
        }

    /**
     * 更新文档对应品牌
     */
        public function checktoolBrandId()
        {
            $nullBrandArticles=Archive::where('brandid',0)->get();
            $brandNmaes=Brandarticle::where('brandname','<>','')->pluck('brandname');
            foreach ($nullBrandArticles as $nullBrandArticle)
            {
                foreach ($brandNmaes as $brandNmae)
                {
                    if (str_contains($nullBrandArticle,$brandNmae))
                    {
                        $thisArticlebdName=$brandNmae;
                        $thisArticlebdId=Brandarticle::where('brandname',$brandNmae)->value('id');
                        Archive::where('id',$nullBrandArticle->id)->update(['bdname'=>$thisArticlebdName,'brandid'=>$thisArticlebdId]);
                    }
                }
            }
            echo '更新完成！！！';

        }

    /**
     * 文档采集发布时间更新
     */

        public function updateArticleTime()
        {
            $articles=Archive::withoutGlobalScope(PublishedScope::class)->where('id','>',180)->pluck('id');
            foreach ($articles as $article) {

                Archive::withoutGlobalScope(PublishedScope::class)->where('id',$article)->update(['typeid'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now(),'published_at'=>Carbon::now()]);
            }
            echo '1';
        }


        public function updateArticles()
        {
            $articlesids=Archive::withoutGlobalScope(PublishedScope::class)->where('title','like','%ucc%')->pluck('id');
            foreach ($articlesids as $articlesid)
            {
                Archive::withoutGlobalScope(PublishedScope::class)->where('id',$articlesid)->update([
                    'brandid'=>Brandarticle::withoutGlobalScope(PublishedScope::class)->where('brandname','ucc')->value('id'),
                    'typeid'=>3
                ]);
            }
            echo '更新完毕';
        }
}
