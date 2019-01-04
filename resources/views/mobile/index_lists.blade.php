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
            <div class="col-xs-12">
                {!! $thistypeinfo->contents !!}
            </div>
        </div>
    </div>

@stop