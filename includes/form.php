<section id="contentReturn" class="contentReturn">
    <section id="cardContentPage" class="cardContentPage">
        <h1 class="titleLogin">Faça login com a sua Conta!</h1>
        <p class="descriptionPage">Entre com sua conta e fique por dentro de todas as Novidades.</p>

        <form name="formLogin" id="formLogin" class="formLogin" action="http://localhost/crud_object_oriented/app/Php/Verify.php" method="POST" onsubmit="validationForm();">
            <span id="errorGeneral" class="spanMessage spanMessageOff"></span>
            <label for="user_name">Nome de Usuário <span>*</span></label>
            <input type="text" name="user_name" id="user_name" placeholder="Digite o seu Nome de Usuário">
            <span id="errorUserName" class="spanMessage spanMessageOff"></span>

            <label for="email_user">Endereço de E-mail <span>*</span></label>
            <input type="text" name="email_user" id="email_user" placeholder="Digite o seu Endereço de E-mail">
            <span id="errorEmailUser" class="spanMessage spanMessageOff"></span>

            <label for="password_user">Senha de Registro <span>*</span></label>
            <input type="password" name="password_user" id="password_user" placeholder="Digite a sua senha de Registro">
            <span id="errorPassword" class="spanMessage spanMessageOff"></span>


            <label for="confirm_password">Confirmar Senha <span>*</span></label>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirme a sua Senha de Registro">
            <span id="errorConfirmPassword" class="spanMessage spanMessageOff"></span>

            <input type="submit" name="btn_verify" id="btn_verify" value="Realizar Login">

            <p class="titleForm">Ainda não Possui uma conta? <a href="http://localhost/crud_object_oriented/app/Pages/Register.php">Crie uma Agora!</a></p>
            <p class="titleForm">Esqueceu a sua Senha? Clique em <a href="#">Redefinir Senha</a></p>
        </form><!-- end form formLogin -->
    </section><!-- end class cardContentPage -->
</section><!-- end class contentReturn -->