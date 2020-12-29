let htmlInput = document.getElementById('htmlCodeInput');
let outputResult = document.getElementById('htmlEncodeResult');
document.getElementById('submitHtmlBtn').addEventListener("click", UpdateResult);

// Makes it possible to use TAB-key in text area
htmlInput.addEventListener('keydown', function(e) {
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

function HtmlEncode(inputString) {
    let encodedString = [''];
    for (let i = 0; i < inputString.length; i++) {
        if (inputString.charCodeAt(i) == 32) {
            encodedString += '&amp;&#35;32&#59;';
        } else if (inputString.charCodeAt(i) == 33) {
            encodedString += '&amp;&#35;33&#59;';
        } else if (inputString.charCodeAt(i) == 47) {
            encodedString += '&amp;&#35;47&#59;';
        } else if (inputString.charCodeAt(i) == 60) {
            encodedString += '&amp;lt&#59;';
        } else if (inputString.charCodeAt(i) == 62) {
            encodedString += '&amp;gt&#59;';
        } else {
            encodedString += inputString[i];
        }
    }
    return encodedString;
}

function UpdateResult() {
    outputResult.innerHTML = HtmlEncode(htmlInput.value);
}