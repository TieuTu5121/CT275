<?php 

Class Login extends Controller
{

	public function index()
	{
		$data['page_title'] = "Đăng nhập";
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
 			
			$user = $this->load_model("User");
			$user->login($_POST);
		}

		$this->view("login",$data);
	}


}