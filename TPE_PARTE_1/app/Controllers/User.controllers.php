<?php
    require_once 'app/Models/User.Model.php';
    require_once 'app/Views/Nba.Views.php';

    class UserController{

        private $ModelUser;
        private $NbaViews;
       

        function __construct(){
          
            $this->ModelUser = new UserModel();
            $this->NbaViews = new NbaViews();

            
        }
         
        
    
    
    
    }