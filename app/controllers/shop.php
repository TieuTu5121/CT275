<?php 

Class Shop extends Controller
{

	public function index()
	{
		//check if its a search
		$search = false;
		if(isset($_GET['find']))
		{
			$find = addslashes($_GET['find']);
			$search = true;
		}

		$User = $this->load_model('User');
		$image_class = $this->load_model('Image');
		$user_data = $User->check_login();

		if(is_object($user_data)){
			$data['user_data'] = $user_data;
		}

		$DB = Database::newInstance();

		if($search){
			$arr['description'] = "%". $find . "%";
			$ROWS = $DB->read("select p.*,c.category as catname from products p join categories c on p.category = c.id where p.description like :description ",$arr);
		}else{
			$ROWS = $DB->read("select p.*,c.category as catname from products p join categories c on p.category = c.id");
		}

		$data['page_title'] = "Shop";

		if($ROWS){
			foreach ($ROWS as $key => $row) {
				# code...
				$ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);
			}
		}

		//get all categories
		$category = $this->load_model('category');
		$data['categories'] = $category->get_all();


		$data['products'] = $ROWS;
		$data['show_search'] = true;
		$this->view("shop",$data);
	}

	public function category($cat_find = '')
	{
		if(isset($_GET['cat_find'])){
			$cat_find=$_GET['cat_find'];
		}
		$User = $this->load_model('User');
		$category = $this->load_model('category');
		$image_class = $this->load_model('Image');
		$user_data = $User->check_login();

		if(is_object($user_data)){
			$data['user_data'] = $user_data;
		}

		$DB = Database::newInstance();
 	
 		$cat_id = null;
		$check = $category->get_one_by_name($cat_find);
		if(is_object($check)){
			$cat_id = $check->id;
		}
		$ROWS = $DB->read("select p.*,c.category as catname from products p join categories c on p.category = c.id where p.category = :cat_id",["cat_id"=>$cat_id]);
 
		$data['page_title'] = "Shop";

		if($ROWS){
			foreach ($ROWS as $key => $row) {
			
				$ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);
			}
		}

		//get all categories
		$data['categories'] = $category->get_all();


		$data['products'] = $ROWS;
		$data['show_search'] = true;

		$this->view("shop",$data);
	}


}