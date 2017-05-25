<?php

include('controller.php');
class signupcontroller extends controller{
	public function viewSignup(){
		return $this->loadView('signup');
	}
}






?>