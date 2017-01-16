<?php
class answers
{
	private $ans;
	public function __construct($ans)
	{
		$this->setAns($ans);
	}


	public function show()
	{
		echo $this->getAns()."<br/>";
	}

	public function getAns()
	{
		return $this->ans;
	}

	public function setAns($ans)
	{
		$this->ans=$ans;
	}
}