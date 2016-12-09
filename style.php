<?php

class style{
    function head($name){
        
        if(!isset($name) or $name == ""){$name = "ICT inernship";}
        
        echo ' <!-- Theme Made By www.w3schools.com - No Copyright -->
  <link rel="shortcut icon" type="image/png" href="img/icon.png" />
 <title>'.$name.'</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">';
    }
            function bootstrap(){
        echo'  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
    }
    function index(){
        echo ' <link rel="stylesheet" href="./css/index.css">';
    }
    
    
}
