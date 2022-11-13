<?php

class Product_details extends Controller
{

	public function index($slag)
	{
		$slag = esc($slag);
		$data['page_title'] = "Product Details";

		$User = $this->load_model('User');
		$user_data = $User->check_login();

		if (is_object($user_data)) {
			$data['user_data'] = $user_data;
		}
		
		$DB = Database::newInstance();

		$ROW = $DB->read("select p.*,c.category as catname from products p join categories c on p.category = c.id where p.slag = :slag", ['slag' => $slag]);
		$data['product'] = is_array($ROW) ? $ROW[0] : false;

		if(is_array($ROW)){
			$category =$ROW[0]->category;
		}
		$relative_products=$DB->read("select p.*,c.category as catname from products p join categories c on p.category = c.id where p.category = :category", ['category' => $category]);
		
		$data['relative_products'] = is_array($relative_products) ? $relative_products : false;


		$this->view("product-details", $data);
	}
}
