@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{$thisarticleinfos->description}}@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.name')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.name')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="{{$thisarticleinfos->created_at}}+08:00" />
    <meta property="og:image" content="{{config('app.url')}}{{str_replace(config('app.url'),'',$thisarticleinfos->litpic)}}"/>
@stop
@section('main_content')
    <div class="ydd_con list_nav">
        <div class="ydd_1000">
            <div class="ln_l">产品中心</div>
            <div class="ln_r">当前位置：<a href="/">主页</a> &gt; <a href="/{{$thisarticleinfos->arctype->real_path}}/">{{$thisarticleinfos->arctype->typename}}</a> &gt; </div>
        </div>
    </div>
    <div class="ydd_con">
        <div class="ydd_1000 list_a">
            <div class="list_l" id="inner">
                <div class="l_img"><img src="/frontend/images/list_06.jpg" width="250" height="170" alt="一点点奶茶新鲜" data-bd-imgshare-binded="1"></div>
                <div class="l_img"><a href="#"><img src="/frontend/images/list_09.jpg" width="250" height="68" alt="一点点奶茶申请" data-bd-imgshare-binded="1"></a></div>
                <div class="l_ts">
                    <p>信息推荐</p>
                    <ul>
                        @foreach($latesenews as $latesenew)
                        <li><a href="/{{$latesenew->arctype->real_path}}/{{$latesenew->id}}.shtml">{{$latesenew->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="list_r">
                <div class="newsnr">
                    <h1><p align="center"><strong><font size="4">{{$thisarticleinfos->title}}</font></strong></p></h1>
                    <center>时间：{{$thisarticleinfos->created_at}} </center>
                    <div>
                        　　{!! $thisarticleinfos->body !!}
                    </div>
                    <div class="bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1544972799724"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
                    <script>
                        window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                    </script>
                </div>
                <div class="sxp">
                    <ul>
                        <li>上一篇：@if(isset($prev_article)) <span>上一篇：<a href="{{config('app.url')}}/{{$prev_article->arctype->real_path}}/{{$prev_article->id}}.shtml" title="{{$prev_article->title}}">{{str_limit($prev_article->title,40,'')}}</a></span> @else 没有了 @endif  </li>
                        <li>下一篇：@if(isset($next_article))  <span class="right">下一篇：<a href="{{config('app.url')}}/{{$prev_article->arctype->real_path}}/{{$next_article->id}}.shtml" title="{{$next_article->title}}">{{str_limit($next_article->title,40,'')}}</a></span> @else 没有了 @endif </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop