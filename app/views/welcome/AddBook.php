<?php
/**
 * Created by PhpStorm.
 * User: Denzhe Sadiki
 * Date: 5/22/2016
 * Time: 3:37 PM
 */
$BookObject=$data['Books'];
foreach ($BookObject->data as $item)
{  
    echo('<div class="Bookresults">');
    echo($item->title);
    echo( '<img src="http://covers.openlibrary.org/b/isbn/'.$item->isbn13.'-M.jpg" />');

    echo("</div>");

}
