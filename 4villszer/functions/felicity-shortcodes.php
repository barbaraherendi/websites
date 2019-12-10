<?php 
/**
 * Felicity functions and definitions
 *
 * Custom Shortcodes
 *
 * @package Felicity
 * 
 */

/* Remove extra P tags */
function felicity_shortcodes_formatter($content) {
	$block = join("|",array("youtube", "vimeo", "soundcloud", "button", "dropcap", "highlight", "checklist", "tabs", "tab", "accordian", "toggle", "one_half", "one_third", "one_fourth", "two_third", "three_fourth", "tagline_box", "pricing_table", "pricing_column", "pricing_price", "pricing_row", "pricing_footer", "content_boxes", "content_box", "slider", "slide", "testimonials", "testimonial", "progress", "person", "recent_posts", "recent_works", "alert", "fontawesome", "social_links", "clients", "client", "title", "separator"));

	// opening tag
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);

	// closing tag
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)/","[/$2]",$rep);

	return $rep;
}

add_filter('the_content', 'felicity_shortcodes_formatter');
add_filter('widget_text', 'felicity_shortcodes_formatter');

/*  Youtube shortcode */
add_shortcode('youtube', 'felicity_shortcode_youtube');
	function felicity_shortcode_youtube($atts) {
		$atts = shortcode_atts(
			array(
				'id' => '',
				'width' => 600,
				'height' => 360
			), $atts);

			return '<div style="max-width:'.$atts['width'].'px;max-height:'.$atts['height'].'px;"><div class="video-shortcode"><iframe title="YouTube video player" width="' . $atts['width'] . '" height="' . $atts['height'] . '" src="http://www.youtube.com/embed/' . $atts['id'] . '" frameborder="0" allowfullscreen></iframe></div></div>';
	}
	
/* Vimeo shortcode */
add_shortcode('vimeo', 'felicity_shortcode_vimeo');
	function felicity_shortcode_vimeo($atts) {
		$atts = shortcode_atts(
			array(
				'id' => '',
				'width' => 600,
				'height' => 360
			), $atts);
		
			return '<div style="max-width:'.$atts['width'].'px;max-height:'.$atts['height'].'px;"><div class="video-shortcode"><iframe src="http://player.vimeo.com/video/' . $atts['id'] . '" width="' . $atts['width'] . '" height="' . $atts['height'] . '" frameborder="0"></iframe></div></div>';
	}
	
/* Button shortcode */
add_shortcode('btn', 'felicity_shortcode_button');
	function felicity_shortcode_button($atts, $content = null) {
			if(!$atts['color']) {
				$atts['color'] = 'default';
			}
			return '<a class="button ' . $atts['size'] . ' ' . $atts['color'] . '" href="' . $atts['link'] . '" target="' . $atts['target'] . '">' .do_shortcode($content). '</a>';
	}
	
/* Dropcap shortcode */
add_shortcode('dropcap', 'felicity_shortcode_dropcap');
	function felicity_shortcode_dropcap( $atts, $content = null ) {  
		
		return '<span class="dropcap">' .do_shortcode($content). '</span>';  
		
}
	
/* Highlight shortcode */
add_shortcode('highlight', 'felicity_shortcode_highlight');
	function felicity_shortcode_highlight($atts, $content = null) {
		$atts = shortcode_atts(
			array(
				'color' => 'yellow',
			), $atts);
			
			if($atts['color'] == 'black') {
				return '<span class="highlight2">' .do_shortcode($content). '</span>';
			} else {
				return '<span class="highlight1">' .do_shortcode($content). '</span>';
			}

	}
	
/* Check list shortcode */
add_shortcode('checklist', 'felicity_shortcode_checklist');
	function felicity_shortcode_checklist( $atts, $content = null ) {
	
	$content = str_replace('<ul>', '<ul class="arrow">', do_shortcode($content));
	$content = str_replace('<li>', '<li>', do_shortcode($content));
	
	return $content;
	
}

/* Tabs shortcode */
add_shortcode('tabs', 'felicity_shortcode_tabs');
	function felicity_shortcode_tabs( $atts, $content = null ) {
	extract(shortcode_atts(array(
    ), $atts));
    
    $out = '';

    $out .= '<div class="tab-holder shortcode-tabs">';

	$out .= '<div class="tab-hold tabs-wrapper">';
	
	$out .= '<ul id="tabs" class="tabset tabs">';
	foreach ($atts as $key => $tab) {
		$out .= '<li><a href="#' . $key . '">' . $tab . '</a></li>';
	}
	$out .= '</ul>';
	
	$out .= '<div class="tab-box tabs-container">';

	$out .= do_shortcode($content) .'</div></div></div>';
	
	return $out;
}

