/**
 * Codestar metabox specific template
 *
 */    
function codestar_meta_custom_js() {
    echo '<script type="text/javascript">
			jQuery(document).ready(function(){

				jQuery("#page_template").change( function() {

					jQuery("#_home_page_options").hide();
					jQuery("#postdivrich").show();

					switch( jQuery( this ).val() ) {
						case "frontpage.php":
				          jQuery("#_home_page_options").show();
				          jQuery("#postdivrich").hide();
				        break;
					}

				}).change();
			});
		</script>';
}
add_action('admin_head', 'codestar_meta_custom_js');
