@extends('mobile.mobile')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{trim($thisarticleinfos->description)}}@stop
@section('headlibs')
    <link href="/mobile/css/article.css" rel="stylesheet" type="text/css"/>
    <link href="/mobile/css/brand.css" rel="stylesheet" type="text/css"/>
    <link href="/frontend/css/swiper.min.css" rel="stylesheet" type="text/css"/>
@stop
@section('main_content')
    <div class="weizhi">
	<span><a href="/">首页</a>&nbsp;>&nbsp;
        <a href="{{str_replace('www.','m.',config('app.url'))}}/{{$thisarticleinfos->arctype->real_path}}/">{{$thisarticleinfos->arctype->typename}}</a>&nbsp;>&nbs&nbsp;>&nbsp;详情：
    </span>
    </div>
    <div id="item1">
        <div class="item1box">
            <div class="item1boxleft fl">
                <div class="title">{{$thisarticleinfos->brandname}}加盟</div>
                <div class="text">{{$thisarticleinfos->brandgroup}}</div>
                <div class="time"><span>{{date('Y-m-d',strtotime($thisarticleinfos->created_at))}}</span></div>
            </div>
            <div class="item1boxmiddle fl">
                <div class="top" style="font-weight: bold;">{{$thisarticleinfos->brandpay}}</div>
                <a href="#item5"><div class="bottom"></div></a>
            </div>
            <div class="item1boxright fr clearfix">
                <a href="#item5"><img class="js_popup" src="/mobile/images/liuyan.png" alt="在线留言"></a>
                <div class="text">在线留言</div>
            </div>
        </div>
    </div>
    <div id="item4">
        <div class="item4box">
            <div class="item4content">
                <div class="content">
                    <div class="jm_xq" id="b-info">
                        <div class="tb-first">
                            <div class="title" id="o-info_1">
                                <h2>{{$thisarticleinfos->brandname}}——{{$thisarticleinfos->brandpsp}}</h2>
                            </div>
                            <div class="jm_xq_con">
                                {!! $thisarticleinfos->body !!}
                            </div>
                    </div>
                    <div class="zhuanzai">
                        <i></i>如需更进一步了解{{$thisarticleinfos->brandname}}品牌加盟相关信息，可留言咨询我们，如因内容、版权或其它问题，请及时和本站取得联系，我们将第一时间删除内容！
                    </div>
                </div>
                <div class="display" style="display: none;"><span>展开</span><i></i></div>
            </div>
        </div>
    </div>
    </div>
    <div id="item7">
        <div class="item7box clearfix">
            <i></i>
            <div class="title">项目资讯</div>
            <div class="item7content">
                @foreach($brandnews as $brandnew)
                <div class="item7list">
                    <a href="/{{$brandnew->arctype->real_path}}/{{$brandnew->id}}.shtml">
                        <div class="left fl">
                            <div class="lefttitle">{{$brandnew->title}}</div>
                            <div class="text">
                                <div class="message">编辑：干洗店投资网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="{{$brandnew->litpic}}">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="item8">
        <div class="item8box clearfix">
            <i></i>
            <div class="title">品牌推荐</div>
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
@stop