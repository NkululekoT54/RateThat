<?php

/*

 */

namespace Models;

/**
 * Description of Math_Model
 *
 * @author Denzhe Sadiki
 */
use Core\Model;

class Movie_Model extends Model  {
    //put your code here

public function getMovies(){
	
	 return $this->db->select('call getAllMovies');
}
//saveMovie($title,$studio,$running_Time,$director,$realease_date,$producers,$IMDB)
public Function saveMovie($title,$studio,$running_Time,$director,$realease_date,$producers,$IMDB,$imageURL)
{
   $descripttion='movie';
   $genreID='1';

    
   $Postdata = array(
       'tltle'=> $title,
       'description'=>$descripttion,
       'ImageUrl'=>$imageURL,
        'genre_id'=> $genreID
      

     );

    $this->db->insert('content',$Postdata);
    $lastInsertID=$this->db->lastInsertId('content_Id');

     $PostdataToMovie = array(
         'content_Id'=>$lastInsertID,
        'title'=> $title,
        'studio'=>$studio,
        'running_Time'=> $running_Time,
        'director'=> $director, 'release_date'=> $realease_date ,
       'producers'=> $producers,
       'IMDB'=> $IMDB
    );
   $this->db->insert('movie',$PostdataToMovie);
  // $this->model->insertContact($postdata); 
       
  // $this->db->select('call storeMovie('.$title .','. $studio.','.$running_Time.','.$director.','.$realease_date.','.$producers.','.$IMDB.')');
   //$this->db-> insert(PREFIX.'contacts', $data);
    
}


}