microservice app 
    * Docker
    * Laravel
    * RabbitMQ

To start
*****************************************************************
## Pre-requisite

### Install laravel
`composer global require laravel/installer`

### Export path
`export PATH="$PATH:$HOME/.config/composer/vendor/bin"`
`source ~/.bashrc`

### Create project
`laravel new admin`

### Install ide helper
`composer require --dev barryvdh/laravel-ide-helper`
`php artisan ide:generate`

## Run docker

Create Dockerfile
Create docker-compose.yaml

Launch docker-compose up twice in each directory
For non explained reason mysql service fail to run at the first run

## Run artisan commands from the container

Attach shell to run commands from admin container
`docker-compose exec admin sh`

## Run migration

run shell into admin container and run `php artisan migrate` 

## Run seeders

Launch seeders to get some data into your DB by running `php artisan db:seed` from the admin container

## The Public Disk

To create the symbolic link, you may run `php artisan storage:link` command:

## Useful Commands
### Migration

Create new schema table : `php artisan make:migration create_flights_table --create=flights`

Add new column : `php artisan make:migration add_colname_to_users_table --table=users`

### Models

Generate model with controller seeder & factory, name should be in singular
`php artisan make:model ModelName -cfs`
