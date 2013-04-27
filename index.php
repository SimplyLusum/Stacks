    <?php include("config.php"); ?>
    <?php include("section/head.php"); ?>

                 
    <body id="home" class="<?=$Layoutstyle?>" data-spy="scroll">

	<div id="master-wrap">
	
		<!-- Header -->
       		<?php include("section/header.php"); ?>


		<!-- Content -->
		
		<!-- Main hero unit for a primary marketing message or call to action -->
        <?php include("section/hero.php"); ?>	


 	       <div id="main-content" class="container">

            <?php include("section/about.php"); ?>			
			
            <hr>

            <?php include("section/services.php"); ?>
            
            <hr> 
            
            <?php include("section/pricing.php"); ?>
            
            <hr> 
                     
            <?php include("section/location.php"); ?>

	        </div> <!-- /#main-content-->   
        
        
        <!-- Footer -->
        <?php include("section/footer.php"); ?>
        
