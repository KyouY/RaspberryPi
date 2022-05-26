<?php  
	$data = shell_exec('cd /home/pi/opencv-scan && python3 test.py');
	print($data)
	
?>