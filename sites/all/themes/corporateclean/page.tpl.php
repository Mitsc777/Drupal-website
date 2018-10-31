<!-- #header -->
<div id="header">
	<!-- #header-inside -->
    <div id="header-inside" class="container_12 clearfix">
    	<!-- #header-inside-left -->
        <div id="header-inside-left" class="grid_8">
            
            <?php if ($logo): ?>
            <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
            <?php endif; ?>
     
            <?php if ($site_name || $site_slogan): ?>
            <div class="clearfix">
            <?php if ($site_name): ?>
			<br>
            <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
            <?php endif; ?> 
            <?php if ($site_slogan): ?>
			<br>
            <span id="slogan"><?php print $site_slogan; ?></span>
            <?php endif; ?>
            </div>
            <?php endif; ?>
            
        </div><!-- EOF: #header-inside-left -->
        
        <!-- #header-inside-right -->    
        <div id="header-inside-right" class="grid_4">

			<?php print render($page['search_area']); ?>

        </div><!-- EOF: #header-inside-right -->
    
    </div><!-- EOF: #header-inside -->

</div><!-- EOF: #header -->

<!-- #header-menu -->
<div id="header-menu">
	<!-- #header-menu-inside -->
    <div id="header-menu-inside" class="container_12 clearfix">
    
    	<div class="grid_12">
            <div id="navigation" class="clearfix">
            <?php if ($page['navigation']) :?>
            <?php print drupal_render($page['navigation']); ?>
            <?php else :
            if (module_exists('i18n_menu')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
            } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
            }
            print drupal_render($main_menu_tree);
            endif; ?>
            </div>
        </div>
        
    </div><!-- EOF: #header-menu-inside -->

</div><!-- EOF: #header-menu -->

<!-- #banner -->
<div id="banner">

	<?php print render($page['banner']); ?>
	
    <?php if (theme_get_setting('slideshow_display','corporateclean')): ?>
    
    <?php if ($is_front): ?>
    
    <!-- #slideshow -->
    <div id="slideshow">
    
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0;">
                <img class="masked" width=900px height=100px src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/eiffel.jpg"/>
                </div>
                <h2>Europe Tour</h2>
                <strong>London-Paris-Zurich</strong><br/>
                <br/>
                If you have always dreamt of an unforgettable vacation in Europe, you should pick this package. Your exciting European escapade starts with your arrival in London, a charming city with a royal heritage and an incredible wealth of history. With a rich culture and exciting attractions, there is no better place than London to begin this grand holiday. Upon arrival and due rest, you would head for a guided London city tour. Start the sightseeing tour with a visit to Buckingham Palace, the office for the Head of State as well as the official residence of Queen Elizabeth ll. The tour also introduces you to the places like the Piccadilly Circus, Trafalgar Square, Big Ben, Houses of Parliament, London Eye and others. After enjoying London’s ambience, you can enchant yourself in Paris, roam around in Switzerland, and come back with bags full of memories.
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="package/europe/europe-tour">Check Package</a></div>
                <!--EOF:slider-item content-->
                
                </div>
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:right; padding:0 0 0 30px;">
                <img class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/taj.jpg"/>
                </div>
                <h2>India Tour</h2>
                <strong>Tamil Nadu-Agra-Kerela</strong><br/>
                Southern India is a sacred natural wonder because the places here are not only awe-inspiring but also captivate the visitors with their culture, history and spirituality, which are magnificently reflected through its beautiful temples and marvelous monuments. Visit to the various alluring places like Chennai, Kanchipuram, Mahabalipuram, Kumbakonam, Tanjore, Rameshwaram and many other places form the itinerary. The 24 days and 23 nights tour package will help you to discover your spiritual side. The package includes a visit to all the wonderful temples sprinkled across South India like the Kapaleeshwarar Temple, Pallava Temple, Brihadeeswarar Temple, Sri Ramanathaswamy Temple and so on. The tour will certainly offer you a spiritual enlightenment and pleasurable memories. 
                
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="package/asia/india">Check Package</a></div>
                <!--EOF:slider-item content-->
                
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
				 <div style="float:right; padding:0 0 0 30px;">
                <img class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/titlis.jpg"/>
                </div>
                <h2>Africa Tour</h2>
                <strong>South Africa</strong><br/>
                
                <br/>
                In the past few years, South Africa has raced to the top of many travelers' must-visit lists. Filled with stunning vistas, cool cities, and all that famous African wildlife, the country really does have it all.

