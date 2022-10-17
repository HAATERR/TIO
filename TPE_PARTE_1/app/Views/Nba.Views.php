<?php
    require_once 'libs\smarty-4.2.1\libs\Smarty.class.php';
    class NbaViews{
    
    private $smarty;


    function __construct(){
        $this->smarty = new Smarty();
        
    }






    function showHome($players,$teams,$error = null){
        $this->smarty->assign('players',$players);
        $this->smarty->assign('error',$error);
        $this->smarty->assign('teams',$teams);
        $this->smarty->display('home.tpl');            
        }

        function showFallo($msg){
                 
            echo"<h2>Fallo!</h2>";
            echo"<h3> $msg </h3>";
        }
         
        function showUpdatePlayer($player,$players,$teams){
            $this->smarty->assign('player',$player[0]);
            $this->smarty->assign('teams',$teams);
            $this->smarty->assign('players',$players);
            $this->smarty->display('updatePlayer.tpl');
        }
        function showPlayers($players,$teams){
            $this->smarty->assign('players',$players);
            $this->smarty->assign('teams',$teams);
            $this->smarty->display('player_seccion.tpl');
        }
        
        
        function showPlayerById($players,$player,$teams){
            $this->smarty->assign('player',$player[0]);
            $this->smarty->assign('players',$players);
            $this->smarty->assign('teams',$teams);
            $this->smarty->display('player.tpl');
            
        }
        
        
        
        
        function showForm_Admi($teams,$players){
            $this->smarty->assign('players',$players);
            $this->smarty->assign('teams',$teams);
            $this->smarty->display('form_admi.tpl');

        }
        
        
        function showTeams($teams,$players){
            $this->smarty->assign('players',$players);
            $this->smarty->assign('teams',$teams);
            $this->smarty->display('team_seccion.tpl');
        }
        function showUpdateTeam($team,$players,$teams){
            $this->smarty->assign('team',$team[0]);
            $this->smarty->assign('teams',$teams);
            $this->smarty->assign('players',$players);
            $this->smarty->display('updateTeam.tpl');
        }
        
        function showTeamById($players,$team,$teams,$playerid){
            $this->smarty->assign('team',$team[0]);
            $this->smarty->assign('teams',$teams);
            $this->smarty->assign('players',$players);
            $this->smarty->assign('playerid',$playerid);
            $this->smarty->display('team.tpl');
            

     }

        


    }
    

        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
       


        
    

    
    
    