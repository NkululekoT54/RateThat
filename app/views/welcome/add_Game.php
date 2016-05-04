<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 Description of Addgame
 *
 * @author Denzhe Sadiki
 */

use Core\Language;


$xml = $data['xml'];




?>

	<div class="page-header">
		<h3>Which Game, Would you like to  write about ?</h3>
	</div>

<?php


foreach ($xml->results->children() as $item) {
	//echo(' <a href=" '. $item-> site_detail_url .'" >  </br>');
	echo('<p style="  float:inherit;
    ">'.$item->name . '</p>');

	echo(' <div id="games" style="
    float: left;
">  ');



	echo('
	
	
	
	<form action="#" method="get">
	
	<button name="gameID"  type="submit"  value="'.$item->id.'" > review</button>

	</form>
	

	<img src ="' . $item->image->super_url . '"  style="
    /* size: 45em; */
    width: 15em;
    height: 15em;
  	padding-right: inherit;
    
    float: inherit;
" /> </div>');
;


}