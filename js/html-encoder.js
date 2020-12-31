/*
*   This script is responsible for running the HTML Encode app.
*   
*   Written by: Casper Tollefsen
*   Date:       28.12.20
*   Last edit:  29.12.20
*
*   Missing features:
*   -   Option to color code elements
*   -   Several ASCII properties
*   -   Autocomplete HTML elements
*   -   Add correct spacing when adding a newline between two HTML elements
*   -   Autocomplete quotation marks
*   -   Autocomplete function syntax
*   -   Option to select intended programming language
*/

// If true, enables console log
const debug = true;
if (!debug) {console.log('Debugger disabled');}

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

    let inputString = document.getElementById('htmlCodeInput').value;   // Get input from text area

    // Exit on empty input
    if (inputString == null || inputString == "") {
        alert("Text area can\'t be empty");
        return '<p>Missing input</p>';
    }

    // Array containing convertable characters
    let charList = {
        '9': '&nbsp;&nbsp;&nbsp;&nbsp;',
        '10': '&lt;br&gt;<br>',
        '32': '&amp;&#35;32&#59;',
        '33': '&amp;&#35;33&#59;',
        '34': '&amp;quot&#59;',
        '35': '&amp;&#35;35&#59;',
        '39': '&amp;&#35;39&#59;',
        '40': '&amp;&#35;40&#59;',
        '41': '&amp;&#35;41&#59;',
        '45': '&amp;&#35;45&#59;',
        '46': '&amp;&#35;46&#59;',
        '47': '&amp;&#35;47&#59;',
        '58': '&amp;&#35;58&#59;',
        '59': '&amp;&#35;59&#59;',
        '60': '&amp;lt&#59;',
        '61': '&amp;&#35;61&#59;',
        '62': '&amp;gt&#59;',
        '64': '&amp;&#35;64&#59;'
    };

    let encodedString = '<p>';
    let currentCharCode;

    for (let i = 0; i < inputString.length; i++) {
        currentCharCode = inputString.charCodeAt(i);
        if (IsSafeAscii(inputString[i])) {  // Checks if char is letter or number
            encodedString += inputString[i];
            if (debug) {console.log('\"' + inputString[i] + '\"' + ' was safely added');}
        } else if (charList[currentCharCode]) { // Checks if char is convertable
            encodedString += charList[currentCharCode];
            if (debug) {console.log('\"' + inputString[i] + '\"' + ' was converted to \"' + charList[currentCharCode] + '\"');}
        } else {
            if (debug) {console.log('ERROR: Process terminated due to invalid input');}
            return '<p>ASCII value <strong>' + currentCharCode + '</strong> has not yet been added to the encoder</p>';
        }
    }
    encodedString += '</p>';
    if (debug) {console.log('Returned string: ' + encodedString);}

    return encodedString;
}

function IsSafeAscii(charInput) {
    return (/^[0-9a-zA-Z]+$/).test(charInput);
}