Add to this a strong US dollar and weaker South African rand, and it's never been a better time to travel to South Africa.
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="package/africa/south-africa">Check Package</a></div>
                <!--EOF:slider-item content-->
                
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
				 <div style="float:right; padding:0 0 0 30px;">
                <img class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/merlion.jpg"/>
                </div>
                <h2>Singapore Tour</h2>
                <strong>Singapore</strong><br/>
                
                <br/>
               Pick this awesome Singapore tour package and head for an exciting vacation to the stunning island city-state known for its skyscrapers, picturesque lush jungles, and vibrant lifestyle. As you reach Singapore, unwind for a while and thereafter head for a thrilling exploration of the city. The package includes a half-day sightseeing tour, which will take you to the most prominent attractions of Singapore. If you have opted for the ‘with frills’ package, then enjoy some exclusive activities and excursions. You would go on an exciting Singapore night safari and enjoy a fiery Thumbuakar tribal performance and a guided tram safari adventure. You should also climb atop the Singapore Flyer to enjoy a spectacular view of the city. Then head to the famous Orchard Market and indulge in some souvenir shopping
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="package/asia/Singapore">Check Package</a></div>
                <!--EOF:slider-item content-->
                
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->

    
    </div>
    <!-- EOF: #slideshow -->
    
    <!-- #slider-controls-wrapper -->
    <div id="slider-controls-wrapper">
        <div id="slider-controls" class="container_12">
            <ul id="slider-navigation">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
    <!-- EOF: #slider-controls-wrapper -->
    
    <?php endif; ?>
    
	<?php endif; ?>  

</div><!-- EOF: #banner -->


<!-- #content -->
<div id="content">
	<!-- #content-inside -->
    <div id="content-inside" class="container_12 clearfix">
    
        <?php if ($page['sidebar_first']) :?>
        <!-- #sidebar-first -->
        <div id="sidebar-first" class="grid_4">
        	<?php print render($page['sidebar_first']); ?>
        </div><!-- EOF: #sidebar-first -->
        <?php endif; ?>
        
        <?php if ($page['sidebar_first'] && $page['sidebar_second']) { ?>
        <div class="grid_4">
        <?php } elseif ($page['sidebar_first'] || $page['sidebar_second']) { ?>
        <div id="main" class="grid_8">
		<?php } else { ?>
        <div id="main" class="grid_12">    
        <?php } ?>
            
            <?php if (theme_get_setting('breadcrumb_display','corporateclean')): print $breadcrumb; endif; ?>
            
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
       
            <?php if ($messages): ?>
            <div id="console" class="clearfix">
            <?php print $messages; ?>
            </div>
            <?php endif; ?>
     
            <?php if ($page['help']): ?>
            <div id="help">
            <?php print render($page['help']); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($action_links): ?>
            <ul class="action-links">
            <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            
			<?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1><?php print $title ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            
            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
            
            <?php print render($page['content']); ?>
            
            <?php print $feed_icons; ?>
            
        </div><!-- EOF: #main -->
        
        <?php if ($page['sidebar_second']) :?>
        <!-- #sidebar-second -->
        <div id="sidebar-second" class="grid_4">
        	<?php print render($page['sidebar_second']); ?>
        </div><!-- EOF: #sidebar-second -->
        <?php endif; ?>  

    </div><!-- EOF: #content-inside -->

</div><!-- EOF: #content -->

<!-- #footer -->    
<div id="footer">
	<!-- #footer-inside -->
    <div id="footer-inside" class="container_12 clearfix">
    
        <div class="footer-area grid_4">
        <?php print render($page['footer_first']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_4">
        <?php print render($page['footer_second']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_4">
        <?php print render($page['footer_third']); ?>
        </div><!-- EOF: .footer-area -->
       
    </div><!-- EOF: #footer-inside -->

</div><!-- EOF: #footer -->

<!-- #footer-bottom -->    
<div id="footer-bottom">

	<!-- #footer-bottom-inside --> 
    <div id="footer-bottom-inside" class="container_12 clearfix">
    	<!-- #footer-bottom-left --> 
    	<div id="footer-bottom-left" class="grid_8">
        
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary-menu', 'links', 'clearfix')))); ?>
            
            <?php print render($page['footer']); ?>
            
        </div>
    	<!-- #footer-bottom-right --> 
        <div id="footer-bottom-right" class="grid_4">
        
        	<?php print render($page['footer_bottom_right']); ?>
        
        </div><!-- EOF: #footer-bottom-right -->
       
    </div><!-- EOF: #footer-bottom-inside -->
    
    <?php if (theme_get_setting('credits_display','corporateclean')): ?>
    <!-- #credits -->   
    <div id="credits" class="container_12 clearfix">
        <div class="grid_12">
        <b>777 Tours & Travels</b> <br> <p>A website by <a href="http://www.twitter.com/Mitsc777">Mitanshu Chowatia</a> <br>Copyright &copy 2017 
        </div>
    </div>
    <!-- EOF: #credits -->
    <?php endif; ?>

</div><!-- EOF: #footer -->