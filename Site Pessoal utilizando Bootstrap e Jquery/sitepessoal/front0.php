<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Site de Tema Pessoal</title>
		
		<style type="text/css">
			header{
				width: 100%;
				height:120px;
				/*background-color: blue;*/
				float: left;
				
			}
			
			.sct{
				width: 50%;
				height: 500px;
				float: left;
			}
			
			#sct01{
				background-color:#fff;
				height:1420px;
			}
			#sct02{
				background-color:#fff;
				height:1420px;
				
			}
			
			footer{
				width:100%;
				height: 85px;
				background-color:#D3D3D3;
				float: left;
				text-align: center;	
				margin-top:1100px;	
				
			}
			
			#autent{
			background-color:#ffff;
			margin-top:80px;
			height:320px;
			width:350px;
			margin-left:180px;
			border-radius:20px;
			box-shadow: 8px 6px #000;
			
			}
			
			
		</style>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<script type="text/javascript">
				$(document).ready(function() {
					$("#header").load("headerContent.php"   );
					$("#sct01" ).load("section01Content.php");
					$("#sct02" ).load("section02Content.php");
					$("#footer").load("footerContent.php");
				});
		</script>

	</head>
<body>
	<header id="header">innerHTML header</header>
	<section class="sct" id="sct01" >innerHTML sct01</section>
	<section class="sct" id="sct02">innerHTML sct02</section>
	<footer id="footer">innerHTML footer</footer>
</body>
</html>