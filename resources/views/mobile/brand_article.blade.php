@extends('mobile.mobile')
@section('title'){{$thisarticleinfos->title}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{trim($thisarticleinfos->description)}}@stop
@section('main_content')
    <p class="bg-primary"> &nbsp;&nbsp;<a href='/'>主页</a> > <a href='/{{$thisarticleinfos->arctype->real_path}}/'>{{$thisarticleinfos->arctype->typename}}</a></p>
    <div class="container-fluid list_clear">
        <div clas="row">
            <div class="col-xs-12">
                <div id="content">
                    <!--品牌介绍 Start-->
                    <div class="brand_js">
                        <dl class="clearfix">
                            <dt class="col-xs-5"><img src="{{$thisarticleinfos->litpic}}"  /></dt>
                            <dd class="col-xs-7">
                                <h1>{{$thisarticleinfos->brandname}}</h1>
                                <em>品牌名称:{{$thisarticleinfos->brandname}}</em><br/>
                                <em>加盟人气：{{$thisarticleinfos->click}}</em><br/>
                                <em>加盟费：{{$thisarticleinfos->brandpay}}</em><br/>
                                <strong></strong>
                            </dd>
                        </dl>
                        <div class="brand_js2 col-xs-12">
                            <p><strong>区域特许：</strong>{{$thisarticleinfos->brandduty}}</p>
                            <p><strong>主营产品：</strong>{{$thisarticleinfos->brandmap}}</p>
                            <p><strong>加盟区域：</strong>{{$thisarticleinfos->brandarea}}</p>
                            <p><strong>公司名称：</strong>{{$thisarticleinfos->brandgroup}}</p>
                            <div class="ly_button">
                                <a href="#liuyan" class="ly_b1">快速留言</a>
                            </div>
                        </div>
                    </div>
                    <!--品牌介绍 End-->

                    <script>
                        $(function(){
                            var nrW = $('.brand_content1').width();
                            $('.brand_content1 img').each(function(){
                                if($(this).width() > nrW)
                                    $(this).css('width',nrW);
                                $(this).css('height','auto');
                            })
                        });
                    </script>
                    <div class="brand_content">
                       {!! $thisarticleinfos->body !!}
                        <div class="brand_content1 clearfix">
                            <div class="col-xs-12 btn_marign">
                                <div class="col-xs-6"><a href="javascript:void(0)" onclick="openZoosUrl();return false;">
                                        <button  type="submit"  class="btn btn-danger">开店咨询</button></a>
                                </div>
                                <div class="col-xs-6"><a href="javascript:void(0)" onclick="openZoosUrl();return false;"><button type="submit"  class="btn btn-warning">索要资料</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
        <p class="bg-primary">&nbsp;&nbsp;<span class="glyphicon glyphicon-flag" style="font-size: 12pt;"></span>&nbsp;相关阅读</p>
    </ul>
    <ul class="list-group tjw_z">
        @foreach($latesnews as $latesnew)
        <li class="list-group-item"><a href="/{{$latesnew->arctype->real_path}}/{{$latesnew->id}}.shtml" >{{$latesnew->title}}</a></li>
        @endforeach
    </ul>
    <hr/>
@stop