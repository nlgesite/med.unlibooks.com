<html>
	<head>
		<style>
			body{
				color: white;
				padding: 0;
				margin: 0;
				background: url('http://med.unlibooks.com/public/images/loginback.png') no-repeat white;
				background-size: 100% 100%;
			}
			.MainHolder{
				position: absolute;
				width: 700px;
				top: 10%;
				left: 50%;
				margin-left: -350px;
				text-align: center;
				font-family: Arial;
			}
			.MainHeader{
				font-size: 50px;
			}
			.SubHeader{
				padding-top: 20px;
				font-size: 13px;
			}
			.Loading{
				margin-top: 70px;
				height: 30px;
				border: 1px solid #5599bb;
				border-radius: 5px;
				background-color: #004466;
			}
			.Loaded{
				width: 2%;
				height: 100%;
				background-color: #89df20;
				-webkit-transition: 1s ease-in-out;
				-moz-transition: 1s ease-in-out;
				-o-transition: 1s ease-in-out;
				transition: 1s ease-in-out;
			}
		</style>
	</head>
	<body>
		<div class="MainHolder">
			<div class="MainHeader">Please wait while we <br/>configure your account.</div>
			<div class="Loading">
				<div class="Loaded" id="Loaded"></div>
			</div>
			<div class="SubHeader">All rights reserve - UNLIBOOKS FOR MEDICAL PRACTICIONER 2015.</div>
		</div>
	</body>
</html>