<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<!--
		  __  __            _         _      __        __   _     
		 |  \/  | __ _ _ __| | _____ ( )___  \ \      / /__| |__  
		 | |\/| |/ _` | '__| |/ / _ \|// __|  \ \ /\ / / _ \ '_ \ 
		 | |  | | (_| | |  |   < (_) | \__ \   \ V  V /  __/ |_) |
		 |_|  |_|\__,_|_|  |_|\_\___/  |___/    \_/\_/ \___|_.__/ 
		-->
        <meta charset="utf-8">
        <title>Kontakt</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">		
		<!-- Bootstrap CSS  -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">				
		<!-- font Awesome for some icons/glyphicons -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/font-awesome-ie7.min.css">	
		<!-- Scroll ready CSS & some minor updates -->
        <link rel="stylesheet" href="css/main.min.css">
		<!-- Lightbox stuff -->
		<link rel="stylesheet" href="css/lightbox.css">
		<!-- Metro UI style -->
		<link rel="stylesheet" href="css/metro-style.min.css">
        <style>
            body {
                padding-top: 5px;
                padding-bottom: 40px;
            }
			.contact {
				width: auto;
			}
        </style>		
		<!-- IE U NO SHOW HTML5 PROPERLY -->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
		<div class="container contact">
		<?php
			// check for a successful form post
				if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";    
			// check for a form error
				elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
		?> 
		<form method="POST" action="sendmail.php" class="form-horizontal">  
			<div class="control-group">  
				<label class="control-label" for="input1">Ime</label>  
					<div class="controls">  
						<input type="text" name="contact_name" id="input1" placeholder="Vaše ime">  
					</div>  
			</div>  
			<div class="control-group">  
				<label class="control-label" for="input2">E-mail adresa</label>  
					<div class="controls">  
						<input type="text" name="contact_email" id="input2" placeholder="Vaša e-mail adresa">  
					</div>  
			</div>  
			<div class="control-group">  
				<label class="control-label" for="input3">Poruka</label>  
					<div class="controls">  
						<textarea name="contact_message" id="input3" rows="8" class="span5" placeholder="Poruka koju mi želite poslati."></textarea>  
					</div>  
			</div>  
			<div class="form-actions">  
				<input type="hidden" name="save" value="contact">  
					<button type="submit" class="btn btn-primary">Pošalji</button>  
			</div>  
		</form>
		</div>
		<!-- main js loading -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>				        
		<script src="js/vendor/bootstrap.min.js"></script>		
		<!-- Bitches like smooth scrooling, right?!? -->
		<script src="js/smoothscroll.js"></script>
		<!-- some Lighbox stuff you know -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/lightbox.js"></script>		
		<!-- Portfolio style -->
		<script src="js/portfolio-sort.js"></script>		
		<!-- Damn look at that Google anlaytics --> 
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-41128475-1', 'markoidzan.from.hr');
		  ga('send', 'pageview');
		</script>
    </body>
</html>
