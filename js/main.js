(function($) {

    $.fn.codifySlider = function() {

        this.each( function() {

			 $( document ).ready(function(){

			        // Set general variables
			        // ====================================================================
			        var totalWidth = 0;

			        // Total width is calculated by looping through each gallery item and
			        // adding up each width and storing that in `totalWidth`
			        $(".gallery__item").each(function(){
			            totalWidth = totalWidth + $(this).outerWidth(true);
			        });

			        // The maxScrollPosition is the furthest point the items should
			        // ever scroll to. We always want the viewport to be full of images.
			        var maxScrollPosition = totalWidth - $(".gallery-wrap").outerWidth();

			        // This is the core function that animates to the target item
			        // ====================================================================
			        function toGalleryItem($targetItem){
			            // Make sure the target item exists, otherwise do nothing
			            if($targetItem.length){

			                // The new position is just to the left of the targetItem
			                var newPosition = $targetItem.position().left;

			                // If the new position isn't greater than the maximum width
			                if(newPosition <= maxScrollPosition){

			                    // Add active class to the target item
			                    $targetItem.addClass("gallery__item--active");

			                    // Remove the Active class from all other items
			                    $targetItem.siblings().removeClass("gallery__item--active");

			                    // Animate .gallery element to the correct left position.
			                    $(".gallery").animate({
			                        left : - newPosition
			                    });
			                } else {
			                    // Animate .gallery element to the correct left position.
			                    $(".gallery").animate({
			                        left : - maxScrollPosition
			                    });
			                };
			            };
			        };

			        // Basic HTML manipulation
			        // ====================================================================
			        // Set the gallery width to the totalWidth. This allows all items to
			        // be on one line.
			        $(".gallery").width(totalWidth);

			        // Add active class to the first gallery item
			        $(".gallery__item:first").addClass("gallery__item--active");

			        // When the prev button is clicked
			        // ====================================================================
			        $(".gallery__controls-prev").click(function(){
			            // Set target item to the item before the active item
			            var $targetItem = $(".gallery__item--active").prev();
			            toGalleryItem($targetItem);
			        });

			        // When the next button is clicked
			        // ====================================================================
			        $(".gallery__controls-next").click(function(){
			            // Set target item to the item after the active item
			            var $targetItem = $(".gallery__item--active").next();
			            toGalleryItem($targetItem);
			        });
			    });
			
			});

    }

}(jQuery));
