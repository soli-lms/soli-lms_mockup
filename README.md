# soli-lms_mockup

## Installation de maquette

- Installer les Dépendances
  
```bash
  npm install
```

- Exécuter le Serveur Intégré PHP
  
```bash
php -S localhost:8000
```

## Insertion des modules 

````bash
# Ajouter ModuleA en tant que sous-module
git submodule add https://github.com/soli-lms/pkg_rh_mockup.git modules/pkg_rh
git submodule add https://github.com/soli-lms/pkg_competences_mockup.git modules/pkg_competences
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