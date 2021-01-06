function includeHTML() {
    var z, i, elmnt, file, xhttp, tmp;
    /* Loop through a collection of all HTML elements: */
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
        elmnt = z[i];
        /*search for elements with a certain atrribute:*/
        file = elmnt.getAttribute("include-file");
        if (file) {
            tmp = elmnt.innerHTML; // Store code already present within element
            /* Make an HTTP request using the attribute value as the file name: */
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {elmnt.innerHTML = this.responseText + tmp;} // +tmp inserts code already present within element
                    if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
                    /* Remove the attribute, and call this function once more: */
                    elmnt.removeAttribute("include-file");
                    includeHTML();
                }
            }
            xhttp.open("GET", file, true);
            xhttp.send();
            file.innerHTML += tmp;
            /* Exit the function: */
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