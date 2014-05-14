/**
 * Created with JetBrains PhpStorm.
 * User: ty
 * Date: 14-5-12
 * Time: 下午5:22
 * To change this template use File | Settings | File Templates.
 */

function chineseObjectClick(){
    $("#leftMain").animate({
        "left":0
    },3000,function(){
        $("#leftMain").height("auto");
    });
}

function englishObjectClick(){
    $("#rightMain").animate({
        "left":0
    },3000,function(){
        $("#rightMain").height("auto");
    });
}

$(document).ready(function(){
    $("#leftMain").load("http://localhost/typochina/chinese");

    $("#rightMain").load("http://localhost/typochina/chinese");

    $("#chinese").click(function(){
        chineseObjectClick();

        return false;
    });

    $("#english").click(function(){
        englishObjectClick();

        return false;
    });
});