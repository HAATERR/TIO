<?php
require_once 'app/Models/Player.Model.php ';
require_once 'app/Models/Team.Model.php';
require_once 'app/Views/Nba.Views.php';

class PlayerController{
        
    private $ModelTeam;
    
    private $ModelPlayers;

    private $NbaViews; 

     function __construct(){

        $this->ModelPlayers = new PlayerModel();
        $this->ModelTeam = new TeamModel();
        $this->NbaViews = new  NbaViews();
     }


    function showHome() {
        
        $players = $this->ModelPlayers->getAllPlayers();
        $teams  = $this->ModelTeam->getAllTeams();
        //obtengo la vista
        
        $this->NbaViews->showHome($players,$teams);
        
    }
    
    
    function showPlayers(){
        $teams =  $this->ModelTeam->getAllTeams();
        
        $players = $this->ModelPlayers->getAllPlayers();
        $this->NbaViews->showPlayers($players,$teams);
  }


    function addPlayer() {
        // TODO: validar entrada de datos
    
        $player_name = $_POST['player_name'];
        $number = $_POST['number'];
        $position = $_POST['position'];
        $team  = $_POST['team'];
       
        if(empty($player_name) || empty($team)){
            
            $this->NbaViews->showFallo('Faltan datos obligatorios');
         };

        $id = $this->ModelPlayers->insertPlayer($player_name, $number, $position,$team);

       
    
        header("Location: " . BASE_URL); 
    }

    function deletePlayer($id) {
       $this->ModelPlayers->deletePlayerById($id);
        header("Location: " . BASE_URL); 
    }

    function showTeams(){
        $players = $this->ModelPlayers->getAllPlayers();
        $teams  = $this->ModelTeam->getAllTeams();
        $this->NbaViews->showTeams($teams,$players);
  }



    function addTeam() {
        // TODO: validar entrada de datos
    
        $team = $_POST['team'];
        $rings = $_POST['rings'];
        $city = $_POST['city'];
    

        if(empty($team) || empty($city)){
            
            $this->NbaViews->showFallo('Faltan datos obligatorios');
         };
     

        $id = $this->ModelTeam->insertTeam($team, $rings, $city);
    
        header("Location: " . BASE_URL); 
    }


    function deleteTeam($id) {
       $this->ModelTeam->deleteTeamById($id);
        header("Location: " . BASE_URL); 
    }


    function showForm_Admi(){
        $teams = $this->ModelTeam->getAllTeams();
        $players = $this->ModelPlayers->getAllPlayers();
        $this->NbaViews->showForm_Admi($teams,$players);
    }

}