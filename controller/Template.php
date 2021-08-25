<?php
ob_start();
class Plantilla{
	public function llamarTemplate(){
		include "views/template.php";
	}
}
?>