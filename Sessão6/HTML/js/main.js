    $(document).ready(function(){
        $('a').click(function(t){
            t.preventDefault();
            $('#output').load($(this).attr("href"));
            console.log($(this).attr("href"));
    })
})