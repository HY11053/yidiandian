@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{trim($thisarticleinfos->description)}}@stop
@section('headlibs')
<meta name="Copyright" content="{{config('app.name')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.name')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="{{$thisarticleinfos->created_at}}+08:00" />
    <meta property="og:image" content="{{config('app.url')}}{{str_replace(config('app.url'),'',$thisarticleinfos->litpic)}}"/>
    <meta property="article:author" content="{{config('app.name')}}" />
    <meta property="article:published_first" content="{{config('app.name')}}, {{config('app.url')}}{{Request::getrequesturi()}}" />
@stop
@section('main_content')
<div class="main_content">
    <div class="mianbaoxie center">
        <p><a href="{{config('app.url')}}" style="margin-left: 0px;">首页</a> > <a href="/{{$thisarticleinfos->arctype->real_path}}/">{{$thisarticleinfos->arctype->typename}}</a> > <a href="">{{str_replace('加盟','',$thisarticleinfos->brandname)}}加盟</a></p>
    </div>
    <div class="b_con1 center box-shadow">
        <div class="b_con1-left">
            <div class="b_con1-left-tu">
                <div class="xm-show-bar">
                    <div class="img-block tu">
                        @foreach($pics as $pic)
                            @if($loop->first)
                                 <li class="img-block cur"><img src="{{$pic}}" alt=""></li>
                            @endif
                        @endforeach
                    </div>
                    <div class="xm-scroll">
                        <div class="btn-left btn-disabled"><i class="iconfont icon-leftarrow"></i></div>
                        <div class="btn-right"><i class="iconfont icon-rightarrow"></i></div>
                        <div class="ovh">
                            <ul style="width: 272px;">
                                @foreach($pics as $pic)
                                <li class="img-block cur"><img src="{{$pic}}" alt=""></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b_con1-right">
                <div class="b_con1-right-top">
                    <h1>【{{$thisarticleinfos->brandname}}】</h1>
                    <ul>
                        <li style="margin-top: 0px;"><p>投资金额：<span style="font-size: 16px;color: #df0000;">{{$thisarticleinfos->brandpay}}</span></p></li>
                        <li><p>所属行业：<span>干洗</span></p></li>
                    </ul>
                </div>

                <div class="b_con1-right-con">
                    <ul>
                        <li><p style="margin-top: 0px;">成立时间：<span>{{$thisarticleinfos->brandtime}}</span></p></li>
                        <li><p>品牌发源地：<span>{{$thisarticleinfos->brandorigin}}</span></p></li>
                        <li><p>加盟区域：<span>{{$thisarticleinfos->brandarea}}等全国地区</span></p></li>
                        <li><p>经营范围：<span>{{$thisarticleinfos->brandmap}}</span></p></li>
                        <li><p>所需面积：<span>{{$thisarticleinfos->acreage}}</span></p></li>
                    </ul>

                    <ul>
                        <li><p style="margin-top: 0px;">门店总数：<span>{{$thisarticleinfos->brandnum}}</span></p></li>
                        <li><p>适合人群：<span>{{$thisarticleinfos->brandperson}}</span></p></li>
                        <li><p>项目咨询人数：<span>{{$thisarticleinfos->brandchat}}</span></p></li>
                        <li><p>公司名称：<span>{{$thisarticleinfos->brandgroup}}</span></p></li>
                        <li><p>公司地址：<span>{{$thisarticleinfos->brandaddr}}</span></p></li>
                    </ul>
                </div>

                <div class="b_con1-right-bottom">
                    <ul style="margin-left: 0px;">
                        <li><p>意向加盟</p></li>
                        <li><h1>{{$thisarticleinfos->brandattch}}</h1></li>
                        <li><span>|</span></li>
                    </ul>
                    <ul>
                        <li><p>申请加盟</p></li>
                        <li><h1>{{$thisarticleinfos->brandapply}}</h1></li>
                        <li><span>|</span></li>
                    </ul>
                    <ul>
                        <li><p>品牌好评率</p></li>
                        <li><h1>{{rand(95,99)}}%</h1></li>
                        <!--<li><span>|</span></li>-->
                    </ul>
                </div>
                <div class="b_con1-right-button">
                    <ul>
                        <li>
                            <button>申请加盟</button>
                        </li>
                        <li>
                            <button class="bt_num">2629</button>
                        </li>
                        <li>
                            <button class="bt_comp">成本计算</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="b_con-right">
            <img src="{{$thisarticleinfos->litpic}}" />
            <h1>{{$thisarticleinfos->brandgroup}}</h1>
            <ul>
                <li><p style="margin-top: 0px;">所在地：<span>{{$thisarticleinfos->brandaddr}}</span></p></li>
                <li><p>注册资金：<span>{{$thisarticleinfos->registeredcapital}}</span></p></li>
                <li><p>公司类型：<span>{{$thisarticleinfos->genre}}</span></p></li>
            </ul>
            <button class="bt_frst">在线咨询</button>
           <button>我要加盟</button>
        </div>
        <div class="b_con1-bottom">
            <p>浏览：{{$thisarticleinfos->click}} 更新时间：{{$thisarticleinfos->created_at}}</p>
        </div>
    </div>
    <div class="b_con2 center">
        <div class="tu1">
            <img src="/frontend/images/risk_title@2x.png" />
        </div>
        <div class="zi1">
            <ul>
                <li>{{str_limit($thisarticleinfos->brandpsp,60,'...')}}</li>
            </ul>
        </div>
        <div class="tu2">
            <img src="/frontend/images/qingbao_title@2x.png" />
        </div>
        <div class="zi2" >
            <div id="moocBox">
                <ul data-id="m_n_a02" data-type="cmsadpos">
                    @foreach($brandnews as $brandnew)
                        <li><a href="/{{$brandnew->arctype->real_path}}/{{$brandnew->id}}/" title="{{$brandnew->title}}">{{$brandnew->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


    <div class="b_con3 center">
        <div class="b_con3-left box-shadow">
            <ul class="b_con3-left-top nv-stair">
                <li><span>{{$thisarticleinfos->brandname}}品牌信息</span></li>
                <li><span>品牌介绍</span></li>
                <li><span>投资分析</span></li>
                <li><span>项目咨询</span></li>
                <li><span>品牌资讯</span></li>
            </ul>
            <div class="b_con3-2 stair-wz_new">
                <div class="xiaokuai2"></div>
                <h2>{{$thisarticleinfos->brandname}}品牌介绍</h2>
                {!! $thisarticleinfos->body !!}
            </div>
            <div class="b_con3-6 stair-wz_new">
                <div class="xiaokuai6"></div>
                <h2>{{$thisarticleinfos->brandname}}<span>运营综合分析</span></h2>
                <div class="b_con3-6-xian"></div>
                <table cellspacing="0" style="border-top: 1px solid rgb(230, 230, 230);">
                    <tbody>
                    <tr>
                        <td class="td_color" >品牌名称</td>
                        <td class="td_style">{{$thisarticleinfos->brandname}}</td>
                        <td class="td_color">装修费用</td>
                        <td class="td_style">{{$thisarticleinfos->decorationpay}}</td>
                    </tr>
                    <tr>
                        <td class="td_color" >前两季度房租</td>
                        <td class="td_style">{{$thisarticleinfos->quartersrent}}</td>
                        <td class="td_color">货铺/设备费用</td>
                        <td class="td_style">{{$thisarticleinfos->equipmentcost}}</td>
                    </tr>
                    <tr>
                        <td class="td_color">流动资金</td>
                        <td class="td_style">{{$thisarticleinfos->workingcapital}}</td>
                        <td class="td_color">人工开支</td>
                        <td class="td_style">{{$thisarticleinfos->laborquarter}}</td>
                    </tr>
                    <tr>
                        <td class="td_color">工商税务杂项</td>
                        <td class="td_style">{{$thisarticleinfos->miscellaneous}}</td>
                        <td class="td_color">水电煤(元/月)</td>
                        <td class="td_style">{{$thisarticleinfos->watercoal}}</td>

                    </tr>
                    <tr>
                        <td class="td_color">日成交量</td>
                        <td class="td_style">{{$thisarticleinfos->dailyvolume}}</td>
                        <td class="td_color">平均单价</td>
                        <td class="td_style">{{$thisarticleinfos->unitprice}}</td>

                    </tr>
                    <tr>
                        <td class="td_color">日均成本</td>
                        <td class="td_style">{{ceil(($thisarticleinfos->decorationpay/365)+($thisarticleinfos->quartersrent/180)+($thisarticleinfos->equipmentcost/365)+($thisarticleinfos->laborquarter/365)+($thisarticleinfos->miscellaneous/365)+($thisarticleinfos->watercoal/30))}}</td>
                        <td class="td_color">日均收入</td>
                        <td class="td_style">{{ceil(($thisarticleinfos->dailyvolume*$thisarticleinfos->dailyvolume)-(($thisarticleinfos->decorationpay/365)+($thisarticleinfos->quartersrent/180)+($thisarticleinfos->equipmentcost/365)+($thisarticleinfos->laborquarter/365)+($thisarticleinfos->miscellaneous/365)+($thisarticleinfos->watercoal/30)))}}</td>
                    </tr>
                    <tr>
                        <td class="td_color">月收入</td>
                        <td class="td_style">{{ceil(($thisarticleinfos->dailyvolume*$thisarticleinfos->dailyvolume)-(($thisarticleinfos->decorationpay/365)+($thisarticleinfos->quartersrent/180)+($thisarticleinfos->equipmentcost/365)+($thisarticleinfos->laborquarter/365)+($thisarticleinfos->miscellaneous/365)+($thisarticleinfos->watercoal/30)))*30/10000}}万</td>
                        <td class="td_color">年收入</td>
                        <td class="td_style">{{ceil(($thisarticleinfos->dailyvolume*$thisarticleinfos->dailyvolume)-(($thisarticleinfos->decorationpay/365)+($thisarticleinfos->quartersrent/180)+($thisarticleinfos->equipmentcost/365)+($thisarticleinfos->laborquarter/365)+($thisarticleinfos->miscellaneous/365)+($thisarticleinfos->watercoal/30)))*365/10000}}万</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="ar_con1-left-con5 stair-wz_new">
                <div class="ar_con1-left-con5-top">
                    <div class="bf_tit">给<span>{{$thisarticleinfos->brandname}}</span>留言，立即获得最新加盟资料</div>
                    <p>（<span>*</span>为必填选项）</p>
                </div>

                <ul class="ar_con5-ul1">
                    <li style="margin-top: 0px;">
                        <p><span>*</span>姓名</p>
                        <input type="text" placeholder="您的真实姓名"/>
                    </li>
                    <li>
                        <p><span>*</span>手机</p>
                        <input type="text" placeholder="电话是与您联系的重要方式"/>
                    </li>
                    <li>
                        <p><span>*</span>地址</p>
                        <input type="text" placeholder="与您联系的重要方式"/>
                    </li>
                </ul>

                <ul class="ar_con5-ul2">
                    <li>
                        <input type="radio" name="sex" id="" value="男" />
                        <p>先生</p>
                    </li>
                    <li>
                        <input type="radio" name="sex" id="" value="女" />
                        <p>女士</p>
                    </li>
                </ul>

                <div class="ar_con1-left-con5-bottom">
                    <h1><span>*</span>留言</h1>
                    <textarea id="note" name="content" class="textarea_bk" placeholder="请输入您的留言内容或选择快捷留言"></textarea>

                    <ul>
                        <li><p>请填写留言或根据意向选择下列快捷留言</p></li>
                        <li><a href="">我加盟后，您们还会提供哪些服务？</a></li>
                        <li><a href="">有兴趣开一个店，请寄资料或给我打电话。</a></li>
                        <li><a href="">请问我这个地方有加盟商了吗？</a></li>
                        <li><a href="">请将详细投资方案和资料寄给本人。</a></li>
                        <li><a href="">初步打算加盟贵公司，请寄资料。</a></li>
                    </ul>

                    <input type="button" value="提交留言"/>

                </div>

            </div>

            <div class="ar_con1-left-con6">
                <div class="bf_tit">{{$thisarticleinfos->brandname}}资讯</div>
                <ul>
                    @foreach($brandnews as $search)
                        <li><a href="/{{$search->arctype->real_path}}/{{$search->id}}.shtml" >{{$search->title}}</a></li>
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="b_con3-right">

            <div class="bl_con3-right-1 box-shadow">
                <h3>干洗品牌排行榜</h3>
                <div class="bl_con3-right-1-xian"></div>
                <ul>
                    @foreach($topbrands as $index=>$topbrand)
                        <li>
                            <a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml"><img src="/frontend/images/con3-right-1_06.png" /></a>
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
            <div class="conl2-right-3 box-shadow">


                <h3>最新入驻品牌<a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/">更多</a></h3>
                <div class="conl2-right-3-xian"></div>

                <ul>
                    @foreach($latestbrands as $latestbrand)
                        <li @if($loop->first) class="mt0" @endif>
                            <a href="/{{$latestbrand->arctype->real_path}}/{{$latestbrand->id}}.shtml"><img src="{{$latestbrand->litpic}}" /></a>
                            <a href="" class="a3">{{$latestbrand->brandname}}</a>
                            <p>
                                投资金额 ： <span>{{$latestbrand->brandpay}}</span><br />
                                加盟门店数 ： <span>{{$latestbrand->brandnum}}</span>
                            </p>
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="b_con3-right-3 box-shadow">
                <h3>干洗品牌加盟资讯</h3>
                <ul>
                    @foreach($latestbrandnews as $latestbrandnew)
                    <li><a href="/{{$latestbrandnew->arctype->real_path}}/{{$latestbrandnew->id}}.shtml">{{$latestbrandnew->title}}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="b_con3-right-4 box-shadow">
                <h1>全站最新品牌资讯</h1>
                <ul>
                    @foreach($latesnews as $latesnew)
                    <li>
                        <a href="/{{$latesnew->arctype->real_path}}/{{$latesnew->id}}.shtml">{{$latesnew->title}}</a>
                        <p>{{$latesnew->description}}</p>
                    </li>
                    @endforeach

                </ul>
            </div>

        </div>
        <div class="clear"></div>
    </div>
</div>
@stop