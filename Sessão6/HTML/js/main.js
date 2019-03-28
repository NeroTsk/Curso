    $(document).ready(function(){
        $('img').click(function(){
            console.log($(this));
            console.log($('a').last().attr('href'));
            console.log($(this).attr('src'))
        });
        $('nav a[href^="'+location.pathname.split('HTML/')[1]+'"]').addClass('active')
        $('p').click(function(){
            console.log($(this));
            console.log($(this)[0].className);
        $(this).css({"background-color":"purple","font-size":"3em"});
        });
        $('#myInput').change(function(){
            console.log($(this).val());
            console.log($('#checkBx'))
            if($(this).val()== 'yes'){
                $('#checkBx').prop("checked", true);
            }else{
                $('#checkBx').prop("checked", false);
            }
        });
            /*
            console.log($(this).hasClass('yellow'));
            if(($(th is).hasClass('yellow'))){
                //$(this).removeClass('yellow');
                console.log("hey")
            }else{
                //$(this).addClass('yellow')
                console.log("so long")
            }
            $(this).toggleClass('yellow')*/
    })