<?php
namespace umeng\notification\ios;

use umeng\notification\IOSNotification;
class IOSBroadcast extends IOSNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}