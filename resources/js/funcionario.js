$(document).ready(function() {
    $('#entrar').click(function() {
       if ($('#cargo').val() === '' || $('#nif').val() === '') {
           Swal.fire({
               icon: 'error',
               title: 'Erro',
               text: 'Por favor, preencha todos os campos.',
           });
           return;
       }
    
       var letras = $('#nif').val().length;
       console.log(letras);
       if (letras < 6) {
           Swal.fire({
               icon: 'error',
               title: 'Erro',
               text: 'O NIF deve ter pelo menos 6 caracteres.',
           });
           return;
       }

       $.ajax({
           url: '../api/login_funcionario_login',
           type: 'POST',
              data: {
                cargo: $('#cargo').val(),
                nif: $('#nif').val()
              },    
            success: function(response) {
                if (response.erro == 'n') {

                    alert('token do usuário: ' + response.token);
                    $.cookie('token', response.token, { expires: 7});
                    $.cookie('usuario_id', response.usuario_id, { expires: 7});
                    setTimeout(function() {
                        window.location.href = '../home';
                    }, 3000);
                } else {
                    swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: response.mensagem
                    });
                }
            
   
            },

        })

    });
    

});