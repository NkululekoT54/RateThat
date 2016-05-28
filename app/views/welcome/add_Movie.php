<?php
/**
 * Sample layout.
 */
use Core\Language;


$movie_object=$data['movies'];
$tmdb=$data['tmdb'];
echo("<div class=\"scroll-pane ui-widget ui-widget-header ui-corner-all\">
  <div class=\"scroll-content\">");
echo("<table>   <tr>");

foreach($movie_object as $movie){
    



        echo('<form action="#" method="get">
  <th>


<div class="demo-card-wide3 mdl-card mdl-shadow--2dp">
 <div class="scroll-content-item ui-widget-header">
  <img src="'. $tmdb->getImageURL('w185') . $movie->getPoster() .'"/>
  
  <div class="mdl-card__title">  <h2 class="mdl-card__title-text">'. $movie->getTitle() .'</h2>   </div>
  
  <div class="mdl-card__supporting-text">
<input type="hidden" name="movieID" value="'.$movie->getID().'">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Mauris sagittis pellentesque lacus eleifend lacinia...
  </div>
  <div class="mdl-card__actions mdl-card--border">
<button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"  name="movieURL" type="submit" value="'.$tmdb->getImageURL('w185') . $movie->getPoster().'"> Write Review</button>
    
</a>
  </div>
  </div>
 </th>
</form>' );



}
echo(" </tr> </table>   </div>
</div>
  <div class=\"scroll-bar-wrap ui-widget-content ui-corner-bottom\">
    <div class=\"scroll-bar\"></div>");
