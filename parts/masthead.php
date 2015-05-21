<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
<script type="text/javascript">
function toggleDiv(divId) {
   $("#"+divId).toggle();
}
$(document).ready(function() {
     $('#toggle').click(function() {
          $('#mapbase').slideToggle(1000, 'linear', function() {
           //callback function after animation finished
          });
         });
        
        });     
    </script>

</script>


<?php
/**
 * Part Name: Default Masthead
 */
?>
<header id="masthead" class="site-header" role="banner">

  <div class="hgroup full-container">
	    <div align="center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo">
        <?php vantage_display_logo(); ?>
		      </a>
		      
		      <?php if( is_active_sidebar('sidebar-header') ) : ?>
		      
    </div>
		    <div id="header-sidebar" <?php if( siteorigin_setting('logo_no_widget_overlay') ) echo 'class="no-logo-overlay"' ?>>
		      <div align="center">
		        <?php
				// Display the header area sidebar, and tell mobile navigation that we can use menus in here
				add_filter('siteorigin_mobilenav_is_valid', '__return_true');
				dynamic_sidebar( 'sidebar-header' );
				remove_filter('siteorigin_mobilenav_is_valid', '__return_true');
				?>
	          </div>
	        </div>

	    <div align="center">
		      <?php else : ?>
		      
    </div>
		    <div class="support-text">
		      <div align="center">
		        <?php do_action('vantage_support_text'); ?>
	          </div>
	        </div>

	    <div align="center">
		      <?php endif; ?>
		      
    </div>
  </div>
  <div align="center">
    <!-- .hgroup.full-container -->
    
    <?php get_template_part( 'parts/menu', apply_filters( 'vantage_menu_type', siteorigin_setting( 'layout_menu' ) ) ); ?><div id="toggle">
  <img src="http://www.reichenau.ch/wp-content/themes/reichenau/images/toggle.gif"/>
    
  </div>
</header>
<div align="center">
  <!-- #masthead .site-header -->
</div>
<div class="mapbaseramen">   
  <div align="center"><img id="mapbase" src="http://www.reichenau.ch/wp-content/themes/reichenau/images/map.jpg" border="0" width="1080" height="682" orgWidth="1080" orgHeight="682" usemap="#toggle" alt=""/>
    <map name="toggle" id="mapbase">
      <area  alt="" title="Schloss  Umgebung" href="http://www.reichenau.ch/reichenau" shape="poly" coords="537.6699523925781,559.219970703125,540.3399963378906,625.8899536132812,553.2200012207031,624.1099853515625,558.5599670410156,649,648.3399963378906,640.5499877929687,751.4499816894531,608.5499877929687,748.3399963378906,582.3299560546875,731.8899841308594,544.5499877929687,723.4499816894531,549.4400024414062,717.6699523925781,485.4399719238281,722.5599670410156,481.8899841308594,683.4499816894531,428.9999694824219,655.8899841308594,381.4399719238281,633.2199401855469,379.77996826171875,620.3399963378906,364.22998046875,618.9999694824219,358.4499816894531,608.7799987792969,338,598.5599670410156,338,597.6699523925781,333.1199951171875,594.5599670410156,327.3399963378906,595.8899841308594,343.3399963378906,595.4499816894531,340.66998291015625,576.3399963378906,349.1199951171875,579.4499816894531,356.22998046875,513.6699523925781,382.4499816894531,522.9999694824219,397.1199951171875,526.5599670410156,429.55999755859375,535.4499816894531,472.66998291015625,552.3399963378906,491.7799987792969,597.6699523925781,488.66998291015625,618.1099548339844,512.2300109863281,630.1099548339844,536.6700134277344,628.7799987792969,549.9999694824219" style="outline:none;" target="_self"     />
    </map>
  </div>
</div>
