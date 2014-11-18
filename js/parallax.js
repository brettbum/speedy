		if ( $(".home-section-7").length ) {
		
			sectionfiveoffset = $(".home-section-7").offset().top;		  

			if( scrollwindow > sectionfiveoffset ) {

				// Enable parallax effect
				backgroundscroll = scrollwindow - sectionfiveoffset;
				$(".home-section-7").css("backgroundPosition", "0px " + -(backgroundscroll/6) + "px");

			}
		
		}

		// end if for home section 7
		
				if ( $(".home-section-9").length ) {
		
			sectionfiveoffset = $(".home-section-9").offset().top;		  

			if( scrollwindow > sectionfiveoffset ) {

				// Enable parallax effect
				backgroundscroll = scrollwindow - sectionfiveoffset;
				$(".home-section-9").css("backgroundPosition", "0px " + -(backgroundscroll/6) + "px");

			}
		
		}

		// end if for home section 9
