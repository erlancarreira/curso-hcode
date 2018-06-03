<?php include_once("header.php"); ?>

<link rel="stylesheet" type="text/css" href="assets/plyr/dist/plyr.css">
   <section>
   	   <div id="call-to-action">
   	    	<div class="container">
   	    		<div class="row text-center">
   	    			<h2>Vídeos</h2>
   	    			<div class="hr"></div>
   	    		</div>
   	    		<div class="row">
   	    			<div class="player">
   	    				<video id="player" src="assets/mp4/highlights.mp4" controls poster="assets/images/highlights.jpg">
   	    					<track kind="captions" label="Português (Brasil)" src="assets/vtt/legendas.vtt" srclang="pt-br" default> 
   	    				</video>
   	    			</div>
   	    			<input id="volume" type="range" min="0" max="1" step="0.01" value="1">
   	    			<button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button>
   	    		</div>
   	    	</div>
   	    </div>	

   	    <div id="news" class="container" style="top: 0;"> 

   	    	<div class="row text-center">
	   	        <h2>Latest News</h2>
	   	        <div class="hr"></div>
	   	    </div>

	   	    <div class="row thumbnails ">	
	   	    	<div class="item" data-video="highlights">
	   	    		<div class="item-inner">
		   	    		<img src="assets/images/highlights.jpg" alt="Noticia">
		   	    		<h3>Highlights</h3>
		   	    		
	   	    		</div>
	   	    	</div>	
	   	    	<div class="item" data-video="Orlando_City_Foundation_2015">
	   	    		<div class="item-inner">
		   	    		<img src="assets/images/Orlando_City_Foundation_2015.jpg" alt="Noticia">
		   	    		<h3>Orlando City Foundation 2015</h3>
		   	    		
	   	    		</div>
	   	    	</div>	

	   	    	<div class="item" data-video="highlights">
	   	    		<div class="item-inner">
		   	    		<img src="assets/images/highlights.jpg" alt="Noticia">
		   	    		<h3>Highlights</h3>
		   	    		
	   	    		</div>
	   	    	</div>	
	   	    	<div class="item" data-video="Orlando_City_Foundation_2015">
	   	    		<div class="item-inner">
		   	    		<img src="assets/images/Orlando_City_Foundation_2015.jpg" alt="Noticia">
		   	    		<h3>Orlando City Foundation 2015</h3>
		   	    		
	   	    		</div>
	   	    	</div>	
   	    	</div>				
   	    	
   	    </div>	
   
   </section>

   <?php include_once("footer.php"); ?>
 
   <script type="text/javascript" src="assets/plyr/dist/plyr.js"></script>
   <script type="text/javascript">
   	$(function() {
   	    $(".thumbnails .item").on("click", function(){
   	    	console.log($(this).data("video"));
   	    	$("video").attr({
   	    		"src":"assets/mp4/"+$(this).data('video')+".mp4",
   	    		"poster":"assets/images/"+$(this).data('video')+".jpg"
   	    	});
   	    });

   	    $("#volume").on("mousemove", function() {
              $("video")[0].volume = parseFloat($(this).val());

   	    });	

   	    $("#btn-play-pause").on("click", function(){
            
            var video = $("video")[0];

            if ($(this).hasClass("btn-success")) {
            	$(this).text("STOP");
            	video.play();
            } else {
            	$(this).text("PLAY");
            	video.pause();
            }

            $(this).toggleClass("btn-success btn-danger");
   	    });

   	    const player = new Plyr('#player'); //Instanciando o Player
   	}); 
   </script>
