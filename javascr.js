function lol() {
    var b = confirm("This site uses biscuits bruv!");
    if(b === true){
        alert("God help you")
        var c = confirm("are you sure you want to continue");
        if(c === true){
            alert("ahhhhhhhh")
            var d = confirm("you really want to do this?");
            if(d === true){
                drawingnstuff2()
                    var e = confirm("are you trying to make me mad seriously you want to allow cookies the worst thing on the internet");
                    if(e === true){
                        alert("for the love of god there is no hope for humanity good luck lol");
                        drawingnstuff()
                        delay()
                    }
                else{
                    alert("you seriously playing this game?")
                }
            }
            else{
                alert("are you doing okay wanna talk text me my number is 07493455504")
            }
        }
        else{
            alert("you made a good decision")
        }
    }
    else{
        alert("Good for you")
    }
    
   
}

let sampleEle = document.querySelector(".sample");
document.body.addEventListener("mousemove", (event) => {
   sampleEle.innerHTML = "look i hakd u: " + "X: " + event.x + " Y: " + event.y;
   var xe = event.x;
   var ye = event.y;
});



//function helpme() {
//    var dodger = document.getElementById('ha')
//    dodger.style.marginTop = '100%'
//    console.log("kbb")    
//}

//function helpm() {
//    setTimeout(() => {
//
//        var dodger = document.getElementById('ha')
//        dodger.style.size = '50%'
//        console.log("kbl")          
//                
//    }, 500);
//      
//}

var can = document.getElementById("canv");
var ctx = can.getContext("2d");
function drawingnstuff(){
    ctx.font = "30px Arial";
    ctx.fillText("secrets", 45, 60);
}

function drawingnstuff2(){
    ctx.font = "30px Arial";
    ctx.fillText("gettingclose", 10, 30);
}

function delay(){
    setTimeout(fun, 5000)
}

function fun(){
    ctx.fillStyle = "white"
    ctx.fillRect(0, 0, 200, 100);
}


//var colours = Array("white","black","pink","blue","red","green","yellow")

function fat(){
    
    function getRandomInt(max) {
    return Math.floor(Math.random() * max);}

    var help = (getRandomInt(10000));
    

      
    if(help==1){
        ctx.font = "15px Arial";
        ctx.fillText("epilepsy warning spam", 0, 30);
        setInterval(() => {

            function getRandomInt(max2) {
                return Math.floor(Math.random() * max2);
            }
            
            var r = (getRandomInt(255));
            var g = (getRandomInt(255));
            var b = (getRandomInt(255));
            var rgb2 = `rgb(${r},${g},${b})`;
            
            //var col = colours[Math.floor(Math.random() * colours.length)];
            ctx.fillStyle = (//col
                rgb2)
            ctx.fillRect(0, 0, 2000, 100);
            document.getElementById("demo").innerHTML = (rgb2);
            console.log(rgb2)
                
        setTimeout(() => {

            ctx.fillStyle = (rgb2)
            ctx.fillRect(0, 0, 2000, 100);
                    
            }, 500);
                
        }, 500);

    };

  
    
    console.log(help);
    sampleEle.innerHTML = (help);

    
}


function button(){
    
    function getRandomInt(max) {
    return Math.floor(Math.random() * max);}

    var help = (getRandomInt(2));
    

      
    if(help==1){
        ctx.font = "15px Arial";
        ctx.fillText("epilepsy warning spam", 0, 30);
        setInterval(() => {

            function getRandomInt(max2) {
                return Math.floor(Math.random() * max2);
            }
            
            var r = (getRandomInt(255));
            var g = (getRandomInt(255));
            var b = (getRandomInt(255));
            var rgb2 = `rgb(${r},${g},${b})`;
            
            //var col = colours[Math.floor(Math.random() * colours.length)];
            ctx.fillStyle = (rgb2)
            ctx.fillRect(0, 0, 2000, 100);
            document.getElementById("demo").innerHTML = (rgb2);
            console.log(rgb2)
                
        setTimeout(() => {

            ctx.fillStyle = (rgb2)
            ctx.fillRect(0, 0, 2000, 100);
                    
            }, 0.5);
                
        }, 0.5);

    };

  
    
    console.log(help);
    sampleEle.innerHTML = (help);

    
}

function annoying() {

    alert("HAHA")
    
}

