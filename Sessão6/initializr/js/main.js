$(document).ready(function(){
    $("tr:even").css("background-color", "orange");
    $("a").click(function(){
        event.preventDefault();
        $("#output").html("the link you clicked was going to " + $(this).attr('href'));
    });
    $("#show").click(function(){
        $(".main").show(1000);
    });
    $("#hide").click(function(){
        $(".main").hide(1000);
    })
   // console.log($("#myFrame").contents());
    //$("li").last().css("background-color","orange");
   /* $("#myFrame").contents().find("div").css("background-color","red");
    $("#arrayme").click(function(){
        console.log($(".one").children().toArray());
    });
    $(".one").find(".four").css("border","1px solid green");   */
    //console.log($('#myFrame').contents());
})
