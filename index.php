<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href ="style.css">
    <link rel ="stylesheet" href ="bootstrap.min.css">

    <title>Final Web Project</title>
    <style>
        .musica-btn:hover{
            cursor:pointer;
        }
        </style>
</head>
<body style ="background-image:url('img/bg-img/bg-1.jpg')";>
<style> 


@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*Font is: Montserrat*/

html, body{
  height: 100%;
  font-weight: 800;
}

body{
  background: #030321;
  font-family: Arial;
}

svg {
    display: block;
    font: 10.5em 'Montserrat';
    width: 100%;
    margin: 5px auto;
}

.text-copy {
    fill: none;
    stroke: white;
    stroke-dasharray: 6% 29%;
    stroke-width: 5px;
    stroke-dashoffset: 0%;
    animation: stroke-offset 5.5s infinite linear;
}

.text-copy:nth-child(1){
	stroke: #4D163D;
	animation-delay: -1;
}

.text-copy:nth-child(2){
	stroke: #840037;
	animation-delay: -2s;
}

.text-copy:nth-child(3){
	stroke: #BD0034;
	animation-delay: -3s;
}

.text-copy:nth-child(4){
	stroke: #BD0034;
	animation-delay: -4s;
}

.text-copy:nth-child(5){
	stroke: #FDB731;
	animation-delay: -5s;
}

@keyframes stroke-offset{
	100% {stroke-dashoffset: -35%;}
}



 
.main {
  display: block;
  /* position: absolute; */
  /* left: 48%; */
  /* -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%); */
  /* width: 40vw; */
  height: auto;
  font-family: "neontubes";
  font-size: 70px;
  text-align: center;
  white-space: nowrap;
  overflow:break;
}
.main span {
  display: block;
  position: relative;
  -webkit-transform: translateZ(0) translate3D(0, 0, 0);
          transform: translateZ(0) translate3D(0, 0, 0);
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  will-change: opacity;
}
.main .webdev {
  color: #ffd9e2;
  text-shadow: 0 0 0 transparent, 0 0 10px #ff003c, 0 0 20px rgba(255, 0, 60, 0.5), 0 0 40px #ff003c, 0 0 100px #ff003c, 0 0 200px #ff003c, 0 0 300px #ff003c, 0 0 500px #ff003c, 0 0 1000px #ff003c;
  -webkit-animation: blink 4s infinite alternate;
          animation: blink 4s infinite alternate;
}

 
@-webkit-keyframes buzz {
  70% {
    opacity: 0.80;
  }
}
 
@keyframes buzz {
  70% {
    opacity: 0.80;
  }
}
@-webkit-keyframes blink {
  40% {
    opacity: 1;
  }
  42% {
    opacity: 0.8;
  }
  43% {
    opacity: 1;
  }
  45% {
    opacity: 0.2;
  }
  46% {
    opacity: 1;
  }
}
@keyframes blink {
  40% {
    opacity: 1;
  }
  42% {
    opacity: 0.8;
  }
  43% {
    opacity: 1;
  }
  45% {
    opacity: 0.2;
  }
  46% {
    opacity: 1;
  }
}
/* @media screen and (min-width: 1000px) {
  .main {
    width: 400px;
    font-size: 80px;
  }
} */
</style>
<svg viewBox="0 0 960 300">
	<symbol id="s-text">
		<text text-anchor="middle" x="50%" y="80%"> Musica </text>
	</symbol>
	<g class = "g-ants">
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
	</g>
</svg>
<div>
</div>
<div class= "row">
    <div class= "col-sm-6 col-md-12 col-lg-12">
    <div class="main">
  <span class="webdev">Let the music speak</span>
  </div>
    </div>
</div>

  <br><br>
  <br><br>
  
<center><a href = "home.php" style="color:white;text-decoration:none;font-size:15px;">
<button class ="musica-btn">Explore</button></a></center>
    
