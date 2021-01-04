var contBrowserObjModel =
    '<h2>The Browser Object Model</h2>' +
    '<p>window.location = ' + window.location +
    '<br>window.innerWidth = ' + window.innerWidth +
    '<br>window.innerHeight = ' + window.innerHeight +
    '<br>window.screen.width = ' + window.screen.width +
    '<br>window.screen.height = ' + window.screen.height +
    '<br>window.history.length = ' + window.history.length + '</p>';

var contDocObjModel =
    '<h2>The Document Object Model (DOM)</h2>' +
    '<p>document.title = ' + document.title +
    '<br>document.URL = ' + document.URL +
    '<br>document.lastModified = ' + document.lastModified +
    '<br>document.domain = ' + document.domain +
    '</p>';

document.getElementById('test').innerHTML = contBrowserObjModel + contDocObjModel;

function User(firstName, lastName) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.fullName = function() {
        return this.firstName + ' ' + this.lastName;
    };
}

var kjetil = new User('Kjetil', 'Eilertsen');
var casper = new User('Casper', 'Tollefsen');

document.getElementById('test').innerHTML += kjetil.fullName() + ' er sjefen til ' + casper.fullName();