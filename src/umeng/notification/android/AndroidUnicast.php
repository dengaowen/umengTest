<?php
namespace umeng\notification\andriod;

use umeng\notification\AndroidNotification;

class AndroidUnicast extends AndroidNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "unicast";
		$this->data["device_tokens"] = NULL;
	}

}