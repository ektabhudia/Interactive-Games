//jquery easing effect plugin
jQuery.easing.easeeffectplugin = (x, t, b, c, d) => {
if ((t/=d) < (1/2.75)) {
return c*(7.5625*t*t) + b;
} else if (t < (2/2.75)) {
return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
} else if (t < (2.5/2.75)) {
return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
} else {
return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
}
};


var ball = $('#ball');
var cup1 = $('#cup1');
var cup2 = $('#cup2');
var cup3 = $('#cup3');
var initialposball = 2;
var x =0;
var i = 0;
var ran =0;
var message = document.getElementById('message');


$(document).ready(() => {
    $('#btnShow').click(function start(){

      message.innerHTML = "Starting the Game....";
     ball.animate({opacity:1, bottom: 400}, 1000, 'easeeffectplugin');
    
     $(this).hide();
        console.log("Ball in glass 2....Ready to rumble");

   
        $("#cup1").delay(2000).animate({"margin-top": '50px'}, 500).animate({"margin-top": '50px'}, 800).animate({"margin-top": '0px'}, 500);

        $("#cup2").delay(3800).animate({"margin-top": '50px'}, 500).animate({"margin-top": '50px'}, 800).animate({"margin-top": '0px'}, 500);
        $(ball).delay(4300).animate({"opacity" : "0"});
  
        $("#cup3").delay(5600).animate({"margin-top": '50px'}, 500).animate({"margin-top": '50px'}, 800).animate({"margin-top": '0px'}, 500);
  
});

   $("#play1").click(function play() {
        
     
var left = Math.floor((Math.random()*3)+1);
var right = 0;

//Genarate Two Different Random Numbers
do{
  right = Math.floor((Math.random()*3)+1);
}
while(left==right);
     console.log(left);
     console.log(right);


      
        $("#cup-o-"+left).swap({  
            target: "cup-o-"+right, // The ID of the element we want to swap with  
            opacity: "0.7", //  If set will give the swapping elements a translucent effect while in motion  
             speed: 300// The time taken in milliseconds for the animation to occur    
        });

       

var parent1 = $("#cup-o-"+left).parent().attr('id');
        var num1 = parseInt(parent1.charAt(3));

var parent2 = $("#cup-o-"+right).parent().attr('id');
        var num2 = parseInt(parent2.charAt(3));
   
      var parent_all = $("#cup-o-2").attr('left');

         var timer = setTimeout(function() { play() },250);

         if(i===21){
              clearInterval(timer);
              alert("Which of the cup do you think has the ball...Still Do look carefully");
         }

 i++;
x=1;
       });

  
 $("#cup-o-2").on("click", () => {
  if(x==1){
    alert ("You won!");
  }
});

$("#cup-o-1").on("click", () => {
  if(x==1){
    alert("You lost!");
  }
});

$("#cup-o-3").on("click", () => {
  if(x==1){
    alert("You lost!");
  }
});




});
























/*$document.ready(function(){
  var ball = $("#ball");
  var random = Math.floor(Math.random()*3) + 1;
  var initialposball = 0;
  var ballimage = 
  $("#btnShow").on("click", function(event){
        event.preventDefault();
       
       
  });
});*/
















/*$document.ready(function(){
  var ball = $("#ball");
  var random = Math.floor(Math.random()*3) + 1;
  var initialposball = 0;
  var ballimage = 
  $("#btnShow").on("click", function(event){
        event.preventDefault();
       
       
  });
});*/























/*$document.ready(function(){
  var ball = $("#ball");
  var random = Math.floor(Math.random()*3) + 1;
  var initialposball = 0;
  var ballimage = 
  $("#btnShow").on("click", function(event){
        event.preventDefault();
       
       
  });
});*/