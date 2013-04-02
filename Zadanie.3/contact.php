<!DOCTYPE html>
 <html>
 <head>
	 <meta charset="utf-8">
	 <title>Patronage Responsive layout - contact</title>
	 <link rel="stylesheet" href="css/bootstrap.css">
	 <link rel="stylesheet" href="css/bootstrap-responsive.css">
 </head>
 <body>
 	
 	<div class="navbar">
 		<div class="navbar-inner">
 			<div class="container">
 				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
		      	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		      	</a>
		 
		      	<!-- Be sure to leave the brand out there if you want it shown -->
		      	<a class="brand" href="#">Patronage 2013</a>
		 
		      	<!-- Everything you want hidden at 940px or less, place within here -->
		      	<div class="nav-collapse collapse">
		        	<!-- .nav, .navbar-search, .navbar-form, etc -->
		        	<ul class="nav">
      					<li><a href="index.php">home</a></li>
      					<li class="active"><a href="contact.php">contact-form</a></li>
      				</ul>
		        
		      	</div>
  
    		
      		</div>
      	</div>
    </div>
    
    <div class="container">
  	<div class="row">
         <div class="span8">
         	<h1>Napisz do nas!</h1>
         	
         	<form class="form-horizontal">
         		
         		<div class="control-group">
         			<label class="control-label" for="inputEmail">Email</label>
         			<div class="controls">
         				<input type="text" id="inputEmail" placeholder="adres@domena.pl">
         			</div>
         		</div>
         		
         		<div class="control-group">
         			<label class="control-label" for="inputTopic">Temat wiadomości</label>
         			<div class="controls">
         				<input type="password" id="inputTopic" placeholder="O czym chcesz napisać?">
         			</div>
         		</div>
         		
         		<div class="control-group">
         			<label class="control-label" for="inputTopic">Wiadomość</label>
         			<div class="controls">
         				<textarea rows="3" placeholder="Napisz treść"></textarea>
         			</div>
         		</div>
         		
         		
         		<div class="control-group">
         			<div class="controls">
         				<label class="checkbox">
         					<input type="checkbox"> Zgadzam się na przetwarzanie moich danych osobowych.
         				</label>
         				
         				<button type="submit" class="btn">Wyślij</button>
         			</div>
         		</div>
         	</form>
         </div>
 
   
         <div class="span4">
         	<h3>Info</h3>
         	<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
         	
         	
         </div><!-- .span4 -->
         
    </div><!-- .row -->
 </div><!-- .container -->
    
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>