add_shortcode('tab', 'felicity_shortcode_tab');
	function felicity_shortcode_tab( $atts, $content = null ) {
	extract(shortcode_atts(array(
    ), $atts));
    
	$out = '';
	$out .= '<div id="tab' . $atts['id'] . '" class="tab tab_content">' . do_shortcode($content) .'</div>';
	
	return $out;
}

/* Accordian */
add_shortcode('accordian', 'felicity_shortcode_accordian');
	function felicity_shortcode_accordian( $atts, $content = null ) {
	$out = '';
	$out .= '<div class="accordian">';
	$out .= do_shortcode($content);
	$out .= '</div>';
	
   return $out;
}	

/* Toggle shortcode */
add_shortcode('toggle', 'felicity_shortcode_toggle');
	function felicity_shortcode_toggle( $atts, $content = null ) {
	extract(shortcode_atts(array(
        'title'      => '',
        'open' => 'no'
    ), $atts));

    $toggleclass = '';
    $toggleclass2 = '';
    $togglestyle = '';

	if($open == 'yes'){
		$toggleclass = "active";
		$toggleclass2 = "default-open";
		$togglestyle = "display: block;";
	}

	$out = '';
	$out .= '<h5 class="toggle '.$toggleclass.'"><a href="#"><span class="arrow"></span>' .$title. '</a></h5>';
	$out .= '<div class="toggle-content '.$toggleclass2.'" style="'.$togglestyle.'">';
	$out .= do_shortcode($content);
	$out .= '</div>';
	
   return $out;
}
	
/* Column one_half shortcode */
add_shortcode('one_half', 'felicity_shortcode_one_half');
	function felicity_shortcode_one_half($atts, $content = null) {
		$atts = shortcode_atts(
			array(
				'last' => 'no',
			), $atts);
			
			if($atts['last'] == 'yes') {
				return '<div class="one_half last">' .do_shortcode($content). '</div><div class="clearboth"></div>';
			} else {
				return '<div class="one_half">' .do_shortcode($content). '</div>';
			}

	}
	
/* Column one_third shortcode */
add_shortcode('one_third', 'felicity_shortcode_one_third');
	function felicity_shortcode_one_third($atts, $content = null) {
		$atts = shortcode_atts(
			array(
				'last' => 'no',
			), $atts);
			
			if($atts['last'] == 'yes') {
				return '<div class="one_third last">' .do_shortcode($content). '</div><div class="clearboth"></div>';
			} else {
				return '<div class="one_third">' .do_shortcode($content). '</div>';
			}

	}
	
/* Column two_third shortcode */
add_shortcode('two_third', 'felicity_shortcode_two_third');
	function felicity_shortcode_two_third($atts, $content = null) {
		$atts = shortcode_atts(
			array(
				'last' => 'no',
			), $atts);
			
			if($atts['last'] == 'yes') {
				return '<div class="two_third last">' .do_shortcode($content). '</div><div class="clearboth"></div>';
			} else {
				return '<div class="two_third">' .do_shortcode($content). '</div>';
			}

	}
	
/* Column one_fourth shortcode */
add_shortcode('one_fourth', 'felicity_shortcode_one_fourth');
	function felicity_shortcode_one_fourth($atts, $content = null) {
		$atts = shortcode_atts(
			array(
				'last' => 'no',
			), $atts);
			
			if($atts['last'] == 'yes') {
				return '<div class="one_fourth last">' .do_shortcode($content). '</div><div class="clearboth"></div>';
			} else {
				return '<div class="one_fourth">' .do_shortcode($content). '</div>';
			}

	}
	
/* Column three_fourth shortcode */
add_shortcode('three_fourth', 'felicity_shortcode_three_fourth');
	function felicity_shortcode_three_fourth($atts, $content = null) {
		$atts = shortcode_atts(
			array(
				'last' => 'no',
			), $atts);
			
			if($atts['last'] == 'yes') {
				return '<div class="three_fourth last">' .do_shortcode($content). '</div><div class="clearboth"></div>';
			} else {
				return '<div class="three_fourth">' .do_shortcode($content). '</div>';
			}

	}

/* Tagline box shortcode */
add_shortcode('tagline_box', 'felicity_shortcode_tagline_box');
	function felicity_shortcode_tagline_box($atts, $content = null) {
		$str = '';
		$str .= '<section class="reading-box">';
			if($atts['title']):
			$str .= '<h3>'.$atts['title'].'</h3>';
			endif;
			if($atts['description']):
			$str.= '<p class="read-desc">'.$atts['description'].'</p>';
			endif;
			if($atts['link'] && $atts['button']):
			$str .= '<a href="'.$atts['link'].'" class="continue button small green">'.$atts['button'].'</a>';
			endif;

			$str .= '</section>';

		return $str;
	}

