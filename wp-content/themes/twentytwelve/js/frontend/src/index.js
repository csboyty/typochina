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
    $("#leftMain").animate({
        "left":0
    },2000,function(){
        $("#leftMain").height("auto");
        if($("#leftMain").html()){
            $("#leftMain").css("background","#fff");
        }

        $("body").css("max-width","1336px");
    });
}

function englishObjectClick(){
    indexMainFadeOut();
    $("#rightMain").animate({
        "left":0
    },2000,function(){
        $("#rightMain").height("auto");
        if($("#rightMain").html()){
            $("#rightMain").css("background","#fff");
        }

        $("body").css("max-width","1336px");
    });
}

$(document).ready(function(){
    $("#leftMain").load($("#chinese").attr("href"),function(){
        if($("#leftMain").css("left")==0){
            $("#leftMain").css("background","#fff");
        }
    });

    $("#rightMain").load($("#english").attr("href"),function(){
        if($("#rightMain").css("left")==0){
            $("#rightMain").css("background","#fff");
        }
    });

    $("#chinese").click(function(){
        chineseObjectClick();

        return false;
    });

    $("#english").click(function(){
        englishObjectClick();

        return false;
    });
});