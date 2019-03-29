$(document).ready(function() {
    console.log($("#myFrame").contents());

    $("li").last().css("background-color", "#000000");

    $("#myFrame").contents().find("div").css("background-color","red");
    $('#arrayme').click(function(){
        console.log($(".one").children().toArray());
        });
});