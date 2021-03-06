<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>안녕 하세요</title>

	<style type="text/css">
		* {
			box-sizing: border-box;
		}

		header
		{
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 30px 15%;
		}

		li,a
		{
			font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
			font-weight: 500;
			font-size: 20px;
			color: #edf0f1;
			text-decoration: none;
		}

		.navLinks
		{
			line-style: none;
		}

		.navLinks li
		{
			display: inline-block;
			padding: 0px 20px;
		}

		.navLinks li a
		{
			transition: all 0.3s ease 0s;
		}

		.navLinks li a:hover
		{
			color: dimgray;
			text-decoration: underline;
		}

		.btn-1
		{
			width: 100px;
			height: 30px;
			border: none;
			color: #fff;
			background-color: #9FC1D3;
			font-size: medium;
			border-radius: 4px;
			box-shadow: inset 0 0 0 0 rgb(63, 100, 126);
			transition: ease-out 0.3s;
			outline: none;
			font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
		}

		.btn-1:hover
		{
			box-shadow: inset 100px 0 0 0 rgb(63, 100, 126);
			cursor: pointer;
		}


		body 
		{
			font-family: 'Courier New', Courier, monospace;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: auto;
		}

		.bg
		{
			background: url("assets/bg1.jpg");
			z-index: -1;
			background-repeat: no-repeat;
			background-size: cover;
			opacity: 95%;
			height: 100%;
		}

		.text_wraper {
			margin-top: 200px;
			height: 110px;
			overflow-y: hidden;
		}

		.text_wraper .innerText {
			text-align: center;
			display: flex;
			flex-direction: column;
			line-height: 110px;
			font-size: 95px;
			color: #fff;
		}

		.navwrapper
		{
			/* background-color:#677c8a;191D20*/
			background-color:transparent;
			height: 90px;
		}

		.t2wrap
		{
			display: inline-block;
			/* margin-top: 30px; */
			/* margin-left: 10%; */
			height:102vh;
			width: auto;
			background-color: rgba(0,0,10); /* Black w/opacity/see-through */
			font-family: 'Courier New', Courier, monospace;
			font-weight: lighter;
		}

		.t2wrap h1
		{
			font-size: 50px;
			color: #fff;
			z-index: 2;
			text-align: center;
			/* text-decoration: underline; */
		}

		.t2wrap h3
		{
			margin-left: 50px;
			margin-right: 40px;
			margin-top: 200px;
			color: #fff;
			z-index: 2;
			text-align: justify;
			text-shadow: 5px;
		}

		.article
		{
			display: flex;
			flex-direction: row;
			margin-right: 30px;
		}

		.imgart
		{
			margin-top: 80px;
			height: 600px;
			width: 1000px;
		}

		.bghome
		{
			background: url("/assets/hometown.png");
			z-index: -1;
			background-repeat: no-repeat;
			background-size: cover;
			/* background-position: center; */
			height: 100vh;
			background-attachment: fixed;
			transform-style: preserve-3d;
		}

		.bghome::before
		{
			content: "";
			position: absolute;
			display: block;
			transform-origin: center center 0;
			transform: translate(-1px) scale(2);
			min-height: 100vh;
		}

		.bghome h1
		{
			color: #fff;
			font-size: 60px;
			text-align: center;
			padding-top: 250px;
			margin-top: 0;
		}
		.bghome h2
		{
			color: #fff;
			font-size: 40px;
			text-align: center;
			padding-top: auto;
			margin-top: 0;
		}

		.sbubble
		{
			width: 600px;
			height: 600px;
			top: 40px;
			background: #d7d7d7;
			position: relative;
			background-size: cover;
			border-radius: 12px;
		}

		#imagefood
		{
			height: 200px;
			display: block;
			margin-left: auto;
			margin-right: auto;
		}

		#imageprofile
		{
			height: 600px;
		}

		.imageinprofile
		{
			position: absolute; 
			right: 10%;
			margin-top: 5%;
		}

		.sbubble h1
		{
			font-size: 25px;
			text-align: center;
			text-decoration: underline;
		}

		.sbubble p
		{
			font-size: 18px;
			text-align: center;
			padding: 20px;
		}

		.article h3
		{
			text-align: center;
			/* padding-left: 200px;
			padding-right: 500px; */
			padding-bottom: 10%;
		}

		#added
		{
			height: 100px;
		}

		#add
		{
			height: 100vh;
		}

		.colorbg
		{
			background: #8495A5;
			height: fit-content;
		}

		.bgfood
		{
			background: url(/assets/foodbg.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			background-position-y: 20%;
			z-index: -1;
			height: 100vh;
			background-attachment: fixed;
			transform-style: preserve-3d;
		}

		.bgfood::before
		{
			content: "";
			position: absolute;
			display: block;
			transform-origin: center center 0;
			transform: translate(-1px) scale(2);
			min-height: 100vh;
		}

		.bgfood h1
		{
			color: #fff;
			font-size: 60px;
			text-align: center;
			padding-top: 250px;
			margin-top: 0;
		}

		.bgfood h2
		{
			color: #fff;
			font-size: 40px;
			text-align: center;
			padding-top: auto;
			margin-top: 0;
		}

		.foodwrap
		{
			display: grid;
			grid-template-columns: auto auto;
			grid-gap: 40px 0px;
			justify-items: center;
			right: auto;
		}

		.bgtour
		{
			background: url(/assets/kotatua.jpg);
			z-index: -1;
			background-repeat: no-repeat;
			background-size: cover;
			/* background-position: center; */
			height: 100vh;
			background-attachment: fixed;
			transform-style: preserve-3d;
		}

		.bgtour::before
		{
			content: "";
			position: absolute;
			display: block;
			transform-origin: center center 0;
			transform: translate(-1px) scale(2);
			min-height: 100vh;
		}

		.bgtour h1
		{
			color: #fff;
			font-size: 60px;
			text-align: center;
			padding-top: 250px;
			margin-top: 0;
		}
		.bgtour h2
		{
			color: #fff;
			font-size: 40px;
			text-align: center;
			padding-top: auto;
			margin-top: 0;
		}

		.tourwrap
		{
			display: inline-block;
			width: 100%;
			background-color: #c1b9c8bb; /* Black w/opacity/see-through */
			background-size: cover;
			font-family: 'Courier New', Courier, monospace;
			font-weight: lighter;
		}

		.tourbub
		{
			margin: 40px;
			width: 1200px;
			height: 240px;
			top: 40px;
			margin-left: auto;
			margin-right: auto;
			background: #d7d7d7;
			position: relative;
			background-size: cover;
			border-radius: 12px;
		}

		#ancol
		{
			background: url(/assets/ancol.jpg);
			background-size: 1400px 800px;
			background-repeat: no-repeat;
			background-position-y: center;
		}

		#ancol:hover .overlay
		{
			opacity: 1;
		}

		#ancol:hover .gone
		{
			opacity: 0;
		}

		#kotatua
		{
			background: url(/assets/kotatua1.jpg);
			background-size: 1400px 800px;
			background-repeat: no-repeat;
			background-position-y: 90%;
		}

		#kotatua:hover .overlay
		{
			opacity: 1;
		}

		#kotatua:hover .gone
		{
			opacity: 0;
		}

		#seaworld
		{
			background: url(/assets/seaworld.jpg);
			background-size: 1400px 800px;
			background-repeat: no-repeat;
			background-position-y: 30%;
		}

		#seaworld:hover .overlay
		{
			opacity: 1;
		}

		#seaworld:hover .gone
		{
			opacity: 0;
		}

		#monas
		{
			background: url(/assets/monas1.jpg);
			background-size: 1400px 800px;
			background-repeat: no-repeat;
			background-position-y: 85%;
		}

		#monas:hover .overlay
		{
			opacity: 1;
		}

		#monas:hover .gone
		{
			opacity: 0;
		}

		#tmii
		{
			background: url(/assets/tmii.jpg);
			background-size: 1400px 800px;
			background-repeat: no-repeat;
			background-position-y: 30%;
		}

		#tmii:hover .overlay
		{
			opacity: 1;
		}

		#tmii:hover .gone
		{
			opacity: 0;
		}

		.gone
		{
			padding-top: 60px;
			color: #fff;
			font-size: 80px;
			text-align: center;
		}

		.overlay{
			position: absolute;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			width: 1200px;
			height: auto;
			/* display: flex; */
			/* justify-content: center;
			align-items: center; */
			background-color: transparent;
			opacity: 0;
			transition: 0.8s ease;
			z-index: 0;
		}

		.overlay h1
		{
			/* padding-left: 200px; */
			color: #000;
			text-align: center;
			text-shadow: 2px black;
		}

		.overlay h3
		{
			color: #000 ;
			text-align: center;
			/* padding-left: 120px; */
		}

		.bgprofile
		{
			background: url(/assets/profilebg.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			background-position-y: 50%;
			z-index: -1;
			height: 100vh;
			background-attachment: fixed;
			transform-style: preserve-3d;
		}

		.bgprofile::before
		{
			content: "";
			position: absolute;
			display: block;
			transform-origin: center center 0;
			transform: translate(-1px) scale(2);
			min-height: 100vh;
		}

		.bgprofile h1
		{
			color: #fff;
			font-size: 60px;
			text-align: center;
			padding-top: 250px;
			margin-top: 0;
		}

		.bgprofile h2
		{
			color: #fff;
			font-size: 40px;
			text-align: center;
			padding-top: auto;
			margin-top: 0;
		}

		.artprofile
		{
			display: flex;
			flex-direction: row;
		}

		.profile
		{
			padding-top: 2%;
			display: flex;
			flex-direction: column;
		}

		.profile h1
		{
			padding-top: 10%;
		}

		.profile h3
		{
			color: #000;
			width: 55%;
			height: 70vh;
		}

		.containerprof 
		{
			width:100%;
			padding-left: 10%;
			padding-right: 15%;
		}

		.containerprof h1
		{
			width: 50%;
		}

		.profilebg
		{
			background: #C2D2E2;
			background-size: cover;
		}

		.new
		{
			position:relative;
			width: 400px;
			height: 5px;
			background : linear-gradient(90deg, #261C2C 0%, #3E2C41 100%);
			box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.25);
			border-radius: 20px;
		}

		/* .sbubble::before
		{
			content: '';
			position: absolute;
			right: 80%;
			top: 60px;
			width: 0;
			height: 0;
			border-top: 13px solid transparent;
			border-right: 36px solid black;
			border-bottom: 13px solid transparent;
		} */
	
	</style>
</head>
<body>
    <div class="bgprofile">
        <header class="navwrapper">
            <nav>
                <ul class="navLinks">
                    <li><a href="/quiz1">Home</a></li>
                    <li><a href="/quiz1/profile">Profile</a></li>
                    <li><a href="/quiz1/hometown">Hometown</a></li>
                    <li><a href="/quiz1/foods">Foods</a></li>
                    <li><a href="/quiz1/tourist">Tourist</a></li>
                </ul>
            </nav>
            <a href="https://www.linkedin.com/in/vincent-yonathan/"><button class="btn-1">Contact Me</button></a>    
        </header>
        <h1>About Me</h1>
        <h2>Know Me More!</h2>
    </div>
    <div class="profilebg">
        <div class="containerprof">
            <div class="artprofile">
                <div class="profile">
                    <h1>
                        Hi!
                        <br>
                        I'm Vincent Yonathan
                    </h1>
                    <div class="new"></div>
                    <h3>
                    I’m an Ambitious and  Passionate student from Sepuluh Nopember Institute of Technology. 
                    <br>
                    My background in programming, visual design, and data analysis inform my mindful and competitive nature.
                    I’m fueled by my passion for data and are eager to always learn to improve on my academic foundation in programming.
                    <br>
                    I’m interested in working as Data Analyst and Full Stack Developer.
                    My goal in life is to make every single one of my work become blessings and helpful to others.
                    </h3>
                </div>
                <div class="imageinprofile">
                    <img src="/assets/S__20537351.jpg" id="imageprofile" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>