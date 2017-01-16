<?php

namespace myclasses;
class product extends Base 
{	public function __construct($nam="",$pr="",$s_d="")
	{
		$this->setName($nam);
		$this->setPrice($pr);
		$this->setShort_description($s_d);
	}

	public function show()
	{ 
		
		foreach ($this as $key => $e) {
			echo $key." : ".$e."<br/>";
		}
	}
	public function getName()
	{
		return $this->name; 
	}
	
	public function setName($nam)
	{
		$this->name=$nam;
	}
	
	public function getPrice()
	{
		return $this->price;
	}

	public function setPrice($pr)
	{
		if($pr<0)
			{
				$pr="цена не может быть отрицательной";
				$this->price=$pr;
			}
		else
			{
				$this->price=$pr;	
			}
	}
	public function getShort_description()
	{
		return $this->short_description;
	}
	public function setShort_description($s_d)
	{
		$this->short_description=$s_d;
	}
}

