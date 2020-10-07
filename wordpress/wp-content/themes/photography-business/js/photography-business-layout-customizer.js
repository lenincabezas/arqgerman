( function( $ ) {
	//JS
	wp.customize( 'photography_business_header_box_display_settings', function( value ) {
		value.bind( function( val ) {
			$( '.header-box' ).css('display', val );
		});
	});

	wp.customize( 'photography_business_header_box_logo_link_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.header-box .logo a' ).css('color', val );
		});
	});

	wp.customize( 'photography_business_navbar_section_bg_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.nav-outer' ).css('background-color', val );
		});
	});

	wp.customize( 'photography_business_navbar_section_text_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.theme-nav ul li a' ).css('color', val );
		});
	});


	wp.customize( 'photography_business_readmore_bg_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.photography-business-index .blog-2-col-inner .items .items-inner .img-box .details-box .details-box-inner .btn-case a' ).css('background-color', val );
		});
	});

	wp.customize( 'photography_business_readmore_text_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.photography-business-index .blog-2-col-inner .items .items-inner .img-box .details-box .details-box-inner .btn-case a' ).css('color', val );
		});
	});

	wp.customize( 'photography_business_sidebar_header_bg_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.sidebar .sidebar-inner .sidebar-items h2 ' ).css('background-color', val );
		});
	});

	wp.customize( 'photography_business_sidebar_header_title_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.sidebar .sidebar-inner .sidebar-items h2 ' ).css('color', val );
		});
	});

	wp.customize( 'photography_business_search_btn_sidebar_bg_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.sidebar .sidebar-inner .sidebar-items .searchform div #searchsubmit' ).css('background-color', val );
		});
	});

	wp.customize( 'photography_business_pagination_bg_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.page-numbers' ).css('background-color', val );
		});
	});

	wp.customize( 'photography_business_footer_bg_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.footer-4-col' ).css('background-color', val );
		});
	});

	wp.customize( 'photography_business_footer_display_header_text_settings', function( value ) {
		value.bind( function( val ) {
			$( '.footer-4-col .inner .footer .footer-inner .footer-items li h2' ).css('display', val );
		});
	});

	wp.customize( 'photography_business_footer_header_text_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.footer-4-col .inner .footer .footer-inner .footer-items li h2' ).css('color', val );
		});
	});

	wp.customize( 'photography_business_footer_text_link_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.footer-4-col .inner .footer .footer-inner .footer-items a' ).css('color', val );
		});
	});

} )( jQuery );	