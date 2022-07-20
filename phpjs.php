<!doctype html>
<html>	
	<head>
		<script type="text/javascript">
			function test(demo){
			alert(demo);    
			}
			function vide(){
							var video = document.getElementById('myVideo');
							var sources = video.getElementsByTagName('source');
							sources[0].src = 'video/cIntro.mp4';
							video.load();
										}
		</script>
	</script>
	<body>
			<?php 
			$t='hello';
			echo'<input type="button" value="show" onclick="test(\'' . $t . '\')"/>';
			?>
				<button onclick="vide()">videoshow</button>
				<video id="myVideo" width="720" height="640" controls>
    <source src="" type="video/mp4" />
</video>
	</body>
</html>
