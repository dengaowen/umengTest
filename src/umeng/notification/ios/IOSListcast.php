<?php
namespace umeng\notification\ios;

use umeng\notification\IOSNotification;
class IOSListcast extends IOSNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "listcast";
		$this->data["device_tokens"] = NULL;
	}

}