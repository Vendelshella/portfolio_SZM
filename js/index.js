$(document).ready(()=>{
    
    $("#text_deoroverde").hide();
    $("#text_starfinder").hide();

    $("#logo_deoroverde").mouseenter(()=>{
        $("#text_deoroverde").stop().fadeIn(1000);
    })
    $("#logo_deoroverde").mouseleave(() => {
        $("#text_deoroverde").stop().fadeOut(1000);
    });

    $("#logo_starfinder").mouseenter(()=>{
        $("#text_starfinder").stop().fadeIn(1000);
    })
    $("#logo_starfinder").mouseleave(() => {
        $("#text_starfinder").stop().fadeOut(1000);
    });

})