<!DOCTYPE html>
<html mip>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="wap-font-scale" content="no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="applicable-device" content="mobile">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="Cache-Control" content="no-cache"/>
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="canonical" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="stylesheet" type="text/css" href="https://c.mipcdn.com/static/v1/mip.css">
    <link href="{{str_replace('www.','mip.',config('app.url'))}}/mobile/css/mipcommon.css" rel="stylesheet" type="text/css"/>
    @yield('headlibs')
</head>
<body>
<div class="header clearfix mtop84">
    <div class="search clearfix">
        <div class="city fl">
            <a href="/"><mip-img src="/mobile/images/nav-logo2.png" alt="干洗店投资网"></mip-img></a>
        </div>
        <div class="searchCon fl">
            <mip-form url="{{str_replace('www.','mip.',config('app.url'))}}/sprodlist/all/" target="_self" method="post">
                {{csrf_field()}}
            <div class="ipt-box"></div>
            <input class="ipt-placeholder" placeholder="输入您想找的项目" />
            <button type="submit" class="search_btn"></button>
            </mip-form>
        </div>
        <mip-accordion sessions-key="mip_1" animatetime="0.24">
            <section>
            <div class="message fr">
            <b>项目分类</b>
        </div>
                <div class="mip-accordion-content d_nav">
                    <ul>
                        <li><a href="/" target="_self"><span>首页</span></a></li>
                        <li><a href="/item/" target="_self"><span>品牌大全</span></a></li>
                        <li><a href="/cost/" target="_self"><span>干洗店成本</span></a></li>
                        <li><a href="/investment/" target="_self"><span>干洗店投资</span></a></li>
                        <li><a href="/profit/" target="_self"><span>干洗店利润</span></a></li>
                        <li><a href="/devices/" target="_self"><span>干洗店设备</span></a></li>
                        <li><a href="/technology/" target="_self"><span>干洗技术</span></a></li>
                        <li><a href="/news/" target="_self"><span>品牌新闻</span></a></li>
                        <li><a href="/paihangbang/" target="_self"><span>干洗店排行榜</span></a></li>
                    </ul>
                </div>
            </section>
        </mip-accordion>
    </div>
</div>
@yield('main_content')
<footer>
    <div class="link-box ">
        <a href="{{config('app.url')}}" class="foot-link">电脑版</a><span class="v-line">|</span>
        <a href="/cost/" class="foot-link">干洗店成本</a><span class="v-line">|</span>
        <a href="/profit/" class="foot-link">干洗店利润</a><span class="v-line">|</span>
        <a href="/investment/" class="foot-link">干洗店投资</a><span class="v-line">|</span>
        <a href="/paihangbang/" class="foot-link">品牌排行榜</a>
    </div>
    <p class="firm clearfix">
        <span class="foot-text mgr15">上海桥梓网络科技有限公司 	 版权所有</span>
    </p>
</footer>
<script src="https://c.mipcdn.com/static/v1/mip.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-form/mip-form.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-accordion/mip-accordion.js"></script>
<script src="https://mipcache.bdstatic.com/static/v1/mip-link/mip-link.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-lightbox/mip-lightbox.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-fixed/mip-fixed.js"></script>
@yield('footlibs')
</body>
</html>
