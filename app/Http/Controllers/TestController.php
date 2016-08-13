<?php
if(!empty($_POST["rating"]) && !empty($_POST["id"])) {
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="UPDATE tutorial SET rating='" . $_POST["rating"] . "' WHERE id='" . $_POST["id"] . "'";
$result = $db_handle->updateQuery($query);
}
?>

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class TestController extends BaseController
{
	$rate= $_POST["rating"];
	$id= $_POST["id"];
	$check=0;
	if(!empty($_POST["rating"]) && !empty($_POST["id"])) 
	{
		$data=array('rating'=>$rate);
		$check=DB::table('tutorial')->where('id',$id)->update($data);
		if($check>0)
		{
			return view('signup');
		}
	}

    
}