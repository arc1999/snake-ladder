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
	function chance($z)
	{
		if($z==6)
		{
			$_SESSION['m']=$_SESSION['m']+1;
		}
	}
	function win()
	{
		if($_SESSION['pos']==100)
		{
			echo "Player 1 wins";
			session_destroy();
			header('refresh:0');
			die();
			return true;
		}
		else
		{
			return false;
		}
	}
	function close()
	{
		if($_SESSION['pos']+$GLOBALS['rd']<=100)
		{
			$this->move();
			$this->replace();
		}
	}
	function mainm()
	{
		$this->roll_dice();
		$q=$GLOBALS['rd'];
		if($this->open()==true)
		{
			$this->chance($q);
			if($this->win()!=true)
			{
				$this->close();
			}
		}
		return $q;
	}
}
class player1
{
	var $p11=false;
	var $p12=false;
	var $p13=false;
	var $p21=false;
	var $p22=false;
	var $p23=false;
	var $p31=false;
	var $p32=false;
	var $p33=false;
	var $pos1;
	var $rd=0;
	var $temp1=0;
	var $m;
	function __player1()
	{
		$this->pos1=0;
		$this->m=0;
		$_SESSION['pos1']=$this->pos1;
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
			if($_SESSION['pos1']==0)
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
		$_SESSION['pos1']=$_SESSION['pos1']+$GLOBALS['rd'];
	}
	function replace()
	{
		$a=$_SESSION['pos1'];
		switch($a)
		{
			case 23:
			$_SESSION['pos1']=7;
			break;
			case 33:
			$_SESSION['pos1']=9;
			break;
			case 44:
			$_SESSION['pos1']=14;
			break;
			case 68:
			$_SESSION['pos1']=25;
			break;
			case 77:
			$_SESSION['pos1']=41;
			break;
			case 94:
			$_SESSION['pos1']=70;
			break;
			case 97:
			$_SESSION['pos1']=66;
			break;
			case 5:
			$_SESSION['pos1']=26;
			break;
			case 13:
			$_SESSION['pos1']=46;
			break;
			case 18:
			$_SESSION['pos1']=39;
			break;
			case 37:
			$_SESSION['pos1']=62;
			break;
			case 48:
			$_SESSION['pos1']=72;
			break;
			case 60:
			$_SESSION['pos1']=82;
			break;
			case 65:
			$_SESSION['pos1']=95;
			break;
		}
	}
	function chance($z)
	{
		if($z==6)
		{
			$_SESSION['m']=$_SESSION['m']+1;
		}
	}
	function win()
	{
		if($_SESSION['pos1']==100)
		{
			echo "Player 2 wins";
			session_destroy();
			header('refresh:0');
			die();
			return true;
		}
		else
		{
			return false;
		}
	}
	function close()
	{
		if($_SESSION['pos1']+$GLOBALS['rd']<=100)
		{
			$this->move();
			$this->replace();
		}
	}
	function mainm()
	{
		$this->roll_dice();
		$q1=$GLOBALS['rd'];
		if($this->open()==true)
		{
			$this->chance($q1);
			if($this->win()!=true)
			{
				$this->close();
			}
		}
		return $q1;
	}
	$gum=0;

if(isset($_POST['spin']))
{   
	$newp= new player();
	$newp1=new player1();
		if($_SESSION['m']%2==0)
		{
			$s=$newp->mainm();
			$_SESSION['newp']=$newp;
			//$_SESSION['m']=$_SESSION['m']+1;
		}
		else
		{
			$s=$newp1->mainm();
			$_SESSION['newp1']=$newp1;
			//$_SESSION['m']=$_SESSION['m']+1;
		}
}
else if(isset($_POST['replay']))
{
	session_destroy();
	header('refresh:0');
	die();
}
else if(isset($_POST['game']))
{
	$_SESSION['gum']=$gum;
	$_SESSION['gum']=1;
	$gum=1;
	$s="-";
	$_SESSION['p1']=$_POST['player1'];
	$_SESSION['p2']=$_POST['player2'];
}
else
{
	$_SESSION['p1']=null;
	$_SESSION['p2']=null;
	$gum=0;
	$_SESSION['gum']=$gum;
	$newp=new player();
	$newp1=new player1();
	$_SESSION['pos']="0";
	$_SESSION['pos1']="0";
	$_SESSION['m']="0";
	$s="-";
}
?>
}

?>
