<?php

namespace Controllers;

use Core\Controller;
use Core\View;
use Core\Model;
include("tmdb-api.php");

            
class welcome extends Controller{

public function __construct() {
parent::__construct();
}


// index main method
public function index() {
    $data['title'] = 'Welcome';

    View::renderTemplate('header', $data);
    
    // create new instance for  'Review a  movie' class 
    $add_Movie=new addmovie();
    
    //call main method inside movie class
    $add_Movie->getMovie();
     $add_Game=new Add_Games();
    // create new instance for 'Review a game' class
    View::render('welcome/add_Game', $data);
   
   // //
    $add_Game->GetGame();
    //
    View::renderTemplate('footer', $data);
}

//(
//$movie_Info['original_title'], $movie_Info['production_companies'], $movie_Info['runtime'];, movie_director, $movie_Info['release_date'], movie_producers, movie_genre_ID, movie_IMDB
//)
 

  //foreach ($movie_Info as $val) {
   //$movie_Array=$val;
   //echo($movie_Array);
 //   echo($val);
   // echo('</br>');
   // }
   // $arrlength= count($movie_Array);
   // for($x = 0; $x < $arrlength; $x++) {
    //echo $movie_Array[$x][1];
    //echo "<br>";
  // }


//

                                 
public function home()
    {
        $data['title'] = $this->language->get('welcome_text');
        $data['welcome_message'] = $this->language->get('welcome_message');

        View::renderTemplate('header', $data);
        View::render('welcome/home', $data);
        View::renderTemplate('footer', $data);
    }
    
}



  



