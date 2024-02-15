$(function(){
    var iconeFacebook = $('.fa-facebook-official');
    var iconeInstagram = $('.fa-instagram');
    var iconeYoutube = $('.fa-youtube-play');
    var listaMenuMobile = $('nav.mobile ul');

    $('nav.mobile').click(function(){
        //O que vai acontecer ao clicar no menu mobile
        /* Abrir com fadeIn
        if(listaMenuMobile.is(':hidden') == true){
            listaMenuMobile.fadeIn();
        } else {
            listaMenuMobile.fadeOut();
        }
        */
        var botaoMenu = $('.botao-menu-mobile i');

        if(listaMenuMobile.is(':hidden') == true){
            botaoMenu.removeClass('fa-bars');
            botaoMenu.addClass('fa-times')
            listaMenuMobile.slideToggle("slow");
        } else {
            botaoMenu.removeClass('fa-times');
            botaoMenu.addClass('fa-bars');
            listaMenuMobile.slideToggle("slow");
        }
    });

    if($('target').length > 0){
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({'scrollTop':divScroll-90},2000);
    }

    $('section.banner-principal form').submit(function(event){
        event.preventDefault();
        var botaoEnviar = $('section.banner-principal form input[type=submit]');
        var campoEmail = $('section.banner-principal form input[type=email]');
        var emailValido = campoEmail[0].checkValidity();
        if(emailValido){
            botaoEnviar.css('background','green');
            botaoEnviar.val('EMAIL ENVIADO');
    
            // Reverter a cor e o texto após 1,5 segundo
            setTimeout(function() {
                botaoEnviar.css('background','');
                botaoEnviar.attr("value","Enviar");
                $('section.banner-principal form')[0].submit();
            }, 1500); // 1500 milissegundos = 1,5 segundo
        }
    });
    $('.fa-facebook-official').mouseenter(function(){
        iconeFacebook.css('font-size','69px');
    })
    $('.fa-facebook-official').mouseleave(function(){
        iconeFacebook.css('font-size','60px');
    })
    $('.fa-instagram').mouseenter(function(){
        iconeInstagram.css('font-size','69px');
    })
    $('.fa-instagram').mouseleave(function(){
        iconeInstagram.css('font-size','60px');
    })
    $('.fa-youtube-play').mouseenter(function(){
        iconeYoutube.css('font-size','69px');
    })
    $('.fa-youtube-play').mouseleave(function(){
        iconeYoutube.css('font-size','60px');
    })
    
})