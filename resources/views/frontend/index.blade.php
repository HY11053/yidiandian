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
                <li style=" opacity: 1;filter:alpha(opacity=100);"><a href="http://www.yidiandianjm.com/shenqingjm/" style="background:url(/frontend/images/baner.jpg) center top no-repeat #faf8f0"></a></li>
                <li><a href="http://www.yidiandianjm.com/shenqingjm/" style="background:url(/frontend/images/baner1.jpg) center top no-repeat #cee5d3"></a></li>
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
                    <h3 class="up" id="two1" onmouseover="setContentTab('two',1,4)">
                        最新新闻

                    </h3>

                    <h3 id="two2" onmouseover="setContentTab('two',2,4)">
                        最新加盟
                    </h3>
                    <h3 id="two3" onmouseover="setContentTab('two',3,4)">
                        最新资讯            </h3>
                </div>

                <div class="block" id="con_two_1">
                    <ul>
                        <li>
                            <a href="http://www.yidiandianjm.com/news/1670.html"
                            >
                                <span>12-06</span>
                                <p>一点点奶茶如何在众多奶茶店中脱颖而出？</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/news/1671.html"
                            >
                                <span>12-06</span>
                                <p>一点点奶茶加盟为何这么火爆？开店后如何更好地经营</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/news/1672.html"
                            >
                                <span>12-05</span>
                                <p>一点点奶茶是一个可靠的加盟项目吗？有哪些加盟条件</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/news/1673.html"
                            >
                                <span>12-05</span>
                                <p>一点点奶茶投资优势有哪些？开一点点奶茶加盟店要注</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/news/1674.html"
                            >
                                <span>12-04</span>
                                <p>在成都开一点点奶茶加盟店需要满足什么条件？</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/news/1675.html"
                            >
                                <span>12-04</span>
                                <p>长沙一点点奶茶加盟好吗？加盟流程有哪些？</p>
                            </a>
                        </li>

                    </ul>

                </div>

                <div id="con_two_2">
                    <ul>
                        <li>
                            <a href="http://www.yidiandianjm.com/anli/1256.html"
                            >
                                <span>01-19</span>
                                <p>加盟一点点奶茶后尽享市场潮流范儿？</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/anli/1248.html"
                            >
                                <span>01-08</span>
                                <p>厨师加盟一点点奶茶获利颇丰！</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/anli/1040.html"
                            >
                                <span>03-15</span>
                                <p>辞职创业开一点点奶茶店</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/anli/142.html"
                            >
                                <span>01-25</span>
                                <p>老店新开姐妹俩加盟一点点业绩翻番</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/anli/31.html"
                            >
                                <span>12-08</span>
                                <p>大学生创业之路 90后暖男开一点点奶茶店致富</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/anli/18.html"
                            >
                                <span>12-07</span>
                                <p>年轻情侣加盟一点点奶茶店开启创业之旅</p>
                            </a>
                        </li>

                    </ul>
                </div>


                <div id="con_two_3">
                    <ul>
                        <li>
                            <a href="http://www.yidiandianjm.com/shenqing/1445.html"
                            >
                                <span>03-19</span>
                                <p>上海一点点奶茶加盟店生意为什么这么火？</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/shenqing/1446.html"
                            >
                                <span>03-15</span>
                                <p>上海一点点奶茶怎么样?上海一点点奶茶加盟多少钱?</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/shenqing/1447.html"
                            >
                                <span>03-14</span>
                                <p>一点点奶茶加盟7大优势是什么？一点点产品特色有哪</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/shenqing/1448.html"
                            >
                                <span>03-13</span>
                                <p>一点点奶茶加盟费是多少？开一点点奶茶店该注意哪些</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/shenqing/1197.html"
                            >
                                <span>10-13</span>
                                <p>一点点奶茶合作要求，加盟1點點奶茶条件</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.yidiandianjm.com/shenqing/1196.html"
                            >
                                <span>10-11</span>
                                <p>加盟一点点奶茶要交哪些费用？</p>
                            </a>
                        </li>

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
                    <a href="http://www.yidiandianjm.com/dianpu/">更多>></a>
                    <p>最新店铺<span>HOT STORE</span></p>
                </div>
                <div class="hotnr">
                    <div id="cont">

                        <div class="lii"></div>
                        <div class="btn" id="btn">
                            <ul>
                                <li class="on">1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                <div style="clear: both"></div>
                            </ul>
                        </div>
                        <div class="imm" id="imm">
                            <a href="http://www.yidiandianjm.com/dianpu/365.html" target="_blank"
                            > <img src="/frontend/images/1dd_26.jpg" alt="上海加盟店面" ><p>上海加盟店面</p></a>
                            <a href="http://www.yidiandianjm.com/dianpu/415.html" target="_blank" rel="nofollow"
                            > <img src="/frontend/images/1dd_24.jpg" alt="南京加盟店面" ><p>南京加盟店面</p></a>
                            <a href="http://www.yidiandianjm.com/dianpu/177.html" target="_blank" rel="nofollow"
                            > <img src="/frontend/images/1dd_27.jpg" alt="杭州加盟店面" ><p>杭州加盟店面</p></a>
                            <a href="http://www.yidiandianjm.com/dianpu/641.html" target="_blank" rel="nofollow"
                            > <img src="/frontend/images/1dd_25.jpg" alt="无锡加盟店面"><p>无锡加盟店面</p></a>
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
                    <li>
                        <a href="http://www.yidiandianjm.com/products/100.html" rel="nofollow">
                            <img  src="/frontend/images/1dd_14.jpg" width="380" height="280" alt="找好茶"/>
                            <p>找好茶系列</p>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.yidiandianjm.com/products/101.html" rel="nofollow">
                            <img  src="/frontend/images/1dd_20.jpg" width="380" height="280" alt="找奶茶"/>
                            <p>找奶茶系列</p>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.yidiandianjm.com/products/158.html" rel="nofollow">
                            <img  src="/frontend/images/1dd_21.jpg" width="380" height="280" alt="找口感"/>
                            <p>找口感系列</p>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.yidiandianjm.com/products/159.html" rel="nofollow">
                            <img  src="/frontend/images/1dd_22.jpg" width="380" height="280" alt="找红茶"/>
                            <p>红茶拿铁系列</p>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.yidiandianjm.com/products/36.html" rel="nofollow">
                            <img  src="frontend/images/1dd_23 .jpg" width="380" height="280" alt="一点点找新鲜"/>
                            <p>找新鲜系列</p>
                        </a>
                    </li>
                </ul>
                <ul id="marquee4_2">
                </ul>
            </div>
            <script type="text/javascript">marqueeStart(4, "left");</script>
        </div>
    </div>

@stop