@extends('mip.mip')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <link href="{{str_replace('www.','mip.',config('app.url'))}}/mobile/css/mip_index.css" rel="stylesheet" type="text/css"/>
    <link href="{{str_replace('www.','mip.',config('app.url'))}}/frontend/css/swiper.min.css" rel="stylesheet" type="text/css"/>
@stop
@section('main_content')
@include('mip.header')
    <div class="smalllist clearfix">
        <div class="smalllist clearfix">
            <div class="small-box"><a href="/pinpai/"> <mip-img src="/mobile/images/zhaoshang.png"></mip-img><span>干洗店品牌</span></a></div>
            <div class="small-box"><a href="/cost/" class="rightbox"><mip-img src="/mobile/images/zhinan.png"></mip-img><span>干洗店成本</span></a></div>
            <div class="small-box"><a href="/investment/"><mip-img src="/mobile/images/touzi.png"></mip-img><span>干洗店投资</span></a></div>
            <div class="small-box rightbox"><a href="/profit/" class="rightbox"><mip-img src="/mobile/images/jingying.png"></mip-img><span>干洗店利润</span></a></div>
            <div class="small-box rightbox"><a href="/devices/" class="rightbox"><mip-img src="/mobile/images/xinwen.png"></mip-img><span>干洗店设备</span></a></div>
            <div class="small-box rightbox"><a href="/technology/" class="rightbox"><mip-img src="/mobile/images/paihang.png"></mip-img><span>干洗技术</span></a></div>
            <div class="small-box rightbox"><a href="/news/" class="rightbox"><mip-img src="/mobile/images/canyin.png"></mip-img><span>品牌新闻</span></a></div>
            <div class="small-box rightbox"><a href="/paihangbang/" class="rightbox"><mip-img src="/mobile/images/huoguo.png"></mip-img><span>排行榜</span></a>
        </div>
    </div>
    <div class="recommend clearfix">
        <mip-img src="/mobile/images/icon-kmtt.png"></mip-img>
        <div id="moocBox">
            <ul data-id="m_n_a02" data-type="cmsadpos">
                @foreach($brandnews as $brandnew)
                <li><a href="/{{$brandnew->arctype->real_path}}/{{$brandnew->id}}.shtml" data-id="{{$brandnew->id}}">{{$brandnew->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="clearfix">
        <div class="related-tit tabs-tit">
            <span class="xptj"></span>
            <div class="btn-one-more fr">
                <span class="ic-one-more"></span>换一批
            </div>
        </div>
        <div class="tabs-ctn" data-id="m_n_a03" data-type="cmsadpos">
            <ul class="content cy-item ">
                @foreach($cbrands as $cbrand)
                <li>
                    <a href="/{{$cbrand->arctype->real_path}}/{{$cbrand->id}}.shtml" data-id="{{$cbrand->id}}" data-type="cmsad">
                        <mip-img src="{{$cbrand->litpic}}"></mip-img>
                        <p class="online-title">{{$cbrand->brandname}}</p>
                        <p class="online-name">{{$cbrand->brandgroup}}</p>
                        <p class="online-money"><span class="rmb">￥</span>{{$cbrand->brandpay}}</p>
                        <span class="timespan">{{date('y-m-d',strtotime($cbrand->created_at))}}</span>
                    </a>
                </li>
                @endforeach
            </ul>
            <ul class="content cy-item ">
                @foreach($hotbrands as $hotbrand)
                    <li>
                        <a href="/{{$hotbrand->arctype->real_path}}/{{$hotbrand->id}}.shtml" data-id="{{$hotbrand->id}}" data-type="cmsad">
                            <mip-img  src="{{$hotbrand->litpic}}"></mip-img>
                            <p class="online-title">{{$hotbrand->brandname}}</p>
                            <p class="online-name">{{$hotbrand->brandgroup}}</p>
                            <p class="online-money"><span class="rmb">￥</span>{{$hotbrand->brandpay}}</p>
                            <span class="timespan">{{date('y-m-d',strtotime($hotbrand->created_at))}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="clearfix">
        <div class="related-tit mgt20 tabs-tit">
            <span class="jpxm"></span>
            <div class="btn-one-more fr">
                <span class="ic-one-more fl"></span>换一批
            </div>
        </div>
        <div class="tabs-ctn" data-id="m_n_a04" data-type="cmsadpos">
            <ul class="content cy-item ">
                @foreach($brands as $brand)
                    <li>
                        <a href="/{{$brand->arctype->real_path}}/{{$brand->id}}.shtml" data-id="{{$brand->id}}" data-type="cmsad">
                            <mip-img  src="{{$brand->litpic}}"></mip-img>
                            <p class="online-title">{{$brand->brandname}}</p>
                            <p class="online-name">{{$brand->brandgroup}}</p>
                            <p class="online-money"><span class="rmb">￥</span>{{$brand->brandpay}}</p>
                            <span class="timespan">{{date('y-m-d',strtotime($brand->created_at))}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="news clearfix">
        <mip-vd-tabs>
            <section>
                <li class="on">品牌新闻<i></i></li>
                <li>干洗店成本<i></i></li>
                <li>干洗店利润<i></i></li>
                <li>干洗店投资<i></i></li>
            </section>
            <div class="news-content">
                @foreach($brandnews as $brandnew)
                <dl class="newslist1">
                    <dt class="dd-two">
                        <p class="newslist-tit p-two"><a href="/{{$brandnew->arctype->real_path}}/{{$brandnew->id}}.shtml">{{$brandnew->title}}</a></p>
                        <p class="newslist-text p1-two">{{$brandnew->descriprion}}</p>
                    </dt>
                    <dd class="dt-two dt-two1 clearfix">
                        @php
                            $pics=array_filter(explode(',',\App\AdminModel\Brandarticle::where('id',$brandnew->brandid)->value('imagepics')));
                        @endphp
                       @foreach($pics as $index=>$pic)
                           @if($index<3)
                                <mip-img  src="{{$pic}}" class="fl @if($index <2)mgr150 @endif"></mip-img>
                            @endif
                        @endforeach
                    </dd>
                    <dd class="publish ">
                        <span class="fl publish-text">来源：干洗店投资网</span>
                        <span class=" publish-text fl">{{$brandnew->created_at}}</span>
                    </dd>
                </dl>
                @endforeach
            </div>
            <div class="news-content">
                @foreach($chengbenlists as $chengbenlist)
                    <dl class="newslist1">
                        <dt class="dd-two">
                            <p class="newslist-tit p-two"><a href="/{{$chengbenlist->arctype->real_path}}/{{$chengbenlist->id}}.shtml">{{$chengbenlist->title}}</a></p>
                            <p class="newslist-text p1-two">{{$chengbenlist->descriprion}}</p>
                        </dt>
                        <dd class="dt-two dt-two1 clearfix">
                            @php
                                $pics=array_filter(explode(',',\App\AdminModel\Brandarticle::where('id',$chengbenlist->brandid)->value('imagepics')));
                            @endphp
                            @foreach($pics as $index=>$pic)
                                @if($index<3)
                                    <mip-img  src="{{$pic}}" class="fl @if($index <2)mgr150 @endif"></mip-img>
                                @endif
                            @endforeach
                        </dd>
                        <dd class="publish ">
                            <span class="fl publish-text">来源：干洗店投资网</span>
                            <span class=" publish-text fl">{{$chengbenlist->created_at}}</span>
                        </dd>
                    </dl>
                @endforeach
            </div>
            <div class="news-content">
                @foreach($lirunlists as $lirunlist)
                    <dl class="newslist1">
                        <dt class="dd-two">
                            <p class="newslist-tit p-two"><a href="/{{$lirunlist->arctype->real_path}}/{{$lirunlist->id}}.shtml">{{$lirunlist->title}}</a></p>
                            <p class="newslist-text p1-two">{{$touzinew->descriprion}}</p>
                        </dt>
                        <dd class="dt-two dt-two1 clearfix">
                            @php
                                $pics=array_filter(explode(',',\App\AdminModel\Brandarticle::where('id',$lirunlist->brandid)->value('imagepics')));
                            @endphp
                            @foreach($pics as $index=>$pic)
                                @if($index<3)
                                    <mip-img  src="{{$pic}}" class="fl @if($index <2)mgr150 @endif"></mip-img>
                                @endif
                            @endforeach
                        </dd>
                        <dd class="publish ">
                            <span class="fl publish-text">来源：干洗店投资网</span>
                            <span class=" publish-text fl">{{$lirunlist->created_at}}</span>
                        </dd>
                    </dl>
                @endforeach
            </div>
            <div class="news-content">
                @foreach($touzilists as $touzilist)
                    <dl class="newslist1">
                        <dt class="dd-two">
                            <p class="newslist-tit p-two"><a href="/{{$touzilist->arctype->real_path}}/{{$touzilist->id}}.shtml">{{$touzilist->title}}</a></p>
                            <p class="newslist-text p1-two">{{$touzilist->descriprion}}</p>
                        </dt>
                        <dd class="dt-two dt-two1 clearfix">
                            @php
                                $pics=array_filter(explode(',',\App\AdminModel\Brandarticle::where('id',$touzilist->brandid)->value('imagepics')));
                            @endphp
                            @foreach($pics as $index=>$pic)
                                @if($index<3)
                                    <mip-img  src="{{$pic}}" class="fl @if($index <2)mgr150 @endif"></mip-img>
                                @endif
                            @endforeach
                        </dd>
                        <dd class="publish ">
                            <span class="fl publish-text">来源：干洗店投资网</span>
                            <span class=" publish-text fl">{{$touzilist->created_at}}</span>
                        </dd>
                    </dl>
                @endforeach
            </div>
        </mip-vd-tabs>
        <div class="lxmore">
            <a href="/news/">查看更多<i></i></a>
        </div>
    </div>
    <div class="clearfix">
        <div class="related-tit bg-fff mgt20 tabs-tit">
            <b>隐私保护</b>
            <div class="btn-one-more fr">
            </div>
        </div>
        <div class="tabs-ctn">
            <ul class="content1 cy-item ">
                <li>
                        <p class="online-name1">1. 我方平台为信息发布平台，您的留言将在我方平台发布或提供给相应商家</p>
                        <p class="online-name1">2. 如不需要发布信息，请勿在本平台留言</p>
                        <p class="online-name1">3.
                            公司对与任何包含、经由、或链接、下载或从任何与本网站有关服务所获得的资讯、内容或广告，不声明或保证其内容的正确性、真实性或可靠性；并且，对于您透过本网广告、资讯或要约而展示、购买或取得的任何产品、资讯或资料，本网站亦不负品质保证的责任。您与此接受并承认信赖任何信息所产生之风险应自行承担，本网对任何使用或提供本网站信息的商业活动及其风险不承担任何责任。</p>
                        <p class="online-name1">4. 本网站若因线路及非本公司控制范围外的硬件故障或其它不可抗力，以及黑客政击、计算机病毒侵入或发而造成的个人资料泄露、丢失、被盗用或被篡改等，本网站亦不负任何责任。</p>
                        <p class="online-name1">5.
                            当本网站以链接形式推荐其他网站内容时，本网站并不对这些网站或资源的真实性、可用性、合法性负责，且不保证从这些网站获取的任何内容、产品、服务或其他材料的真实性、合法性，对于任何因使用或信赖从此类网站上获取的内容、产品、资源、服务或其他材料而造成的任何直接或间接的损失均由您自行承担，本网站均不承担任何责任。</p>
                   </li>
            </ul>
        </div>
    </div>
@stop
@section('footlibs')
    <script src="https://c.mipcdn.com/static/v1/mip-vd-tabs/mip-vd-tabs.js"></script>
@stop
