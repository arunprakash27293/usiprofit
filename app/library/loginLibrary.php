<?php 
namespace App\library;
use Illuminate\Support\Facades\Redirect;

{

    class loginLibrary
    {
    	public function user()
    	{
			define('USI_TBLPREFIX','usi_');
			return USI_TBLPREFIX;
    	}

    	public function userstatus()
    	{
    		define('USER_STATUS','1');
    		return USER_STATUS;
    	}

    	public function roleid($data)

        {
        	if($data==1)
        	{
        		
        		return Redirect::to('/index');
        	}
        	elseif($data==2)
        	{
        		return Redirect::to('/index');
        	}
        	elseif($data==3)
        	{
        		return Redirect::to('/index');
        	}
        	elseif($data==4)
        	{
        		return Redirect::to('/index');
        	}
        	elseif($data==5)
        	{
        		return Redirect::to('/index');
        	}
        	elseif($data==6)
        	{
        		return Redirect::to('/index');
        	}
        	elseif($data==7)
        	{
        		return Redirect::to('/index');
        	}
        	elseif($data==8)
        	{
        		return Redirect::to('/index');
        	}
        	elseif($data==9)
        	{
        		return Redirect::to('/index');
        	}
        	elseif($data==10)
        	{
        		return Redirect::to('/index');
        	}
        	elseif($data==11)
        	{
        		return Redirect::to('/index');
        	}
        	elseif($data==12)
        	{
        		return Redirect::to('/index');
        	}
        	elseif($data==13)
        	{
        		return Redirect::to('/index');
        	}

        	else
        	{
        		$_SESSION['error']="Invalid user role ID";
        		return Redirect::to('login');
        	}

        }


    }

}
?>