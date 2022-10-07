<?php
    require_once 'app/Models/User.Model.php';
    require_once 'app/Views/UserAuth.Views.php';

    class UserController{

        private $ModelUser;
        private $NbaViews;
       

        function __construct(){
          
            $this->ModelUser = new UserModel();
            $this->NbaViews = new UserAuthViews();

            
        }
         
        public function showLogin(){
           
            $this->NbaViews->showLogin();

        }
    
        public function verifyUser(){

            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->ModelUser->getAllUsersByEmail($email);

                //verifico los datos
            if($user && password_verify($password,$user->password)){
                //seccion iniciada
                session_start();
                $_SESSION['USER_ID'] = $user->User_id;
                $_SESSION['USER_EMAIL'] = $user->email;
                $_SESSION['IS_LOGGED'] = true;
                
                header("Location: " . BASE_URL);
            }else{

                $this->NbaViews->showLogin("El usuario o la contraseña son incorrectos");
            }
        }
    

        public function logout() {
            session_start();
            session_destroy();
            header("Location: " . BASE_URL);
        }
    }