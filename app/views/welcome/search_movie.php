<?php
/**
 * Sample layout.
 */
use Core\Language;


$title = $data['title'];




?>

<div class="page-header">
	<h1>Review Movie</h1>
</div>

<p><?php echo $data['welcome_message'] 




?></p>


<?php echo('
<form action="#" method="get">
<input type="text" name="name" placeholder="Search Movie"></input><br/>

<input type="submit" name="submit" value="Search"></input>
</form>');
        
        