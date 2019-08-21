# Procèdure d'installation

Requirements

php >= 7.2
composer https://getcomposer.org/download/

```bash
composer install
FIRSTNAME=Philippe bin/console server:run
```

Vous pouvez accèder au site http://127.0.0.1:8000
Le message "hello Philippe." doit apparaître.

Il est possible de changer le prénom en jouant sur la variable d'env `FIRSTNAME`

# Test technique

Afin de simplifier le déploiement de notre application, nous souhaitons l'installer en utilisant docker. 

Objectif:
- Écrire un `Dockerfile` `PHP-FPM` en partant de l'image officielle
- Écrire un `Dockerfile` `Nginx` en partant de l'image officielle
- Écrire un `docker-compose` utilisant les 2 `Dockerfile` créé précédemment
- Écrire un script nommé `start.sh`
  - demande le prénom
  - démarre la stack docker
  - vérifier que la réponse HTTP de l'application retourne un code 200 avec un body "hello {prénom}."

Une fois le test fini le candidat doit créer une PR dans le dépot Github avec en titre `test {nom du candidat} {prénom du candidat}`

## lien utiles

https://symfony.com/doc/current/setup/web_server_configuration.html
