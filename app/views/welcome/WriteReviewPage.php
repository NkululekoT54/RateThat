<?php
/**
 * Created by PhpStorm.
 * User: Denzhe Sadiki
 * Date: 5/23/2016
 * Time: 11:07 AM
 */

//\\$IMDB=$data['id'];
$title=$data['title'];
$running_Time=$data['runningTime'];
$realease_date=$data ['realeaseDate'];
$imageURL=$data['imageUrl'];
echo('<div class="movieDetails"> 
  <h2>     Title: '.$title.' </h2>   
  <h3> RunningTime: '.$running_Time.' Minutes</h3>
  <h3>Release Date: '.$realease_date.' </h3>

</div>');


echo('<div class="movieHeader" style="background-image: URL( '.$imageURL.'); background-size: 37%; background-repeat: no-repeat;">


<div id="box1" class="box blurred-bg tinted">

  <div class="Boxcontent">
    
      
  </div>
</div>
</div>');
 echo("



 <div class='textEditor'>
 <form>
            <textarea name=\"editor1\" id=\"editor1\" rows=\"10\" cols=\"80\">
              <h1 style=\"text-align: center;\"><strong>MOVIE REVIEW TEMPLATE</strong></h1>
<h1 style=\"text-align: center;\">&nbsp;</h1>
<p>Note: &nbsp;DON&rsquo;T FORGET that movie titles are written within &ldquo;quotation marks!&rdquo;</p>
<p><br /><br /></p>
<p><strong>HEADLINE: </strong>&nbsp;Include the title of the movie (try to use a pun!)</p>
<p>&nbsp;</p>
<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PARAGRAPH #1:</strong> &nbsp;</p>
<p>Introduce the movie by stating that you&rsquo;ve just seen this movie and would like to give an opinion about it. &nbsp;Mention a couple of details that might help the reader understand what type of movie you are talking about. &nbsp;Give credit to the company that published it.</p>
<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PARAGRAPH #3</strong>:</p>
<p>&nbsp;Summarize the plot (story). &nbsp;Where and when did it take place? &nbsp;Who are the main characters? &nbsp;What is the story about? &nbsp;Remember, do NOT include spoilers and do not tell how the story ends! &nbsp;&nbsp; Talk about the actors/actresses and discuss who did a good job and who didn&rsquo;t. &nbsp;(In &ldquo;A Christmas Carol&rdquo; it would be voice overs and cartooning.</p>
<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PARAGRAPH #4</strong>&nbsp;</p>
<p>Talk about what you liked about the movie and what you didn&rsquo;t like. &nbsp;Be sure to include specific details and scenes.</p>
<p><br /><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PARAGRAPH #5</strong>:</p>
<p>&nbsp;What group of people would like this movie? &nbsp;Who would you recommend it to? &nbsp;Who would you not recommend it to? &nbsp;What&rsquo;s the MPAA rating of the movie (G, PG, PG-13, R, etc&hellip;)? &nbsp;What is your final word on the film: &nbsp;Is it good or bad?</p>
            </textarea>
            <script>
                // Replace the <textarea id=\"editor1\"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </form>");