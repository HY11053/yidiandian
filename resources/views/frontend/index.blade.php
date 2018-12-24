@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
@stop
@section('main_content')
    <div class="ydd_con banner">
        <div class="lubo">
            <ul class="lubo_box">
                <li style=" opacity: 1;filter:alpha(opacity=100);"><a href="#" style="background:url(/frontend/images/baner.jpg) center top no-repeat #faf8f0"></a></li>
                <li><a href="#" style="background:url(/frontend/images/baner1.jpg) center top no-repeat #cee5d3"></a></li>
            </ul>
        </div>

        <script type="text/javascript">
            $(function(){
                $(".lubo").lubo({
                });
            })
        </script>
    </div>
    <div class="ydd_con about">
        <div class="ydd_1000">
            <div class="ab_logo"><img src="/frontend/images/1dd_10.jpg" width="280" height="188" alt="50岚品牌介绍"/></div>
            <div class="aboutnr">
                <h3>一点点简介<span>Project introduction</span></h3>
                <p>一点点奶茶品牌原为台湾50岚奶茶品牌，创立于1994年。初期只是台南地区的路边饮品茶摊，之后因为奶茶产品极具台湾当地特色，深受民众喜爱。并且经营状况蒸蒸日上，转型为店铺。</p>
                <p>在1997年成立第一家模范店后翌年逐渐设立分店，开启连锁加盟经营模式。2010年鉴于台北饮品市场日趋饱和，身负数千名工作伙伴的发展责任以及推广茶文化的使命感，在大陆创办了一点点奶茶新品牌。「1点点」融合了台湾50岚的文化与精髓，更加入了崭新的生命力，将茶文化发扬光大，目标让世界每一人都能随手品偿香醇好茶。</p>
            </div>
        </div>
    </div>
    <div class="ydd_con index_new">
        <div class="ydd_1000">
            <div class="zxnews">
                <div class="zxnews_title">
                    <h3 class="up" id="two1" onmouseover="setContentTab('two',1,4)">最新资讯</h3>
                    <h3 id="two2" onmouseover="setContentTab('two',2,4)">加盟动态</h3>
                    <h3 id="two3" onmouseover="setContentTab('two',3,4)">利润分析</h3>
                </div>

                <div class="block" id="con_two_1">
                    <ul>
                        @foreach($newslists as $newslist)
                        <li>
                            <a href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.shtml">
                                <span>{{date('Y-m-d',strtotime($newslist->created_at))}}</span>
                                <p>{{$newslist->title}}</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>

                </div>

                <div id="con_two_2">
                    <ul>
                        @foreach($jiamengnews as $jiamengnew)
                        <li>
                            <a href="/{{$jiamengnew->arctype->real_path}}/{{$jiamengnew->id}}.shtml">
                                <span>{{date('Y-m-d',strtotime($jiamengnew->created_at))}}</span>
                                <p>{{$jiamengnew->title}}</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>


                <div id="con_two_3">
                    <ul>
                        @foreach($lirunnews as $lirunnew)
                        <li>
                            <a href="/{{$lirunnew->arctype->real_path}}/{{$lirunnew->id}}.shtml">
                                <span>{{date('Y-m-d',strtotime($lirunnew->created_at))}}</span>
                                <p>{{$lirunnew->title}}</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                function setContentTab(name, curr, n) {
                    for (i = 1; i <= n; i++) {
                        var menu = document.getElementById(name + i);
                        var cont = document.getElementById("con_" + name + "_" + i);
                        menu.className = i == curr ? "up" : "";
                        if (i == curr) {
                            cont.style.display = "block";
                        } else {
                            cont.style.display = "none";
                        }
                    }
                }
            </script>
            <div class="hotnews">
                <div class="bt">
                    <a href="/{{\App\AdminModel\Arctype::where('id',4)->value('real_path')}}/">更多>></a>
                    <p>最新店铺<span>HOT STORE</span></p>
                </div>
                <div class="hotnr">
                    <div id="cont">
                        <div class="lii"></div>
                        <div class="btn" id="btn">
                            <ul>
                                @foreach($dianpulists as $index=>$dianpulist)
                                <li @if($loop->first) class="on" @endif>{{$index+1}}</li>
                                @endforeach
                                <div style="clear: both"></div>
                            </ul>
                        </div>
                        <div class="imm" id="imm">
                            @foreach($dianpulists as $dianpulist)
                                <a href="/{{$dianpulist->arctype->real_path}}/{{$dianpulist->id}}.shtml" target="_blank"> <img src="{{$dianpulist->litpic}}" alt="{{$dianpulist->title}}" ><p>{{$dianpulist->title}}</p></a>
                            @endforeach
                        </div>
                        <div id="jiao">
                            <a id="left"><img src="/frontend/images/anl.png" width="35" height="50" alt="一点点官网"/></a>
                            <a id="right"><img src="/frontend/images/anr.png" width="35" height="50" alt="一点点官网"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ydd_con jmindex">
        <div class="ydd_1000 bt">
            <p>一点点优势</p>
            <span>品质保证</span>
        </div>
        <div class="ydd_1000">
            <ul>
                <li>
                    <dl>
                        <dt>
                            <img src="/frontend/images/j01.jpg" alt="精选奶源"/>
                            <p>精选奶源</p>
                        </dt>
                        <dd>选用精品奶源，最大程度的保留原奶茶的营养，芳香独特。</dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <img src="/frontend/images/j02.jpg" alt="奶茶制作"/>
                            <p>手工制作</p>
                        </dt>
                        <dd>独特考究手工制作方法，采用上等好茶和鲜香牛奶，现做现卖，新鲜美味。</dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <img src="/frontend/images/j03.jpg" alt="绿色健康"/>
                            <p>绿色健康</p>
                        </dt>
                        <dd>无任何添加，无奶精，无果粉，无色素，无添加剂，绿色健康。</dd>
                    </dl>
                </li>
                <li style=" margin:0">
                    <dl>
                        <dt>
                            <img src="/frontend/images/j04.jpg" alt="产品"/>
                            <p>产品多样</p>
                        </dt>
                        <dd>加盟店产品多样，茶饮，果汁，冰沙等样样俱全。公司还会不断更新产品，满足市场需求。</dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
    <div class="ydd_con lc">
        <div class="ydd_1000">
            <h3>加盟流程</h3>
            <ul>
                <li>投资咨询</li>
                <li>实地考察</li>
                <li>加盟资格审核</li>
                <li>双方签订合同</li>
                <li>经营指导</li>
            </ul>
        </div>
    </div>
    <div class="ydd_con storeindex">
        <div id="marquee4" class="marqueeleft">
            <div style="width:8000px;">
                <ul id="marquee4_1">
                    @foreach($productions as $production)
                        <li>
                            <a href="/{{$production->arctype->real_apth}}/{{$production->id}}.shtml">
                                <img  src="{{$production->litpic}}" width="380" height="280" alt="{{$production->title}}"/>
                                <p>{{$production->title}}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <ul id="marquee4_2">
                </ul>
            </div>
            <script type="text/javascript">marqueeStart(4, "left");</script>
        </div>
    </div>

@stop

@section('flink')
    <div class="ydd_1000">友情链接：@foreach($flinks as $flink)<a href="{{$flink->weburl}}"target="_blank">{{$flink->webname}}</a>|@endforeach</div>
@stop