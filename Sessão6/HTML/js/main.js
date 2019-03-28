    $(document).ready(function(){
  
        $('p').click(function(){
            console.log($(this));
            console.log($(this)[0].className);
            $(this).css({"background-color":"purple","font-size":"3em"})
            /*
            console.log($(this).hasClass('yellow'));
            if(($(this).hasClass('yellow'))){
                //$(this).removeClass('yellow');
                console.log("hey")
            }else{
                //$(this).addClass('yellow')
                console.log("so long")
            }
            $(this).toggleClass('yellow')*/
        });

    })