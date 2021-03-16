@extends('layouts.app')
@section('content')
        <h4>Здраствуйте, меня зовут <b>Максим Родзиевский</b></h4>
        <p>Для данного задания я использую Laravel 8 </p>
        <p>
            <Pre>
            БД:

            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=test_encomage_db
            DB_USERNAME=root
            DB_PASSWORD=root
            </Pre>

        </p>
        <p>Список пользователей можно увидеть в <a href="/admin">Админ панеле</a>, видеть список может любой зарегестрированный юзер</p>
        <p>Я предварительно заготовил seeding  2 пользователей </p>
        <p>
            Команды для composer: <br>
            php artisan migrate <br>
            php artisan db:seed <br>
        </p>
        <img src="/img/1.png" alt="">

        <hr>
        <p>Для таблицы пользователей я использовал: <a target="_blank" href="https://datatables.net/">DataTables</a></p>
        <p>все CRUD-операции описанны в ресурсном контроллере <b>app/Http/Controllers/admin/UserController.php</b></p>
        <img src="/img/2.png" alt="" width="100%">


@endsection
