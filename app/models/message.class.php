<?php 

Class Message
{

	protected $error = array();
	public function create($DATA)
	{
		$this->error = array();
		$DB = Database::newInstance(); 
		$arr['name'] 	= ucwords($DATA['name']);
		$arr['email'] 	= $DATA['email'];
		$arr['subject'] = $DATA['subject'];
		$arr['message'] = $DATA['message'];
		$arr['date'] = date("Y-m-d H:i:s");

		if(trim($arr['name'])=="")
		{
			$this->error[] = "Vui lòng nhập tên";
		}
		if(trim($arr['subject'])=="")
		{
			$this->error[] = "Vui lòng nhập Chủ đề";
		}
	

		if(!filter_var($arr['email'],FILTER_VALIDATE_EMAIL))
		{
			$this->error[] = "Vui lòng nhập email hợp lệ";
		}

		if(empty($arr['message']))
		{
			$this->error[] = "Vui lòng nhập phản hồi";
		}

		if(count($this->error) == 0){
			$query = "insert into contact_us (name,email,subject,message,date) values (:name,:email,:subject,:message,:date)";
			$check = $DB->write($query,$arr);

			if($check){
				return true;
			}
		}

		return $this->error;

	}


	public function delete($id)
	{

		$DB = Database::newInstance();
		$id = (int)$id;
		$query = "delete from contact_us where id = '$id' limit 1";
		$DB->write($query);
	}

	public function get_one($id)
	{

		$id = (int)$id;

		$DB = Database::newInstance();
		$data = $DB->read("select * from contact_us where id = '$id' limit 1");
		return $data[0];
	}

	public function get_all()
	{

		$DB = Database::newInstance();
		return $DB->read("select * from contact_us order by id desc");

	}

}