var log = console.log.bind(console);
// var log =function(s){
//     console.log(s)
//     document.querySelector("#id-text-log").value+=("/n"+s);
// }
var imageFromPath = function(path) {
    var img = new Image();
    img.src = path;
    return img;
};
var imageByName=function(name){
    if(MainVar.imageloads){
        return MainVar.imageloads[name];
    }
};


var Collide = function(a, b) {
    if((a.x>b.x&&a.x<b.x+b.image.width)||(b.x>a.x&&b.x<a.x+a.image.width)){
        if((a.y>b.y&&a.y<b.y+b.image.height)||(b.y>a.y&&b.y<a.y+a.image.height)){
            return true;
        }
    }
    return false;

};