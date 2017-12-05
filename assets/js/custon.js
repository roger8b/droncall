window.confirma = function (status) {
    if (status == 1) {
        //alert("Usuário registrado com sucesso!!!");
        $.alert({
            title: 'Bem-vindo',
            content: 'Seu cadastro foi realizado com sucesso!!! <br> Click em Ok para voltar para página de Login ',
            buttons: {
                OK: function () {
                    window.location = "/droncall"
                }
            },
            animationBounce: 1.5,
        });

        return true;
    }
};

window.entrar = function (status,user,grupo) {
    if (status == 1) {
        //alert("Usuário registrado com sucesso!!!");
        $.alert({
            title: 'Solicitar ingresso no Grupo',
            content: 'Verificamos que você não esta inscrito neste grupo!!! <br> Gostaria de enviar uma solicitação para o administrador ? ',
            buttons: {
                'confirmar':{
                    text: 'Enviar',
                    btnClass: 'btn-blue',
                    action: function () {
                        $.alert ({
                            title: 'Enviado',
                            content: 'Sua solicitação foi enviada para o administrador do grupo!!!<br> Aguade a liberação da sua solicitação.',
                            buttons: {
                                OK: function () {
                                    window.location = "/droncall/painel_controle/grupo/entrar/" + user + "/" + grupo;
                            }
                        }

                        });
                    }
                },
                Sair: function () {
                    
                }
            }
        });

        return true;
    }
};


