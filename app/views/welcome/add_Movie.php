<?php
/**
 * Sample layout.
 */
use Core\Language;


$movie_object=$data['movies'];
$tmdb=$data['tmdb'];


foreach($movie_object as $movie){
    
    
     echo '<li>'. $movie->getTitle() .'</li>';
     
        echo('<form action="#" method="get">
                 
        <button name="movie" type="submit" value="'.$movie->getID().'">review</button>');
				  echo '<img src="'. $tmdb->getImageURL('w185') . $movie->getPoster() .'"/></li>';
    
}