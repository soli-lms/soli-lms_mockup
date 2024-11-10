<?php 

$current_route = $_SERVER['REQUEST_URI']; 

// Calculer le rôle de l'utilisateur
$role = "";
if (isset($_SESSION['email']) && $_SESSION['email'] === 'formateur@solicode.com') {
  $role = "formateur";
}
if (isset($_SESSION['email']) && $_SESSION['email'] === 'apprenant@solicode.com') {
  $role = "apprenant";
}
if (isset($_SESSION['email']) && $_SESSION['email'] === 'ResponsableFormation@solicode.com') {
  $role = "responsable";
}
?>

<aside class="main-sidebar sidebar-dark-info elevation-4 position-fixed">

  <!-- Logo de la marque -->
  <a href="/home.php" class="brand-link">
    <img src="/assets/images/logo.png" class="brand-image img-circle elevation-3" alt="Image de groupe">
    <span class="brand-text font-weight-light text-center h6">Solicode LMS</span>
  </a>

  <!-- Barre latérale -->
  <div class="sidebar">
    <!-- Menu latéral -->
    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
     
          <!-- Accueil -->
          <li class="nav-item">
            <a href="/home.php"
              class="nav-link <?php echo (strpos($current_route, 'home') !== false) ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>


<!-- aside menu pour chaque module -->
<?php
$jsonFilePath = $_SERVER['DOCUMENT_ROOT'] . '/data/modules.json';
if (file_exists($jsonFilePath)) {
    // Load the contents of the JSON file
    $jsonContent = file_get_contents($jsonFilePath);
    $modules = json_decode($jsonContent, true); // The second parameter `true` returns an associative array
    foreach ($modules as $module) {
        $moduleName = $module['name']; 
        $filePath = $_SERVER['DOCUMENT_ROOT'] . "/modules/$moduleName/layout/aside.php";
        // Include the corresponding aside.php file if it exists
        if (file_exists($filePath)) {
            include_once $filePath;
        } else {
            echo "$moduleName : Menu aside not found: $filePath";
        }
    }
} else {
    echo "JSON file not found!";
}
?>
        
      

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>