<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

//filter for urls
add_filter( 'gform_pre_send_email', 'check_before_email' );
function check_before_email( $email ) {
$frmdata=$email['message'];
if ($frmdata)
    {
        $field_value = $frmdata;
        $pattern = '(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})';
        
        if (preg_match_all($pattern, $field_value))
        {
             $email['abort_email'] = true;
             return $email;
        } else {
        	return $email;
        }
    }  
 }

add_filter( 'gform_confirmation', 'custom_confirmation', 10, 4 );
function custom_confirmation( $confirmation, $form, $entry, $ajax ) {
    $field_value='';
    $field_value = rgar( $entry, '4' ).' '.rgar( $entry, '5' ).' '.rgar( $entry, '9' );
    $pattern = '(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})';
    if (preg_match_all($pattern, $field_value))
    {
        $redirectURL="/thank-you-two/";
        $confirmation = array( 'redirect' => $redirectURL );
                
    }
    return $confirmation;
}

// CaseResults Shortcode
function caseresult_func() {?>
<div class="fusion-text caser-results-wrapper">
    <div class="row">
        <div class="subheading"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 cr-inner cr-box">
            <div id="parent"><h2 class="heading">Guardian Hospice (N.D. Ga.)</h2>
                <div class="case-divider"></div>
                <p class="case-excerpt">'</p>
                <div id="hover-content"><div class="cr-content"></div><a href="" class="default-btn-shortcode dt-btn dt-btn-m ico-right-side" style="margin:0 auto;"><span>Read More</span>
                    <i class="fas fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 cr-inner cr-box">
            <div id="parent"><h2 class="heading">Guardian Hospice (N.D. Ga.)</h2>
                <div class="case-divider"></div>
                <p class="case-excerpt">'</p>
                <div id="hover-content"><div class="cr-content"></div><a href="" class="default-btn-shortcode dt-btn dt-btn-m ico-right-side" style="margin:0 auto;"><span>Read More</span>
                    <i class="fas fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 cr-inner cr-box">
            <div id="parent"><h2 class="heading">Guardian Hospice (N.D. Ga.)</h2>
                <div class="case-divider"></div>
                <p class="case-excerpt">'</p>
                <div id="hover-content"><div class="cr-content"></div><a href="" class="default-btn-shortcode dt-btn dt-btn-m ico-right-side" style="margin:0 auto;"><span>Read More</span>
                    <i class="fas fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
 <?php return $output;
}
add_shortcode('CaseResult', 'caseresult_func');


add_action( 'init', 'create_posttype_results' );
function create_posttype_results() {
    register_post_type( 'case-results',
        array(
            'labels' => array(
                'name' => __( 'Case Results' ),
                'singular_name' => __( 'Case Results' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'case-result','with_front' => false),
            'supports' => array('title', 'editor', 'custom-fields', 'revisions', 'thumbnail'),
        )
    );
}

add_shortcode( 'gmap', 'gmap_func' );
function gmap_func() {
    $ifrm ='';
  if ( wp_is_mobile() ) { $ifrm ='<div class="mapimg"><a href="https://g.page/FalseClaimsActLawyers?share"><img src="/wp-content/uploads/2021/04/gmap-mobile.jpg" class="img-responsive"></a></div>'; } else{ $ifrm = '<iframe style="border: 0;" tabindex="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13224.994505689341!2d-84.456423!3d34.0374929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcee41dbb32468af6!2sBracker%20%26%20Marcus%20LLC!5e0!3m2!1sen!2s!4v1593013028305!5m2!1sen!2s" width="100%" height="400" frameborder="0" allowfullscreen="allowfullscreen" aria-hidden="false"></iframe>';
 }
 return $ifrm;
}