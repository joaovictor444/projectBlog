<?php
    include __DIR__.'/Connection.php';
    if(isset($_POST['btn_verify'])){
        $user_name_table        = $_POST ['user_name'];
        $email_user_table       = $_POST ['email_user'];
        $password_user_table    = $_POST ['password_user'];
        $confirm_password_table = $_POST ['confirm_password'];

        $password_encrypt = md5($password_user_table);
        try{
            $verifycli = $dbConnect->prepare("SELECT id_cli, user_name, email_user, password_hash FROM user_register");
            $verifycli->execute();
            while($rowResulted = $verifycli->fetch(PDO::FETCH_ASSOC)){
                extract($rowResulted);
                $id_cli = $rowResulted['id_cli'];
                $_SESSION['id_cli_session'] = $id_cli;
                $user_name = $rowResulted['user_name'];
                $email_user = $rowResulted['email_user'];
                $password_hash = $rowResulted['password_hash'];
                if($user_name_table == $user_name && $email_user_table == $email_user && $password_hash == $password_encrypt){
                    header("Location: http://localhost/crud_object_oriented/app/Pages/Main.php");
                }else{
                    echo("<script>window.alert('Analisamos em nossa Tabela de Registro que não possui nenhum Registro com as Credênciais que foram passadas pelo formulário. Tente Novamente, ou faça cadastro de uma conta para você'); window.location.href = 'http://localhost/crud_object_oriented/app/Pages/Login.php'; </script>");
                }
            }
        }catch(PDOException $e){
            echo("Algo deu errado ao tentar verificar o usuário dentro de nossa Tabela de Registros: " . $e->getMessage());
        }
    }else{
        echo("<script>window.alert('Para ter acesso a todos os nossos conteúdos, é necessário você fazer um Login em nossa Conta'); window.location.href = 'http://localhost/crud_object_oriented/app/Pages/Login.php';</script>");
    }
?>