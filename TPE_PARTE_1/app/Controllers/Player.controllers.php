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
        $players = $this->ModelPlayers->getAllPlayersandNameTeam();
        $teams  = $this->ModelTeam->getAllTeams();
        //obtengo la vista
         $this->NbaViews->showHome($players,$teams,"Tiene que eliminar los jugadores primero para eliminar el equipo");
        
    }
    

    //JUGADORES
    function showPlayers(){
        session_start();
        $teams =  $this->ModelTeam->getAllTeams();
        $players = $this->ModelPlayers->getAllPlayersandNameTeam();
        $this->NbaViews->showPlayers($players,$teams);
    }
    function showPlayerById($id){
        session_start();

        $players = $this->ModelPlayers->getPlayersByTeam($id);
        $teams = $this->ModelTeam->getAllTeams();
        $player = $this->ModelPlayers->playerId($id);
        $this->NbaViews->showPlayerById($players,$player,$teams);
    }


    function addPlayer() {
        // TODO: validar entrada de datos
        $this->checkLoggedIn();
        var_dump($_POST);
        $player_name = $_POST['player_name'];
        $number = $_POST['number'];
        $position = $_POST['position'];
        $team  = $_POST['team'];
       
        if(empty($player_name) || empty($team)){
            
            $this->NbaViews->showFallo('Faltan datos obligatorios');
         };

        $id = $this->ModelPlayers->insertPlayer($number,$position,$player_name,$team);

       
    
        header("Location: " . BASE_URL); 
    }

    function deletePlayer($id) {
        

        
        $this->checkLoggedIn();
        $this->ModelPlayers->deletePlayerById($id);
        header("Location: " . BASE_URL); 
     
    }

    function showUpdatePlayer($id){
        $this->checkLoggedIn();
        $player =  $this->ModelPlayers->playerId($id);
        $teams = $this->ModelTeam->getAllTeams(); 
        $players = $this->ModelPlayers->getAllPlayersandNameTeam();
        $this->NbaViews->showUpdatePlayer($player,$players,$teams,$id);
    }
    function updatePlayer($id){
        $this->checkLoggedIn();
        if ( isset($_POST['number']) && isset($_POST['position']) && isset($_POST['player_name']) && isset($_POST['team'])){
            $number = $_POST['number'];
            $position = $_POST['position'];
            $player_name = $_POST['player_name'];
            $team = $_POST['team'];
            $this->ModelPlayers->updatePlayer($number,$position,$player_name,$team,$id);
        }
        header("Location: " . BASE_URL); 
    }
    
    //EQUIPOS
    
    function showTeamById($id){
        session_start();
        $players = $this->ModelPlayers->getAllPlayersandNameTeam();
        $teams = $this->ModelTeam->getAllTeams();
        $team  = $this->ModelTeam->teamId($id);
        $this->NbaViews->showTeamById($players,$team,$teams);
    }
  

    

    function showTeams(){
        session_start();
        $teams =  $this->ModelTeam->getAllTeams();
        $players = $this->ModelPlayers->getAllPlayersandNameTeam();
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

    
    function updateTeam($id){
        $this->checkLoggedIn();
        if (isset($_POST["team"]) && isset($_POST["rings"]) && isset($_POST["city"])){
            $team = $_POST['team'];
            $rings = $_POST['rings'];
            $city = $_POST['city'];
            $this->ModelTeam->updateTeam($team,$rings,$city,$id);
        
        header("Location: " . BASE_URL); 
            }
        }
    
    function showUpdateTeam($id){
        session_start();
        $team =  $this->ModelTeam->teamId($id);
        $teams = $this->ModelTeam->getAllTeams(); 
        $players = $this->ModelPlayers->getAllPlayersandNameTeam();
        $this->NbaViews->showUpdateTeam($team,$players,$teams);
    }
    function showForm_Admi(){
        $this->checkLoggedIn();
        $teams = $this->ModelTeam->getAllTeams();
        $players = $this->ModelPlayers->getAllPlayersandNameTeam();
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
