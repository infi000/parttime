<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />

<title>超稳乐娱官方导航</title>
<style>
body {
  background: #060e1b;
  overflow: hidden;
}
html, body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  overflow: hidden;

}
h1{
      position: absolute;
    color: #7f002b;
    text-align: center;
    display: block;
    width: 100%;
    top: 30px;
    font-family: '隶书';
    font-size: 40px;
    text-indent: 0.5em;
    letter-spacing: 0.5em;
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 20px #fff, 0 0 20px #FFEB3B, 0 0 30px #fbff00, 0 0 30px #8BC34A, 0 0 40px #ff0000, 0 0 50px #e6e6e6;
}
li{
  margin-bottom: 20px;
}
canvas {
  //opacity: 0.5;
}

#marquee{
      position: absolute;
          left: 0;
    right: 0;
    bottom: 20px;
        background: rgba(255, 255, 255, 0.31);
    color: #fff;
    padding: 10px 0;
}
</style>
</head>

<body>
  <h1 >超稳乐娱</h1>
    <ul style="margin-top:150px;left:50%;margin-left:-9rem;position:absolute;line-height: 3rem;display: block;text-align: center;color:blue;font-family:'隶书';text-decoration:none;">
        <li style="list-style-type:none;"><a style="color:red;font-size:20px;display: block;margin:auto;text-align: center;background: rgba(255,255,255,0.6);border-radius: 3rem;width: 13rem;text-decoration:none;" href="http://www.y4d6v.cn/nine9ye/index?skin=chaowen">超稳大厅</a></li>
        <li style="list-style-type:none;"><a style="color:orange;font-size:20px;display: block;margin:auto;text-align: center;background: rgba(255,255,255,0.6);border-radius: 3rem;margin-top: 1rem;text-decoration:none;" href="http://www.y4d6v.cn/nine9ye/index?skin=dasheng">大圣大厅</a></li>
        <li style="list-style-type:none;"><a style="color:yellow;font-size:20px;display: block;margin:auto;text-align: center;background: rgba(255,255,255,0.6);border-radius: 3rem;margin-top: 1rem;text-decoration:none;" href="http://www.y4d6v.cn/nine9ye/index?skin=feiying">飞鹰大厅</a></li>
        <li style="list-style-type:none;"><a style="color:green;font-size:20px;display: block;margin:auto;text-align: center;background: rgba(255,255,255,0.6);border-radius: 3rem;margin-top: 1rem;text-decoration:none;" href="http://www.y4d6v.cn/nine9ye/index?skin=liuliu">六六大厅</a></li>
        <li style="list-style-type:none;"><a style="color:blue;font-size:20px;display: block;margin:auto;text-align: center;background: rgba(255,255,255,0.6);border-radius: 3rem;margin-top: 1rem;text-decoration:none;" href="http://www.y4d6v.cn/nine9ye/index?skin=518">518大厅</a></li>
    </ul>
 <marquee align="" behavior="scroll" direction="left" scrollamount="3" id="marquee">网站通知：APP正式上线，请广大玩家抓紧下载！</marquee>
<canvas id="canvas"></canvas>
<script>
"use strict";

var canvas = document.getElementById('canvas'),
  ctx = canvas.getContext('2d'),
  w = canvas.width = window.innerWidth,
  h = canvas.height = window.innerHeight,

  hue = 217,
  stars = [],
  count = 0,
  maxStars = 1200;

var canvas2 = document.createElement('canvas'),
  ctx2 = canvas2.getContext('2d');
canvas2.width = 100;
canvas2.height = 100;
var half = canvas2.width / 2,
  gradient2 = ctx2.createRadialGradient(half, half, 0, half, half, half);
gradient2.addColorStop(0.025, '#fff');
gradient2.addColorStop(0.1, 'hsl(' + hue + ', 61%, 33%)');
gradient2.addColorStop(0.25, 'hsl(' + hue + ', 64%, 6%)');
gradient2.addColorStop(1, 'transparent');

ctx2.fillStyle = gradient2;
ctx2.beginPath();
ctx2.arc(half, half, half, 0, Math.PI * 2);
ctx2.fill();

// End cache

function random(min, max) {
  if (arguments.length < 2) {
    max = min;
    min = 0;
  }

  if (min > max) {
    var hold = max;
    max = min;
    min = hold;
  }

  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function maxOrbit(x, y) {
  var max = Math.max(x, y),
    diameter = Math.round(Math.sqrt(max * max + max * max));
  return diameter / 2;
}

var Star = function() {

  this.orbitRadius = random(maxOrbit(w, h));
  this.radius = random(60, this.orbitRadius) / 12;
  this.orbitX = w / 2;
  this.orbitY = h / 2;
  this.timePassed = random(0, maxStars);
  this.speed = random(this.orbitRadius) / 900000;
  this.alpha = random(2, 10) / 10;

  count++;
  stars[count] = this;
}

Star.prototype.draw = function() {
  var x = Math.sin(this.timePassed) * this.orbitRadius + this.orbitX,
    y = Math.cos(this.timePassed) * this.orbitRadius + this.orbitY,
    twinkle = random(10);

  if (twinkle === 1 && this.alpha > 0) {
    this.alpha -= 0.05;
  } else if (twinkle === 2 && this.alpha < 1) {
    this.alpha += 0.05;
  }

  ctx.globalAlpha = this.alpha;
  ctx.drawImage(canvas2, x - this.radius / 2, y - this.radius / 2, this.radius, this.radius);
  this.timePassed += this.speed;
}

for (var i = 0; i < maxStars; i++) {
  new Star();
}

function animation() {
  ctx.globalCompositeOperation = 'source-over';
  ctx.globalAlpha = 0.8;
  ctx.fillStyle = 'hsla(' + hue + ', 64%, 6%, 1)';
  ctx.fillRect(0, 0, w, h)

  ctx.globalCompositeOperation = 'lighter';
  for (var i = 1, l = stars.length; i < l; i++) {
    stars[i].draw();
  };

  window.requestAnimationFrame(animation);
}

animation();
</script>
</body>
</html>
