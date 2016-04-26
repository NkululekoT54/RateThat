<?php

use Helpers\Url;
use Controllers\facebookli;

?>
<script TYPE="text/javascript" src="./facebookli/fb.js"></script>
<header id="header">
            <span class="siteName"><h1>RateThat!</h1></span>
            <span class="siteSearch">
                <form>
                    <input type="search" name="search" placeholder="Search" />
                    <input type="button" value="search" />
                </form>
                                
		<div id="sidebar" style="width: 20%; float: right;">
			<div class="fb-login-button" data-scope="public_profile,email"></div>
		</div>
            </span>
        </header>
        
        <div id="siteContent">
        <div id="d_sec">
            <section id="section">
            <a href="http://google.com"><img src='<?php echo Url:: templatePath();?>image/movie.jpg' alt='movie' class="img-responsive"></a>
            <a href="http://google.com"><img src='<?php echo Url:: templatePath();?>image/book.jpg' alt='movie' class="img-responsive"></a>
            <a href="http://google.com"><img src='<?php echo Url:: templatePath();?>image/game.jpg' alt='movie' class="img-responsive"></a>

        </section>
        </div>
        
        <footer id="footer">
        </footer>
        
        </div>
</div>