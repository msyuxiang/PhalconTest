<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		// put your code here
		ob_start();
		session_start();
		
		setcookie("name", "Tokyo");
		echo serialize($_SESSION['name']);
		
		session_destroy();
		ob_end_flush();
		?>
    </body>
</html>
