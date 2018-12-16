<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Ask;
use App\AdminModel\Brandarticle;
use App\AdminModel\flink;
use App\AdminModel\Production;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function Index()
    {
        //项目抢先看
        $hotbrands=Brandarticle::where('mid','1')->where('flags','like','%h%')->take(5)->orderBy('click','desc')->get();
        $brandnew=Archive::where('brandid','<>',0)->where('flags','like','%h%')->latest()->first();
        $cbrands=Brandarticle::where('mid','1')->where('flags','like','%c%')->take(6)->orderBy('id','desc')->get();
        $paihangbangs=Brandarticle::where('mid','1')->take(5)->orderBy('click','desc')->get();
        $cbrandnew=Archive::where('brandid','<>',0)->where('flags','like','%c%')->latest()->first();
        $brands=Brandarticle::where('mid','1')->take(6)->latest()->get();
        $brandnews=Archive::where('typeid',6)->latest()->take(7)->get();
        $cshebei=Archive::where('typeid',4)->where('flags','like','%c%')->first();
        $ganxishebeis=Archive::where('typeid',4)->where('flags','like','%s%')->take(8)->get();
        $shebeilists=Archive::where('typeid',4)->latest()->take(8)->get();
        $latestnews=Archive::where('typeid','<>',4)->latest()->take(8)->get();
        $zhuangxiulists=Archive::where('typeid',8)->latest()->take(20)->get();
        $flinks=flink::latest()->take(25)->get();
        return view('frontend.index',compact('hotbrands','brandnew','cbrands','paihangbangs','cbrandnew','brands','brandnews','cshebei','ganxishebeis','shebeilists','latestnews','flinks','zhuangxiulists'));
    }

}
