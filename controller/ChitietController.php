<?php

include("controller.php");

class chitietcontroller extends Controller{

	public function getChitiettin(){
		return $this->loadView('chitiet');
	}
}

?>