<?php include_once $_SERVER['DOCUMENT_ROOT'].'/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<?php 
require_once  'config.php';
include_once  $config['views_path'] . 'heade.php';
?>

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


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Gestion des Projets - Login</title>
  </head>
<body class="hold-transition login-page">

<?php
  include_once 'config.php';
  // Logic for processing the login form should be in a separate file (e.g., login_handler.php)
  // Include the results here (e.g., error messages) if needed
?>

<div class="login-box">
  <div class="login-logo">
    <img src="/modules/shared/assets/images/logo.png" alt="Logo">
    <h1>Gestion des Projets</h1>
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>

      <form method="post" action="login_handler.php">
        <div class="form-group">
          <label for="user-type">Type d'utilisateur</label>
          <select name="user_type" class="form-control" id="user-type" autofocus>
            <option value="formateur@solicode.com">Formateur</option>
            <option value="apprenant@solicode.com">Apprenant</option>
            <option value="ResponsableFormation@solicode.com">Responsable de formation</option>
          </select>
        </div>

        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
        </div>

        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="remember-me">
            <label for="remember-me" class="custom-control-label">Se souvenir de moi</label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>