<?php 
// die($level);
if($level == 1){
	header('location:manage');
	exit;
}else{ 
	if ($level == 2) {
		header('location:root');
		exit;
	}
	else{
		// die('0');
		header('location:index.php?error');
	}
}	