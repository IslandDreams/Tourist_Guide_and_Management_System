<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to Island Dreams</title>
	
	<!-- device compatibility -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="Island Dreams... Best Tourism Services">
	<meta name="keywords" content="beautiful places, island dreams, hotels, vehicle, rent, sri lanka, tourist, guide" />

	<!-- stylesheets -->
	<link rel="stylesheet" href="css/welcome/bootstrap.min.css">
	
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	
	<style>
		body{
			background-color:#D4EDF0;
		}
		canvas{
			background-image:url("images/welcome_cover.jpg");
			background-size: 1366px 400px;
		}
		div.col-sm-4 {
			background-color: rgba(240,240,240,0.7);
		}
		footer {
			background-color: rgba(240,240,240,0.7);
			padding: 25px;
		}
		input[type="button"] {
			margin: auto auto;
			padding: 10px 50px;
			border-radius: 25px;
			font-size: 20px;
			background-color: transparent;
			color: rgb(0,0,0);
			text-transform: uppercase;
			border: 2px solid #4f5d61;
			cursor: pointer;
			width: 25%;
			letter-spacing: 1px;	
		}
		input[type="button"]:hover {
			color: rgb(255,255,255);
			background-color:  rgba(0,0,255,0.8);
		}
	</style>
</head>
<body>
	<div class="home-top" id="home-top">
		<canvas id="web-canvas" style="position: absolute;z-index:4;"></canvas>
	</div>
	<script src="js/welcome/EasePack.min.js"></script>
	<script src="js/welcome/rAF.js"></script>
	<script src="js/welcome/TweenLite.min.js"></script>
	<script>
		(function() {
			var width, height, largeHeader, canvas, ctx, points, target, animateHeader = true;
			// Main
			initHeader();
			initAnimation();
			addListeners();
			function initHeader() {
				width = window.innerWidth-20;
				height = window.innerHeight;
				target = {x: width/2, y: height/2};
				largeHeader = document.getElementById('home-top');
				//largeHeader.style.height = '700px';
				canvas = document.getElementById('web-canvas');
				canvas.width = width;
				//canvas.height = height;
				canvas.height = 400;
				ctx = canvas.getContext('2d');
				// create points
				points = [];
				for(var x = 0; x < width; x = x + width/20) {
					for(var y = 0; y < height; y = y + height/20) {
						var px = x + Math.random()*width/20;
						var py = y + Math.random()*height/20;
						var p = {x: px, originX: px, y: py, originY: py };
						points.push(p);
					}
				}
				// for each point find the 5 closest points
				for(var i = 0; i < points.length; i++) {
					var closest = [];
					var p1 = points[i];
					for(var j = 0; j < points.length; j++) {
						var p2 = points[j]
						if(!(p1 == p2)) {
							var placed = false;
							for(var k = 0; k < 5; k++) {
								if(!placed) {
									if(closest[k] == undefined) {
										closest[k] = p2;
										placed = true;
									}
								}
							}
							for(var k = 0; k < 5; k++) {
								if(!placed) {
									if(getDistance(p1, p2) < getDistance(p1, closest[k])) {
										closest[k] = p2;
										placed = true;
									}
								}
							}
						}
					}
					p1.closest = closest;
				}
				// assign a circle to each point
				for(var i in points) {
					var c = new Circle(points[i], 2+Math.random()*2, 'rgba(255,255,255,0.3)');
					points[i].circle = c;
				}
			}
			// Event handling
			function addListeners() {
				if(!('ontouchstart' in window)) {
					window.addEventListener('mousemove', mouseMove);
				}
				window.addEventListener('scroll', scrollCheck);
				window.addEventListener('resize', resize);
			}
			function mouseMove(e) {
				var posx = posy = 0;
				if (e.pageX || e.pageY) {
					posx = e.pageX;
					posy = e.pageY;
				}
				else if (e.clientX || e.clientY)    {
					posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
					posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
				}
				target.x = posx;
				target.y = posy;
			}
			function scrollCheck() {
				if(document.body.scrollTop > height) animateHeader = false;
				else animateHeader = true;
			}
			function resize() {
				width = window.innerWidth-20;
				height = window.innerHeight;
				//largeHeader.style.height = height+'px';
				canvas.width = width;
				//canvas.height = height;
				canvas.height = 400;
			}
			// animation
			function initAnimation() {
				animate();
				for(var i in points) {
					shiftPoint(points[i]);
				}
			}
			function animate() {
				if(animateHeader) {
					ctx.clearRect(0,0,width,height);
					for(var i in points) {
						// detect points in range
						if(Math.abs(getDistance(target, points[i])) < 4000) {
							points[i].active = 0.3;
							points[i].circle.active = 0.6;
						} else if(Math.abs(getDistance(target, points[i])) < 20000) {
							points[i].active = 0.1;
							points[i].circle.active = 0.3;
						} else if(Math.abs(getDistance(target, points[i])) < 40000) {
							points[i].active = 0.02;
							points[i].circle.active = 0.1;
						} else {
							points[i].active = 0;
							points[i].circle.active = 0;
						}
						drawLines(points[i]);
						points[i].circle.draw();
					}
				}
				requestAnimationFrame(animate);
			}
			function shiftPoint(p) {
				TweenLite.to(p, 1+1*Math.random(), {x:p.originX-50+Math.random()*100,
					y: p.originY-50+Math.random()*100, ease:Circ.easeInOut,
					onComplete: function() {
						shiftPoint(p);
					}});
			}
			// Canvas manipulation
			function drawLines(p) {
				if(!p.active) return;
				for(var i in p.closest) {
					ctx.beginPath();
					ctx.moveTo(p.x, p.y);
					ctx.lineTo(p.closest[i].x, p.closest[i].y);
					ctx.strokeStyle = 'rgba(255,255,255,'+ p.active+')';						//(156,217,249)
					ctx.stroke();
				}
			}
			function Circle(pos,rad,color) {
				var _this = this;
				// constructor
				(function() {
					_this.pos = pos || null;
					_this.radius = rad || null;
					_this.color = color || null;
				})();
				this.draw = function() {
					if(!_this.active) return;
					ctx.beginPath();
					ctx.arc(_this.pos.x, _this.pos.y, _this.radius, 0, 2 * Math.PI, false);
					ctx.fillStyle = 'rgba(255,255,255,'+ _this.active+')';						//(156,217,249)
					ctx.fill();
				};
			}
			// Util
			function getDistance(p1, p2) {
				return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
			}
		})();
	</script>
	<div class="container text-center">
		<div class="row">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="col-sm-4">
				<h1 align="center"><b>Looking for Places to Visit ?</b></h1>
			</div>
			<div class="col-sm-4"> 
				<h1 align="center"><b>Want a Vehicle for Rent ?</b></h1>
			</div>
			<div class="col-sm-4">
				<h1 align="center"><b>Looking for Hotel Rooms ?</b></h1>
			</div>
		</div>
	</div><br>
	<div>
		<form method="get" action="#">
			<p align="center">
				<input type="button" value="Get Start" name="submit" onclick="location.href='3_homepage.php'" />
			</p>
		</form>
	</div>
	<br><br><br>
	<footer class="container-fluid text-center">
		<p>© 2017 Island Dreams. All rights reserved</p>
	</footer>
</body>
</html>
