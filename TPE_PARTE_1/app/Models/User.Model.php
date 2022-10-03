<?php

class Usermodel{
    function getDB() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_nba;charset=utf8', 'root', '');
        return $db;
    }



    function getAllUsers() {
        // 1. abro conexión a la DB
        $db = $this->getDB();
    
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $db->prepare('SELECT * FROM user');
        $query->execute();
    
        // 3. obtengo los resultados
        $users = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $users;
} 
    function insertUser($email, $password) {
        $db = $this->getDB();
        $query = $db->prepare("INSERT INTO user ( email, password) VALUES (?, ?)");
        $query->execute([$password, $email, false]);

        return $db->lastInsertId();


    }

    
}