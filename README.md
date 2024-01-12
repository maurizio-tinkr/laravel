<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel 10 Learning Adventure 🚀
Hey there! Welcome to my cozy corner of the coding universe, where I'm on a mission to crack the mysterious codes of Laravel 10! 

## What's Cookin'
This repository is my digital journal chronicling the epic quest of me, a coding enthusiast, as I navigate through the twists and turns of Laravel 10.

## Treasure Map
The repository is divided in branches, each containing a simple project that implements a different functionality or feature in Laravel 10

- master: vanilla Laravel freshly installed via composer, it's a local demo therefore I'm happy to leave the `.env` in the repository so it's easier to spin up a local environment on demand
- crud-app-with-laravel-and-mysql: a very basic CRUD app using Laravel and MySQL
- graphql-api: and example of a GraphQL API Using Laravel

## CLI commands used

```shell
composer require rebing/graphql-laravel
php artisan vendor:publish --provider="Rebing\\GraphQL\\GraphQLServiceProvider"
php artisan make:model -m Category
php artisan make:model -m Quest
php artisan migrate
php artisan make:factory QuestFactory --model=Quest
php artisan make:factory CategoryFactory --model=Category
php artisan db:seed
php artisan make:graphql:type CategoryType
php artisan make:graphql:type QuestType
php artisan make:graphql:query Quest/QuestQuery
php artisan make:graphql:query Quest/QuestsQuery
php artisan make:graphql:query Category/CategoryQuery
php artisan make:graphql:query Category/CategoriesQuery
php artisan make:graphql:mutation Category/CreateCategoryMutation
php artisan make:graphql:mutation Category/DeleteCategoryMutation
php artisan make:graphql:mutation Category/UpdateCategoryMutation
php artisan make:graphql:mutation Quest/CreateQuestMutation
php artisan make:graphql:mutation Quest/DeleteQuestMutation
php artisan make:graphql:mutation Quest/UpdateQuestMutation
```

## How to interrogate the endpoint

```shell
curl -X POST --location "https://laravel.test/graphql" \
-H "Content-Type: application/json" \
-d "{\"query\":\"query{quest(id: 1) { id title reward description}}\"}"
```