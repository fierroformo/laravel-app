# laravel-app
Laravel App - Docker environment


## Prerequisites
+ [Docker 1.13 or greater](https://www.docker.com)
+ [Docker Compose 1.8.0 or greater](https://docs.docker.com/compose/)


## Install
1. Download the repository's tarball and extract it to your project's directory

    ```bash
    $ mkdir myproject
    $ cd myproject
    $ wget https://github.com/fierroformo/laravel-app/archive/master.tar.gz -O - | tar -xz --strip 1
    ```

2. Build docker environment

    ```bash
    $ docker-compose build
    ```

3. Init docker environment

    ```bash
    $ docker-compose up
    ```


## Environments
ENVIRONMENT | STATIC URL | SSH SERVER
------------ | ------------- | -------------
Local | [http://127.0.0.1:8001](http://127.0.0.1:8001) | docker exec -it laravel_app bash
