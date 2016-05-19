<?php
/**
 * Created by PhpStorm.
 * User: Denzhe Sadiki
 * Date: 4/29/2016
 * Time: 7:56 PM
 */

namespace Models;

use Core\Model;

class Game_Model extends Model
{
    function __construct(){
        parent::__construct();
    }

    //put your code here

    public function getGames()
    {

        return $this->db->select('Select * content');
    }

    public Function saveGame($data)
    {


     //  $this->db->insert('content',$data);

        // $this->model->insertContact($postdata);
        $this->db->insert('game',$data);
        // $this->db->select('call storeMovie('.$title .','. $studio.','.$running_Time.','.$director.','.$realease_date.','.$producers.','.$IMDB.')');
    //    $this->db-> insert(PREFIX.'contacts', $data);

    }
    public function saveContent($data)
    {


        $this->db->insert('content',$data);
        return $this->db->lastInsertId('content_Id');
    }
}

