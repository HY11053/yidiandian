<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Acreagement;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\Production;
use Carbon\Carbon;
use App\Overwrite\Paginator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListNewsController extends Controller
{
    /**文档列表 通配 包含普通文档 品牌文档及产品文档
     * @param $path
     * @param int $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listNews(Request $request,$path,$page=0)
    {
        $typeid=Arctype::where('real_path',preg_replace('/\/page\/[0-9]+/','',$request->path()))->value('id')?:abort(404);
        $thistypeinfo=Arctype::where('id',$typeid)->first();
        $typeids=Arctype::where('reid',$typeid)->pluck('id');
        $cid=$path;
        $pagelists=Archive::where('typeid',$typeid)->orderBy('id','desc')->paginate($perPage = 13, $columns = ['*'], $pageName = 'page', $page);
        $pagelists= Paginator::transfer(
            $cid,//传入分类id,
            $pagelists//传入原始分页器
        );
        $cnewslists=Archive::where('typeid',$typeid)->where('flags','like','%'.'c'.'%')->take(8)->latest()->get();
       if ($thistypeinfo->mid)
       {
           return view('frontend.index_lists',compact('thistypeinfo','pagelists','cnewslists'));

       }else{
           $cnewslists=Archive::where('flags','like','%'.'c'.'%')->take(8)->latest()->get();
           return view('frontend.list_article',compact('thistypeinfo','pagelists','cnewslists'));
       }

    }


}
