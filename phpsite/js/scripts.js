// JavaScript Document


//function toggleActive(sender, event) {
//	var menuItem = sender;
//	
//	var menuItems = document.getElementsByTagName("a");
//	
//	for (var i = 0; i < menuItems.length; i++) {
//		if (menuItems[i].classList.length === 2)
//			{
//				menuItems[i].classList.remove("active");
//				
//			}
//	}
//	
//	menuItem.className = menuItem.className + " active";
//	
//}

//var btnContainer = document.getElementById("myTopnav");
//
//var a = btnContainer.getElementsByClassName('menuItem');
//
//for (var i = 0; i< a.length; i++) {
//	a[i].addEventListener("click", function () {
//		var current = document.getElementsByClassName("active");
//		
//		if (current.length > 0 ) {
//			current[0].className = current[0].className.replace(" active", "");
//		}
//		
//		this.className += " active";
//	})
//}