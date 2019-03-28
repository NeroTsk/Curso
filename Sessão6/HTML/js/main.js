    $(document).ready(function(){
        console.log(location.pathname.split('HTML/')[1]);
        $('nav a[href^="'+location.pathname.split('HTML/')[1]+'"]').addClass('active');

    })