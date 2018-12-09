/* these elements should not be seen on the mobile or tablet so we remove it*/
jQuery( document ).ready( function( $ ) {

	if(hide.admin_bar){
		jQuery("#wpadminbar").remove();
		if(typeof jQuery("html").attr("style") === 'undefined'){
			jQuery("html").attr("style", "margin:0px !important;");
		}else{
			jQuery("html").attr("style", "margin:0px !important; "+jQuery("html").attr("style"));
		}
	}

	switch(hide.type){
		case "mobile":
			delete_element(hide.header_mobile,hide.footer_mobile,hide.footer_widgets_mobile);
		break;
		case "tablet":
			delete_element(hide.header_tablet,hide.footer_tablet,hide.footer_widgets_tablet);
		break;
		case "desktop":
			//jQuery(".footer").remove();
			delete_element(hide.header_desktop,hide.footer_desktop,hide.footer_widgets_desktop);
		break;
			
	}
	//jQuery(".owl-dots,.owl-nav,.header-wrapper,.footer-meta").remove
	function delete_element(header,footer,footer_widgets){
		//alert(header);
		//alert(footer);
		//alert(footer_widgets);
		if(header){
			jQuery(".header").remove();
		}
		if(footer && footer_widgets){
			jQuery(".footer").remove();
		}else{
			if(footer){
				jQuery(".footer-meta").remove();
			}else if(footer_widgets){
				jQuery(".footer-widgets").remove();
			}
		}
	}

} );
//alert(hide.type);
