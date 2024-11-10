# Soli-lms mockup : Développement de module pkg_rh

## Branche : develop_pkg_rh

Ce branch ne peut pas être merger dans develop ou main, il est créer pour développer le package pkf_rh avec ces dépendance.

Pour envoyer mettre à jour le maquettes principale, il faut envoyer un pull request depuis le branch develop qui contient tous les modules


## Clone 

Il existe deux façon de cloner : 

1. utilisant un seul commande qui clonne le dépôt avec ses dépendance 

````bash
git clone --recurse-submodules -b develop_pkg_rh --single-branch https://github.com/soli-lms/soli-lms_mockup.git develop_mockup_pkg_rh
````

2. cloner le dépôt qui installer les modules 

````bash

git clone -b develop_pkg_rh --single-branch https://github.com/soli-lms/soli-lms_mockup.git develop_mockup_pkg_rh

git submodule init
git submodule update
````

## Installation
  
```bash
  npm install
```

- Exécuter le Serveur Intégré PHP
  
```bash
php -S  localhost:8000  -d display_errors=On
```

## Pour trouver une icône  

-[https://fontawesome.com/v5/search?o=r&m=free](https://fontawesome.com/v5/search?o=r&m=free)

- prompt 
  - fontawesome v5, proposer icone pour : Gestion de projet

