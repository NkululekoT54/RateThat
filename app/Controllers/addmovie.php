<?php 
namespace Controllers;

use Core\View;
use Core\Controller;

class addmovie extends Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->addMovie= new \Models\Addmovie();
    }

    public function index()
    {   
        $data['title'] = 'Welcome';

        View::renderTemplate('header', $data);
        View::render('welcome/welcome', $data);
        View::renderTemplate('footer', $data);
        
        
     
    }
    public function getMovie()
    {
      
        $apikey = "81efd167c9241fc60cb5c75b43e5c7dd";
        $tmdb = new TMDB($apikey, 'en', true);

        $data['tmdb']=$tmdb;
// store tmdb object in data object used to pass information around between the view and the controller

       // $add= new addmovie();	
       


		

        $math = new \Models\Movie_Model();

//instatiate the model for this function




        $results = $math->getMovies();
 //print_r(array_values($results ));


        View::render('welcome/search_movie', $data);
 
 //render the view
        if(isset( $_GET["Moviename"] )){
                                    $movieName=$_GET['Moviename'];
                                    $movies = $tmdb->searchMovie($movieName); 
                                    $data['movies'] =$movies;
         View::render('welcome/add_Movie', $data);}
     

//$movieID = array();
// }
//$results =array();

//if( $_GET["name"] ){
//retrive the movie name the user is looking for
//$movies = $tmdb->searchMovie($_GET['name']);

//}


            if(isset($_GET["movieID"]) ){
            $movie_ID=$_GET["movieID"];
                $imageURL=$_GET["movieURL"];
     
            $movie_Info=$tmdb->getMovieInfo($movie_ID);





                $company=$movie_Info['production_companies'];

//extract movie production company into a List that will later be passd on to the database.
            $production_Company_list = Array();
            foreach ($company  as $var) {
            $production_Company_list[] =$var['name'];
            }


            $genre=$movie_Info['genres'];
            $genre_list = Array();
            
            foreach ($genre as $var) {
            $genre_list [] =$var['name'];

            }


            $producers=implode(', ',$production_Company_list);
            $IMDB=$movie_Info['id'];
            $title=$movie_Info['original_title'];
            $studio="N/A";
            $running_Time=$movie_Info['runtime'];
            $director="N/A";
            $realease_date=$movie_Info['release_date'];



                //LoadObjects into data object so you can pass it on to the Write Review View


                $math->saveMovie($title,$studio,$running_Time,$director,$realease_date,$producers,$IMDB,$imageURL);


                $data['id']=$IMDB;
                $data['title']=$title;
                $data['runningTime']=$running_Time;
                $data ['realeaseDate']=$realease_date;
                $data['imageUrl']=$_GET["movieURL"];

                // Reder view and pass data objects for Viewing
                View::render('welcome/WriteReviewPage', $data);
           // $math->saveMovie($title,$studio,$running_Time,$director,$realease_date,$producers,$IMDB);
        
    }
}


}
