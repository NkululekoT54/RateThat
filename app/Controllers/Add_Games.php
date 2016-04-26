<?php

namespace Controllers;

use Core\Controller;
use Core\View;
use Core\Model;
//include("Controllers\GiantBomb.php");
include 'GiantBomb/GiantBomb.php';

class Add_Games extends Controller{

public function __construct() {
parent::__construct();
}



    public function index()
    {
      
    }
    Public function GetGame()
    {
        $gb_obj = new GiantBomb('373edce87cc80b108708c315f5276c11f6828686');
       $giantbomb = array("name",
           "id",
           "image");
	
        
      // $giantBombApi->search('call of duty',10,2);
        echo("This Is a is Where I'll Add The Games");
        $results=$gb_obj->search('BattleField',$giantbomb,10,1);
        
        
         $Arr = (array)$results;
        //print_r ( $Arr );
        // $name= array();
        foreach($Arr as $var)
        {
           $name=$var['id'];            
        }
         //echo($gameNames);
        // print_r($name);


     
       //foreach($results as $game)
       // {
           // echo($game);
           // echo('</br>');
            
        //}
        //$game_Model= new \Models\AddGame();
        //$game_Model->test();
    }
}