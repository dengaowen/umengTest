<?php
namespace umeng\notification\andriod;

use umeng\notification\AndroidNotification;

class AndroidGroupcast extends AndroidNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "groupcast";
		$this->data["filter"]  = NULL;
	}
}