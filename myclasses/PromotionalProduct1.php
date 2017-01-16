<?php
namespace myclasses;
class PromotionalProduct1 extends PromotionalProduct
{
	/**
	* @var \DateTime
	*/
	private $from;
	/**
	* @var \DateTime
	*/
	private $to;
	static $toto="22.12.2016";
	public function __construct($nam="",$pr="",$s_d="",$dis="",\DateTime $from=NULL,\DateTime $to=NULL)
	{
		parent::__construct($nam,$pr,$s_d,$dis);
		$this->setFrom($from);
		$this->setTo($to);
	}

	public function show()
	{
		parent::show();
		echo "from : ".$this->from->format("d.m.Y")."<br/>";
		echo "to : ".$this->to->format("d.m.Y")/*=self::$toto*/."<br/>";
	}

	public function getFrom()
	{
		return $this->from;
	}

	public function setFrom($from)
	{
				$this->from=$from;
	}

	public function getTo()
	{
		return $this->to;
	}

	public function setTo($to)
	{
		 		$this->to=$to;
	}
}

