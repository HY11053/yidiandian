<?php

namespace App\Http\Controllers\Mip;

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
        $hotbrands=Brandarticle::where('mid','1')->where('flags','like','%h%')->take(4)->orderBy('click','desc')->get();
        $cbrands=Brandarticle::where('mid','1')->where('flags','like','%c%')->take(4)->orderBy('id','desc')->get();
        $brands=Brandarticle::where('mid','1')->take(4)->latest()->get();
        $brandnews=Archive::where('brandid','<>',0)->latest()->take(7)->get();
        $chengbenlists=Archive::where('typeid',2)->latest()->take(7)->get();
        $lirunlists=Archive::where('typeid',3)->latest()->take(7)->get();
        $touzilists=Archive::where('typeid',12)->latest()->take(7)->get();
        return view('mip.index',compact('hotbrands','cbrands','brands','brandnews','chengbenlists','lirunlists','touzilists'));
    }

}
