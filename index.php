<html>
	<head>
		<title>AIK</title>
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto:100italic,300,500' rel='stylesheet' type='text/css'>
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script>	
			window.onload = function(){
				if (window.location.hash=='#/' + 'Home') {
					$("#0").click();
				}else if (window.location.hash=='#/' + 'Chat') {
					$("#1").click();
				}else if (window.location.hash=='#/' + 'MC') {
					$("#2").click();
				}else if (window.location.hash=='#/' + 'Plex') {
					$("#3").click();
				}else if (window.location.hash=='#/' + 'Requests') {
					$("#4").click();
				}else if (window.location.hash=='#/' + 'Owncloud') {
					$("#5").click();
				}else if (window.location.hash=='#/' + 'FTP') {
					$("#6").click();
				}else if (window.location.hash=='#/' + 'ISO') {
					$("#7").click();
				}else{
					window.location = './#/Home';
					$("#0").click();
				}
			}
			$(document).ready(function(){
				$("#0").click(function(){
					$('.card').css({
						'background': '#F4F4F4 url(img/panel_0.png) center right no-repeat',
						'color': '#222222',
						'background-size': '50% auto',
						'transition-duration':'1s',
					});
					$('meta[name=theme-color]').attr("content", "#F4F4F4");
					$('h2').html('\\\\SERVER');
					$('p').html("<iframe style='width:99%;' scrolling='no' frameborder='0' src='space.php'></iframe>This page serves as the landing page for my home server,<br> from here you can access various services via the<br> links below.<br><br><table style='width:400px;'> <tr> <td>CPU/Mobo:</td> <td align='right'>GA-j1900n-d3v</td> </tr> <tr> <td>RAM:</td> <td align='right'>8GB Crucial DDR3</td> </tr> <tr> <td>Storage 1:</td> <td align='right'>120gb Kingston</td> </tr> <tr> <td>Storage 2:</td> <td align='right'>5x4TB WD Red</td> </tr> <tr> <td>OS:</td> <td align='right'>WS 2008r2</td> </tr> </table>");
					$('#m').css("display", "none");
				});
				$("#1").click(function(){
					$('.card').css({
						'background': '#CFD8DC url(img/panel_1.png) center right 50px no-repeat',
						'color': '#222222',
						'background-size': '50% auto',
					});
					$('meta[name=theme-color]').attr("content", "#CFD8DC");
					$('h2').html('Discord');
					$('p').html("VOIP and Text Chat, for games or general use.The URL is:<br>chat.mydomain.co.uk<br><iframe style='height:80%;width:50%;' scrolling='no' src='https://discordapp.com/widget?id=134250612140408832&theme=dark' width='300' height='320' allowtransparency='true' frameborder='0'></iframe><br>");
					$('#m').css("display", "none");
					$('#m').attr("href", "http://chat.mydomain.co.uk");
				});
				$("#2").click(function(){
					$('.card').css({
						'background': '#AED581 url(img/panel_2.png) center right 50px no-repeat',
						'color': 'white',
						'background-size': '50% auto',
					});
					$('meta[name=theme-color]').attr("content", "#AED581");
					$('h2').html('MineCraft');
					$('p').html("Small Minecraft server, barely populated, barely used. No rules.<br><br><a href='http://minecraftservers.org/server/312977' target='_blank'><img src='http://status.minecraftservers.org/classic/312977.png' alt='Tilted Craft Minecraft server' width='500' height='90' /></a><br><a href='http://server.mydomain.co.uk:8123/'><iframe width='500' height='300' frameborder=0 src='http://server.mydomain.co.uk:8123/?worldname=world&mapname=surface&zoom=5&x=-355&y=64&z=183'></iframe></a>");
					$('#m').css("display", "none");
				});
				$("#3").click(function(){
					$('.card').css({
						'background': '#F3B506 url(img/panel_3.png) center right 50px no-repeat',
						'color': 'white',
						'background-size': '50% auto',
					});
					$('meta[name=theme-color]').attr("content", "#F3B506");
					$('h2').html('PLEX');
					$('p').html("Plex is an all in one video, music and photo organization tool<br> with streaming support.");
					$('#m').css("display", "inline-block");
					$('#m').attr("href", "http://server.mydomain.co.uk:32400/web/index.html")
				});
				$("#4").click(function(){
					$('.card').css({
						'background': '#03679B url(img/panel_4.png) center right no-repeat',
						'color': 'white',
						'background-size': '50% auto',
					});
					$('meta[name=theme-color]').attr("content", "#03679B");
					$('h2').html('Plex Requests');
					$('p').html("Make media requests for plex");
					$('#m').css("display", "inline-block");
					$('#m').attr("href", "http://server.mydomain.co.uk:3000")
				});
				$("#5").click(function(){
					$('.card').css({
						'background': '#b3e5fc url(img/panel_5.png) center right 50px no-repeat',
						'color': 'black',
						'background-size': '50% auto',
					});
					$('meta[name=theme-color]').attr("content", "#b3e5fc");
					$('h2').html('Owncloud');
					$('p').html("Access & share your files, calendars, contacts, mail & more.");
					$('#m').css("display", "inline-block");
					$('#m').attr("href", "http://server.mydomain.co.uk/owncloud/")
				});
				$("#6").click(function(){
					$('.card').css({
						'background': '#69F0AE url(img/panel_6.png) center right  no-repeat',
						'color': 'white',
						'background-size': '50% auto',
					});
					$('meta[name=theme-color]').attr("content", "#69F0AE");
					$('h2').html('FTP');
					$('p').html("Small FTP server to private files, connection details provided upon request.");
					$('#m').css("display", "inline-block");
					$('#m').attr("href", "ftp://server.mydomain.co.uk/")
				});
				$("#7").click(function(){
					$('.card').css({
						'background': '#00AEF0 url(img/panel_7.png) center right 50px no-repeat',
						'color': 'white',
						'background-size': '50% auto',
					});
					$('meta[name=theme-color]').attr("content", "#00AEF0");
					$('h2').html('Open Directory');
					$('p').html("Open directory of various ISOs and other tools, for use<br> repairing or patching broken computers.");
					$('#m').css("display", "inline-block");
					$('#m').attr("href", "http://server.mydomain.co.uk/open/")
				});
			});
		</script>
	</head>
	<body>
		<div class='card'>

			<h2></h2>
			<div class='lcol'>
				<p></p>
				<a id='m' href='#'>Go > </a>
			</div>	
			<div class='buttons'>
				<a id='0' href='#/Home'>Home</a>
				<a id='1' href='#/Chat'>Chat</a>
				<a id='2' href='#/MC'>MC</a>
				<a id='3' href='#/Plex'>Plex</a>
				<a id='4' href='#/Requests'>Requests</a>
				<a id='5' href='#/Owncloud'>Owncloud</a>
				<a id='6' href='#/FTP'>FTP</a>
				<a id='7' href='#/ISO'>ISO</a>
			</div>
		</div>
	</body>
</html>