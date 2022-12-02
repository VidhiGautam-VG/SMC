<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <title>Website Developer</title>
  <!---title logo--->
  <link rel="shortcut icon" type="image/jpg" href=".\assets\logo.jpg"/>
  <!------end----->
  <!----meta ---->
  <meta charset="utf-8">
  <meta name="author" content="Ajay Gupta">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!----bootstrap cdn----->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-----------CSS Links---------->
 <link rel="stylesheet" type="text/css" href=".\css\profile.css">
 <!-----------end---------->
</head>
<body>

<br/>
<br/>
<div class="main center">
	<div class="box center">
		<img src="./assets/vidhi.jpg" alt="">
		<div>
			<p class="user_name">Vidhi Gautam</p>
			<p class="skill">Front-end developer</p>
		</div>
		<div class="arr_container center">
			<i class="fa fa-arrow-right"></i>
		</div>
		<div class="left_container off">
			<p>SKILLS</p>
			<div class="skills">
				<div>HTML</div>
				<div>CSS</div>
				<div>JavaScript</div>
			</div>
			<div class="icons">
				<a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQERrG7kMYoVbwAAAXlhOFeo2r-_39BYh0w6L769LpSfT15GxL7TcpNiiPfgLJ673RmqmM8NvAplsQPNS2IkXwaFlEeJVy1vuSB7nSmCwZcSKBajftWIvAANkGjAsDM5mPiVCmI=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fvidhi-gautam-964a7a1b8"><i class="fa fa-linkedin"></i></a>
				<a href="https://www.instagram.com/logical_thinker_07/?igshid=1logc9le4ewwt"><i class="fa fa-instagram"></i></a>
				<a href="https://twitter.com/VidhiGautam7?s=08"><i class="fa fa-twitter"></i></a>
			</div>
			<div class="cancel center">
				<i class="fa fa-times"></i>
			</div>
		</div>
	</div>
</div>
<div class="main center">
		<div class="box center">
		<img src=".\assets\shivi.jpeg"alt="">
		<div>
			<p class="user_name">Shivani Gupta</p>
			<p class="skill">Front-end & Backend-end Developer</p>
		</div>
		<div class="ar_container center">
			<i class="fa fa-arrow-right"></i>
		</div>
		<div class="lef_container off">
			<p>SKILLS</p>
			<div class="skills">
				<div>HTML</div>
				<div>CSS</div>
				<div>JavaScript</div>
				<div>PHP</div>
				<div>SQL</div>
				<div>BOOTSTRAP</div>

			</div>
			<div class="icons">
				<a href="https://www.linkedin.com/in/shivani-gupta-9a2a73202"><i class="fa fa-linkedin"></i></a>
				<a href="https://www.instagram.com/technoshivi206/?igshid=el266qyr2jh9"><i class="fa fa-instagram"></i></a>
				<a href="https://twitter.com/Shivi57133638?s=09"><i class="fa fa-twitter"></i></a>
			</div>
			<div class="cancl center">
				<i class="fa fa-times"></i>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>
<!----profile java script---->
<script >
	const clc = document.querySelector(".cancel");
	const arr = document.querySelector(".arr_container");
	const left_container = document.querySelector(".left_container");

	arr.addEventListener("click", ()=> {
		arr.classList.add("active_arr");
		if(left_container.classList.contains("off")){
			left_container.classList.remove("off");
			left_container.classList.add("active");
		}
	});
	clc.addEventListener("click", ()=> {
		arr.classList.remove("active_arr");
		if(left_container.classList.contains("active")){
			left_container.classList.remove("active");
			left_container.classList.add("off");
		}
	});
</script>
<script>
	const cl = document.querySelector(".cancl");
	const ar = document.querySelector(".ar_container");
	const lef_container = document.querySelector(".lef_container");

	ar.addEventListener("click", ()=> {
		ar.classList.add("active_ar");
		if(lef_container.classList.contains("off")){
			lef_container.classList.remove("off");
			lef_container.classList.add("active");
		}
	});
	cl.addEventListener("click", ()=> {
		ar.classList.remove("active_ar");
		if(lef_container.classList.contains("active")){
			lef_container.classList.remove("active");
			lef_container.classList.add("off");
		}
	});
</script>
</body>
</html>