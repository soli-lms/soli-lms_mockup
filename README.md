# Soli-LMS Mockup: Module `pkg_rh`

### Branche: `develop_pkg_rh`

Branche dédiée au développement de `pkg_rh` et ses dépendances, non fusionnable dans `develop` ou `main`. Pour mettre à jour la maquette principale, créer une pull request depuis la branche `develop` intégrant tous les modules.

### Clonage

Deux options pour cloner :

1. Clone complet avec sous-modules :
   ```bash
   git clone --recurse-submodules -b develop_pkg_rh --single-branch https://github.com/soli-lms/soli-lms_mockup.git develop_mockup_pkg_rh
   ```

2. Clone simple avec initialisation des sous-modules :
   ```bash
   git clone -b develop_pkg_rh --single-branch https://github.com/soli-lms/soli-lms_mockup.git develop_mockup_pkg_rh
   git submodule init
   git submodule update
   ```

### Installation

```bash
npm install
```

Lancer le serveur PHP intégré :
```bash
php -S localhost:8000 -d display_errors=On
```

### Trouver une icône

- [FontAwesome](https://fontawesome.com/v5/search?o=r&m=free)