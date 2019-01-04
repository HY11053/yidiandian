@extends('mobile.mobile')
@section('title'){{ config('app.webname', '一点点奶茶加盟') }}@stop
@section('keywords'){{ config('app.keywords', '一点点奶茶加盟') }}@stop
@section('description'){{ config('app.description', '一点点奶茶加盟') }}@stop
@section('main_content')
    <p class="bg-primary"><span class="glyphicon glyphicon-phone-alt "></span>一点点奶茶加盟</p>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active"><a href="javascript:void(0)" onclick="openZoosUrl();return false;"><img class="center-block" src="/mobile/images/1.jpg" alt="一点点奶茶"></a> </div>
        <div class="item"><a href="javascript:void(0)" onclick="openZoosUrl();return false;"><img class="center-block" src="/mobile/images/2.jpg" alt="一点点奶茶"></a></div>
        <div class="item"><a href="javascript:void(0)" onclick="openZoosUrl();return false;"><img class="center-block" src="/mobile/images/3.jpg" alt="一点点奶茶"></a></div>
    </div>
</div>
<!--幻灯end-->
<p class="bg-primary">  <span class="glyphicon glyphicon-comment"> </span><a href="javascript:void(0);" onclick="openZoosUrl();return false;">免费领取资料</a></p>
<div class="container">
    <div class="row">
        <ul class="clearfix-m col-xs-12">
            <li class="col-xs-3"><a href="/ppjs/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/zl.png"></span><span class="nav-font">品牌介绍</span></a></li>
            <li class="col-xs-3"><a href="/productions/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/dt.png"></span><span class="nav-font">产品展示</span></a></li>
            <li class="col-xs-3"><a href="/news/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/lc.png"></span><span class="nav-font">新闻动态</span></a></li>
            <li class="col-xs-3"><a href="/mendian/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/js.png"></span><span class="nav-font">门店展示</span></a></li>
            <li class="col-xs-3"><a href="/anlinews/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/zc.png"></span><span class="nav-font">开店案例</span></a></li>
            <li class="col-xs-3"><a href="/tznews/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/fa.png"></span><span class="nav-font">加盟费用</span></a></li>
            <li class="col-xs-3"><a href="/lirunnews/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/lx.png"></span><span class="nav-font">利润分析</span></a></li>
            <li class="col-xs-3"><a href="/jiameng/" ><span class="nav-img"><img class="img-responsive" src="/mobile/images/sy.png"></span><span class="nav-font">加盟申请</span></a></li>
        </ul>
    </div>
    <!--zonghe start-->

    <div class="row brands">
        <div class="bg-primary">一点点奶茶品牌介绍</div>
        <div class="indexabout">
        <span>
            <a href="{{str_replace('www.','m.',config('app.url'))}}">
                <img class="lazyload" data-url="/coco/wap/images/indexabout.jpg" alt="" src="/mobile/images/indexabout.jpg" style="display: inline;">
            </a>
        </span>
            <p>一点点奶茶品牌原为台湾50岚奶茶品牌，创立于1994年。初期只是台南地区的路边饮品茶摊，之后因为奶茶产品极具台湾当地特色，深受民众喜爱。并且经营状况蒸蒸日上，转型为店铺。......
                <span class="buttonab">
                <a href="/ppjs/">详细介绍</a>
            </span>
            </p>

        </div>
    </div>
</div>

<div class="zonghe">
    <ul class="zonghe-nav clearfix">
        <li><a class="zonghe-nav-moren">最新资讯</a>
            <div class="zonghe-con" style="display:block;">
                @foreach($newslists as $newslist)
                <div class="zonghe-con-list clearfix">
                    <a href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.shtml"><img src="{{$newslist->litpic}}"/></a>
                    <div class="zonghe-right">
                        <a href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.shtml">{{$newslist->title}}</a>
                        <span class="zonghe-con-font">
                      {{str_limit($newslist->description,96,'...')}}
                    </span>
                    </div>
                </div>
                @endforeach
            </div>
        </li>

        <li><a>加盟动态</a>
            <div class="zonghe-con">
                @foreach($jiamengnews as $jiamengnew)
                    <div class="zonghe-con-list clearfix">
                        <a href="/{{$jiamengnew->arctype->real_path}}/{{$jiamengnew->id}}.shtml"><img src="{{$jiamengnew->litpic}}"/></a>
                        <div class="zonghe-right">
                            <a href="/{{$jiamengnew->arctype->real_path}}/{{$jiamengnew->id}}.shtml">{{$jiamengnew->title}}</a>
                            <span class="zonghe-con-font">
                            {{str_limit($jiamengnew->description,96,'...')}}
                    </span>
                        </div>
                    </div>
                @endforeach

            </div>
        </li>
        <li><a>利润分析</a>
            <div class="zonghe-con">
                @foreach($lirunnews as $lirunnew)
                    <div class="zonghe-con-list clearfix">
                        <a href="/{{$lirunnew->arctype->real_path}}/{{$lirunnew->id}}.shtml"><img src="{{$lirunnew->litpic}}"/></a>
                        <div class="zonghe-right">
                            <a href="/{{$lirunnew->arctype->real_path}}/{{$lirunnew->id}}.shtml">{{$lirunnew->title}}</a>
                            <span class="zonghe-con-font">
                            {{str_limit($lirunnew->description,96,'...')}}
                    </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </li>
    </ul>

</div>

<!--产品展示 start-->
<div class="cp-show">
    <div class="cp-show-header"><span>新产品推荐</span></div>
    <ul class="cp-show-list clearfix">
        @foreach($productions as $latestbrand)
        <li>
            <a href="/{{$latestbrand->arctype->real_path}}/{{$latestbrand->id}}.shtml"><img src="{{$latestbrand->litpic}}"/></a>
            <span class="cp-font">
            <a href="/{{$latestbrand->arctype->real_path}}/{{$latestbrand->id}}.shtml">{{$latestbrand->brandname}}</a>
          </span>
        </li>
        @endforeach
    </ul>
</div>
<!--产品展示 end-->
<hr/>

@stop
