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
        session_start();
        $players = $this->ModelPlayers->getAllPlayers();
        $teams  = $this->ModelTeam->getAllTeams();
        //obtengo la vista
         $this->NbaViews->showHome($players,$teams,"Tiene que eliminar el equipo primero para eliminar el jugador");
        
    }
    

    //JUGADORES
    function showPlayers(){
        session_start();
        $teams =  $this->ModelTeam->getAllTeams();
        $players = $this->ModelPlayers->getAllPlayers();
        $this->NbaViews->showPlayers($players,$teams);
    }
    function showPlayerById($id){
        session_start();

        $players = $this->ModelPlayers->getAllPlayers();
        $teams = $this->ModelTeam->getAllTeams();
        $player = $this->ModelPlayers->playerId($id);
        $this->NbaViews->showPlayerById($players,$player,$teams);
    }


    function addPlayer() {
        // TODO: validar entrada de datos
        $this->checkLoggedIn();
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
        

        
        $this->checkLoggedIn();
        $this->ModelPlayers->deletePlayerById($id);
        header("Location: " . BASE_URL); 
     
    }

    //function showUpdatePlayer($id){
       // $this->checkLoggedIn();
        //$teams =  $this->ModelTeam->getAllTeams();
        //$players = $this->ModelPlayers->playerId($id);
        //$this->ModelPlayers->updatePlayer($team,$id,$rings,$city);
        
       // $this->NbaViews->showUpdateTeam($teams,$players);
    //}
    function updatePlayer($id){
        $this->checkLoggedIn();
        if (isset($_POST['player'])){
            $this->model->updatePlayer($_POST['player'],$id);

        }
    }
    
    //EQUIPOS
    
    function showTeamById($id){
        session_start();
        $players = $this->ModelPlayers->getAllPlayers();
        $teams = $this->ModelTeam->getAllTeams();
        $team  = $this->ModelTeam->teamId($id);
        $this->NbaViews->showTeamById($players,$team,$teams);
    }
  

    

    function showTeams(){
        session_start();
        $teams =  $this->ModelTeam->getAllTeams();
        $players = $this->ModelPlayers->getAllPlayers();
        $this->NbaViews->showTeams($teams,$players);
    }



    function addTeam() {
        // TODO: validar entrada de datos
        $this->checkLoggedIn();
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
        $this->checkLoggedIn();
        $this->ModelTeam->deleteTeamById($id);
        header("Location: " . BASE_URL); 
    }

    
    
    
    function showUpdateTeam($id){
        $this->checkLoggedIn();
        $teams =  $this->ModelTeam->getAllTeams();
        $players = $this->ModelPlayers->getAllPlayers();
        $this->ModelTeam->updateTeam($team,$id,$rings,$city);
        if (isset($_POST['team'])){
           $this->ModelTeam->updateTeam($team,$city,$rings,$id);
           
        }
        $this->NbaViews->showUpdateTeam($teams,$players);
    }
    function showForm_Admi(){
        $this->checkLoggedIn();
        $teams = $this->ModelTeam->getAllTeams();
        $players = $this->ModelPlayers->getAllPlayers();
        $this->NbaViews->showForm_Admi($teams,$players);
    }

    function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'login');
            die();
        }
    }
}
