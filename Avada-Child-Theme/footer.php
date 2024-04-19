<?php
/**
 * The footer template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
						<?php do_action( 'avada_after_main_content' ); ?>

					</div>  <!-- fusion-row -->
				</main>  <!-- #main -->
				<?php do_action( 'avada_after_main_container' ); ?>

				<?php
				/**
				 * Get the correct page ID.
				 */
				$c_page_id = Avada()->fusion_library->get_page_id();
				?>

				<?php
				/**
				 * Only include the footer.
				 */
				?>
				<?php if ( ! is_page_template( 'blank.php' ) ) : ?>

					<?php 
					if ( has_action( 'avada_render_footer' ) ) {
						do_action( 'avada_render_footer' );
					} else {
						Avada()->template->render_footer();
					} 
					?>

					<div class="fusion-sliding-bar-wrapper">
						<?php
						/**
						 * Add sliding bar.
						 */
						if ( Avada()->settings->get( 'slidingbar_widgets' ) ) {
							get_template_part( 'sliding_bar' );
						}
						?>
					</div>

					<?php do_action( 'avada_before_wrapper_container_close' ); ?>
				<?php endif; // End is not blank page check. ?>
			</div> <!-- wrapper -->
		</div> <!-- #boxed-wrapper -->
		<div class="fusion-top-frame"></div>
		<div class="fusion-bottom-frame"></div>
		<div class="fusion-boxed-shadow"></div>
		<a class="fusion-one-page-text-link fusion-page-load-link"></a>

		<div class="avada-footer-scripts">
			<?php wp_footer(); ?>
<script type="text/javascript">
				jQuery( document ).ready( function() {
							jQuery( '.leftblog a.fusion-read-more' ).text('Learn More about the case');
					var gethtml2 = jQuery('.clickthetabs .fusion-text.geth4.firstt').html();	
jQuery('.getonclick').html(gethtml2);
jQuery('.clickthetabs .fusion-text.geth4').click(function(e) {
	jQuery('.clickthetabs .fusion-text.geth4').removeClass('firstt').find('h4').removeClass('activeh4');
jQuery('.clickthetabs .fusion-text.geth4 h4').css('color','#212934');	jQuery('.clickthetabs .fusion-text.geth4 h4 a').css('color','#212934');
jQuery('.clickthetabs .fusion-text.geth4 h4').css('background-color','#efefef');
jQuery('.clickthetabs .fusion-text.geth4 h4').css('background-image','url(https://www.fcacounsel.com/wp-content/uploads/2020/04/arrowblack.png)');
var gethtmll = jQuery(this).html();	
jQuery(this).find('h4').css('color','#ffffff');	jQuery(this).find('h4 a').css('color','#ffffff !important');
jQuery(this).find('h4').css('background-color','#0f3f82');
jQuery(this).find('h4').css('background-image','url(https://www.fcacounsel.com/wp-content/uploads/2020/04/whitearrow.png)');
jQuery(this).find('h4').addClass('activeh4');
jQuery('.getonclick').html(gethtmll);
	return false;
});
						});
	jQuery(document).ready(function () {
		jQuery(".cr-box div:nth-child(2)").mouseenter(
     function () {
		 jQuery(this).find('.cr-content').css("margin-top","-1em");
        jQuery('.case-btn').css("background-color","transparent");
    });
		jQuery(".cr-box div:nth-child(2)").mouseleave(
     function () {
        jQuery('.case-btn').css("background-color","#0f3f82");
    });
	});
	<?php if(wp_is_mobile()){?>
	jQuery(document).ready(function () {
		jQuery(".content-box-column").mouseenter(
     function () {
		 jQuery(this).css("height","400px");
    });
			jQuery(".content-box-column").mouseleave(
     function () {
		 jQuery(this).css("height","auto");
    });
	});
	<?php } ?>
</script>
		</div>
<?php if(is_page(48)){ ?>
<script>
function init1() {
	setTimeout(function(){
        var vidDefer = document.getElementsByTagName('iframe');
for (var i=0; i<vidDefer.length; i++) {
if(vidDefer[i].getAttribute('data-src')) {
vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
} }
    }, 1000);
 }
window.onload = init1;
</script>
<?php } ?>

<script>
jQuery(document).ready(function ($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("zkchrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
$("html").addClass("samsafari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});
 jQuery( document ).ready(function($) {
        $('#flipboxfincip div:nth-child(5)').addClass("col-md-offset-3");
 });
 jQuery( document ).ready(function($) {
       var getclss = $('#menu-item-881').hasClass( "current-menu-parent" );
	   if(getclss==true){
		   var getvvv = $("#menu-item-881 a").attr("aria-haspopup");
		 
		   $('#menu-item-881 a').first().css("color","#0f3f82");
	   }
 });
</script>
	</body>
</html>
