/**
 * Created with JetBrains PhpStorm.
 * User: ty
 * Date: 14-5-12
 * Time: 下午5:22
 * To change this template use File | Settings | File Templates.
 */
function indexMainFadeOut(){
    $("#indexMain").fadeOut(2000);
}
function chineseObjectClick(){
    indexMainFadeOut();
    var leftMain=$("#leftMain");
    leftMain.animate({
        "left":0
    },2000,function(){

        //如果是还在loading状态，不需要设置高度
        if(leftMain.find(".loading").length==0){
            leftMain.height("auto");
        }
        history.pushState({},"","chinese");
    });
}

function englishObjectClick(){
    indexMainFadeOut();
    var rightMain=$("#rightMain");
    rightMain.animate({
        "left":0
    },2000,function(){
        if(rightMain.find(".loading").length==0){
            rightMain.height("auto");
        }
        history.pushState({},"","english");
    });
}
function setExcerpt(){
    $(".postExcerpt").ellipsis({
        row: 2
    });

    $(".topPost img").load(function(){
        $(".topPostExcerpt").ellipsis({
            row: Math.floor(($(".topPostDetail").height()-50)/30)
        });
    });
}
$(document).ready(function(){
    var leftMain=$("#leftMain");
    var rightMain=$("#rightMain");
    var chinese=$("#chinese");
    var english=$("#english");
    leftMain.load(chinese.attr("href")+" #mainWrap",function(){

        //如果section已经在主屏幕了，需要设置高度
        if(leftMain.css("left")==0){
            leftMain.height("auto");
        }
        $("#leftMain .tagList a").html( function(){var s=$(this).attr("title").replace(/[^0-9]/ig, "");
            return $(this).html()+":&nbsp;"+parseInt(s);}).removeAttr("title");
        setExcerpt();
    });

    rightMain.load(english.attr("href")+" #mainWrap",function(){
        if(rightMain.css("left")==0){
            rightMain.height("auto");
        }
        $("#rightMain .tagList a").html( function(){var s=$(this).attr("title").replace(/[^0-9]/ig, "");
            return $(this).html()+":&nbsp;"+parseInt(s);}).removeAttr("title");
        setExcerpt();
    });

    chinese.click(function(){
        chineseObjectClick();

        return false;
    });

    english.click(function(){
        englishObjectClick();

        return false;
    });
});