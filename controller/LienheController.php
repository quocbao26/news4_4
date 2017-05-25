<?php

include("controller.php");

class lienhecontroller extends Controller{

	public function getLienhe(){
		return $this->loadView('lienhe');
	}
}

?>