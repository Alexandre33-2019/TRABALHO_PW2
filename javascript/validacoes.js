// $(function(){
//     $('#login').submit(function(){
//         var obj = this;
//         var form = $(obj);
//         var dados = new FormData(obj);
//         $.ajax({
//             url: form.attr('action'),
//             type: form.attr('method'),
//             data: dados,
//             processData: false,
//             cache: false,
//             contentType: false,
//             success: function(data){
//                 if(data == "ErroEmail"){
//                     var titulo = document.getElementById("user");
//                     titulo.className = "form-control col-8 is-invalid";
//                     var exibirErro = document.getElementById("userErro");
//                     exibirErro.className = "invalid-feedback d-block col-8";
//                     titulo.focus();
//                 }
//                 else{
//                     var titulo = document.getElementById("user");
//                     titulo.className = "form-control col-8";
//                     var exibirErro = document.getElementById("userErro");
//                     exibirErro.className = "invalid-feedback d-none col-8";
//                 }
//                 if(data == "ErroSenha"){
//                     var titulo = document.getElementById("pass");
//                     titulo.className = "form-control is-invalid col-8";
//                     var exibirErro = document.getElementById("passErro");
//                     exibirErro.className = "invalid-feedback d-block col-8";
//                     titulo.focus();
//                 }
//                 else{
//                     var titulo = document.getElementById("pass");
//                     titulo.className = "form-control col-8";
//                     var exibirErro = document.getElementById("passErro");
//                     exibirErro.className = "invalid-feedback d-none col-8";                    
//                 }
//                 if(data == "FalhaLogin"){
//                     var titulo = document.getElementById("loginErro");
//                     titulo.className = "alert alert-danger mx-auto text-center d-block col-5";
//                 }
//                 else{
//                     var titulo = document.getElementById("loginErro");
//                     titulo.className = "alert alert-danger mx-auto text-center d-none col-5";
//                 }
//                 if(data == "SucessoCliente"){
//                     window.location.replace("view/Home");
//                 }
//                 if(data == "SucessoADM"){
//                     window.location.replace("../../application/view/Administracao");
//                 }
//             },//success
//         });//ajax
//         return false;
//     });//function de dentro
// });//function de fora

$(function () {
    $('#login').submit(function () {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                if (data == "ErroUser") {
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Usuário ou Email vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroPass") {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'error',
                        title: 'Campo Senha Obrigatório!'
                    })
                }
                if (data == "Sucesso") {
                    // const Toast = Swal.mixin({
                    //     toast: true,
                    //     position: 'top-end',
                    //     showConfirmButton: false,
                    //     timer: 3000,
                    //     timerProgressBar: true,
                    //     onOpen: (toast) => {
                    //       toast.addEventListener('mouseenter', Swal.stopTimer)
                    //       toast.addEventListener('mouseleave', Swal.resumeTimer)
                    //     }
                    //   })

                    //   Toast.fire({
                    //     icon: 'success',
                    //     title: 'Login realizado com sucesso!'
                    //   })
                    Swal.fire({
                        title: 'Sucesso!',
                        text: 'Login realizado com sucesso!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                }
            },//success
        });//ajax
        return false;

    });
});

$(function () {
    $('#cadastro').submit(function () {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                if (data == "ErroNome") {
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Nome Vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }


                if (data == "ErroCpf") {
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo CPF Vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroCpfExiste") {
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'CPF já está cadastrado!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }



                if (data == "ErroEmail") {
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo email obrigatorio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroEmailExiste") {
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Email já está cadastrado!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }



                if (data == "ErroUsuário") {
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo usuario obrigatorio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroUsuarioExiste") {
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Usuário já está cadastrado!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }


                
                if (data == "ErroSenha") {
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo senha obrigatorio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroConfirmarSenha") {
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo confirmar senha obrigatorio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroSenhaNaoConfere") {
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Senhas não conferem!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroBanco") {
                    Swal.fire({
                        title: 'Erro ao cadastrar!',
                        text: 'Não foi possivel efetuar o cadastro!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "Sucesso") {
                    Swal.fire({
                        title: 'Cadastro realizado com sucesso!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            window.location.replace("../view/login.php");
                        }
                    })
                }
            },//success
        });//ajax
        return false;
    });
});