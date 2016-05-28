<?php
/**
 * Sample layout.
 */
use Core\Language;


$title = $data['title'];




?>
<div class="MovieSearchWrapper">
<div class="page-header ">
	<h3>Which Movie would you like to review?</h3>
</div>

<p><?php echo $data['welcome_message'] 




?></p>


<?php echo('
<form class="form-wrapper cf" action="#" method="get">
<input type="text" name="Moviename" placeholder="Search Movie"> </input><br/>

<button type="submit" name="submit" value="Search">search</button>
</form>
</div>');

