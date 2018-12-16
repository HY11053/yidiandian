@extends('frontend.frontend')
@section('title'){{$thistypeinfo->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.indexname')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.indexname')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}"/>
@stop
@section('main_content')
    <div class="ydd_con list_nav">
        <div class="ydd_1000">
            <div class="ln_l"><h1>一点点奶茶产品中心</h1></div>
            <div class="ln_r">当前位置：<a href="http://www.yidiandianjm.com/">主页</a> &gt; <a href="http://www.yidiandianjm.com/products/">产品中心</a> &gt; </div>
        </div>
    </div>
    <div class="ydd_con">
        <div class="ydd_1000 list_a">
            <div class="list_l" id="inner">
                <div class="l_img"><img src="/images/list_06.jpg" width="250" height="170" alt="一点点奶茶"></div>
                <div class="l_img"><a href="/shenqingjm/"><img src="/images/list_09.jpg" width="250" height="68" alt="一点点奶茶申请"></a></div>
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
                <ul class="listnb">
                    <li>
                        <img src="http://www.yidiandianjm.com/uploads/170425/1-1F425091922434-lp.jpg" width="240" height="180" alt="一点点奶茶抹茶系列新品上市">
                        <div class="newbox">
                            <a href="http://www.yidiandianjm.com/products/1084.html">一点点奶茶抹茶系列新品上市</a>
                            <p>你听说了吗？ 一点点奶茶 出新！品！啦！ 【波霸抹茶拿铁 去冰七分糖】 推荐指数：五颗星 大杯：21元 小杯：16元 抹茶拿铁?波霸?冰淇淋，也太无敌了吧这组合，长的超级好看有木有！三层的分层也...</p>
                        </div>
                        <div class="datebox">
                            <span>04-25</span>
                            <a href="http://www.yidiandianjm.com/products/1084.html">查看详情</a>
                        </div>
                    </li><li>
                        <img src="http://www.yidiandianjm.com/uploads/160106/1-16010611031U31-lp.jpg" width="240" height="180" alt="一点点红茶拿铁介绍">
                        <div class="newbox">
                            <a href="http://www.yidiandianjm.com/products/986.html">一点点红茶拿铁介绍</a>
                            <p>红茶拿铁是 一点点奶茶产品 中的经典之作，是很多喜欢咖啡饮品顾客来一点点奶茶店都要点的热门单品，今天就来介绍下一点点奶茶店的红茶拿铁。红茶拿铁与水果拿铁类似，是由红茶提取物与牛奶以1:...</p>
                        </div>
                        <div class="datebox">
                            <span>02-08</span>
                            <a href="http://www.yidiandianjm.com/products/986.html">查看详情</a>
                        </div>
                    </li><li>
                        <img src="http://www.yidiandianjm.com/uploads/160106/1-160106105615292-lp.jpg" width="240" height="180" alt="一点点奶茶找口感系列">
                        <div class="newbox">
                            <a href="http://www.yidiandianjm.com/products/158.html">一点点奶茶找口感系列</a>
                            <p>珍珠奶茶 波霸奶茶 在一点点奶茶找口感系列中珍珠奶茶和波霸奶茶可谓其中杰出代表，Q弹爽滑的口感忍俊不禁......</p>
                        </div>
                        <div class="datebox">
                            <span>02-08</span>
                            <a href="http://www.yidiandianjm.com/products/158.html">查看详情</a>
                        </div>
                    </li><li>
                        <img src="http://www.yidiandianjm.com/uploads/170120/1-1F120095S4L7.jpg" width="240" height="180" alt="一点点奶茶找好茶系列">
                        <div class="newbox">
                            <a href="http://www.yidiandianjm.com/products/100.html">一点点奶茶找好茶系列</a>
                            <p>阿萨姆红茶 冰激凌红茶 红茶玛奇朵 茉莉绿茶......</p>
                        </div>
                        <div class="datebox">
                            <span>01-20</span>
                            <a href="http://www.yidiandianjm.com/products/100.html">查看详情</a>
                        </div>
                    </li><li>
                        <img src="http://www.yidiandianjm.com/uploads/170117/1-1F11G5505B07-lp.jpg" width="240" height="180" alt="一点点奶茶找新鲜系列">
                        <div class="newbox">
                            <a href="http://www.yidiandianjm.com/products/36.html">一点点奶茶找新鲜系列</a>
                            <p>柠檬汁 柠檬汁是新鲜柠檬经榨挤后得到的汁液，酸味极浓，伴有淡淡的苦涩和清香味道。柠檬汁含有糖类、维生素c、维生素B1、B2，烟酸、钙、磷、铁等营养成分。 金桔柠檬 金桔柠檬茶顾名思义就是金...</p>
                        </div>
                        <div class="datebox">
                            <span>01-19</span>
                            <a href="http://www.yidiandianjm.com/products/36.html">查看详情</a>
                        </div>
                    </li>

                </ul>
                <div class="main">
                    <div class="btn_pages">
                        <div class="btn-group">
                            <li>首页</li>
                            <li><a href="list_14_2.html">下一页</a></li>
                            <li><a href="list_14_7.html">末页</a></li>
                            <li><select name="sldd" style="width:36px" onchange="location.href=this.options[this.selectedIndex].value;">
                                    <option value="list_14_1.html" selected="">1</option>
                                    <option value="list_14_2.html">2</option>
                                    <option value="list_14_3.html">3</option>
                                    <option value="list_14_4.html">4</option>
                                    <option value="list_14_5.html">5</option>
                                    <option value="list_14_6.html">6</option>
                                    <option value="list_14_7.html">7</option>
                                </select></li>
                            <li><span class="pageinfo">共 <strong>7</strong>页<strong>34</strong>条</span></li>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <dd><a href="http://www.yidiandianjm.com/products/100.html">找好茶</a></dd>
                            <dd><a href="http://www.yidiandianjm.com/products/101.html">找奶茶</a></dd>
                            <dd><a href="http://www.yidiandianjm.com/products/158.html">找口感</a></dd>
                            <dd><a href="http://www.yidiandianjm.com/products/36.html">找新鲜</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><strong>店铺展示</strong></dt>
                            <dd><a href="http://www.yidiandianjm.com/dianpu/206.html">杭州一点点奶茶店</a></dd>
                            <dd><a href="http://www.yidiandianjm.com/dianpu/427.html">苏州一点点奶茶店</a></dd>
                            <dd><a href="http://www.yidiandianjm.com/dianpu/225.html">上海一点点奶茶店</a></dd>
                            <dd><a href="http://www.yidiandianjm.com/dianpu/22.html">全国奶茶分店展示</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><strong>加盟中心</strong></dt>
                            <dd><a href="http://www.yidiandianjm.com/shenqing/523.html">一点点奶茶加盟条件</a></dd>
                            <dd><a href="http://www.yidiandianjm.com/shenqing/54.html">一点点奶茶加盟流程</a></dd>
                            <dd><a href="http://www.yidiandianjm.com/shenqing/30.html">一点点奶茶加盟优势</a></dd>
                            <dd><a href="http://www.yidiandianjm.com/shenqing/29.html">一点点奶茶加盟费用</a></dd>
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
                <div class="footlo"><img src="/images/fotnavlogo.jpg" width="182" height="129" alt="一点点奶茶加盟官网"></div>
            </div>
        </div>
        <div class="ydd_con link">
        </div>
        <div class="ydd_con footer">
            @2014-2015 一点点加盟官方网站 版权所有
        </div>
        <script>
            var zhuanyuan="0042";
            var xiangmu = "一点点奶茶";
        </script>
        <script type="text/javascript" src="http://l.upqq.net/gg/0/sb_gbk.js"></script><link href="https://l.upqq.net/gg/0/smallgbook.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="https://l.upqq.net/order/easyvalidator/jquery-1.8.3.min.js"></script><script type="text/javascript" src="https://l.upqq.net/order/easyvalidator/easy_validator.pack.js"></script><script type="text/javascript" src="https://l.upqq.net/order/easyvalidator/jquery.bgiframe.min.js"></script><script type="text/javascript" src="https://l.upqq.net/gg/0/ua-parser.js"></script><script type="text/javascript">
            $(function() {

                $("#close_message").click(function(){

                    $("#cssrain").hide(500);
                })

                $(".MessageBtn").click(function(){

                    $("#cssrain").show(500);

                })
            })
        </script>
        <div class="MessageBtn">
            <a href="javascript:void(0);"><img src="https://l.upqq.net/gg/0/play.jpg" width="32" height="115"></a>
        </div>
        <div id="cssrain"><div class="close"><a id="close_message" href="javascript:void(0);" style="color:#F00; text-decoration:none">×关闭</a></div>
            <div class="message">
                <div class="message2"><div class="mse1"><span><img src="https://l.upqq.net/gg/0/fd_lb.gif"></span><p><font color="#0000FF"><script>document.write(fRandomBy(1,60));</script>39</font>分钟前<font color="#FF0000"><script>document.write(xing[a] + xin2[b]);</script>朱小姐</font>留了言,并获取了相关资料。如果你对此项目感兴趣,那么赶快留言吧!</p>
                    </div>
                    <div class="mse2">
                        <iframe style="display:none;" name="myFrame" src="about:blank"></iframe>
                        <form name="input3" method="post" action="https://l.upqq.net/order/message_save.asp" target="myFrame">
                            <input type="hidden" name="zhuanyuan" id="zhuanyuan" value="0042">
                            <input type="hidden" name="xiangmu" id="xiangmu" value="一点点奶茶">
                            <input type="hidden" name="url" id="url" value="http://www.yidiandianjm.com/products/">
                            <input type="hidden" name="title" id="title" value="一点点奶茶产品展示_奶茶店加盟产品介绍_一点点奶茶官网">
                            <input type="hidden" name="getbrowser" id="getbrowser" value="Chrome 71.0.3578.98">
                            <input type="hidden" name="getengine" id="getengine" value="WebKit 537.36">
                            <input type="hidden" name="getos" id="getos" value="Windows 10">
                            <input type="hidden" name="getdevice" id="getdevice" value="PC">
                            <table width="220" border="0" style="margin-top:10px;font-size:12px;"><tbody><tr><td width="39" height="25">姓名：</td> <td height="25" colspan="2">
                                        <script type="text/javascript">
                                            url = window.location.href;
                                            document.getElementById("url").value = url;
                                            title = document.title;
                                            document.getElementById("title").value = title;
                                            var parser = new UAParser();
                                            document.getElementById('getbrowser').value = parser.getBrowser().name+' '+parser.getBrowser().version;
                                            document.getElementById('getengine').value = parser.getEngine().name+' '+parser.getEngine().version;
                                            document.getElementById('getos').value = parser.getOS().name+' '+parser.getOS().version;
                                            if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i)))
                                            { document.getElementById('getdevice').value = 'WAP';}
                                            else { document.getElementById('getdevice').value = 'PC';}
                                        </script>

                                        <input name="name" type="text" size="15" style="height:17px;width:130px;color:#7f7f7f;" value="" reg="[\u4e00-\u9fa5]" tip="请输入正确姓名 用于寄送资料">
                                    </td>
                                </tr>
                                <tr>
                                    <td height="25">手机：</td>
                                    <td height="25" colspan="2"><input name="tel" type="text" size="15" style="height:17px;width:130px;color:#7f7f7f;" value="" reg="^1[3|4|5|7|8][0-9]\d{8}$" tip="请输入正确号码 寄送资料前需要跟您电话核实">
                                    </td></tr>
                                <tr>
                                    <td height="25">邮箱：</td>
                                    <td height="25" colspan="2"><input name="email" type="text" size="15" style="height:17px;width:130px;color:#7f7f7f;" value="" tip="选填 如123456@qq.com"></td>
                                </tr>
                                <tr>
                                    <td height="25">地址：</td>
                                    <td height="25" colspan="2"><input name="address" type="text" size="15" style="height:17px;width:130px;color:#7f7f7f;" value="" reg="[一-龥]" tip="请输入画册和资料的邮寄地址"></td>
                                </tr>
                                </tbody></table>
                            <table width="220" border="0" cellspacing="0" class="font12" style="margin-top:10px;">
                                <tbody><tr>
                                    <td width="38" valign="top">留言：</td>
                                    <td width="168">
                                        <label><textarea name="content" cols="19" rows="6" class="kuang" style="padding:5px; height:60px;">有兴趣开一个店，请寄资料或给我打电话.</textarea></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="50">&nbsp;</td>
                                    <td height="50" style="padding-left:20px;"><input type="submit" name="submit" value=" " class="subbutton" title="提交"></td>
                                </tr>
                                </tbody></table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
