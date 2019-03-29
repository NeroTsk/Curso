
    
$(document).ready(function(){
    //console.log($("#myFrame").contents());
    $("li").last().css("background-color","orange");
   /* $("#myFrame").contents().find("div").css("background-color","red");
    $("#arrayme").click(function(){
        console.log($(".one").children().toArray());
    });
    $(".one").find(".four").css("border","1px solid green");   */
    //console.log($('#myFrame').contents());
    $("li").last().css("background-color","red");
    $("#myFrame").contents().find("div").css("background-color","#000000");
    $("#myFrame").click(function(){
        console.log($(".one").children()).toArray();
    })
});
