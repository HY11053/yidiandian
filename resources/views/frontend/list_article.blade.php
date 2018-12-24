@extends('frontend.frontend')
@section('title'){{$thistypeinfo->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.indexname')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.indexname')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}"/>
@stop
@section('main_content')
    <div class="ydd_con list_nav">
        <div class="ydd_1000">
            <div class="ln_l"><h1>一点点奶茶产品中心</h1></div>
            <div class="ln_r">当前位置：<a href="/">主页</a> &gt; <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a> &gt; </div>
        </div>
    </div>
    <div class="ydd_con">
        <div class="ydd_1000 list_a">
            <div class="list_l" id="inner">
                <div class="l_img"><img src="/frontend/images/list_06.jpg" width="250" height="170" alt="一点点奶茶"></div>
                <div class="l_img"><a href="#"><img src="/frontend/images/list_09.jpg" width="250" height="68" alt="一点点奶茶申请"></a></div>
                <div class="l_ts">
                    <p>信息推荐</p>
                    <ul>
                        @foreach($cnewslists as $cnewslist)
                         <li><a href="/{{$cnewslist->arctype->real_path}}/{{$cnewslist->id}}.shtml">{{$cnewslist->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="list_r">
                <ul class="listnb">
                    @foreach($pagelists as $pagelist)
                    <li>
                        <img src="{{$pagelist->litpic}}" width="240" height="180" alt="{{$pagelist->title}}">
                        <div class="newbox">
                            <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml">{{$pagelist->title}}</a>
                            <p>{{$pagelist->description}}</p>
                        </div>
                        <div class="datebox">
                            <span>{{$pagelist->created_at}}</span>
                            <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml">查看详情</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="main">
                    <div class="btn_pages">
                        <div class="btn-group">
                            {!! str_replace('page=','page/',str_replace('?','/',preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()))) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
