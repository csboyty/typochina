/**
 * Created with JetBrains WebStorm.
 * User: ty
 * Date: 14-5-7
 * Time: 上午9:51
 * To change this template use File | Settings | File Templates.
 */

$(document).ready(function(){
    $(".topPostExcerpt").ellipsis({
        row: 5
    });
    $(".postExcerpt").ellipsis({
        row: 2
    });


    $("#tagList a").html( function(){var s=$(this).attr("title").replace(/[^0-9]/ig, "");
        return $(this).html()+":&nbsp;"+parseInt(s);}).removeAttr("title");

    $("#returnTop").click(function(){
        $("html, body").animate({scrollTop:0}, 'slow');
        return false;
    });

    $(".searchExcerpt").html(function(index,html){
        var indexPre=html.indexOf("<em>");
        var indexNex=html.indexOf("</em>");
        var string="";
        if(indexPre-10<0){
            string=html.substring(0,indexNex+10)+"...";
        }else{
            string="..."+html.substring(indexPre-10,indexNex+10)+"...";
        }
        return string;
    });
});