<?php
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
?>