var btnSubmit = document.querySelector('input[type=submit]');
btnSubmit = document.addEventListener("submit", (e) => {
    var userName = document.getElementById('user_name').value;
    var emailUser = document.getElementById('email_user').value;
    var imageUser = document.getElementById('image_user').value;
    var passwordUser = document.getElementById('password_user').value;
    var confirmPassword = document.getElementById('confirm_password').value;

    const errorGeneral = document.getElementById('errorGeneral');
    const erroUserName = document.getElementById('errorUserName');
    const errorEmailUser = document.getElementById('errorEmailUser');
    const errorImage = document.getElementById('errorImage');
    const errorPassword = document.getElementById('errorPassword');
    const errorConfirmPassword = document.getElementById('errorConfirmPassword');

    if(userName == "" && emailUser == "" && passwordUser == "" && confirmPassword == ""){
        errorGeneral.innerHTML = "<p style='color: #ffffff; font-size: 1rem; background-color: #f01; width: 95%; padding: 7px; text-align: center; margin: 10px 0; '>É necessário que todos os campos sejam preenchidos...</p>";
        e.preventDefault();
    }else if(userName == ""){
        erroUserName.innerHTML = "<p style='color: #ffffff; font-size: 1rem; background-color: #f01; width: 95%; padding: 7px; text-align: center; margin: 10px 0; '>O campo de Nome de Usuário não foi preenchido...</p>";
        e.preventDefault();
    }else if(userName.length < 6){
        erroUserName.innerHTML = "<p style='color: #ffffff; font-size: 1rem; background-color: #f01; width: 95%; padding: 7px; text-align: center; margin: 10px 0; '>O campo de Nome de Usuário deve ter no mínimo 8 Caractérs</p>";
        e.preventDefault();
    }else if(emailUser == ""){
        errorEmailUser.innerHTML = "<p style='color: #ffffff; font-size: 1rem; background-color: #f01; width: 95%; padding: 7px; text-align: center; margin: 10px 0; '>O campo de Endereço de E-mail não foi preenchido...</p>";
        e.preventDefault();
    }else if(emailUser. indexOf("@") === -1){
        errorEmailUser.innerHTML = "<p style='color: #ffffff; font-size: 1rem; background-color: #f01; width: 95%; padding: 7px; text-align: center; margin: 10px 0; '>O campo de Endereço de E-mail deve ter o símbolo '@'</p>";
        e.preventDefault();
    }else if(imageUser == ""){
        errorImage.innerHTML = "<p style='color: #ffffff; font-size: 1rem; background-color: #f01; width: 95%; padding: 7px; text-align: center; margin: 10px 0; '>O campo Imagem de Perfil não foi preenchido...</p>";
        e.preventDefault();
    }else if(passwordUser == ""){
        errorPassword.innerHTML = "<p style='color: #ffffff; font-size: 1rem; background-color: #f01; width: 95%; padding: 7px; text-align: center; margin: 10px 0; '>O campo de Senha de Registro não foi preenchido...</p>";
        e.preventDefault();
    }else if(passwordUser.length < 8){
        errorPassword.innerHTML = "<p style='color: #ffffff; font-size: 1rem; background-color: #f01; width: 95%; padding: 7px; text-align: center; margin: 10px 0; '>O campo de Senha de Registro deve ter no mínimo 8 Caractérs</p>";
        e.preventDefault();
    }else if(confirmPassword == ""){
        errorConfirmPassword.innerHTML = "<p style='color: #ffffff; font-size: 1rem; background-color: #f01; width: 95%; padding: 7px; text-align: center; margin: 10px 0; '>O campo de Confirmação de Registro não foi preenchido...</p>";
        e.preventDefault();
    }else if(confirmPassword.length < 8){
        errorConfirmPassword.innerHTML = "<p style='color: #ffffff; font-size: 1rem; background-color: #f01; width: 95%; padding: 7px; text-align: center; margin: 10px 0; '>O campo de Confirmação de Registro deve ter no mínimo 8 Caractérs</p>";
        e.preventDefault();
    }else if(confirmPassword != passwordUser){
        errorConfirmPassword.innerHTML = "<p style='color: #ffffff; font-size: 1rem; background-color: #f01; width: 95%; padding: 7px; text-align: center; margin: 10px 0; '>As duas Senhas passadas no formulário não são iguais...</p>";
        e.preventDefault();
    }
});