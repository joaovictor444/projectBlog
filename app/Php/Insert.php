<?php
    include __DIR__.'/Connection.php';
    if(isset($_POST['btn_action'])){
        $user_name        = $_POST ['user_name'];
        $email_user       = $_POST ['email_user'];
        $cargs_user       = $_POST ['cargs_user'];
        $image_user       = $_POST ['image_user'];
        $password_user    = $_POST ['password_user'];
        $confirm_password = $_POST ['confirm_password'];

        $password_hash = md5($password_user);
        try{
            $intbl = $dbConnect->prepare("INSERT INTO user_register (user_name, email_user, cargs_user, image_user, password_hash) VALUES (:user_name, :email_user, :cargs_user, :image_user, :password_hash)");
            $intbl->bindParam(':user_name', $user_name);
            $intbl->bindParam(':email_user', $email_user);
            $intbl->bindParam(':cargs_user', $cargs_user);
            $intbl->bindParam(':image_user', $image_user);
            $intbl->bindParam(':password_hash', $password_hash);
            $intbl->execute();

            if(($intbl == true) && ($intbl->rowCount() != 0)){
                header("Location: http://localhost/crud_object_oriented/app/Pages/Login.php");
            }
        }catch(PDOException $e){
            echo("Algo deu errado ao tentar cadastrar o usuário: " . $e->getMessage());
        }
    }else{
        echo("<script>window.alert('Para ter acesso a todos os nossos conteúdos, é necessário você fazer um Login em nossa Conta'); window.location.href = 'http://localhost/crud_object_oriented/app/Pages/Login.php';</script>");
    }
?>