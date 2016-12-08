$(document).ready(function () {
	console.log("this is the beginning.");
	/*********************
	 * from http://jsfiddle.net/N8mEK/1/
	 ***********************/
	//setTimeout(function(){debugger;}, 3000);	
	// make sure to include jQuery before calling this script
	// $( ... ); calls the function when the DOM is loaded
	$(function() {
	    // starts by hiding all the content elements
	    $('.sidebar-item-content').hide();
	    // hover function can take two functions as parameters
	    // one for mouse over and one for mouse out
	    $('.sidebar-item-title').hover(function() {
	        // slides children (filtered by class content) down
	        // stop stops all animations in the animation queue,
	        // you might want or not want to stop (I would stop)
	        $(this).parent().children('.sidebar-item-content').stop().slideDown();
	    }, function() {
	        // slides children up
	        $(this).parent().children('.sidebar-item-content').stop().slideUp();
	    })
	});
	$('.grid').masonry({
		// options
		itemSelector: '.grid-item'
	});
});