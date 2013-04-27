        <footer id="footer">          
          <section class="container">

	  		<!-- Footer menu -->
	  		<div id="footer_menu">
      			<ul id="footer_menu_box">
      			  	<li><a href="https://github.com/redfrost/Stacks">Download</a></li>
                    <li><a onmouseover="this.style.cursor='pointer'" rel="popover" data-placement="top" data-content="Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE." title="Copyright &copy; 2013 Redfrost">License</a></li>

      			  	
      			  	<li><a href="../stacks/index.php">Static</a></li>
      			  	<li><a href="../stacks2/index.php">Responsive</a></li>
      			  	<li><a onmouseover="this.style.cursor='pointer'" rel="tooltip" data-placement="top" title="V1.2.3">Version</a></li>
      			  	                    
      			  	                    
      			</ul>
      		</div>

	  		<!-- SNS Links -->
      		<div id="sns_icons">
      			<ul id="sns_icons_box">
      				<li><a class="facebook" href="#"><i class="icon-facebook-sign"></i></a></li>
      				<li><a class="twitter" href="#"><i class="icon-twitter-sign"></i></a></li>
      				<li><a class="vimeo" href="#"><i class="icon-vimeo-sign"></i></a></li>
      				<li><a class="feed" href="#"><i class="icon-rss"></i></a></li>
				</ul>
			</div>

		  <div id="copyright_box">
	          <p id="copyright">&copy; <?php echo date("Y") ?> Stacks</p>
	          <p id="maker">Redfrost Design</p>
      	  </div>
          
          <p id="to_top"><a href="#"><i class="icon-arrow-up"></i> Back To Top</a></p>
          
          </section>
        </footer><!-- /#footer -->
        
        
	</div><!-- /#master-wrap-->
	
	
	
	
	
	    <!-- Modal Popup - Insert your code -->



			
	
	
		<!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>
        <script src="js/script.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/smooth-scroll.min.js"></script><!-- Smooth Scroll -->
        <script src="js/wufoo.js"></script><!-- Form control -->
        

        <!-- Plugins -->
    	<script type="text/javascript" src="plugin/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    	<script type="text/javascript" src="plugin/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    	<link rel="stylesheet" type="text/css" href="plugin/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    	<script type="text/javascript">
    		$(document).ready(function() {
    		
    			$("a.fancybox").fancybox({
    				'titlePosition'		: 'outside',
    				'overlayColor'		: '#000',
    				'overlayOpacity'	: 0.9    			
    			});
    			
			    $("a[rel=fancybox_gallery]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				    }
			    });  
			    
                $(document).ready(function() {
                $('.fancybox.video').fancybox({
                    'overlayColor'		: '#000',
    				'overlayOpacity'	: 0.6,
                    'padding': 0, //optional
                    'width': 960, //or whatever
                    'height': 540, //or whatever
                    'type': 'iframe'
                    });
                }); //ready
			      	
			});		
	    </script>

		<!-- Analytics -->
        <script>
          var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
          (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>               
        
    </body>
</html>


        