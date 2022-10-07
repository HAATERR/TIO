<?php
    require_once 'libs\smarty-4.2.1\libs\Smarty.class.php';
    class NbaViews{
    
    private $smarty;


    function __construct(){
        $this->smarty = new Smarty();
        
    }






    function showHome($players,$teams){
        
        $this->smarty->assign('players',$players);
        $this->smarty->assign('teams',$teams);
        $this->smarty->display('home.tpl');            
        }

        function showFallo($msg){
                 
            echo"<h2>Fallo!</h2>";
            echo"<h3> $msg </h3>";
        }
         
        function showPlayers($players,$teams){
            $this->smarty->assign('players',$players);
            $this->smarty->assign('teams',$teams);
            $this->smarty->display('player_seccion.tpl');
        }
        
        
        //function showPlayersById($id,$players,$teams){
            //$this->smarty->assign('players',$players);
            //$this->smarty->assign('teams',$teams);
           // $this->smarty->assign('id',$id);
          //  $this->smarty->display('player_seccion_id.tpl');
            
        //}
        
        
        
        
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
        
        
        //function showTeamById($id,$teams,$players){
          //  $this->smarty->assign('teams',$teams);
            //$this->smarty->assign('players',$players);
            //$this->smarty->assign('id',$id);
            //$this->smarty->display('team_seccion_id.tpl');
            

     //}




    }
    

        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
       


        
    

    
    
    