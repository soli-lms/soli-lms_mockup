<!DOCTYPE html>
<html lang="fr">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/layouts/heade.php' ?>

<?php
if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email === 'apprenant@solicode.com') {
        session_start();
        $_SESSION['email'] = $email;
        header('Location: /GestionBriefProjet/Apprenant/index.php');
        exit();
    }elseif($email === 'formateur@solicode.com'){
        session_start();
        $_SESSION['email'] = $email;
        header('Location: /home.php');
        exit();
    }elseif($email === 'ResponsableFormation@solicode.com'){
        session_start();
        $_SESSION['email'] = $email;
        header('Location: /GestionCompetences/Competences/index.php');
        exit();
    }else{
        header('refresh: 0');
    }

}
?>

<body class="hold-transition login-page">
<div class="login-box">
        <div class="login-logo">
            <img src="./assets/images/logo.png" alt="" srcset="" width="90px">
            <h4>Gestion des Projet</h4>
        </div>
        <!-- /.login-logo -->
        

        <!-- /.login-box-body -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>

                <form method="post" action="" >
                    <div class="input-group mb-3">
                        
                        <select name="email" class="form-control" autofocus>
  <option value="formateur@solicode.com">Formateur</option>
  <option value="apprenant@solicode.com">Apprenant</option>
  <option value="ResponsableFormation@solicode.com">Résponsable de formation</option>
</select>

                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" placeholder="Mot de passe" class="form-control" value="123456789">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-7">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">Se souvenir de moi</label>
                            </div>
                        </div>

                        <div class="col-5">
                            <button  type="submit" class="btn btn-info btn-block" name="login">connecter</button>
                        </div>

                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>

    </div>
    <!-- /.login-box -->
</body>

</html>