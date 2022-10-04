<?php
    require_once 'libs\smarty-4.2.1\libs\Smarty.class.php';
    class NbaViews{
    
    private $smarty;


    function __construct(){
        $this->smarty = new Smarty();
        
    }






    function showPlayers($players){
        
        $this->smarty->assign('players',$players);
        $this->smarty->display('home.tpl');
      }

    function showTeams($teams){
        
        $this->smarty->assign('teams',$teams);
        $this->smarty->display('home.tpl');
        
            
        }

        function showFallo($msg){
                 
            echo"<h2>Fallo!</h2>";
            echo"<h3> $msg </h3>";
        }

        function showForm_Admi($teams,$players){
            $this->smarty->assign('players',$players);
            $this->smarty->display('form_admi.tpl');
            
            $this->smarty->assign('teams',$teams);
            $this->smarty->display('form_admi.tpl');

        }
    
    
        
        
        
        
        
        
        
        //function showRegister(){
            
           
            //$this->smarty->assign('users',$users);
            //$this->smarty->display('register.tpl');



    }
    

        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        //function formAdmi(){


        
    

    
    
    