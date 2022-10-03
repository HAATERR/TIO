<?php

class PlayerModel{

    function getDB() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_nba;charset=utf8', 'root', '');
        return $db;
    }


    function getAllPlayers() {
        // 1. abro conexión a la DB
        $db = $this->getDB();
    
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $db->prepare("SELECT * FROM players");
        $query->execute();
    
        // 3. obtengo los resultados
        $players = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $players;


}
    function insertPlayer($number, $position, $player_name,$team) {
    $db = $this->getDB();
    $query = $db->prepare("INSERT INTO players ( Number, Position, Player_Name,Team) VALUES (?, ?, ?,?)");
    $query->execute([$number, $position, $player_name,$team, false]);

    return $db->lastInsertId();
}

    function deletePlayerById($id) {
    $db = $this->getDB();
    $query = $db->prepare('DELETE FROM players WHERE Player_id = ?');
    $query->execute([$id]);
}


   // function showForm_Admi(){


    

      
}