/* Pricing table */
add_shortcode('pricing_table', 'felicity_shortcode_pricing_table');
	function felicity_shortcode_pricing_table($atts, $content = null) {
		$str = '';
		if($atts['type'] == '2') {
			$type = 'sep';
		} else {
			$type = 'full';
		}
		$str .= '<div class="'.$type.'-boxed-pricing">';
		$str .= do_shortcode($content);
		$str .= '</div>';

		return $str;
	}

/* Pricing Column */
add_shortcode('pricing_column', 'felicity_shortcode_pricing_column');
	function felicity_shortcode_pricing_column($atts, $content = null) {
		$str = '<div class="column">';
		$str .= '<ul>';
		if($atts['title']):
		$str .= '<li class="title-row">'.$atts['title'].'</li>';
		endif;
		$str .= do_shortcode($content);
		$str .= '</ul>';
		$str .= '</div>';

		return $str;
	}

/* Pricing Row */
add_shortcode('pricing_price', 'felicity_shortcode_pricing_price');
	function felicity_shortcode_pricing_price($atts, $content = null) {
		$str = '';
		$str .= '<li class="pricing-row">';
		if(isset($atts['currency']) && !empty($atts['currency']) && isset($atts['price']) && !empty($atts['price'])) {
			$class = '';
			$price = explode('.', $atts['price']);
			if($price[1]){
				$class .= 'price-with-decimal';
			}
			$str .= '<div class="price '.$class.'">';
				$str .= '<strong>'.$atts['currency'].'</strong>';
				$str .= '<em class="exact_price">'.$price[0].'</em>';
				if($price[1]){
					$str .= '<sup>'.$price[1].'</sup>';
				}
				if($atts['time']) {
					$str .= '<em class="time">'.$atts['time'].'</em>';
				}
			$str .= '</div>';
		} else {
			$str .= do_shortcode($content);
		}
		$str .= '</li>';

		return $str;
	}

/* Pricing Row */
add_shortcode('pricing_row', 'felicity_shortcode_pricing_row');
	function felicity_shortcode_pricing_row($atts, $content = null) {
		$str = '';
		$str .= '<li class="normal-row">';
		$str .= do_shortcode($content);
		$str .= '</li>';

		return $str;
	}

/* Pricing Footer */
add_shortcode('pricing_footer', 'felicity_shortcode_pricing_footer');
	function felicity_shortcode_pricing_footer($atts, $content = null) {
		$str = '';
		$str .= '<li class="footer-row">';
		$str .= do_shortcode($content);
		$str .= '</li>';

		return $str;
	}

/* Content box shortcode */
add_shortcode('content_boxes', 'felicity_shortcode_content_boxes');
	function felicity_shortcode_content_boxes($atts, $content = null) {
		$str = '';
		$str .= '<section class="columns content-boxes">';
		$str .= do_shortcode($content);
		$str .= '</section>';

		return $str;
	}

/* Content box shortcode */
add_shortcode('content_box', 'felicity_shortcode_content_box');
	function felicity_shortcode_content_box($atts, $content = null) {
		$str = '';
		if(!empty($atts['last']) && $atts['last'] == 'yes'):
		$str .= '<article class="col last">';
		else:
		$str .= '<article class="col">';
		endif;

		if($atts['image'] || $atts['title']):
			if(!empty($atts['image']) || !empty($atts['icon'])){
				$str .=	'<div class="heading heading-and-icon">';
			} else {
				$str .=	'<div class="heading">';
			}
		if($atts['image']):
		$str .= '<img src="'.$atts['image'].'" width="28" height="28" alt="">';
		endif;
		if(!empty($atts['icon']) && $atts['icon']):
			$str .= ''.do_shortcode('[fontawesome icon="'.$atts['icon'].'" circle="yes" size="medium"]').'';
		endif;
		if($atts['title']):
		$str .= '<h4>'.$atts['title'].'</h4>';
		endif;
		$str .= '</div>';
		endif;

		$str .= do_shortcode($content);
		
		if($atts['link'] && $atts['linktext']):
		$str .= '<div class="clear"></div>';
		$str .= '<div class="margin-top-20"></div>';
		$str .= '<span class="more"><a href="'.$atts['link'].'">'.$atts['linktext'].' &rarr;'.'</a></span>';
		endif;
		
		$str .= '</article>';

		return $str;
	}

