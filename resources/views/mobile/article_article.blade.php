@extends('mobile.mobile')
@section('title'){{$thisarticleinfos->title}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{$thisarticleinfos->description}}@stop
@section('main_content')
    <!--幻灯end-->
    <p class="bg-primary">  <a href='/'>主页</a> > <a href='/{{$thisarticleinfos->arctype->real_path}}/'>{{$thisarticleinfos->arctype->typename}}</a> > </p>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="content">
                    <div class="brand_content">
                        <h2 class="bt_bg col-xs-12"></h2>
                        <h1>{{$thisarticleinfos->title}}</h1>
                        <small>时间：{{$thisarticleinfos->created_at}}  |  浏览量:{{$thisarticleinfos->click}}</small>
                        　{!! $thisarticleinfos->body !!}
                        <div class="col-xs-12 btn_marign btn_marign2">
                            <div class="col-xs-6"><a href="javascript:void(0)" onclick="openZoosUrl();return false;">
                                    <button type="button" class="btn btn-danger">开店咨询</button></a>
                            </div>
                            <div class="col-xs-6"><a href="javascript:void(0)" onclick="openZoosUrl();return false;"><button type="button" class="btn btn-warning">索要资料</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
        <p class="bg-primary">  <span class="glyphicon glyphicon-flag" style="font-size: 12pt;"></span> 相关阅读</p>
    </ul>
    <ul class="list-group tjw_z">

        @foreach($latesenews as $latesenew)
            <li class="list-group-item"><a href="/{{$latesenew->arctype->real_path}}/{{$latesenew->id}}.shtml">{{$latesenew->title}}</a></li>
        @endforeach

    </ul>


@stop