
var can = document.getElementById("canva");
var ctx = can.getContext("2d");
document.addEventListener('mousemove',(event) => {
    var xe = event.x;
    var ye = event.y;
    var xe = xe - 1;
    var ye = ye - 41;
    ctx.fillRect(xe,ye,5,5);
    var xeye = xe + ":" + ye;
    function getRandomInt(max) {
        return Math.floor(Math.random() * max);}
    
    var help = (getRandomInt(1920));
    var help2 = (getRandomInt(940))
    ctx.fillText(xeye,help,help2)
    document.getElementById("h1").innerHTML = "x: " + xe + " y: " + ye;
    
})
function onlick(){
    var canvas = document.getElementById("canva");
    canvas.toBlob(function(blob) {
    saveAs(blob, "pretty image.png");
});
}
document.getElementById('deez').addEventListener('click', function(){
    setInterval(() => {

        setTimeout(() => {
            function getRandomInt(max) {
                return Math.floor(Math.random() * max);
            }
            
            var help = (getRandomInt(1920));
            var help2 = (getRandomInt(940));
            var r = (getRandomInt(255));
            var g = (getRandomInt(255));
            var b = (getRandomInt(255));
            var rgb2 = `rgb(${r},${g},${b})`;
            ctx.fillStyle = rgb2
            ctx.fillText('god help me',help,help2)
        }, 0.01);
        
    }, 0.01);
})