/* Testimonials */
add_shortcode('testimonials', 'felicity_shortcode_testimonials');
	function felicity_shortcode_testimonials($atts, $content = null) {
		$str = '';
		$str .= '<div class="reviews">';
		$str .= do_shortcode($content);
		$str .= '</div>';

		return $str;
	}

/* Testimonial */
add_shortcode('testimonial', 'felicity_shortcode_testimonial');
	function felicity_shortcode_testimonial($atts, $content = null) {
		if(!isset($atts['gender'])) {
			$atts['gender'] = 'male';
		}
		$str = '';
		$str .= '<div class="review '.$atts['gender'].'">';
		$str .= '<blockquote>';
		$str .= '<q>';
		$str .= do_shortcode(''.$content.'');
		$str .= '</q>';
		if($atts['name']):
			$str .= '<div><span class="company-name">';
			$str .= '<strong>'.$atts['name'].'</strong>';
			if($atts['company']):
				$str .= '<span>, '.$atts['company'].'</span>';
			endif;
			$str .= '</span></div>';
		endif;
		$str .= '</blockquote>';
		$str .= '</div>';

		return $str;
	}

/* Progess Bar */
add_shortcode('progress', 'felicity_shortcode_progress');
function felicity_shortcode_progress($atts, $content = null) {
	$html = '';
	$html .= '<div class="progress-bar">';
	$html .= '<div class="progress-bar-content" data-percentage="'.$atts['percentage'].'" style="width: ' . $atts['percentage'] . '%">';
	$html .= '</div>';
	$html .= '<span class="progress-title">' . $content . ' ' . $atts['percentage'] . '%</span>';
	$html .= '</div>';

	return $html;
}

/* Alert Message */
add_shortcode('alert', 'felicity_shortcode_alert');
function felicity_shortcode_alert($atts, $content = null) {
	$html = '';
	$html .= '<div class="alert '.$atts['type'].'">';
		$html .= '<div class="msg">'.do_shortcode($content).'</div>';
		$html .= '<a href="#" class="toggle-alert">Toggle</a>';
	$html .= '</div>';

	return $html;
}

/* FontAwesome Icons */
add_shortcode('fontawesome', 'felicity_shortcode_fontawesome');
function felicity_shortcode_fontawesome($atts, $content = null) {
	$html = '';
	$html .= '<i class="fontawesome-icon '.$atts['size'].' circle-'.$atts['circle'].' fa fa-'.$atts['icon'].'"></i>';

	return $html;
}

/* Title */
add_shortcode('title', 'felicity_shortcode_title');
function felicity_shortcode_title($atts, $content = null) {
	$html = '';
	$html .= '<div class="title"><h'.$atts['size'].'>'.do_shortcode($content).'</h'.$atts['size'].'></div>';
	return $html;
}

/* Separator */
add_shortcode('separator', 'felicity_shortcode_separator');
function felicity_shortcode_separator($atts, $content = null) {
	$html = '';
	$html .= '<div class="demo-sep" style="margin-top: '.$atts['top'].'px;"></div>';
	return $html;
}

/* Add buttons to tinyMCE */
add_action('init', 'felicity_add_button');

function felicity_add_button() {  
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
   {  
     add_filter('mce_external_plugins', 'felicity_add_plugin');  
     add_filter('mce_buttons_3', 'felicity_register_button');  
   }  
}  

function felicity_register_button($buttons) {  
   array_push($buttons, "youtube", "vimeo", "btn", "dropcap", "highlight", "checklist", "tabs", "toggle", "one_half", "one_third", "two_third", "one_fourth", "three_fourth", "slider", "testimonial", "progress", "person", "alert", "pricing_table", "recent_works", "tagline_box", "content_boxes", "recent_posts", "fontawesome", "social_links", "clients", "title", "separatoor", "tfprettyphoto");  
   return $buttons;  
}  

function felicity_add_plugin($plugin_array) {  
   $plugin_array['youtube'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['vimeo'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['soundcloud'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['btn'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['dropcap'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['highlight'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['checklist'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['tabs'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['toggle'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['one_half'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['one_third'] = get_template_directory_uri().'//tinymce/customcodes.js';
   $plugin_array['two_third'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['one_fourth'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['three_fourth'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['slider'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['testimonial'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['progress'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['person'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['alert'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['pricing_table'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['recent_works'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['tagline_box'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['content_boxes'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['recent_posts'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['fontawesome'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['social_links'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['clients'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['title'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['separatoor'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['tfprettyphoto'] = get_template_directory_uri().'/tinymce/customcodes.js';

   return $plugin_array;  
}
