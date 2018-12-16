<?php

namespace App\Http\Controllers\Mobile;
use App\AdminModel\Archive;
use App\AdminModel\Brandarticle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeacrhController extends Controller
{
    public function SeacrhBrand(Request $request)
    {
        $pagelists=Brandarticle::where('brandname','like','%'.$request->keywords.'%')->paginate(30);
        $cnewslists=Archive::take(8)->latest()->get();
        $topbrands=Brandarticle::take(5)->orderBy('click','desc')->get();
        $hotbrands=Brandarticle::where('mid','1')->where('flags','like','%c%')->latest()->take(8)->orderBy('id','desc')->get();
        return view('mobile.search_brand',compact('pagelists','cnewslists','topbrands','hotbrands'));
    }
}
