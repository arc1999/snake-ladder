<!DOCTYPE html>
<?php
session_start();
$a="before";
$b="after";
$b11="qwe";
$p11=false;
$p12=false;
$p13=false;
$p21=false;
$p22=true;
$p23=false;
$p31=false;
$p32=false;
$p33=false;
class player
{
	var $pos;
	var $rd=0;
	var $temp=0;
	var $m;
	function __player()
	{
		$this->pos=0;
		$this->m=0;
		$_SESSION['pos']=$this->pos;
		$_SESSION['m']=$this->m;
	}
	function roll_dice()
	{
		$p11=false;
		$p12=false;
		$p13=false;
		$p21=false;
		$p22=false;
		$p23=false;
		$p31=false;
		$p32=false;
		$p33=false;
		$GLOBALS['p11']=$p11;
		$GLOBALS['p12']=$p12;
		$GLOBALS['p13']=$p13;
		$GLOBALS['p21']=$p21;
		$GLOBALS['p22']=$p22;
		$GLOBALS['p23']=$p23;
		$GLOBALS['p31']=$p31;
		$GLOBALS['p32']=$p32;
		$GLOBALS['p33']=$p33;
		$GLOBALS['rd']=rand(1,6);
		$_SESSION['m']=$_SESSION['m']+1;
		$ch=$GLOBALS['rd'];
		switch($ch)
		{
			case 1:
			$GLOBALS['p22']=true;
			break;
			case 2:
			$GLOBALS['p11']=true;
			$GLOBALS['p33']=true;
			break;
			case 3:
			$GLOBALS['p11']=true;
			$GLOBALS['p22']=true;
			$GLOBALS['p33']=true;
			break;
			case 4:
			$GLOBALS['p11']=true;
			$GLOBALS['p13']=true;
			$GLOBALS['p31']=true;
			$GLOBALS['p33']=true;
			break;
			case 5:
			$GLOBALS['p11']=true;
			$GLOBALS['p13']=true;
			$GLOBALS['p31']=true;
			$GLOBALS['p33']=true;
			$GLOBALS['p22']=true;
			break;
			case 6:
			$GLOBALS['p11']=true;
			$GLOBALS['p12']=true;
			$GLOBALS['p13']=true;
			$GLOBALS['p31']=true;
			$GLOBALS['p32']=true;
			$GLOBALS['p33']=true;
			break;
		}
	}
	function open()
	{
		if(($GLOBALS['rd']==1 || $GLOBALS['rd']==6))
		{
			return true;
		}
		else
		{
			if($_SESSION['pos']==0)
			{
				return false;
			}
			else
			{
				return true;
			}
		}
	}
	function move()
	{
		$_SESSION['pos']=$_SESSION['pos']+$GLOBALS['rd'];
	}
	function replace()
	{
		$a=$_SESSION['pos'];
		switch($a)
		{
			case 23:
			$_SESSION['pos']=7;
			break;
			case 33:
			$_SESSION['pos']=9;
			break;
			case 44:
			$_SESSION['pos']=14;
			break;
			case 68:
			$_SESSION['pos']=25;
			break;
			case 77:
			$_SESSION['pos']=41;
			break;
			case 94:
			$_SESSION['pos']=70;
			break;
			case 97:
			$_SESSION['pos']=66;
			break;
			case 5:
			$_SESSION['pos']=26;
			break;
			case 13:
			$_SESSION['pos']=46;
			break;
			case 18:
			$_SESSION['pos']=39;
			break;
			case 37:
			$_SESSION['pos']=62;
			break;
			case 48:
			$_SESSION['pos']=72;
			break;
			case 60:
			$_SESSION['pos']=82;
			break;
			case 65:
			$_SESSION['pos']=95;
			break;
		}
	}
}
?>
