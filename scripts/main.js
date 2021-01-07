"use strict";

function includeHTML() {
    var elmnt, elmntContent, elmntList, file, i, targetAttr, xhttp;
    targetAttr = "include-file"; // The attribute to look for (target attribute)
    elmntList = document.getElementsByTagName("*"); // Array containing every HTML element in document

    // Loop through every element in the list
    for (i = 0; i < elmntList.length; i++) {
        elmnt = elmntList[i];

        // See if current element has the target attribute
        file = elmnt.getAttribute(targetAttr);
        if (file) {
            elmntContent = elmnt.innerHTML; // Store code already present within the element

            // Make an HTTP request using the attribute value as the file name
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        elmnt.innerHTML = this.responseText + elmntContent; // Insert code that was already present within the element
                    }
                    if (this.status == 404) {
                        elmnt.innerHTML = "Content unavalable";
                        alert(file + " was not found");
                    }
                    // Remove the attribute and call this function again
                    elmnt.removeAttribute(targetAttr);
                    includeHTML();
                }
            }
            xhttp.open("GET", file, true);
            xhttp.send();
            file.innerHTML += elmntContent; // Insert code that was already present within the element
            return;
        }
    }
}

function ShowHamburgerMenu() {
	document.getElementById("HamBrgMenu").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
	if (!event.target.matches('#HamBrgBtn')) {
		var dropdown = document.getElementById("HamBrgMenu");
		if (dropdown.classList.contains('show')) {
			dropdown.classList.remove('show');
		}
	}
}