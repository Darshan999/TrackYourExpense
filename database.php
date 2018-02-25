 <?php
class database
{
	private static $host='localhost';
	private static $uname='root';
	private static $pwd='';
	private static $con=NULL;
	//static uses one connection throughout whole programme. Hence it is best method to use.
	public static function connect()
	{
		self::$con=mysql_connect(self::$host,self::$uname,self::$pwd);
		mysql_select_db('trackyourexpense',self::$con);
		return self::$con;
	}
	public static function disconnect()
	{
		mysql_close(self::$con);
		self::$con=NULL;
	}
	public function login($email,$password)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_email_id='$email' and user_password='$password'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function insertuser($user_email_id,$user_name,$user_password,$user_mobile_no,$user_photo,$gender)
	{
		$con=database::connect();
		$res=mysql_query("insert into user_tbl values (null,'$user_email_id','$user_name','$user_password','$user_mobile_no','$user_photo','$gender')",$con);
		return $res;
		database::disconnect();
	}
	public function userdisplaybyid($user_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_email_id='$user_email_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function updatepassword($user_email_id,$pass2)
	{
		$res=mysql_query("update user_tbl set user_password='$pass2' where user_email_id='$user_email_id'",
		database::connect());
		return $res;
	}
	public function getalluser()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function getallcategory()
	{
		$con=database::connect();
		$res=mysql_query("select * from category_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function updateprofile($user_id,$user_email_id,$user_name,$user_mobile_no,$user_photo,$gender)
	{
		$con=database::connect();
		$res=mysql_query("update user_tbl set user_email_id='$user_email_id',user_name='$user_name',user_mobile_no='$user_mobile_no',user_photo='$user_photo',gender='$gender' where user_id=$user_id ",$con);
		return $res;			
		database::disconnect();		
	}
	public function expensedisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from expense_tbl as e,category_tbl as c where e.category_id=c.category_id ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function expensedisplaybyid($expense_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from expense_tbl where expense_id=$expense_id ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function insertexpense($amount,$notes,$date,$target_file,$category_id,$user_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into expense_tbl values (null,'$amount','$notes','$date','$target_file','$category_id','$user_id')",$con);
		return $res;
		database::disconnect();
	}

	public function updateexpense($expense_id,$amount,$notes,$date,$category_id)
	{
		$con=database::connect();
		$res=mysql_query("update expense_tbl set amount='$amount',notes='$notes',date='$date',category_id='$category_id' where expense_id='$expense_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function expensedelete($expense_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from expense_tbl where expense_id='$expense_id'",$con);
		return $res;
		database::disconnect();
	}

	public function expensemuldel($expense_id)
	{
		$con=database::connect();
		$q="delete from expense_tbl where expense_id='$expense_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}

	public function approveproducts()
	{

		$con=database::connect();
		$res=mysql_query("select product_name,product_photo from product_tbl where product_status=0",$con);

		return $res;	
	}

	public function productbylimit()
	{

		$con=database::connect();
		$res=mysql_query("select product_name,product_photo from product_tbl where product_status=0 ORDER BY product_id DESC LIMIT 3",$con);

		return $res;	
	}

	public function approveusers()
	{

		$con=database::connect();
		$res=mysql_query("select user_first_name,user_photo from user_tbl where user_type=0 ORDER BY user_id DESC LIMIT 3",$con);

		return $res;	
	}
	
	public function categorydisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from category_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function categorydisplaybyid($category_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from category_tbl where category_id=$category_id ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function insertcategory($cat_name)
	{
		$con=database::connect();
		$res=mysql_query("insert into category_tbl values (null,'$cat_name')",$con);
		return $res;
		database::disconnect();
	}
	public function updatecategory($category_id,$category_name)
	{
		$con=database::connect();
		$res=mysql_query("update category_tbl set category_name='$category_name' where category_id='$category_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function categorydelete($category_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from category_tbl where category_id='$category_id'",$con);
		return $res;
		database::disconnect();
	}

	public function categorymuldel($cat_id)
	{
		$con=database::connect();
		$q="delete from category_tbl where cat_id='$cat_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}	

}

?>