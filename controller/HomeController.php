<?php
include("controller.php");
include("model/HomeModel.php");



class HomeController extends Controller{

	public function getIndex(){

		$model = new HomeModel;
		$data = $model -> getSlide();
		//print_r($data);

		$mangData = array('slide' => $data);



		return $this->loadView("trangchu",$mangData);
	}
}


?>