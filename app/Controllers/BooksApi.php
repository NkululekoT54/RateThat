<?php
/**
 * Created by PhpStorm.
 * User: Denzhe Sadiki
 * Date: 5/18/2016
 * Time: 7:21 PM
 *
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




class BooksApi extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    }

    Public function SearchBook()
    {
            View::render('welcome/SearchBook');
            if(isset($_GET["BookName"])) {
                $append = $_GET['BookName'];
                $BookObject = $this->getBook($append);

                foreach ($BookObject->data as $item)
                {
                    echo("</br>");
                    echo( '<img src="http://covers.openlibrary.org/b/isbn/'.$item->isbn13.'-M.jpg" />');
                    echo($item->title);

                }


            }



    }

    private function _call($url){


        

        $curl = curl_init();
        curl_setopt ($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $results= curl_exec ($curl);
        curl_close ($curl);

        //xml object from external API

        $XmlObject = @simplexml_load_string($results);
        return $XmlObject;
    }

    public function getBook($append) {
        
        $url="http://isbndb.com/api/v2/xml/X3YS6B5O/books?q=.$append.";
        $xmlobject= $this->_call($url);
        return  $xmlobject;
    }



}