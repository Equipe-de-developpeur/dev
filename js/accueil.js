// TERRE

var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");

// Red rectangle
ctx.beginPath();
ctx.lineWidth = "4";
ctx.strokeStyle = "white";
ctx.rect(8, 8, 290, 140);
ctx.stroke();
ctx.clearRect(150, 75, 300, -100);

// MER

var c = document.getElementById("myCanvas2");
var ctx = c.getContext("2d");

// Red rectangle
ctx.beginPath();
ctx.lineWidth = "4";
ctx.strokeStyle = "#3b5773";
ctx.rect(8, 8, 290, 140);
ctx.stroke();
ctx.clearRect(150, 75, -300, -100);

//HEBERGEMENT

var c = document.getElementById("myCanvas3");
var ctx = c.getContext("2d");

// Red rectangle
ctx.beginPath();
ctx.lineWidth = "4";
ctx.strokeStyle = "white";
ctx.rect(8, 8, 290, 140);
ctx.stroke();
ctx.clearRect(150, 75, 300, -100);

// ACTIVITES

var c = document.getElementById("myCanvas4");
var ctx = c.getContext("2d");

// Red rectangle
ctx.beginPath();
ctx.lineWidth = "4";
ctx.strokeStyle = "#3b5773";
ctx.rect(8, 8, 290, 140);
ctx.stroke();
ctx.clearRect(150, 75, -150, -300);