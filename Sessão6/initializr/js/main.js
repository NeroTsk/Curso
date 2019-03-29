$(document).ready(function(){

    $('#btnCotent').click(function(){
        $("#output").load('temp.html');
    });




    /*
    $("tr:even").css("background-color", "orange");
    $("a").click(function(){
        event.preventDefault();
        $("#output").html("the link you clicked was going to " + $(this).attr('href'));
    });
    $("#show").click(function(){
        $(".main").fadein(1000);
    });
    $("#hide").click(function(){
        $(".main").fadeout(1000);
    });
    $(".box").click(function(){
        $(this).children().animate({
            opacity: 0.55,
            left:"+=200",
            width: "150%",
            fontSize: "24px"
            },1000,function(){
                $(this).parent().css({"background-color":"#000000","color":"#ffffff"});
                $(this).animate({left:"-=200",fontSize:"12px"});
                });
    });
    $(".box1").click(function(){
        $(this).children().slideToggle("slow", function(){

        });
    });
    */
   // console.log($("#myFrame").contents());
    //$("li").last().css("background-color","orange");
   /* $("#myFrame").contents().find("div").css("background-color","red");
    $("#arrayme").click(function(){
        console.log($(".one").children().toArray());
    });
    $(".one").find(".four").css("border","1px solid green");   */
    //console.log($('#myFrame').contents());
})
