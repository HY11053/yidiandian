@extends('mobile.mobile')
@section('title'){{$thistypeinfo->title}}-一点点奶茶加盟@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('headlibs')
    <link href="/mobile/css/list.css" rel="stylesheet" type="text/css"/>
    <link href="/frontend/css/swiper.min.css" rel="stylesheet" type="text/css"/>
@stop
@section('main_content')
    <div class="container-fluid list_clear">
        <div class="container-fluid list_clear">
            <div clas="row">
                @foreach($pagelists as $pagelist)
                <div class="col-xs-12 text-center list_clear list_margin">
                    <dl>
                        <dt class="col-xs-4 list_clear "><a class="img_a" href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml">{{$pagelist->brandname}}<img class=""  style="padding-top:14px;" src="{{$pagelist->litpic}}"  alt="{{$pagelist->brandname}}" /></a></dt>
                        <dd class="col-xs-8 list_clear">
                            <h3 class="col-xs-12 list_clear" ><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.htm">{{$pagelist->brandname}}</a></h3>
                            <ul>
                                <li>投资金额：{{$pagelist->brandpay}}</li>
                                <li>加盟人气：{{$pagelist->click}}</li>
                                <li>门店总数:{{$pagelist->brandnum}}</li>
                            </ul>
                            <span class="label label-success"><a href="javascript:void(0);" onclick="openZoosUrl();return false;">加盟咨询</a></span>
                            <span class="label label-danger"><a href="javascript:void(0);" onclick="openZoosUrl();return false;">品牌介绍</a></span>
                        </dd>
                    </dl>
                    <span class="type-ejob"><span class="glyphicon glyphicon-thumbs-up"></span></span>
                </div>
                @endforeach
            </div>
        </div>
        <nav>
            {!! str_replace('page=','page/',str_replace('?','/',preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()))) !!}
        </nav>
    </div>


    <hr/>
    </div>
@stop