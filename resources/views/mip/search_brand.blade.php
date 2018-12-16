@extends('mip.mip')
@section('title')品牌搜索页-干洗店投资网@stop
@section('keywords')品牌搜索页 @stop
@section('description')品牌搜索页@stop
@section('headlibs')
    <link href="{{str_replace('www.','mip.',config('app.url'))}}/mobile/css/miplist.css" rel="stylesheet" type="text/css"/>
    <link href="{{str_replace('www.','mip.',config('app.url'))}}/frontend/css/swiper.min.css" rel="stylesheet" type="text/css"/>
@stop
@section('main_content')
    <!--nav Start-->
    <div class="zhaodao">共找到<span class="red">{{$pagelists->count()}}</span>个相关项目</div>
    <!--nav End-->
    <!--menu End-->
    <div class="weizhi">
        <span><a href="/">首页</a>&nbsp;>&nbsp; <a href="{{str_replace('www.','mip.',config('app.url'))}}/index.php/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a>&nbsp;>&nbsp;列表：</span>
    </div>
    <div class="brand_list">
        @foreach($pagelists as $index=>$pagelist)
            <div class="brand-detail-list-all">
                <div class="search-list-container  ">
                    <div class="title flex flex-align-center">
                  <span class="num-icon">
                        <span class="top">{{$index+1}}</span>
                    </span>
                        <div class="title-text">
                            <a href="{{str_replace('www.','mip.',config('app.url'))}}/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" class="a "><span>{{$pagelist->brandname}}</span></a>
                        </div>
                        <a href="{{str_replace('www.','mip.',config('app.url'))}}/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" class="brand-list-item-jump-tmall official"  title="{{$pagelist->brandname}}" data-bde-bind="1"><span class="active">品牌详情</span></a>
                    </div>
                    <div class="clear"></div>
                    <a href="{{str_replace('www.','m.',config('app.url'))}}/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml">
                        <dl class="list flex flex-align-center">
                            <div class="dt flex flex-align-center">
                                <span>
                                    <mip-img src="{{$pagelist->litpic}}" alt="{{$pagelist->brandname}}" class="autoWH"></mip-img>
                                </span>
                            </div>
                            <dd class="big-data">
                                <div class="data">
                                    <div>投资金额：<span>{{$pagelist->brandpay}}</span></div>
                                    品牌名称：<span>{{$pagelist->brandname}}</span>
                                </div>
                                <div class="data">
                                    <div>加盟人气：<span>{{$pagelist->click}}</span></div>
                                    所在地区：<span>{{$pagelist->brandaddr}}</span>
                                </div>
                            </dd>
                        </dl>
                        <div class="spe-msg">
                            {{$pagelist->description}}
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
        <div class="page">
            {!! str_replace('page=','page/',str_replace('?','/',preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()))) !!}
        </div>
    </div>
    @include('mip.liuyan')
    <div class="index_item">
        <div class="common_tit">
            <span class="tit" href="/paihangbang/">{{$thistypeinfo->typename}}十大品牌</span>
        </div>
        <div class="bd">
            <ul>
                @foreach($topbrands as $index=>$topbrand)
                    @if($index<3)
                        <li>
                            <a href="{{str_replace('www.','m.',config('app.url'))}}/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml">
                                <div class="img_show"><mip-img src="{{$topbrand->litpic}}"></mip-img></div>
                                <div class="cont">
                                    <p class="tit">{{$topbrand->brandname}}</p>
                                    <p class="desc">{{str_limit($topbrand->description,30,'...')}}</p>
                                    <p class="price">投资金额：<em>￥{{$topbrand->brandpay}}</em></p>
                                </div>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="list">
            <ul>
                @foreach($topbrands as $index=>$topbrand)

                    @if($index>2)
                        <li>
                            <a href="{{str_replace('www.','mip.',config('app.url'))}}/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml">
                                <i>{{$index+1}}</i><span>{{$topbrand->brandname}}</span><em>已有{{$topbrand->click}}人申请</em>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <!--品牌列表 End-->
    <div id="item7">
        <div class="item7box clearfix">
            <i></i>
            <div class="title">项目资讯</div>
            <div class="item7content">
                @foreach($cnewslists as $cnewslist)
                    <div class="item7list">
                        <a href="/{{$cnewslist->arctype->real_path}}/{{$cnewslist->id}}.shtml">
                            <div class="left fl">
                                <div class="lefttitle">{{$cnewslist->title}}</div>
                                <div class="text">
                                    <div class="message">编辑：干洗店投资网</div>
                                </div>
                            </div>
                            <div class="right fr">
                                <mip-img  src="{{$cnewslist->litpic}}" alt="{{$cnewslist->tite}}" ></mip-img>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop