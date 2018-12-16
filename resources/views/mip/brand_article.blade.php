@extends('mip.mip')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{trim($thisarticleinfos->description)}}@stop
@section('headlibs')
    <link href="{{str_replace('www.','mip.',config('app.url'))}}/mobile/css/miparticle.css" rel="stylesheet" type="text/css"/>
    <link href="{{str_replace('www.','mip.',config('app.url'))}}/mobile/css/mip_brand.css" rel="stylesheet" type="text/css"/>
    <link href="{{str_replace('www.','mip.',config('app.url'))}}/frontend/css/swiper.min.css" rel="stylesheet" type="text/css"/>
@stop
@section('main_content')
    <div class="weizhi">
	<span><a href="/">首页</a>&nbsp;>&nbsp;
         <a href="{{str_replace('www.','mip.',config('app.url'))}}/{{\App\AdminModel\Arctype::where('id',$thisarticleinfos->typeid)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',$thisarticleinfos->typeid)->value('typename')}}</a>&nbsp;>&nbsp;详情：
    </span>
    </div>
@include('mip.brand_header')
    <div id="item4">
        <div class="item4box">
            <div class="item4content">
                <div class="content">
                    <div class="jm_xq" id="b-info">
                        <div class="tb-first">
                            <div class="title" id="o-info_1">
                                <h2>{{$thisarticleinfos->brandname}}——{{$thisarticleinfos->brandpsp}}</h2>
                            </div>
                            <mip-showmore bottomshadow='1' maxheight='1000' id="showmore08">
                            <div class="jm_xq_con">
                                @php
                                    $content=str_replace('<img','<mip-img',preg_replace(["/style=.+?['|\"]/i","/width=.+?['|\"]/i","/height=.+?['|\"]/i"],'',$thisarticleinfos->body));
                                    preg_match_all("/<mip-img.*?[>]/",$content,$matches);
                                   if (!empty($matches))
                                   {
                                     foreach ($matches as $match)
                                     {
                                         $content=str_replace($match,str_replace(['/>','>'],['>','></mip-img>'],$match),$content);
                                     }
                                   }
                                   echo $content;
                                @endphp
                            </div>
                            </mip-showmore>
                            <div on="tap:showmore08.toggle" data-closetext="收起内容" class="mip-showmore-btn display">点击显示全部<i></i></div>
                    </div>
                    <div class="zhuanzai">
                        <i></i>如需更进一步了解{{$thisarticleinfos->brandname}}品牌加盟相关信息，可留言咨询我们，如因内容、版权或其它问题，请及时和本站取得联系，我们将第一时间删除内容！
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('mip.liuyan')
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
                            <mip-img @if($brandnew->litpic) src="{{$brandnew->litpic}}" alt="{{$brandnew->tite}}" @else src="/public/images/noimg.jpg" @endif ></mip-img>
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
            <div class="title">猜你喜欢</div>
            <div class="item8content">
                @foreach($topbrands as $index=>$topbrand)
                    <div class="item8list @if(($index+1)%2==0) fl @else fr @endif">
                        <a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml">
                            <mip-img src="{{$topbrand->litpic}}" alt="{{$topbrand->brandname}}"></mip-img>
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
@section('footlibs')
    <script src="https://mipcache.bdstatic.com/static/v1/mip-showmore/mip-showmore.js"></script>
@stop