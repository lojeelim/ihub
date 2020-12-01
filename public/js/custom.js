$(document).ready(function(){
        $('.checkfeel').click(function(){
            var text = "";
            $('.checkfeel:checked').each(function(){
                text+=$(this).val()+ ', ';
            });
            text=text.substring(0,text.length-1);
            $("#textfeeldisplay").val(text);
        });
    });

     $("#categories").change(function () {
        var selectedValue = $(this).text();
        $("#keywords").text(" About " + $(this).find("option:selected").attr("value"))
    });
    
    $(window).on("load",function(){
        $.fx.speeds.xslow = 1000;
        $(".loading").fadeOut("xslow");
    });
    
    // $(document).ready(function(){
    //     $("form").submit(function(){
    //         var validatefeeling ="Check at least one checkbox";
    //         if($('input:checkbox').filter(':checked').length < 1){
    //              $("#validate").text(validatefeeling);
    //             return false;
    //         }
    //     });
    // });

