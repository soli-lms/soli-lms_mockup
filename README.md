# Soli-LMS Mockup: Module `pkg_creation_projets`

<<<<<<< HEAD
### Branche: `develop_pkg_creation_projets`

Branche dédiée au développement de `pkg_creation_projets` et ses dépendances, non fusionnable dans `develop` ou `main`. Pour mettre à jour la maquette principale, créer une pull request depuis la branche `develop` intégrant tous les modules.

### Clonage

Deux options pour cloner :

1. Clone complet avec sous-modules :
   ```bash
   git clone --recurse-submodules -b develop_pkg_creation_projets --single-branch https://github.com/soli-lms/soli-lms_mockup.git develop_mockup_pkg_creation_projets
   ```

2. Clone simple avec initialisation des sous-modules :
   ```bash
   git clone -b develop_pkg_creation_projets --single-branch https://github.com/soli-lms/soli-lms_mockup.git develop_mockup_pkg_creation_projets
   git submodule init
   git submodule update
   ```

### Après le clonage

Pour configurer les sous-modules sur la branche `develop_feature1`, suivez ces étapes :

=======

## Installation de maquette


- Clonnage avec les modules 

````bash
git clone --recurse-submodules <URL-du-depot>
````

- Installer les Dépendances
  
>>>>>>> 0070b0a5560387987ed3be68fff0564e5a84ad97
```bash
cd module/pkg_creation_projets
git checkout develop_feature1
``` 

Ensuite, revenez au répertoire principal pour ajouter et valider cette configuration du sous-module :

```bash
cd ../..
git add module/pkg_creation_projets
git commit -m "Mise à jour du sous-module pkg_creation_projets vers la branche develop_feature1"
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

<<<<<<< HEAD
- [FontAwesome](https://fontawesome.com/v5/search?o=r&m=free)
=======
## Icone 

-[https://fontawesome.com/v5/search?o=r&m=free](https://fontawesome.com/v5/search?o=r&m=free)

- prompt 
  - fontawesome v5, proposer icone pour : Gestion de projet


## Règle 

- CSS et JS
  - Chaque module pour avoit sont propore fichier CSS e JS
  - On peut pas importer des bibliothèque dans un modue 
    - Il doit être importer globalement et sans sans CDN

- Vérification 
  - Recherche sur Vs code 
    - <link
    - <link rel
    - <script src

## Bug 

- Le sous-menu de module doit être active pendant la navigation dans un module


## Mettre à jour un module 

Initialiser et mettre à jour les sous-modules : Si vous avez cloné un dépôt qui utilise des sous-modules, exécutez les commandes suivantes pour initialiser et télécharger le code des sous-modules :

````bash
git submodule init
git submodule update
````

## Insertion des modules 

````bash
# Ajouter ModuleA en tant que sous-module
git submodule add https://github.com/soli-lms/pkg_shared_mockup.git modules/shared

git submodule add https://github.com/soli-lms/pkg_rh_mockup.git modules/pkg_rh
git submodule add https://github.com/soli-lms/pkg_competences_mockup.git modules/pkg_competences
git submodule add https://github.com/soli-lms/pkg_creation_projets_mockup.git modules/pkg_creation_projets
git submodule add https://github.com/soli-lms/pkg_realisation_projets_mockup.git modules/pkg_realisation_projets
git submodule add https://github.com/soli-lms/pkg_validations_mockup.git modules/pkg_validations
git submodule add https://github.com/soli-lms/pkg_suivi_mockup.git modules/pkg_suivi
git submodule add https://github.com/soli-lms/pkg_autorisation_mockup.git modules/pkg_autorisation


````


## à Ajouter dans Lab_git 

Supprimer un sous module 

````bash
# Étape 1 : Supprimer l'entrée du sous-module dans le fichier .gitmodules
# Cela supprime les informations de configuration du sous-module.
git config -f .gitmodules --remove-section submodule.pkg_rh

# Étape 2 : Supprimer l'entrée dans la configuration Git
# Cela supprime toute référence restante au sous-module dans le fichier de configuration principal.
git config -f .git/config --remove-section submodule.pkg_rh

# Étape 3 : Supprimer le dossier du sous-module
# Cela supprime les fichiers du sous-module de votre répertoire de travail.
# J'ai supprimer le dossier manuellement
rm -rf pkg_rh

# Étape 4 : Supprimer les informations du sous-module dans l'index
# Cette commande supprime le sous-module de l'index, mais conserve le dossier de travail intact.
git rm --cached pkg_rh

# Étape 5 : Valider les modifications dans le dépôt
# Enfin, nous enregistrons les modifications pour confirmer la suppression du sous-module.
git commit -m "Suppression du sous-module pkg_rh"

````
>>>>>>> 0070b0a5560387987ed3be68fff0564e5a84ad97
