@extends('mobile.mobile')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{$thisarticleinfos->description}}@stop
@section('headlibs')
    <link href="/mobile/css/article.css" rel="stylesheet" type="text/css"/>
    <link href="/mobile/css/brand.css" rel="stylesheet" type="text/css"/>
    <link href="/frontend/css/swiper.min.css" rel="stylesheet" type="text/css"/>
@stop
@section('main_content')
<div class="weizhi">
    <span> <a href="/">首页</a>&nbsp;>&nbsp;<a href="{{str_replace('www.','m.',config('app.url'))}}/{{\App\AdminModel\Arctype::where('id',$thisarticleinfos->typeid)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',$thisarticleinfos->typeid)->value('typename')}}</a>&nbsp;>&nbsp;    正文：  </span>
</div>
<div class="list_middle">
    <div class="a_content_brand">
        <div class="a_content">
            <h1>{{$thisarticleinfos->title}}</h1>
            <small>时间：{{$thisarticleinfos->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;浏览量:{{$thisarticleinfos->click}}</small>
        </div>
    </div>
    @if(isset($thisBrandArticle))
        <div class="brandinfo">
            <div id="item1">
                <div class="item1box">
                    <div class="item1boxleft fl">
                        <div class="title"><a href="/{{$thisBrandArticle->arctype->real_path}}/{{$thisBrandArticle->id}}.shtml">{{$thisBrandArticle->brandname}}</a></div>
                        <div class="text">{{$thisBrandArticle->brandgroup}}</div>
                        <div class="time"><span>{{date('Y-m-d',strtotime($thisBrandArticle->created_at))}}</span></div>
                    </div>
                    <div class="item1boxmiddle fl">
                        <div class="top" style="font-weight: bold;">{{$thisBrandArticle->brandpay}}</div>
                        <a href="/{{$thisBrandArticle->arctype->real_path}}/{{$thisBrandArticle->id}}.shtml#item5"><div class="bottom"></div></a>
                    </div>
                    <div class="item1boxright fr clearfix">
                        <a href="#item5"><img class="js_popup" src="/mobile/images/liuyan.png" alt="在线留言"></a>
                        <div class="text">在线留言</div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    @endif
     <div class="a_content">
        {!! $thisarticleinfos->body !!}
    </div>
    @include('mobile.liuyan')
    @if(isset($xg_search))
    <div id="item7">
        <div class="item7box clearfix">
            <i></i>
            <div class="title">项目资讯</div>
            <div class="item7content">
                @foreach($xg_search as $xg_article)
                    <div class="item7list">
                        <a href="/{{$xg_article->arctype->real_path}}/{{$xg_article->id}}/">
                            <div class="left fl">
                                <div class="lefttitle">{{$xg_article->title}}</div>
                                <div class="text">
                                    <div class="message">来源：干洗店投资网</div>
                                    <div class="time">{{date('Y-m-d',strtotime($xg_article->created_at))}}</div>
                                </div>
                            </div>
                            <div class="right fr">
                                <img src="{{$xg_article->litpic}}">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <div id="item8">
        <div class="item8box clearfix">
            <i></i>
            <div class="title">推荐品牌</div>
            <div class="item8content">
                @foreach($topbrands as $index=>$topbrand)
                    <div class="item8list @if(($index+1)%2==0) fl @else fr @endif">
                        <a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml">
                            <img src="{{$topbrand->litpic}}" alt="{{$topbrand->brandname}}">
                            <div class="item8listcontent">
                                <div class="listtitle">{{$topbrand->brandname}}</div>
                                <div class="listtext">
                                    <p>{{$topbrand->brandgroup}}</p>
                                </div>
                                <div class="textleft fl">￥{{$topbrand->brandpay}}
                                </div>
                                <div class="textright fr">
                                    {{date('Y-m-d',strtotime($topbrand->created_at))}}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@stop