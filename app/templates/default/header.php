<?php
/**
 * Sample layout.
 */
use Helpers\Assets;
use Helpers\Hooks;
use Helpers\Url;

//initialise hooks
$hooks = Hooks::get();
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<?php
    //hook for plugging in meta tags
    $hooks->run('meta');
    ?>
	<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in app/Core/Config.php ?></title>

	<!-- CSS -->
	<?php
   // Assets::css([
       // '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'
       // Url::templatePath().'css/style.css',
  //  ]);
       echo(' 
 <link href=\'https://fonts.googleapis.com/css?family=Lato\' rel=\'stylesheet\' type=\'text/css\'>
 <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
             <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<!--  Scripts-->
  
  
   
   
   
   
   
   ');



    //hook for plugging in css
   // $hooks->run('css');
    ?>
    <?php

    echo(  '<script src='.Url::templatePath().'js/materialize.js'.'></script>');
    echo(  '<script src='.Url::templatePath().'js/init.js'.'></script>');


    Assets::css([
        Url::templatePath().'css/materialize.css',
        Url::templatePath().'css/materialize.min.css',
        Url::templatePath().'css/style.css',
    ]);

    //hook for plugging in css
    $hooks->run('css');
    ?>
</head>

<script type="text/javascript">
    $(document).ready(function() {

        // code for the menu slider 


        $(function() {
            //scrollpane parts
            var scrollPane = $( ".scroll-pane" ),
                scrollContent = $( ".scroll-content" );

            //build slider
            var scrollbar = $( ".scroll-bar" ).slider({
                slide: function( event, ui ) {
                    if ( scrollContent.width() > scrollPane.width() ) {
                        scrollContent.css( "margin-left", Math.round(
                                ui.value / 100 * ( scrollPane.width() - scrollContent.width() )
                            ) + "px" );
                    } else {
                        scrollContent.css( "margin-left", 0 );
                    }
                }
            });

            //append icon to handle
            var handleHelper = scrollbar.find( ".ui-slider-handle" )
                .mousedown(function() {
                    scrollbar.width( handleHelper.width() );
                })
                .mouseup(function() {
                    scrollbar.width( "100%" );
                })
                .append( "<span class='ui-icon ui-icon-grip-dotted-vertical'></span>" )
                .wrap( "<div class='ui-handle-helper-parent'></div>" ).parent();

            //change overflow to hidden now that slider handles the scrolling
            scrollPane.css( "overflow", "hidden" );

            //size scrollbar and handle proportionally to scroll distance
            function sizeScrollbar() {
                var remainder = scrollContent.width() - scrollPane.width();
                var proportion = remainder / scrollContent.width();
                var handleSize = scrollPane.width() - ( proportion * scrollPane.width() );
                scrollbar.find( ".ui-slider-handle" ).css({
                    width: handleSize,
                    "margin-left": -handleSize / 2
                });
                handleHelper.width( "" ).width( scrollbar.width() - handleSize );
            }

            //reset slider value based on scroll content position
            function resetValue() {
                var remainder = scrollPane.width() - scrollContent.width();
                var leftVal = scrollContent.css( "margin-left" ) === "auto" ? 0 :
                    parseInt( scrollContent.css( "margin-left" ) );
                var percentage = Math.round( leftVal / remainder * 100 );
                scrollbar.slider( "value", percentage );
            }

            //if the slider is 100% and window gets larger, reveal content
            function reflowContent() {
                var showing = scrollContent.width() + parseInt( scrollContent.css( "margin-left" ), 10 );
                var gap = scrollPane.width() - showing;
                if ( gap > 0 ) {
                    scrollContent.css( "margin-left", parseInt( scrollContent.css( "margin-left" ), 10 ) + gap );
                }
            }

            //change handle position on window resize
            $( window ).resize(function() {
                resetValue();
                sizeScrollbar();
                reflowContent();
            });
            //init scrollbar size
            setTimeout( sizeScrollbar, 10 );//safari wants a timeout
        });

        // end of slider coder

        $(".WriteReviewButton").click(function (){

           ShowPlayCards();

        });
        $(".movieButton").click(function () {
            RemovePlayCards();
            ShowMovieSearch();
            window.alert('this is working');
        });

        $(".bookButton").click(function (){

           RemovePlayCards();
            ShowBookSearch();
        });

        $(".gameButton").click(function (){

            RemovePlayCards();
            ShowGameSearch();
        });

        function RemovePlayCards(){

            //$(".GameCard").hide();
            $(".GameCard").remove();
        //    $(".BookCard").hide();
            $(".BookCard").remove();
        //    $(".movieCard").hide();
            $(".movieCard").remove();


        }

        function ShowPlayCards() {
            $(".GameCard").show();
            //    $(".BookCard").hide();
            $(".BookCard").show();
            //    $(".movieCard").hide();
            $(".movieCard").show();

        }



        function ShowMovieSearch(){


            $(".MovieSearchWrapper").show();
        }

        function ShowGameSearch(){

            $(".GameSearchWrapper").show();
        }

        function ShowBookSearch(){

            $(".BookSearchWrapper").show();

        }

    });
</script>

<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<body style="background: beige;">
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">


        </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons"></i></h2>
                    <h5 class="center">Games</h5>

                    <p class="light"></p>
                </div>
            </div>




        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light"></h5>
            </div>
        </div>
    </div>
    <div class="parallax"></div>
</div>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h4>Contact Us</h4>
                <p class="left-align light"></p>
            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light"></h5>
            </div>
        </div>
    </div>
    <div class="parallax"></div>
</div>

