var $ = jQuery;

if(localStorage.getItem("notificationShown") == null) {
	
	// display cookie message
	$("#hide-notification").click(hideNotification);

} else {
	
	$("#cookie-notification").hide();
}

function hideNotification () {
	localStorage.setItem("notificationShown", true);
	$("#cookie-notification").slideUp(1000);
}