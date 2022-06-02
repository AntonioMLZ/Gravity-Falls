<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="./css/winner.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  

<div class="grid"></div>

<div class="warning"></div>

<div class="base">
	<button id="activate">
		<span></span>
	</button>
</div>

<div class="box opened" id="cover">
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<span></span><span></span>
</div>

<div class="hinges"></div>

<div class="text">
	SELF-&thinsp;DESTRUCT
</div>

<div id="panel">
	<div id="msg">DEVICE SELF-DESTRUCTION </div>
	<div id="time">9</div>
	<span id="abort">ABORT</span>
	<span id="detonate">DETONATE</span>
</div>

<div id="turn-off"></div>
<div id="closing"></div>

	<div id="restart"><a href="./winner.php"><button id="reload"></button></a></div>
<div id="mute">
	
</div>
	

<audio id="alarm">
	<source src="https://josetxu.com/demos/sounds/self-destruct-count.mp3" type="audio/mpeg">
</audio>

	<script src="./js/winner.js"></script>
</body>
</html>