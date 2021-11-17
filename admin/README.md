microservice app 
    * Docker
    * Laravel
    * RabbitMQ

To start
*****************************************************************

## Run docker

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
