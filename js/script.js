jQuery(document).ready(function() {
	//document.body.style.background = "url(images/fundo-introducao.png) #2a81c9";
	document.body.style.background = "#0e528c";
});

// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = jQuery("#mySidebar");

function w3_open() {
    if (mySidebar.hasClass('hide-menu')) {
        mySidebar.removeClass('hide-menu');
        mySidebar.addClass('show-menu');
        
    } else {
        mySidebar.removeClass('show-menu');
        mySidebar.addClass('hide-menu');
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.removeClass('show-menu');
    mySidebar.addClass('hide-menu');
}