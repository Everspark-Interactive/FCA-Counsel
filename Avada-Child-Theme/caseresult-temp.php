<?php
/**
 * Template Name: CaseresultPAge
 * This template file is used for contact pages.
 *
 * @package Avada
 * @subpackage Templates
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

get_header();

?>

<style type="text/css">
    #side-header .fusion-logo, .fusion-header .fusion-logo {
        margin: 18px 0px 20px 0px !important;
    }
    #main .fusion-row {
        max-width: 100% !important;
    }
    .btm-out {
        background-image: url(https://www.fcacounsel.com/wp-content/uploads/2021/02/bg-44.png) !important;
        background-position: top;
        background-repeat: no-repeat;
    }
    #main {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }
    div#header-banner {
        display: block !important;
    }
    .avada-page-titlebar-wrapper {
        display: none;
    }
    .outerdiv {
        max-width: 1170px;
        margin: 0 auto;
    }

    .fusion-page-title-bar-center .fusion-page-title-captions {
        text-align: left !important;
        width: 100%;
    }
    .fusion-page-title-bar {
        background-image: url(/wp-content/uploads/2021/04/banner-results2-1.png) !important;
    }
    .at-img{ text-align: center;}

    .outerdiv h3.fusion-responsive-typography-calculated {
        margin-top: 30px;
        font-size: 33px;
    }
    .bot-bar:after {
        content: '';
        background: #fff;
        width: 5.875rem;
        height: 3px;
        margin-top: 30px;
        bottom: 0;
        display: block;
        left: 0;
        right: 0;
    }
    .fusion-page-title-row{ background: none !important; }
    .fusion-page-title-bar{ height: auto !important; padding-top: 50px; }
    .outerbtm {
        max-width: 1170px;
        margin: 0 auto;
    }
    h2.fusion-responsive-typography-calculated {
        padding-top: 25px;
        color: #0f3f82;
        padding-left: 15px;
    }
    .btm-out {
        box-shadow: 3px 0px 13px #b0bdc7;
        padding: 20px;
        margin-bottom: 0px;
    }
    .btm-out2 {
        border: 1px solid #bfbfbf;
        padding: 20px;
    }
    .btm-out h2 {
        padding-top: 0px;
        padding-left: 0px;
        line-height: 30px !important;
    }
    .btm-out p {
        padding-top: 0px;
        padding-left: 0px;
        line-height: 30px !important;
    }
    h3.gform_title.fusion-responsive-typography-calculated {
        display: none;
    }
    #gform_fields_4 label {
        display: none;
    }
    #gform_fields_4 input {
        border-bottom: 1px solid #bfbfbf !important;
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;
        padding-left: 0px;
    }
    #gform_fields_4 textarea {
        border-bottom: 1px solid #bfbfbf !important;
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;
        padding-left: 0px;
    }
    .gform_wrapper .gform_footer input.button, .gform_wrapper .gform_footer input[type=submit] {
        width: 150px !important;
        margin-right: inherit !important;
    }
    .the-links{float: left;
        margin-left: 14px;}
        .the-links a{    color: #ffffff !important;
            display: block;
            background-color: #0f3f82;
            font-size: 20px;
            width: 200px;
            font-family: 'Proxima Nova ExCn Rg';
            font-weight: normal;
            font-style: normal;
            padding: 15px 0px;
            border-radius: 0px !important;
            text-align: center;
            margin-left: auto;
            margin-top: 40px;}
            .gform_wrapper {
                margin-bottom: 0px !important;
            }
            .main-headings{ font-size: 42px !important; }
            .inr-blocks .col-lg-9{ padding-left: 0px !important; }
            h2.form_title.fusion-responsive-typography-calculated {
                padding-top: 0px;
                color: #0f3f82;
                padding-left: 0px;
            }
            .form_title {color: #0f3f82;}

            @media only screen and (max-width: 767px){
                .the-links {
                    float: none !important;
                }
                .fusion-body .fusion-page-title-bar h1 {
                    padding-top: 45px;
                    line-height: 50px !important;
                }
                .outerdiv h3.fusion-responsive-typography-calculated {
                    line-height: 35px !important;
                }
                .the-links {
                    padding: 0px 25px 25px 25px;
                    text-align: center;
                }
                .the-links a {
                    color: #ffffff !important;
                    display: inline-block;
                    background-color: #0f3f82;
                    font-size: 20px;
                    width: 200px;
                    font-family: 'Proxima Nova ExCn Rg';
                    font-weight: normal;
                    font-style: normal;
                    padding: 15px 0px;
                    border-radius: 0px !important;
                    text-align: center;
                    margin-top: 10px;
                }
            }
        </style>
        <style type="text/css">
            .masonry.grid {
                float: left;
                width: 100%;
            }
            .grid-item, .grid-sizer {
                width: calc(33.33% - 25px);
                margin-bottom: 25px;
            }
            .blogleftbotm .item {
                background-image: linear-gradient(#fff,#fff);
                border-top: 8px solid #0f3f82;
                border-bottom: 8px solid #0f3f82;
            }
            .masonry .blogtitlee {
                padding-top: 18px;
                padding-left: 10px;
                padding-right: 10px;
            }
            .blogtitlee {
                line-height: 26px;
                font-size: 18px;
                color: #a4c7b6;
                text-align: center;
                padding-bottom: 6px;
            }
            .blogdateee {
                font-size: 14px;
                color: #5e5e5f;
                text-align: center;
            }
            @media screen and (max-width: 767px) {
                .fr-mob .mob {
                    width: 100%;
                    float: left;
                }
                .fr-mob .mob1 {
                    width: 50%;
                    float: left;
                    margin-top: 5px !important;
                }
                .fr-mob .nw22 {
                    width: 50%;
                    float: left;
                }
                .f_bob {
                    margin-top: 20px !important;
                }
                .nw22 img {
                    margin-top: -4px !important;
                }
                .grid-item, .grid-sizer{width: 100% !important;}
            }
            .nw22 img {
                width: 50px !important;
                height: 50px !important;
                border-radius: 50px !important;
                margin-top: 18px;
            }
        </style>
        <div class="avada-page-titlebar-wrapper" id="header-banner"><div class="fusion-page-title-bar fusion-page-title-bar-breadcrumbs fusion-page-title-bar-center"><div class="fusion-page-title-row"><div class="fusion-page-title-wrapper">
            <div class="outerdiv">
                <div class="fusion-row">
                    <div class="fusion-column col-lg-6 col-md-6 col-sm-6">
                        <div class="fusion-page-title-captions"><h1 class="entry-title fusion-responsive-typography-calculated bot-bar" data-fontsize="54" data-lineheight="normal" style="--fontSize:54;"><?php the_title(); ?></h1><h3 data-fontsize="25" data-lineheight="35px" class="fusion-responsive-typography-calculated" style="--fontSize:26; line-height: 1.4; --minFontSize:25;">We've Recovered Hundreds of Millions of Dollars for Our Clients</h3>


                        </div>
                    </div>
                    <div class="fusion-column col-lg-6 col-md-6 col-sm-6">
                        <div class="at-img"><img src="/wp-content/uploads/2021/04/new-bnr-1.png"></div>
                    </div>
                </div>
            </div>

        </div>
    </div></div></div>

    <div class="outerbtm inr-blocks">
        <div><h2 data-fontsize="40" data-lineheight="48px" class="fusion-responsive-typography-calculated main-headings" style="--fontSize:40; line-height: 1.2;">Intervened Settlements</h2></div>
        <div class="fusion-row">
            <div class="fusion-column col-lg-9 col-md-9 col-sm-12">
                <div class="fusion-row">
                    <div class="masonryrow">  
                        <div class="masonry grid blogleftbotm">
                            <div class="grid-sizer"></div>

                            <?php 
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            ?>
                            <?php $wp_query = new WP_QUERY( array ('post_type' => 'case-results', 'post_status' => 'publish', 'posts_per_page' => '9','paged' => $paged ) );
                            $ab=0;
                            if ( $wp_query -> have_posts() ) : 
                                while ( $wp_query -> have_posts() ) : the_post();  ?>
                                    <div class="fusion-column item  grid-item ng1<?php echo $ab; ?>">
                                        <div class="btm-out">
                                            <h2><?php the_title(); ?></h2>
                                            <p><?php the_content(); ?></p>
                                        </div>

                                        </div><?php $ab++; endwhile;?> 

                                    <?php endif; ?>
                                </div>
                            </div></div></div>


                            <?php if(wp_is_mobile()){?>
                            <div class="the-links">
                                <div class="fusion-row">

                                    <div class="fusion-column col-lg-6 col-md-6 col-sm-6 al"> 
                                        <span class="prevs"><?php previous_posts_link(); ?></span>
                                    </div>
                                    <div class="fusion-column col-lg-6 col-md-6 col-sm-6">  
                                        <span class="nxt"><?php next_posts_link(); ?></span>
                                    </div>
                                </div>
                            </div>
                           <?php } ?> 
                            <div class="fusion-column col-lg-3 col-md-3 col-sm-12">
                                <div class="btm-out2">
                                    <h2 class="form_title">Quick Contact Form</h2>
                                    <?php echo do_shortcode('[gravityform id="4"]'); ?>
                                </div>
                            </div>
                        </div>
                        <?php if( !wp_is_mobile()){?>
                        <div class="the-links">
                            <div class="fusion-row">

                                <div class="fusion-column col-lg-6 col-md-6 col-sm-6 al"> 
                                    <span class="prevs"><?php previous_posts_link(); ?></span>
                                </div>
                                <div class="fusion-column col-lg-6 col-md-6 col-sm-6">  
                                    <span class="nxt"><?php next_posts_link(); ?></span>
                                </div>
                            </div>
                        </div>
                       <?php } ?> 
                    </div>
                </div>
                <?php //do_action( 'avada_after_content' ); ?>
                <?php get_footer(); ?>

                <?php if(1 == $paged) { ?>
                    <style type="text/css">
                        .al {
                            display: none;
                        }
                        @media only screen and (min-width: 993px){
                            .fusion-column.col-lg-4.col-md-4.col-sm-4.ab3{margin-top:-5em;}
                            .ab4 {
                                margin-top: -5em;
                            }
                            .fusion-column.col-lg-4.col-md-4.col-sm-4.ab5 {
                                margin-top: 0px;
                            }

                            .ab6 {
                                margin-top: 0em;
                            }
                            .fusion-column.col-lg-4.col-md-4.col-sm-4.ab7 {
                                margin-top: -62em;
                            }
                            .fusion-column.col-lg-4.col-md-4.col-sm-4.ab8{margin-top:-31em;}
                        }
                    </style>

                <?php } ?>

                <?php if(2 == $paged) { ?>
                    <style type="text/css">
                        @media only screen and (min-width: 993px){
                            .the-links .fusion-row .col-lg-6 {
                                padding-left: 0px;
                            }
                            .ab4 {
                                margin-top: -16em;
                            }
                            .ab5 {
                                margin-top: -19em;
                            }
                            .ab6 {
                                margin-top: 54px;
                            }
                            .ab7{ margin-top:-11em;}
                            .ab8{margin-top:-357px;}
                        }
                    </style>

                <?php } ?>

                <style type="text/css">
                    .featuredget {
                        display: none !important;
                    }
                    .blogimagexce p {
                        font-size: 13px !important;
                    }
                    .fusion-header{height: 139px !important;}
                    .fusion-page-title-bar.fusion-page-title-bar-breadcrumbs.fusion-page-title-bar-centerolddd {
                        border-color: #d2d3d4;
                        background-color: #f6f6f6;
                        background-size: cover;
                        height: 350px;
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -ms-background-size: cover;
                        -o-background-size: cover;
                    }

                    .custom-categories ul li:last-child { display:none;
                    }
                    .bloglefte{width:70%;float: left;padding: 40px;}
                    .blogleftbotm{width:70%;float: left;}
                    .blogrgsidbr{width:28%;float: right;box-shadow: #bbb 0 0 3px 0;padding: 9px;margin-top: 55px;}
                    .catlist{margin:0 0 0 5px;padding:0;}
                    .catlist li{list-style: none;padding:5px 0 0 0;}
                    h3.cat_title {
                        font-weight: bold;
                        font-size: 24px;
                        color: #63666a;
                        margin-top: 6px;
                        margin-bottom: 7px;
                    }
                    .custom-categories ul li a {
                        color: #63666a;
                        font-size: 14px;
                        line-height: 26px;
                    }
                    .custom-categories ul li a:hover {
                        color: #0f3f82;
                    }
                    .custom-categories {
                        background-color: #fff;
                        text-align: left;
                        padding: 20px;
                        border-radius: 25px;
                        max-width: 330px;
                        margin: -220px 0 0 auto;
                        z-index: 1000;
                        position: relative;
                    }
                    .custom-categories ul {
                        margin: 0;
                        padding: 0;
                    }
                    .custom-categories ul li {
                        list-style-type: none;
                    }
                    .athers{

                        margin-top: 9px;
                        padding-right: 5px;
                        display: inline-block;text-transform: capitalize;
                    }
                    .ather1{
                        margin-top: 32px;
                        float: left;
                        padding-right: 10px;text-transform: capitalize;
                    }
                    .authers {
                        padding-top: 15px;
                    }
                    .ather_imgs1{ float:left}

                    .ather_imgs img{ width: 50px;
                        height: 50px;
                        border-radius: 50px;}
                        .ather_imgs1 img{ width: 80px;
                            height: 80px;
                            border-radius: 80px;}
                            .blogdateee.athers span {
                                font-weight: bold;
                            }
                            .blogdateee.ather1 span {
                                font-weight: bold;
                            }
                            @media screen and (max-width: 992px) {
                                .custom-categories {
                                    margin: 0px 0 0 auto !important;
                                    max-width: 100%;
                                }
                                .bloglefte{width:100%;float: none;padding: 20px;}
                                .blogrgsidbr {width: 100%;float: none; box-shadow: #bbb 0 0 3px 0;padding: 15px;}
                            }
                        </style>

                        <!-- or -->
                        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
                        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

                        <script>
                            jQuery(document).ready(function(){


// init Masonry
var $grid = jQuery('.grid').masonry({

// options...

// set itemSelector so .grid-sizer is not used in layout
itemSelector: '.grid-item',
// use element for option
columnWidth: '.grid-sizer',
percentPosition: true,
gutter:25
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
    $grid.masonry('layout');
});


var ajax_url = "/wp-admin/admin-ajax.php";
jQuery( ".loadmorebutton" ).click(function() {
    var getoff = jQuery(".offset").val();
    var foundposts = jQuery(".foundposts").val();
    if(parseInt(getoff) > parseInt(foundposts)){
        jQuery( ".loadmorebutton" ).text('NO MORE POSTS');    
    } else {
        jQuery(".loadmoreprocessing").show();
        jQuery(this).hide();
        jQuery.post(ajax_url, { 'action': 'diy_cookie_email','getoff': getoff}, function(responses) {

//jQuery('.masonry').append(responses);


var $items = jQuery(responses);

$grid.append( $items ).imagesLoaded(function(){
    jQuery(".loadmoreprocessing").hide();
    jQuery(".loadmorebutton").show();
    jQuery(".newaddeditems").each(function(){

        jQuery(this).css("visibility","visible");
        jQuery(this).removeClass("newaddeditems");  

    });


    $grid.masonry( 'appended', $items );
});

//$grid.masonry( 'addItems', $items );  
var totalincome = parseInt(getoff) + parseInt(7);
jQuery( ".offset" ).val(totalincome);

});
    }
});
jQuery( ".categoryll" ).change(function() {
    var getval = jQuery(this).val();
    if(getval != ''){
        window.location.href = getval;
    }
});




});
</script>