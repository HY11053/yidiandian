/**
 * Created by liang on 2016/8/22.
 */
$(function(){
    $(".zonghe-nav li").click(function(){
        $(this).children(".zonghe-con").css("display","block");
        $(this).siblings().children(".zonghe-con").css("display","none");
        $(this).children("a").attr("class","zonghe-nav-moren");
        $(this).siblings().children("a").removeAttr("class","zonghe-nav-moren");
    })
})

$(function(){

    $("#content img").addClass("img-responsive center-block").css('height','auto').css('border-radius','5px');


})
