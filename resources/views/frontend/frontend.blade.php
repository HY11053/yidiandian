<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link href="/frontend/css/css1.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/frontend/js/jquery.min.js"></script>
    <script type="text/javascript" src="/frontend/js/superslide.2.1.js"></script>
    <script type="text/javascript" src="/frontend/js/indexjs.js"></script>
    <script type="text/javascript" src="/frontend/js/lubotu.js"></script>
    @yield('headlibs')
</head>
<body>
<div class="ydd_con nav">
    <div class="ydd_1000">
        <div class="logo"> <h1><a href="http://www.yidiandianjm.com/"><img src="/frontend/images/logo.jpg" width="170" height="100" alt="一点点官网"/></a></h1>
        </div>
        <ul>
            <li>
                <a href="http://www.yidiandianjm.com/"><p>首页</p><span>HOME</span></a>
            </li>
            <li>
                <a href="http://www.yidiandianjm.com/jieshao/"><p>品牌介绍</p><span>BRAND</span></a>
            </li>
            <li>
                <a href="http://www.yidiandianjm.com/products/" ><p>产品中心</p><span>PRODUCT</span></a>
            </li>
            <li>
                <a href="http://www.yidiandianjm.com/news/"><p>新闻动态</p><span>NEWS</span></a>
            </li>
            <li>
                <a href="http://www.yidiandianjm.com/dianpu/"><p>店铺展示</p><span>STORE</span></a>
            </li>
            <li>
                <a href="http://www.yidiandianjm.com/anli/"><p>加盟案例</p><span>CASES</span></a>
            </li>
            <li>
                <a href="http://www.yidiandianjm.com/shenqing/"><p>加盟中心</p><span>JOIN US</span></a>
            </li>
        </ul>
    </div>
</div>
@yield('main_content')
<div class="ydd_con botnav">
    <div class="ydd_1000">
        <ul>
            <li>
                <dl>
                    <dt><strong>关于我们</strong></dt>
                    <dd><a href="http://www.yidiandianjm.com/jieshao/">品牌简介</a></dd>
                    <dd><a href="http://www.yidiandianjm.com/news/19.html">公司介绍</a></dd>
                    <dd><a href="http://www.yidiandianjm.com/shenqing/12.html">投资优势</a></dd>
                    <dd><a href="http://www.yidiandianjm.com/news/182.html">服务理念</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt><strong>产品中心</strong></dt>
                    <dd><a href="http://www.yidiandianjm.com/products/100.html" rel="nofollow"
                        >找好茶</a></dd>
                    <dd><a href="http://www.yidiandianjm.com/products/101.html" rel="nofollow"
                        >找奶茶</a></dd>
                    <dd><a href="http://www.yidiandianjm.com/products/158.html" rel="nofollow"
                        >找口感</a></dd>
                    <dd><a href="http://www.yidiandianjm.com/products/36.html" rel="nofollow"
                        >找新鲜</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt><strong>店铺展示</strong></dt>
                    <dd><a href="http://www.yidiandianjm.com/dianpu/206.html">杭州连锁店面</a></dd>
                    <dd><a href="http://www.yidiandianjm.com/dianpu/427.html">苏州连锁店面</a></dd>
                    <dd><a href="http://www.yidiandianjm.com/dianpu/225.html">上海连锁店面</a></dd>
                    <dd><a href="http://www.yidiandianjm.com/dianpu/22.html">全国奶茶分店展示</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt><strong>加盟中心</strong></dt>
                    <dd><a href="http://www.yidiandianjm.com/shenqing/523.html">加盟条件</a></dd>
                    <dd><a href="http://www.yidiandianjm.com/shenqing/54.html">加盟流程</a></dd>
                    <dd><a href="http://www.yidiandianjm.com/shenqing/30.html">加盟优势</a></dd>
                    <dd><a href="http://www.yidiandianjm.com/shenqing/29.html">加盟费用</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt><strong>网站地图</strong></dt>
                    <dd><a href="http://www.yidiandianjm.com/sitemap.html">网站地图</a></dd>
                    <dd><a href="http://www.yidiandianjm.com/sitemap.xml">XML</a></dd>
                    <dd><a href="http://m.yidiandianjm.com/">移动端</a></dd>
                </dl>
            </li>
        </ul>
        <div class="footlo"><img src="/frontend/images/fotnavlogo.jpg" width="182" height="129" alt=""/></div>
    </div>
</div>
<div class="ydd_con link">
    <div class="ydd_1000">友情链接：<a href="http://www.lnccjm.com/ "target="_blank">恋暖初茶</a>|<a href="http://www.shangziwei.com/ "target="_blank">小龙虾加盟</a>|<a href="http://www.mtfjm.net/ "target="_blank">木桶饭加盟</a>|<a href="http://www.jgbjm.net/ "target="_blank">重庆鸡公煲加盟</a>|<a href="http://yidiandian.91yinpin.com/ "target="_blank">一点点奶茶加盟</a>|<a href="http://www.haidilaojm.com/ "target="_blank">海底捞火锅</a>|<a href="http://www.xcbcyjm.com/ "target="_blank">快餐小吃</a>|<a href="http://www.1828jm.com/ "target="_blank">1828王老吉</a>|<a href="http://www.18canyin.net/ "target="_blank">18餐饮加盟网</a>|<a href="http://www.achmj.com/ "target="_blank">厝内小眷村</a>|<a href="http://www.heilot.com/ "target="_blank">黑泷堂</a></div>


    <div class="ydd_con footer">
        @2014-2015 一点点奶茶官方网站 版权所有
    </div>
    <p><a href="http://www.yidiandianjm.com/tousu/index.html "rel="nofollow">投诉删除></a></p>
</div>
</body>
</html>
