<div class="zixun-bar ly_img mt40 stair-wz_new"><div class="img-block"><img src="/frontend/images/jm-step.jpg" alt=""></div></div>
<div class="gbook" id="wyjm">
    <div class="hd">
        <span class="tit">给 <span style="font-weight: bold; color: #d71318">{{$thisarticleinfos->brandname}} </span>留言，立即获得最新加盟资料</span>
        <em>(24小时内获得企业的快速回复)</em>
        <span class="tips">(<i>*</i>为必填选项)</span>
    </div>
    <div class="bd">
        <ul>
            <form onsubmit="return false;">
                <li><span class="txt"><i>*</i>姓名</span><input type="text" name="username" id="guestname" class="input_bk" placeholder="您的真实姓名">
                <span class="sex"><label><input type="radio" value="男" name="Sex" class="ly_radio"><em>先生</em></label><label><input type="radio" name="Sex" value="女" class="ly_radio"><em>女士</em></label></span></li>
                <li><span class="txt"><i>*</i>手机</span><input type="text" class="input_bk" id="phonenum" name="iphone" placeholder="电话是与您联系的重要方式"></li>
                <li><span class="txt">地址</span><input type="text" class="input_bk" name="adr" id="bd_bp_messAddress" placeholder="与您联系的重要方式"></li>
                <li>
                    <span class="txt"><i>*</i>留言</span><textarea id="note" name="content" class="textarea_bk" placeholder="请输入您的留言内容或选择快捷留言"></textarea>
                    <div class="check_msg">
                        <div class="check_msg_tit">请填写留言或根据意向选择下列快捷留言</div>
                        <div class="check_msg_bd">
                            <ul>
                                <li><a href="javascript:;" class="no" target="_self" rel="nofollow">我加盟后，您们还会提供哪些服务？</a></li>
                                <li><a href="javascript:;" class="no" target="_self" rel="nofollow">有兴趣开一个店，请寄资料或给我打电话。</a></li>
                                <li><a href="javascript:;" class="no" target="_self" rel="nofollow">请问我这个地方有加盟商了吗？</a></li>
                                <li><a href="javascript:;" class="no" target="_self" rel="nofollow">请将详细投资方案和资料寄给本人。</a></li>
                                <li><a href="javascript:;" class="no" target="_self" rel="nofollow">初步打算加盟贵公司，请寄资料。</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <span class="txt">&nbsp;</span><input type="submit" value="提交留言" id="tj_btn" class="btn">
                </li>
            </form>
        </ul>
    </div>
</div>