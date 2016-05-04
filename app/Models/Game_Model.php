<?php
/**
 * Created by PhpStorm.
 * User: Denzhe Sadiki
 * Date: 4/29/2016
 * Time: 7:56 PM
 */

namespace Models;

use Core\Model;

class Movie_Model extends Model
{
    //put your code here

    public function getGames()
    {

        return $this->db->select('* games');
    }

    public Function saveGame($Postdata)
    {


        $this->db->insert('game', $Postdata);
        
        // $this->model->insertContact($postdata);

        // $this->db->select('call storeMovie('.$title .','. $studio.','.$running_Time.','.$director.','.$realease_date.','.$producers.','.$IMDB.')');
        //$this->db-> insert(PREFIX.'contacts', $data);

    }
}
