<?php


require_once 'app/Models/Player.Model.php ';
require_once 'app/Models/Team.Model.php';
require_once 'app/Views/Nba.Views.php';


class TeamController{


    private $ModelTeam;
    
    private $ModelPlayers;

    private $NbaViews; 


    function __construct(){

        $this->ModelPlayers = new PlayerModel();
        $this->ModelTeam = new TeamModel();
        $this->NbaViews = new  NbaViews();
     }





     

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