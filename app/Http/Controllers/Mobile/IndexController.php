<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Archive;

use App\AdminModel\flink;
use App\AdminModel\Production;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function Index()
    {
        //项目抢先看
        $newslists=Archive::where('typeid',3)->take(5)->latest()->get();
        $jiamengnews=Archive::where('typeid',6)->take(5)->latest()->get();
        $lirunnews=Archive::where('typeid',9)->take(5)->latest()->get();
        $dianpulists=Archive::where('typeid',4)->take(4)->latest()->get();
        $productions=Archive::where('typeid',2)->take(6)->latest()->get();
        $flinks=flink::latest()->take(25)->get();
        return view('mobile.index',compact('newslists','jiamengnews','lirunnews','dianpulists','productions','flinks'));
    }

}
