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
        var leftMain=$("#leftMain");
        leftMain.height("auto");
        if(leftMain.html()){
            leftMain.css("background","#fff");
        }
    });
}

function englishObjectClick(){
    indexMainFadeOut();
    $("#rightMain").animate({
        "left":0
    },2000,function(){
        var rightMain=$("#rightMain");
        rightMain.height("auto");
        if(rightMain.html()){
            rightMain.css("background","#fff");
        }
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
        if(leftMain.css("left")==0){
            leftMain.css("background","#fff");
        }

        setExcerpt();

    });

    rightMain.load(english.attr("href")+" #mainWrap",function(){
        if(rightMain.css("left")==0){
            rightMain.css("background","#fff");
        }

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