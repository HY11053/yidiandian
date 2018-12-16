@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{$thisarticleinfos->description}}@stop
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
@stop
@section('main_content')
    <div class="ydd_con list_nav">
        <div class="ydd_1000">
            <div class="ln_l">产品中心</div>
            <div class="ln_r">当前位置：<a href="http://www.yidiandianjm.com/">主页</a> &gt; <a href="http://www.yidiandianjm.com/products/">产品中心</a> &gt; </div>
        </div>
    </div>
    <div class="ydd_con">
        <div class="ydd_1000 list_a">
            <div class="list_l" id="inner">
                <div class="l_img"><img src="/images/list_06.jpg" width="250" height="170" alt="一点点奶茶新鲜" data-bd-imgshare-binded="1"></div>
                <div class="l_img"><a href="/shenqingjm/"><img src="/images/list_09.jpg" width="250" height="68" alt="一点点奶茶申请" data-bd-imgshare-binded="1"></a></div>
                <div class="l_ts">
                    <p>信息推荐</p>
                    <ul>
                        <li><a href="http://www.yidiandianjm.com/products/1084.html">一点点奶茶抹茶系列新品上市</a></li>
                        <li><a href="http://www.yidiandianjm.com/products/986.html">一点点红茶拿铁介绍</a></li>
                        <li><a href="http://www.yidiandianjm.com/products/158.html">一点点奶茶找口感系列</a></li>
                        <li><a href="http://www.yidiandianjm.com/products/100.html">一点点奶茶找好茶系列</a></li>
                        <li><a href="http://www.yidiandianjm.com/products/36.html">一点点奶茶找新鲜系列</a></li>
                        <li><a href="http://www.yidiandianjm.com/products/101.html">一点点奶茶找奶茶系列</a></li>
                        <li><a href="http://www.yidiandianjm.com/products/159.html">一点点奶茶找咖啡系列</a></li>
                        <li><a href="http://www.yidiandianjm.com/products/955.html">一点点奶茶冬季人气单品</a></li>
                        <li><a href="http://www.yidiandianjm.com/products/953.html">一点点奶茶冬季产品点单攻略</a></li>
                        <li><a href="http://www.yidiandianjm.com/products/35.html">一点点奶茶终极外卖单展示，一点</a></li>


                    </ul>
                </div>
            </div>

            <div class="list_r">
                <div class="newsnr">
                    <h1><p align="center"><strong><font size="4">一点点奶茶抹茶系列新品上市</font></strong></p></h1>
                    <center>时间：2017-04-25 09:19 </center>
                    <div>
                        　　你听说了吗？<strong><a href="http://www.yidiandianjm.com/">一点点奶茶</a></strong>出新！品！啦！<br>
                        　　【波霸抹茶拿铁 去冰七分糖】
                        <div style="text-align: center">
                            <img alt="波霸抹茶拿铁" src="/uploads/170425/1-1F425091922434.jpg" style="width: 500px; height: 302px" data-bd-imgshare-binded="1"></div>
                        　　推荐指数：五颗星<br>
                        　　大杯：21元<br>
                        　　小杯：16元<br>
                        　　抹茶拿铁?波霸?冰淇淋，也太无敌了吧这组合，长的超级好看有木有！三层的分层也是没谁了，喝前要摇一摇，七分糖也不会很甜，喝完一杯也不会腻的！虽然说5月就正式全线开卖，但是已经发现的我怎么忍的了，我要一家家一点点去问有没有卖！<br>
                        　　【红豆抹茶奶茶 去冰五分糖】
                        <div style="text-align: center">
                            <img alt="红豆抹茶奶茶" src="/uploads/170425/1-1F425091941535.jpg" style="width: 500px; height: 434px" data-bd-imgshare-binded="1"></div>
                        　　推荐指数：三颗星<br>
                        　　大杯：16元<br>
                        　　小杯：13元<br>
                        　　红豆！大红豆！cua~cua~cua~抹茶红豆奶茶也是无法抗拒啊！跟拿铁相比，抹茶奶茶少了一点奶味，抹茶控应该会很喜欢！就是红豆有点难吸呀~<br>
                        　　每次经过一点点总能看到有人排队，即使需要等10几分钟，也按耐不住自己想喝的心情，饿了来了一杯波霸奶茶，肠胃不舒服来一杯柠檬养乐多，想喝茶的来一杯古早味红茶...........<br>
                        　　总之只要是一点点的都好喝~除了即将新出的2款抹茶系列，其实一点点让大家喜爱的原因，是可以自己DIY，喜欢加什么料都可以说，因此有了许多一点点发烧友钻研。<br>
                        　　目前只有一点点的直营店里有卖这两个新品，加盟店里还木有哦~偷偷告诉你，此番新品将在五一后在全市一点点全面开售哦!
                    </div>
                    <div class="bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1544972799724"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
                    <script>
                        window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                    </script>
                </div>
                <div class="sxp">
                    <ul>
                        <li>上一篇：<a href="http://www.yidiandianjm.com/products/986.html">一点点红茶拿铁介绍</a> </li>
                        <li>下一篇：没有了 </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop