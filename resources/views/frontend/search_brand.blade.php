@extends('frontend.frontend')
@section('title')品牌搜索页面-干洗店投资网@stop
@section('keywords')品牌搜索页面 @stop
@section('description')品牌搜索页面@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.indexname')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.indexname')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
@stop
@section('main_content')
    <div class="main_content">
        {{--
  <div class="bl_con1 center">
<ul class="bl_con1-ul1">
    <li><h1>投资金额  ：</h1></li>
    <li><p>不限</p></li>
    <li><a href="" style="margin-left: 20px;">3万以下</a></li>
    <li><a href="">3万~5万</a></li>
    <li><a href="">5万~8万</a></li>
    <li><a href="">8万~12万</a></li>
    <li><a href="">12万~15万</a></li>
    <li><a href="">15万以上</a></li>
</ul>

<ul class="bl_con1-ul2">
    <li><h1>所需面积  ：</h1></li>
    <li><p>不限</p></li>
    <li><a href="" style="margin-left: 20px;">10平米以下</a></li>
    <li><a href="">10-30平米</a></li>
    <li><a href="">30-50平米</a></li>
    <li><a href="">50-80平米</a></li>
    <li><a href="">100平米以上</a></li>
</ul>

<ul class="bl_con1-ul3">
    <li><h1>所在地区  ：</h1></li>
    <li><p>不限</p></li>
    <li><a href="" style="margin-left: 20px;">北京</a></li>
    <li><a href="">安徽</a></li>
    <li><a href="">福建</a></li>
    <li><a href="">甘肃</a></li>
    <li><a href="">广东</a></li>
    <li><a href="">广西</a></li>
    <li><a href="">贵州</a></li>
    <li><a href="">海南</a></li>
    <li><a href="">河北</a></li>
    <li><a href="">河南</a></li>
    <li><a href="">黑龙江</a></li>
    <li><a href="">湖北</a></li>
    <li><a href="">湖南</a></li>
    <li><a href="">吉林</a></li>
    <li><a href="">江苏</a></li>
    <li><a href="">江西</a></li>
    <li><a href="">辽宁</a></li>
    <li><a href="">内蒙</a></li>
</ul>
</div>

--}}
        <div class="bl_con2 center box-shadow">
            <div class="brand_head">品牌招商项目列表</div>
            <ul>
                <li><a href="" style="margin-left: 0px;">默认排序</a></li>
                <li><p>|</p></li>
                <li><a href="">投资金额</a></li>
                <li><p>|</p></li>
                <li><a href="">门店数</a></li>
            </ul>
        </div>

        <div class="bl_con3 center">
            <div class="w870 fl">
                <ul class="xm-list-H224 clearfix" style="width: 840px; float:left; cursor: pointer">
                    @foreach($pagelists as $pagelist)
                        <li class="">
                            <div class="btn-duibi btn-addbyb" data-id="2171">
                                <i class="iconfont icon-Contrast"></i>咨询
                            </div>
                            <a target="_blank" href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml/" class="img-block magnify"><img src="{{$pagelist->litpic}}" alt="{{$pagelist->brandname}}"></a>
                            <div class="f20">
                                <h3><a target="_blank" href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml">{{$pagelist->brandname}}</a></h3>
                            </div>
                            <div class="info">
                                <span title="{{$pagelist->brandpay}}">投资金额：<b class="s-oe">{{$pagelist->brandpay}}</b></span><span title="30-50平米㎡">所需面积：<b class="s-oe">30-50平米㎡</b></span>
                            </div>
                            <p> 门店数量：<span class="s-c26">{{$pagelist->brandnum}}</span></p>
                            <p>加盟区域：<span class="s-c26">{{$pagelist->brandarea}}</span></p>
                            <p>经营范围：<span class="s-c26">{{$pagelist->brandmap}}</span></p>
                            <p style="height:48px">项目描述：<span>{{$pagelist->description}}</span></p>
                        </li>
                    @endforeach
                </ul>
                <div class="clear"></div>
            </div>
            <div class="bl_con3-right">
                <div class="bl_con3-right-1 box-shadow">
                    <h3>干洗品牌排行榜关注量</h3>
                    <div class="bl_con3-right-1-xian"></div>
                    <ul>
                        @foreach($topbrands as $index=>$topbrand)
                            <li>
                                <a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml"><img src="{{$topbrand->litpic}}" /></a>
                                <dl class="paihangbf">
                                    <dt class="a2"><span>NO{{$index+1}}.</span><a class="b_tit" href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml">{{$topbrand->brandname}}</a></dt>
                                    <dd>
                                        项目特色:{{str_limit($topbrand->brandpsp,40,'')}}
                                    </dd>
                                </dl>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="bl_con3-right-2 box-shadow">
                    <h3>干洗店加盟优选品牌</h3>
                    <div class="bl_con3-right-2-xian"></div>

                    <ul>
                        @foreach($hotbrands as $hotbrand)
                            <li @if($loop->first) class="mt0" @endif>
                                <a href=""><img src="{{$hotbrand->litpic}}" /></a>
                                <a href="" class="a3">{{$hotbrand->brandname}}</a>
                                <p>
                                    投资金额 ： <span>{{$hotbrand->brandpay}}</span><br />
                                    加盟门店数 ： <span>{{$hotbrand->brandnum}}</span>
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="bl_con3-right-3 box-shadow">
                    <h3>干洗店加盟资讯</h3>
                    <div class="bl_con3-right-3-xian"></div>
                    <ul>
                        @foreach($cnewslists as $cnewslist)
                            <li  @if($loop->first) class="mt0" @endif>
                                <a href="/{{$cnewslist->arctype->real_path}}/{{$cnewslist->id}}.shtml"><img src="{{$cnewslist->litpic}}" /></a>
                                <a href="/{{$cnewslist->arctype->real_path}}/{{$cnewslist->id}}.shtml" class="a4">{{$cnewslist->title}}</a>
                                <p>{{str_limit($cnewslist->description,60,'...')}}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <div class="pageinfo">
                {!! str_replace('page=','page/',str_replace('?','/',preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()))) !!}
                <div class="clear"></div>
            </div>
        </div>
    </div>
@stop
