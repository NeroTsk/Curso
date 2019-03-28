    $(document).ready(function(){
  
        $('p').click(function(){
            console.log($(this).hasClass('yellow'));
            if(($(this).hasClass('yellow'))){
                //$(this).removeClass('yellow');
                console.log("hey")
            }else{
                //$(this).addClass('yellow')
                console.log("so long")
            }
            $(this).toggleClass('yellow')
        });

    })