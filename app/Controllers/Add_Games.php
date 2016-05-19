<?php

/*Author : Denzhelanga Sadiki

 * Date : 2016 March 16
 *
 *
 * 
 *
 * */
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
           "image",
            "site_detail_url" );

        View::render('welcome/search_Game');
        if(isset($_GET["GameName"])) {
            $gameName = $_GET['GameName'];

            //  $gameSearch=;
            //   try {
            $xml = $gb_obj->search($gameName, $giantbomb, 10, 1);
            //  $xmlObject=new SimpleXMLElement($xml);
            //    print_r($xml);
            $data['xml'] = $xml;

            View::render('welcome/add_Game', $data);
        }
            //field list for the game info




            

             // echo($xml)
           // } catch (Exception $e) {
           //     echo 'Caught exception: ',  $e->getMessage(), "\n";
          //  }
           // print_r($xml);
           // $resultsOBject=simplexml_load_string($xml);
              // print_r($xml);



        }

        public function addGame()
        {
            $gb_obj = new GiantBomb('373edce87cc80b108708c315f5276c11f6828686');

            $gameFieldList = array("name",
                "id",
                "name",
                "platforms"
            ,   "genres",
                "original_release_date",
                "image"
                );
            $gameID = $_GET["gameID"];
            $gameObject =$gb_obj->game($gameID, $gameFieldList);



            $name=$gameObject->results->children()-> name;

            $id=$gameObject->results->children()-> id;

            $release_Date=$gameObject->results->children()-> original_release_date;


            $platform= array();
           // foreach ($gameObject->results->children()-> platforms as $item)
           // {
             //   $platform[]=$item->platform->name;


           // }
            $genre=array();
            //foreach ($gameObject->results->children()-> genres as $item)
            //{
             //   $genre[]=$item->genre->name;


          //  }

            $genreID='1';
            $description="Game";


            $data = array(

                'tltle' => $name,
                'description' => $description,
                'genre_id'=>$genreID



            );
            $GameModel= new \Models\Game_Model();
            $contentid=$GameModel->saveContent($data);
            //new game model
            $postdata = array(
                'content_Id'=>$contentid,
                'publisher' => $name,
                'release_Date' => $release_Date,
                'platform'=>$genreID
            );



          //  $GameModel->getGames();

            $GameModel->saveGame($postdata);



        }
      // $giantBombApi->search('call of duty',10,2);
        //echo("This Is a is Where I'll Add The Games");

        

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