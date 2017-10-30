
$(document).ready(function(){
    //---------Preloader-----------//
    var hellopreloader = document.getElementById("preloader");
    function fadeOutnojquery(el){
        el.style.opacity = 1;

        var interhellopreloader = setInterval(function(){
            el.style.opacity = el.style.opacity - 0.05;
            if (el.style.opacity <=0.05){
                clearInterval(interhellopreloader);
                hellopreloader.style.display = "none";
            }
        },16);}

    window.onload = function(){
        setTimeout(function(){
            fadeOutnojquery(hellopreloader);
            },1000);
    };

    //---------Preloader-----------//
//---------Video-----------//
    var video =  document.getElementById('video');
    video.addEventListener('click',function(){
        video.play();
    },false);


//---------Video-----------//

    //---------Mask-----------//
    $('input[name="phone"]').mask('+7 (999) 999-99-99');
    //---------Mask-----------//


//---------GTM-----------//
    $('form').submit(function(event) {
        var required = $(this).find('input[required]');
        var error = false;
        for (var i = 0; i <= (required.length - 1); i++) {
            if (required[i].value == '') {
                required[i].style.borderColor = 'red';
                error = true;
            } else
                required[i].style.borderColor = '#fcc500';
        }
        if (error) event.preventDefault();
        else { dataLayer.push({ 'event': 'sendaction' }); }
    });
    $('.js-phone-wrap').click(function() { dataLayer.push({ 'event': 'sendaction' }); });
    $('.js-email-link').click(function() { dataLayer.push({ 'event': 'sendaction' }); });
    //---------GTM-----------//
});

