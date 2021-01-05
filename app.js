console.clear();
console.log("\nProgram started");

const fs = require('fs');

const testFile = 'test.js';

// Check if the file exists in the current directory, and if it is writable.
fs.access(testFile, fs.constants.F_OK | fs.constants.W_OK, (err) => {
    if (err) {
        console.error(`${testFile} ${err.code === 'ENOENT' ? 'does not exist' : 'is read-only'}`);
    } else {
        console.log(`${testFile} exists, and it is writable`);
    }
});

console.log(fs.constants);

// for (let i = 0; i < readMe.length; i++)
//     console.log(readMe[i]);

// fs.appendFile('test.js', fs, (err) => {
//     if (err) throw err;
//     console.log('Data appended to file');
// });