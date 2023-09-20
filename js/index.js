$(document).ready(()=>{
    
    $("#text_deoroverde").hide();
    $("#text_starfinder").hide();

    $("#logo_deoroverde").mouseenter(()=>{
        $("#text_deoroverde").stop().fadeIn(1000);
        $("#logo_deoroverde").stop().css({backgroundColor:"rgb(127, 197, 197)"});
    })
    $("#logo_deoroverde").mouseleave(() => {
        $("#text_deoroverde").stop().fadeOut(1000);
        $("#logo_deoroverde").stop().css({backgroundColor:""});
    });

    $("#logo_starfinder").mouseenter(()=>{
        $("#text_starfinder").stop().fadeIn(1000);
        $("#logo_starfinder").stop().css({backgroundColor:"rgb(127, 197, 197)"});

    })
    $("#logo_starfinder").mouseleave(() => {
        $("#text_starfinder").stop().fadeOut(1000);
        $("#logo_starfinder").stop().css({backgroundColor:""});
    });

})