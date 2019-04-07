// JavaScript Document


function toggleActive(sender, event) {
	var menuItem = sender;
	
	var menuItems = document.getElementsByTagName("a");
	
	for (var i = 0; i < menuItems.length; i++) {
		if (menuItems[i].className.indexOf("menuItem active") !== -1)
			{
				menuItems[i].classList.remove("active");
				
			}
	}
	
	menuItem.className = menuItem.className + " active";
	
}