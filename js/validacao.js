$(function(){
    $('div.container-contato form').submit(function(event){
        event.preventDefault();
        var botaoEnvio = $('div.container-contato form input[type=submit]');
        botaoEnvio.css('background','green');
        botaoEnvio.val('OBRIGADO! DEUS TE ABENÇOE!');
    
        // Reverter a cor e o texto após 1,5 segundo
        setTimeout(function() {
            botaoEnvio.css('background','');
            botaoEnvio.attr("value","Enviar");
            $('div.container-contato form')[0].submit();
        }, 1500); // 1500 milissegundos = 1,5 segundo
    });

    /* Máscara Telefone  */
    function mascara(o,f){
        v_obj=o
        v_fun=f
        setTimeout(execmascara(),1)
    }
    function execmascara(){
        v_obj.value=v_fun(v_obj.value)
    }
    function mtel(v){
        v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
        v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }
    function id( el ){
        return document.getElementById(el);
    }
    
    this.getElementById('telefone').onclick = function(){
        id('telefone').onkeyup = function(){
            mascara(this, mtel);
        }
    }
})