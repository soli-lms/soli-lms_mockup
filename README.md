# Soli-LMS Mockup: Module `pkg_autorisation`

### Branche: `develop_pkg_autorisation`

Branche dédiée au développement de `pkg_autorisation` et ses dépendances, non fusionnable dans `develop` ou `main`. Pour mettre à jour la maquette principale, créer une pull request depuis la branche `develop` intégrant tous les modules.

### Clonage

Deux options pour cloner :

1. Clone complet avec sous-modules :
   ```bash
   git clone --recurse-submodules -b develop_pkg_autorisation --single-branch https://github.com/soli-lms/soli-lms_mockup.git develop_mockup_pkg_autorisation
   ```

2. Clone simple avec initialisation des sous-modules :
   ```bash
   git clone -b develop_pkg_autorisation --single-branch https://github.com/soli-lms/soli-lms_mockup.git develop_mockup_pkg_autorisation
   git submodule init
   git submodule update
   ```

### Après le clonage

Pour configurer les sous-modules sur la branche `develop_feature1`, suivez ces étapes :

```bash
cd module/pkg_autorisation
git checkout develop_feature1
``` 

Ensuite, revenez au répertoire principal pour ajouter et valider cette configuration du sous-module :

```bash
cd ../..
git add module/pkg_autorisation
git commit -m "Mise à jour du sous-module pkg_autorisation vers la branche develop_feature1"
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