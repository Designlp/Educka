<?php 
    class Google extends Controllers{
        public function __construct() {
            parent::__construct();
         
     
        }
        //Visualizacion
        public function Google(){
            $data['page_tag'] = "Google";
            $data['page_title']= "Registro Google";
            $data['page_name'] = "google";
            $data['page_js'] = "functiongoogle.js";
            $this->views->getview($this,"google",$data);
        }
        
        //Visualizacion
        public function getconfig(){
            session_start();
            
            //config.php
            
            //Include Google Client Library for PHP autoload file
            require_once 'vendor/autoload.php';
            
            //Make object of Google API Client for call Google API
            $google_client = new Google_Client();
            
            //Set the OAuth 2.0 Client ID | Copiar "ID DE CLIENTE"
            $google_client->setClientId('272063521054-jcgibkvrosglpv842g2j7t91j5unj1e7.apps.googleusercontent.com');
            
            //Set the OAuth 2.0 Client Secret key
            $google_client->setClientSecret('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');
            
            //Set the OAuth 2.0 Redirect URI | URL AUTORIZADO
            $google_client->setRedirectUri('http://localhost/LoginGmail/index.php');
            
            // to get the email and profile 
            $google_client->addScope('email');
            
            $google_client->addScope('profile');
            
            $google_client->addScope('token');
            
           
        }
    }
