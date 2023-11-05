<section id="contentReturn" class="contentReturn">
    <section id="cardContentPage" class="cardContentPage">
        <h1 class="titleLogin">Crie sua Conta Gratuitamente e Rápido</h1>
        <p class="descriptionPage">Crie sua conta e entre para aproveitar todos os nossos recursos.</p>

        <form name="formLogin" id="formLogin" class="formLogin" action="http://localhost/crud_object_oriented/app/Php/Insert.php" method="POST" onsubmit="validationForm();">
            <span id="errorGeneral" class="spanMessage"></span>
            <label for="user_name">Nome de Usuário <span>*</span></label>
            <input type="text" name="user_name" id="user_name" placeholder="Digite o seu Nome de Usuário">
            <span id="errorUserName" class="spanMessage"></span>

            <label for="email_user">Endereço de E-mail <span>*</span></label>
            <input type="email" name="email_user" id="email_user" placeholder="Digite o seu Endereço de E-mail">
            <span id="errorEmailUser" class="spanMessage"></span>

            <label for="cargs_user">Qual cargo deseja Optar?</label>
            <select name="cargs_user" id="cargs_user">
                <option value="client">Usuário Cliente</option>
                <option value="admin">Usuário Administrador</option>
            </select><!-- end select cargs_user -->

            <label for="image_user">URL para imagem de Pefil <span>*</span></label>
            <input type="text" name="image_user" id="image_user" placeholder="Cole a URL para a sua imagem de Perfil">
            <span id="errorImage" class="spanMessage"></span>

            <label for="password_user">Senha de Registro <span>*</span></label>
            <input type="password" name="password_user" id="password_user" placeholder="Digite a sua senha de Registro">
            <span id="errorPassword" class="spanMessage"></span>


            <label for="confirm_password">Confirmar Senha <span>*</span></label>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirme a sua Senha de Registro">
            <span id="errorConfirmPassword" class="spanMessage"></span>

            <input type="submit" name="btn_action" id="btn_action" value="Fazer Cadastro">

            <p class="titleForm">Já possui uma Conta? <a href="http://localhost/crud_object_oriented/app/Pages/Login.php">Fazer Login</a></p>
        </form><!-- end form formLogin -->
    </section><!-- end class cardContentPage -->
</section><!-- end class contentReturn -->