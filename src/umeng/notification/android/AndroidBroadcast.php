<?php

namespace umeng\notification\andriod;

use umeng\notification\AndroidNotification;

class AndroidBroadcast extends AndroidNotification 
{
	function  __construct() 
    {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}