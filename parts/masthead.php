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
<div align="center">
<img id="mapbase" src="http://www.reichenau.ch/wp-content/themes/reichenau/images/map.jpg" border="0" width="1080" height="670" orgWidth="1080" orgHeight="670" usemap="#toggle" alt="" />
<map name="toggle" id="mapbase">

<!-- Weinbistro
<area class="tooltip" alt="" title="Weinbistro"  href="http://www.reichenau.ch/weinbistro/" shape="poly"   coords="561,354,606,434,710,413,689,410,689,393,680,377,686,375,686,330,671,284,654,278,620,287,617,285,600,289,560,304" style="outline:none;" target="_self" 
onclick="http://www.reichenau.ch/weinbistro/" 
onmouseover="if(document.images) document.getElementById('mapbase').src='http://www.reichenau.ch/wp-content/themes/reichenau/images/map1.jpg';" 
onmouseout="if(document.images) document.getElementById('mapbase').src='http://www.reichenau.ch/wp-content/themes/reichenau/images/map.jpg';"  />
-->

<area class="tooltip" alt="" title="Saal" href="http://www.reichenau.ch/reichenau/infrastruktur/" shape="poly" coords="687,379,771,360,771,323,756,288,680,303,690,329,684,329" style="outline:none;" target="_self" 
onclick="http://www.reichenau.ch/reichenau/infrastruktur/" 
onmouseover="if(document.images) document.getElementById('mapbase').src='http://www.reichenau.ch/wp-content/themes/reichenau/images/map2.jpg';" 
onmouseout="if(document.images) document.getElementById('mapbase').src= 'http://www.reichenau.ch/wp-content/themes/reichenau/images/map.jpg';"  />

<area class="tooltip" alt="" title="Landwirtschaftsbetrieb" href="http://www.reichenau.ch/reichenau/landwirtschaft/" shape="poly" 
coords="506,462,533,563,500,567,483,578,498,632,633,602,662,664,816,626,794,579,855,558,849,524,789,435,753,420,714,455,723,517,753,550,642,574,591,444" style="outline:none;" target="_self" 
onclick="http://www.reichenau.ch/reichenau/landwirtschaft/" 
onmouseover="if(document.images) document.getElementById('mapbase').src='http://www.reichenau.ch/wp-content/themes/reichenau/images/map3.jpg';" 
onmouseout="if(document.images) document.getElementById('mapbase').src= 'http://www.reichenau.ch/wp-content/themes/reichenau/images/map.jpg';"  />

<area class="tooltip"  alt="" title="Schloss Reichenau, Familie Von Tscharner, Weinkeller, Verkauf" href="http://www.reichenau.ch/reichenau/wer-sind-wir" shape="poly" 
coords="393,407,399,455,408,455,408,472,480,464,557,440,557,422,546,392,534,394,531,350,486,276,467,274,459,276,459,258,450,242,440,245,425,253,425,261,419,263,381,274,396,340,407,356,438,350,464,388,462,398,464,405" style="outline:none;" target="_self" onclick="http://www.reichenau.ch/reichenau/wer-sind-wir/" 
onmouseover="if(document.images) document.getElementById('mapbase').src='http://www.reichenau.ch/wp-content/themes/reichenau/images/map4.jpg';" 
onmouseout="if(document.images) document.getElementById('mapbase').src= 'http://www.reichenau.ch/wp-content/themes/reichenau/images/map.jpg';" data-maphilight='Familie Von Tscharner
Weinkeller
Verkauf
' />

<area class="tooltip" alt="" title="Kapelle mit Spiegelsaal und Luis Philipp-Zimmer" href="http://www.reichenau.ch/reichenau/infrastruktur/" shape="poly" 
coords="83,458,99,459,123,450,146,450,392,429,393,402,464,399,461,389,438,355,294,370,294,363,275,356,264,362,261,373,126,386,126,381,107,381,98,366,93,366,95,383,90,409,83,404,78,405,75,409,78,436" style="outline:none;" target="_self" onclick="http://www.reichenau.ch/reichenau/infrastruktur/" 
onmouseover="if(document.images) document.getElementById('mapbase').src='http://www.reichenau.ch/wp-content/themes/reichenau/images/map5.jpg';" 
onmouseout="if(document.images) document.getElementById('mapbase').src= 'http://www.reichenau.ch/wp-content/themes/reichenau/images/map.jpg';" data-maphilight='mit Spiegelsaal und Luis Philipp-Zimmer' />

<area class="tooltip" alt="" title="Post Haus mit Mietwohnungen" href="http://www.reichenau.ch/reichenau/infrastruktur/" shape="poly" 
coords="410,230,415,260,425,257,421,252,451,240,460,256,466,265,485,274,493,283,523,275,520,243,496,200,464,214,437,200,428,202" style="outline:none;" target="_self" 
onclick="http://www.reichenau.ch/reichenau/infrastruktur/" 
onmouseover="if(document.images) document.getElementById('mapbase').src='http://www.reichenau.ch/wp-content/themes/reichenau/images/map6.jpg';" 
onmouseout="if(document.images) document.getElementById('mapbase').src= 'http://www.reichenau.ch/wp-content/themes/reichenau/images/map.jpg';"  />
</map>
</div>
</div>
