<?php
include("controller.php");

class LoaitinController extends Controller{

	public function getLoaitin(){
		return $this->loadView("type");
	}
}


?>