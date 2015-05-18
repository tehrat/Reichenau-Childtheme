<?php
/**
 * The template for displaying the home page panel. Requires SiteOrigin page builder plugin.
 *
 * Template Name: Page Builder Home
 *
 * @package vantage
 * @since vantage 1.0
 * @see http://siteorigin.com/page-builder/
 * @license GPL 2.0
 */

get_header();
?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<div class="entry-content">
			<?php
			if ( is_page() ) {
				the_post();
				the_content();
			}
			else if( function_exists('siteorigin_panels_render') ) echo siteorigin_panels_render('home');
			else echo siteorigin_panels_lite_home_render();
			?>
		</div>

        <!-- Facebookfeed -->
        <div class="panel-row-style-wide-grey wide-grey panel-row-style">
        <div class="fb-feed">
        <div class="fb-feed-script">
<?php
/**

This SDK is deprecated.  Please use the new SDK found here: https://github.com/facebook/facebook-php-sdk-v4

*/
/**
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require_once ('facebook-src/facebook.php');

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '1408485482780732',
  'secret' => '5e0f9b993575c81ae2cff59b0689c66d',
));

// Feed
$pageId = '551232641584454';
// this is Weinbau von Tscharner's page id
// to establish your page id -> http://graph.facebook.com/redbull
$rawfeed = $facebook->api($pageId . '/feed?locale=de_DE&limit=8');
// print_r($rawfeed);

// Filter

$feed = array();

    foreach($rawfeed['data'] as &$item) {
        
        $title = false;
        
        if($title === false && isset($item['created_time']) && !empty($item['created_time'])) {
            $date = $item['created_time'];
            $date = explode( '-', substr(trim($date), 0, 10) );
            $dateadj = sprintf( $date[2].'. '. $date[1].'. '.$date[0] ); 
        }
        
        
        if($title === false && isset($item['story']) && !empty($item['story'])) {
            $title = $item['story'];
        }
        
        if($title === false && isset($item['message']) && !empty($item['message'])) {
            $title = $item['message'];
        }

        $image = false;
        if($image === false && isset($item['picture']) && !empty($item['picture'])) {
            $image = $item['picture'];
        }

        $link = false;
        if($link === false && isset($item['link']) && !empty($item['link'])) {
            $link = $item['link'];
        }

        $feed[] = array(
            'created_time' => $dateadj,
            'title' => $title,
            'link' => $link,
            'image' => $image
        );
    }
?>
</div>            
<h3 class="widget-title"><a href="https://www.facebook.com/WeinbauvonTscharner">Weinbau von Tscharner auf Facebook</a></h3>
<div class="fb-feed-grid-loop">           
<?php
    foreach($feed as $item) {
?>
<figure class="fb-feed-figure">
	<?php if($item['link'] !== false) { ?><a href="<?php echo htmlspecialchars($item['link']); ?>"><?php } ?>
	<?php if($item['image'] !== false) { ?><img src="<?php echo htmlspecialchars($item['image']); ?>" alt="" /><?php } ?>
	<?php if($item['title'] !== false) { ?>
<figcaption class="fb-feed-figcaption"><span class="fb-feed-date"><?php echo htmlspecialchars($item['created_time']);?></span> <?php echo htmlspecialchars($item['title']); ?>
</figcaption><?php } ?>
	<?php if($item['link'] !== false) { ?></a><?php } ?>
</figure>
<?php
}
?>
</div>             
</div>
        </div><!-- /Facebookfeed -->        
        
        
	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>