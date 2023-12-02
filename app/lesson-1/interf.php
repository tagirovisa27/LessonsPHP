<?php 
 
namespace App\lesson1;
interface MyInterface {
    public function myMethod($param);
}

class MyClass implements MyInterface {
    public function myMethod($param) {
        echo "Метод выполнен с параметром: $param";
    }
}

interface DatabaseInterface {
    public function connect();
    public function query($sql);
}

class MySqlDatabase implements DatabaseInterface {
    public function connect() {
        return "Подключение к MySQL базе данных...";
    }

    public function query($sql) {
        return "Выполнение SQL-запроса в MySQL базе данных: " . $sql;
    }
}