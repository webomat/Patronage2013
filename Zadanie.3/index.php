<!DOCTYPE html>
 <html>
 <head>
         <meta charset="utf-8">
         <title>Patronage Responsive layout - home</title>
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
      					<li class="active"><a href="index.php">home</a></li>
      					<li><a href="contact.php">contact-form</a></li>
      				</ul>
		        
		      	</div>
  
    		
      		</div>
      	</div>
    </div>

  <div class="container">
  	<div class="row">
         <div class="span8">
 <div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item">
    	<img src="http://twitter.github.com/bootstrap/assets/img/bootstrap-mdo-sfmoma-01.jpg" />
    	<div class="carousel-caption">
    	
                      <h4>Second Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
	</div>
    <div class="item">
    	<img src="http://twitter.github.com/bootstrap/assets/img/bootstrap-mdo-sfmoma-02.jpg" />
    	<div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div></div>
    <div class="item">
    	<img src="http://twitter.github.com/bootstrap/assets/img/bootstrap-mdo-sfmoma-03.jpg" />
		<div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
	</div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

</div> <!-- .span -->
<div class="span4">
         <h3>Box Number 1</h3>

<div class="accordion" id="accordion2">
  
  <div class="accordion-group">   
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
        Super 1
      </a>
    </div>
    <div id="collapse1" class="accordion-body collapse">
      <div class="accordion-inner">
        To jest treść collapsed nr 1. <br /> lipsum itp.
      </div>
    </div>
  </div>
  
  <div class="accordion-group">   
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
        Super 2
      </a>
    </div>
    <div id="collapse2" class="accordion-body collapse">
      <div class="accordion-inner">
        To jest treść collapsed nr 2. <br /> lipsum itp.
      </div>
    </div>
  </div>
  
  <div class="accordion-group">   
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
        Super 3
      </a>
    </div>
    <div id="collapse3" class="accordion-body collapse">
      <div class="accordion-inner">
        To jest treść collapsed nr 3. <br /> lipsum itp.
      </div>
    </div>
  </div>
  
  <div class="accordion-group">   
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
        Super 4
      </a>
    </div>
    <div id="collapse4" class="accordion-body collapse">
      <div class="accordion-inner">
        To jest treść collapsed nr 4. <br /> Lorem lipsum itp.
      </div>
    </div>
  </div>
  
  
</div>
         </div><!-- .span4 -->

</div> <!-- .row -->
         
         

        
        
 <div class="row">
         <div class="span4">
         <h2>Box Number 1</h2>
         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
         <p><a class="btn" href="#">Click meeee &raquo;</a></p>
         </div><!-- .span4 -->
   
         <div class="span4">
                 <h2>Box Number 2</h2>
         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
         <p><a class="btn" href="#">Click meeee &raquo;</a></p>
         </div><!-- .span4 -->
   
         <div class="span4">
                 <h2>Box Number 3</h2>
         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
         <p><a class="btn" href="#">Click meeee &raquo;</a></p>
         </div><!-- .span4 -->
   
 </div><!-- .row -->
 </div><!-- .container -->
     <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>