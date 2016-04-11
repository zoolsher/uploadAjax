var a = 'what';
var fs = require('fs-promise');
var filename = '/test.dat';
(function() {
    fs.open(filename,'a+').then(function(fd){
        console.log('1');
        return fd.read(fd,1);
    }).then(function(args){
        console.log(0);
        console.log(args);
    });
})();