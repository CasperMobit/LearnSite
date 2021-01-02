/*
*   This script is responsible for running the HTML Encode app.
*   
*   Written by: Casper Tollefsen
*   Date:       28.12.20
*   Last edit:  02.01.21
*
*   Missing features:
*   -   Option to color code elements
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
        '32': '&amp;&#35;32&#59;',          // space
        '33': '&amp;&#35;33&#59;',          // !
        '34': '&amp;quot&#59;',             // "
        '35': '&amp;&#35;35&#59;',          // #
        '36': '&amp;&#35;36&#59;',          // $
        '37': '&amp;&#35;37&#59;',          // %
        '38': '&amp;&#35;38&#59;',          // &
        '39': '&amp;&#35;39&#59;',          // '
        '40': '&amp;&#35;40&#59;',          // (
        '41': '&amp;&#35;41&#59;',          // )
        '42': '&amp;&#35;42&#59;',          // *
        '43': '&amp;&#35;43&#59;',          // +
        '44': '&amp;&#35;44&#59;',          // ,
        '45': '&amp;&#35;45&#59;',          // -
        '46': '&amp;&#35;46&#59;',          // .
        '47': '&amp;&#35;47&#59;',          // /
        '58': '&amp;&#35;58&#59;',          // :
        '59': '&amp;&#35;59&#59;',          // ;
        '60': '&amp;lt&#59;',               // <
        '61': '&amp;&#35;61&#59;',          // =
        '62': '&amp;gt&#59;',               // >
        '63': '&amp;&#35;63&#59;',          // ?
        '64': '&amp;&#35;64&#59;',          // @
        '91': '&amp;&#35;91&#59;',          // [
        '92': '&amp;&#35;92&#59;',          // \
        '93': '&amp;&#35;93&#59;',          // ]
        '94': '&amp;&#35;94&#59;',          // ^
        '95': '&amp;&#35;95&#59;',          // _
        '96': '&amp;&#35;96&#59;',          // `
        '123': '&amp;&#35;123&#59;',        // {
        '124': '&amp;&#35;124&#59;',        // |
        '125': '&amp;&#35;125&#59;',        // }
        '126': '&amp;&#35;126&#59;',        // ~
        '176': '&amp;deg&#59;',             // °
        '197': '&amp;Aring&#59;',           // Å
        '198': '&amp;AElig&#59;',           // Æ
        '215': '&amp;times&#59;',           // ×
        '216': '&amp;Oslash&#59;',          // Ø
        '229': '&amp;aring&#59;',           // å
        '230': '&amp;aelig&#59;',           // æ
        '247': '&amp;divide&#59;',          // ÷
        '248': '&amp;oslash&#59;'           // ø
    };

    let encodedString = '<p>&lt;div&#32;class&#61;&quot;codeBlock&quot;&gt;';
    let currentCharCode;
    let indentSize = 0;

    for (let i = 0; i < inputString.length; i++) {
        currentCharCode = inputString.charCodeAt(i);

        // Checks if char is letter or number
        if (IsSafeAscii(inputString[i])) {
            encodedString += inputString[i];
            if (debug) {console.log('\"' + inputString[i] + '\" was safely added');}
        }
        // Checks if char is convertable
        else if (charList[currentCharCode]) {
            encodedString += charList[currentCharCode];
            if (debug) {console.log('\"' + inputString[i] + '\" was converted to \"' + charList[currentCharCode] + '\"');}
        }
        // Checks if char is a TAB
        else if (currentCharCode == 9) {
            if (inputString.charCodeAt(i+1) == 9) {
                console.log('This TAB is skipped');
                indentSize++;
            } else {
                indentSize++;
                encodedString += '&lt;span&#32;style&#61;&quot;margin&#45;left&#58;' + (indentSize * 2) + 'rem&#59;&quot;&gt;';
                if (debug) {console.log('\"' + inputString[i] + '\" was converted to \"&lt;span&#32;style&#61;&quot;margin&#45;left&#58;' + (indentSize * 2) + 'rem&#59;&quot;&gt;\", and \'indentSize\' = ' + indentSize);}
            }
        }
        // Checks if char is a newline
        else if (currentCharCode == 10) {
            if (indentSize > 0) {
                encodedString += '&lt;&#47;span&gt;&lt;br&gt;';
                indentSize = 0;
                if (debug) {console.log('\"' + inputString[i] + '\" was converted to \" &lt;&#47;span&gt;&lt;br&gt;<br>\", and \'indentSize\' = ' + indentSize);}
            } else {
                encodedString += '&lt;br&gt;';
                if (debug) {console.log('\"' + inputString[i] + '\" was converted to \"&lt;br&gt;<br>\"');}
            }
        }
        else {
            if (debug) {console.log('ERROR: Process terminated due to invalid input');}
            return '<>ASCII value <strong>' + currentCharCode + '</strong> has not yet been added to the encoder</>';
        }
    }
    // Adds remaining </span> tags
    while (indentSize > 0) {
        encodedString += '&lt;&#47;span&gt;';
        indentSize--;
    }
    encodedString += '&lt;&#47;div&gt;</p>';
    if (debug) {console.log('Returned string: ' + encodedString);}

    return encodedString;
}

function IsSafeAscii(charInput) {
    return (/^[0-9a-zA-Z]+$/).test(charInput);
}