<?php
namespace myclasses;

class PromotionalProduct extends product
{
	/**
	* @var float
	*/
	private $discount;

	public function __construct($nam="",$pr="",$s_d="",$dis="")	
	{
		parent::__construct($nam,$pr,$s_d);
		$this->setDiscount($dis);
	}

	public function show()
	{
		parent::show();
		echo "discount : ".$this->getDiscount()."<br/>";
		
	}

	public function getDiscount()
	{
		return $this->discount;
	}
	public function setDiscount($dis)
	{	
	
		if($dis>0)
			{
				$dis="скидка не может быть положительной";
				$this->discount=$dis;
			}
		else
			{
				$this->discount=$dis;	
			}
	}
}
