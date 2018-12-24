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
                <a href="/"><p>首页</p><span>HOME</span></a>
            </li>
            <li>
                <a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/"><p>{{\App\AdminModel\Arctype::where('id',1)->value('typename')}}</p><span>BRAND</span></a>
            </li>
            <li>
                <a href="/{{\App\AdminModel\Arctype::where('id',2)->value('real_path')}}/" ><p>{{\App\AdminModel\Arctype::where('id',2)->value('typename')}}</p><span>PRODUCT</span></a>
            </li>
            <li>
                <a href="/{{\App\AdminModel\Arctype::where('id',3)->value('real_path')}}/"><p>{{\App\AdminModel\Arctype::where('id',3)->value('typename')}}</p><span>NEWS</span></a>
            </li>
            <li>
                <a href="/{{\App\AdminModel\Arctype::where('id',4)->value('real_path')}}/"><p>{{\App\AdminModel\Arctype::where('id',4)->value('typename')}}</p><span>STORE</span></a>
            </li>
            <li>
                <a href="/{{\App\AdminModel\Arctype::where('id',5)->value('real_path')}}/"><p>{{\App\AdminModel\Arctype::where('id',5)->value('typename')}}</p><span>CASES</span></a>
            </li>
            <li>
                <a href="/{{\App\AdminModel\Arctype::where('id',6)->value('real_path')}}/"><p>{{\App\AdminModel\Arctype::where('id',6)->value('typename')}}</p><span>JOIN US</span></a>
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
                    <dd><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',1)->value('typename')}}</a></dd>
                    <dd><a href="/{{\App\AdminModel\Arctype::where('id',2)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',2)->value('typename')}}</a></dd>
                    <dd><a href="/{{\App\AdminModel\Arctype::where('id',8)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',8)->value('typename')}}</a></dd>
                    <dd><a href="/{{\App\AdminModel\Arctype::where('id',9)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',9)->value('typename')}}</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt><strong>产品中心</strong></dt>
                    <dd><a href="#" rel="nofollow">找好茶</a></dd>
                    <dd><a href="#" rel="nofollow">找奶茶</a></dd>
                    <dd><a href="#" rel="nofollow">找口感</a></dd>
                    <dd><a href="#" rel="nofollow">找新鲜</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt><strong>店铺展示</strong></dt>
                    <dd><a href="#">杭州连锁店面</a></dd>
                    <dd><a href="#">苏州连锁店面</a></dd>
                    <dd><a href="#">上海连锁店面</a></dd>
                    <dd><a href="#">全国奶茶分店展示</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt><strong>加盟中心</strong></dt>
                    <dd><a href="/{{\App\AdminModel\Arctype::where('id',10)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',10)->value('typename')}}</a></dd>
                    <dd><a href="/{{\App\AdminModel\Arctype::where('id',11)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',11)->value('typename')}}</a></dd>
                    <dd><a href="/{{\App\AdminModel\Arctype::where('id',12)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',12)->value('typename')}}</a></dd>
                    <dd><a href="/{{\App\AdminModel\Arctype::where('id',13)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',13)->value('typename')}}</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt><strong>网站地图</strong></dt>
                    <dd><a href="/storage/sitemap.html">网站地图</a></dd>
                    <dd><a href="/storage/sitemap.xml">XML</a></dd>
                    <dd><a href="{{str_replace('www.','m.',config('app.url'))}}">移动端</a></dd>
                </dl>
            </li>
        </ul>
        <div class="footlo"><img src="/frontend/images/fotnavlogo.jpg" width="182" height="129" alt=""/></div>
    </div>
</div>
<div class="ydd_con link">
   @yield('flink')
    <div class="ydd_con footer">
        @2014-2019 一点点奶茶官方网站 版权所有
    </div>
</div>
</body>
</html>
