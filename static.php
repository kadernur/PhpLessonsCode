<?php 
class domain{
	protected static function getWebsiteName()
	{
		return "W3schools.com";
	}
}


class domainW3 extends domain{
	public $websiteName;
	public function __construct()
	{
		$this->websiteName=parent::getWebsiteName();
	}
}

$domainW3=new domainW3;
echo $domainW3->websiteName;