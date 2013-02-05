<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <?php include("section/head.php"); ?>

	<body id="home" class="static" data-spy="scroll">

	<div id="master-wrap">
	
		<!-- Header -->
        <?php include("section/header.php"); ?>


		<!-- Content -->
		
			<!-- Main hero unit for a primary marketing message or call to action -->
            <?php include("section/hero.php"); ?>



        <div id="main-content" class="container">
			<section id="about">
			<div class="row-fluid">
				<div class="span7"><h2>Simple &amp; Intuitive Design</h2>
					<p class="byline">Pellentesque ornare sem</p>
					
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>					
					
					<ul class="tick_box">
					<li><i class="icon-ok"></i> <strong>Pellentesque ornare</strong></li>
					<li><i class="icon-ok"></i> <strong>Sem lacinia quam venenatis</strong></li>
					<li><i class="icon-ok"></i> <strong>Vestibulum</strong></li>
					</ul>
					
					
					<a href="#">View Gallery &raquo;</a></div>
				<div class="span5"><img src="img/image_01.jpg" alt="" /></div>							
			</div>
			</section>
			
			
			<hr>


            <section id="services">
			<div class="row-fluid">            
                <div class="span4">
                    <img src="img/image_02.jpg" alt="" />
                    <h2>Inspirational Word</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
                <div class="span4">
	                <img src="img/image_03.jpg" alt="" />
                    <h2>Creative Thinking</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
               </div>
                <div class="span4">
	                <img src="img/image_04.jpg" alt="" />
                    <h2>Passionate Action</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
            </div>    
            </section>
         
            
           <hr> 
         
            
           <section id="contact">
           					<h2><i class="icon-comments-alt"></i> Got Questions?</h2>
					<p class="byline">Help and support</p>
					
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Etiam porta sem malesuada magna.</p>
           <div class="row-fluid">       
               
				<div class="span7">

					
					<div class="well">
					<h3><strong>LOCATION:</strong></h3>
					<p>36 Praesent commodo cursus magna<br />
					Laputa, Glubbdubdrib<br />
					Houyhnhnms.</p>
					<p>PH: 123-456-7890<br />
					FAX: 123-456-7890
					</p>		
					<h6><em>*Scelerisque nisl consectetur et.</em></h6>		
						
					</div>
							
					<a id="popup_trigger" class="btn btn-info btn-large" href="#popup" data-toggle="modal">Enquiry &raquo;</a><!-- Popup trigger -->   				
				</div>						
				
				<div class="span5 map">			
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=sydney&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=55.455479,114.169922&amp;ie=UTF8&amp;hq=&amp;hnear=Sydney+New+South+Wales,+Australia&amp;t=m&amp;z=10&amp;ll=-33.867487,151.20699&amp;output=embed">
				</iframe>
					
				</div>				
		  </div>
		  </section>

        </div> <!-- /#main-content-->   
        
        
        <!-- Footer -->
        <?php include("section/footer.php"); ?>
        
        
	</div><!-- /#master-wrap-->
	
	
	    <!-- Modal Popup Contact Form - Replace this with your own form -->
	    <?php include("section/contact-form.php"); ?>

	
	
		<!-- Scripts -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>
        <script src="js/script.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/smooth-scroll.min.js"></script><!-- Smooth Scroll -->
        <script src="js/wufoo.js"></script><!-- Form control -->
        

		<!-- Analytics -->
        <script>
          var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
          (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        
    </body>



</html>
