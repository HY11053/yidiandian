@extends('mobile.mobile')
@section('title'){{$thistypeinfo->title}}-一点点奶茶加盟@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('headlibs')
@stop
@section('main_content')
    <!--幻灯end-->
    <p class="bg-primary"> &nbsp;&nbsp;<a href='/'>主页</a> > <a href='/{{$thistypeinfo->real_path}}/'>{{$thistypeinfo->typename}}</a> > </p>
    <div class="container-fluid list_clear">
        <div clas="row">

            <div class="ul_list">
                <ul class="list-group">
                    @foreach($pagelists as $pagelist)
                        <li class="list-group-item relist-group-item">
                            <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml"><img src="{{$pagelist->litpic}}" class="col-xs-4 col-md-4 img-responsive img-rounded" /></a>
                            <dl class="col-xs-8 col-md-8" style="padding-top:8px; margin-bottom: 0px; ">
                                <dt><a class="" style="color:#3e7a92;" href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml">{{$pagelist->title}}</a></dt>
                                <dd>{{str_limit($pagelist->description,96,'...')}}</dd>
                            </dl>

                        </li>
                    @endforeach
                </ul>
            </div>

            <nav>
                {!! str_replace('page=','page/',str_replace('?','/',preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()))) !!}

            </nav>

        </div>
    </div>

@stop