/*
*   This script is responsible for running the HTML Encode app.
*   
*   Written by: Casper Tollefsen
*   Date:       28.12.20
*   Last edit:  29.12.20
*
*   Missing features:
*   -   Output string containing tabs
*   -   Option to color code elements
*   -   Several ASCII properties
*   -   Word wrapping
*/

// Makes it possible to use TAB-key in text area
document.getElementById('htmlCodeInput').addEventListener('keydown', function(e) {
    if (e.key == 'Tab') {
      e.preventDefault();
      var start = this.selectionStart;
      var end = this.selectionEnd;
  
      // set textarea value to: text before caret + tab + text after caret
      this.value = this.value.substring(0, start) + "\t" + this.value.substring(end);

      // put caret at right position again
      this.selectionStart = this.selectionEnd = start + 1;
    }
});

// Activate script on submit button click
document.getElementById('submitHtmlBtn').addEventListener("click", UpdateResult);

// Updates content in target element
function UpdateResult() {
    document.getElementById('htmlEncodeResult').innerHTML = HtmlEncode();
}

// Converts textarea string content to escaped HTML
function HtmlEncode() {
    let inputString = document.getElementById('htmlCodeInput').value;
    //return inputString.charCodeAt(0);
    let encodedString = '<p>';

    for (let i = 0; i < inputString.length; i++) {
        if (inputString.charCodeAt(i) == 9) {
            encodedString += '&nbsp;&nbsp;&nbsp;&nbsp;';
        } else if (inputString.charCodeAt(i) == 10) {
            encodedString += '<br>';
        } else if (inputString.charCodeAt(i) == 32) {
            encodedString += '&amp;&#35;32&#59;';
        } else if (inputString.charCodeAt(i) == 33) {
            encodedString += '&amp;&#35;33&#59;';
        } else if (inputString.charCodeAt(i) == 34) {
            encodedString += '&amp;quot&#59;';
        } else if (inputString.charCodeAt(i) == 35) {
            encodedString += '&amp;&#35;35&#59;';
        } else if (inputString.charCodeAt(i) == 47) {
            encodedString += '&amp;&#35;47&#59;';
        } else if (inputString.charCodeAt(i) == 58) {
            encodedString += '&amp;&#35;58&#59;';
        } else if (inputString.charCodeAt(i) == 59) {
            encodedString += '&amp;&#35;59&#59;';
        } else if (inputString.charCodeAt(i) == 60) {
            encodedString += '&amp;lt&#59;';
        } else if (inputString.charCodeAt(i) == 61) {
            encodedString += '&amp;&#35;61&#59;';
        } else if (inputString.charCodeAt(i) == 62) {
            encodedString += '&amp;gt&#59;';
        } else if (inputString.charCodeAt(i) == 64) {
            encodedString += '&amp;&#35;64&#59;';
        } else {
            encodedString += inputString[i];
        }
    }
    encodedString += '</p>';
    console.log(encodedString);

    return encodedString;
}