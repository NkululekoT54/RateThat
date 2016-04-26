<?php

namespace Controllers;

use Core\Controller;
use Core\View;
use Core\Model;
use SimpleXMLElement;

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

        if(isset($_GET["GameName"])) {
            $gameName = $_GET['GameName'];

           //  $gameSearch=;
         //   try {
              $xml=$gb_obj->search($gameName,$giantbomb,10,1);
               //  $xmlObject=new SimpleXMLElement($xml);
          //    print_r($xml);
                // $resultsOBject=simplexml_load_string($xml);
             // echo($xml)
           // } catch (Exception $e) {
           //     echo 'Caught exception: ',  $e->getMessage(), "\n";
          //  }

           // $resultsOBject=simplexml_load_string($xml);
              // print_r($xml);
          foreach ($xml->results->children() as $item) {
              echo (htmlentities($item->resource_type));
          }

        }


      // $giantBombApi->search('call of duty',10,2);
        echo("This Is a is Where I'll Add The Games");
       
        
        

        //print_r ( $Arr );
        // $name= array();
        //foreach($Arr as $var)
      //  {
        //   $name=$var['id'];            
        //}
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