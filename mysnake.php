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
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Snakes and Ladders(By Ayush and Sarthak)</title>
	</head>
	<body>
		<form action="mysnake.php" method="post">
		<table style="float:left;" border="0">
		<tr>
		<td name="100"><div class="<?php if($_SESSION['pos']==100){ echo $b;}else{ echo $a;}?>"><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==100){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="99"><div class="<?php if($_SESSION['pos']==99){ echo $b;}else{ echo $a;}?>"><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==99){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="98"><div class="<?php if($_SESSION['pos']==98){ echo $b;}else{ echo $a;}?>"><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==98){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="97"><div class=<?php if($_SESSION['pos']==97){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==97){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="96"><div class=<?php if($_SESSION['pos']==96){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==96){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="95"><div class=<?php if($_SESSION['pos']==95){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==95){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="94"><div class=<?php if($_SESSION['pos']==94){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==94){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="93"><div class=<?php if($_SESSION['pos']==93){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==93){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="92"><div class=<?php if($_SESSION['pos']==92){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==92){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="91"><div class=<?php if($_SESSION['pos']==91){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==91){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		</tr>
		<tr>
		<td name="81"><div class=<?php if($_SESSION['pos']==81){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==81){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="82"><div class=<?php if($_SESSION['pos']==82){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==82){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="83"><div class=<?php if($_SESSION['pos']==83){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==83){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="84"><div class=<?php if($_SESSION['pos']==84){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==84){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="85"><div class=<?php if($_SESSION['pos']==85){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==85){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="86"><div class=<?php if($_SESSION['pos']==86){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==86){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="87"><div class=<?php if($_SESSION['pos']==87){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==87){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="88"><div class=<?php if($_SESSION['pos']==88){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==88){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="89"><div class=<?php if($_SESSION['pos']==89){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==89){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="90"><div class=<?php if($_SESSION['pos']==90){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==90){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		</tr>
		<tr>
		<td name="80"><div class=<?php if($_SESSION['pos']==80){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==80){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="79"><div class=<?php if($_SESSION['pos']==79){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==79){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="78"><div class=<?php if($_SESSION['pos']==78){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==78){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="77"><div class=<?php if($_SESSION['pos']==77){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==77){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="76"><div class=<?php if($_SESSION['pos']==76){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==76){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="75"><div class=<?php if($_SESSION['pos']==75){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==75){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="74"><div class=<?php if($_SESSION['pos']==74){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==74){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="73"><div class=<?php if($_SESSION['pos']==73){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==73){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="72"><div class=<?php if($_SESSION['pos']==72){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==72){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		<td name="71"><div class=<?php if($_SESSION['pos']==71){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==71){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td>
		</tr>
		<tr>
		<td name="61"><div class=<?php if($_SESSION['pos']==61){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==61){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="62"><div class=<?php if($_SESSION['pos']==62){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==62){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="63"><div class=<?php if($_SESSION['pos']==63){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==63){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="64"><div class=<?php if($_SESSION['pos']==64){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==64){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="65"><div class=<?php if($_SESSION['pos']==65){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==65){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="66"><div class=<?php if($_SESSION['pos']==66){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==66){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="67"><div class=<?php if($_SESSION['pos']==67){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==67){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="68"><div class=<?php if($_SESSION['pos']==68){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==68){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="69"><div class=<?php if($_SESSION['pos']==69){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==69){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="70"><div class=<?php if($_SESSION['pos']==70){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==70){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		</tr>
		<tr>
		<td name="60"><div class=<?php if($_SESSION['pos']==60){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==60){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="59"><div class=<?php if($_SESSION['pos']==59){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==59){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="58"><div class=<?php if($_SESSION['pos']==58){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==58){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="57"><div class=<?php if($_SESSION['pos']==57){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==57){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="56"><div class=<?php if($_SESSION['pos']==56){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==56){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="55"><div class=<?php if($_SESSION['pos']==55){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==55){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="54"><div class=<?php if($_SESSION['pos']==54){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==54){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="53"><div class=<?php if($_SESSION['pos']==53){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==53){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="52"><div class=<?php if($_SESSION['pos']==52){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==52){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="51"><div class=<?php if($_SESSION['pos']==51){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==51){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		</tr>
		<tr>
		<td name="41"><div class=<?php if($_SESSION['pos']==41){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==41){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="42"><div class=<?php if($_SESSION['pos']==42){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==42){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="43"><div class=<?php if($_SESSION['pos']==43){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==43){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="44"><div class=<?php if($_SESSION['pos']==44){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==44){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="45"><div class=<?php if($_SESSION['pos']==45){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==45){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="46"><div class=<?php if($_SESSION['pos']==46){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==46){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="47"><div class=<?php if($_SESSION['pos']==47){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==47){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="48"><div class=<?php if($_SESSION['pos']==48){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==48){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="49"><div class=<?php if($_SESSION['pos']==49){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==49){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="50"><div class=<?php if($_SESSION['pos']==50){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==50){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		</tr>
		<tr>
		<td name="40"><div class=<?php if($_SESSION['pos']==40){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==40){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="39"><div class=<?php if($_SESSION['pos']==39){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==39){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="38"><div class=<?php if($_SESSION['pos']==38){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==38){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="37"><div class=<?php if($_SESSION['pos']==37){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==37){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="36"><div class=<?php if($_SESSION['pos']==36){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==36){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="35"><div class=<?php if($_SESSION['pos']==35){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==35){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="34"><div class=<?php if($_SESSION['pos']==34){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==34){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="33"><div class=<?php if($_SESSION['pos']==33){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==33){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="32"><div class=<?php if($_SESSION['pos']==32){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==32){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="31"><div class=<?php if($_SESSION['pos']==31){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==31){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		</tr>
		<tr>
		<td name="21"><div class=<?php if($_SESSION['pos']==21){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==21){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="22"><div class=<?php if($_SESSION['pos']==22){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==22){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="23"><div class=<?php if($_SESSION['pos']==23){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==23){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="24"><div class=<?php if($_SESSION['pos']==24){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==24){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="25"><div class=<?php if($_SESSION['pos']==25){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==25){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="26"><div class=<?php if($_SESSION['pos']==26){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==26){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="27"><div class=<?php if($_SESSION['pos']==27){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==27){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="28"><div class=<?php if($_SESSION['pos']==28){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==28){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="29"><div class=<?php if($_SESSION['pos']==29){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==29){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="30"><div class=<?php if($_SESSION['pos']==30){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==30){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		</tr>
		<tr>
		<td name="20"><div class=<?php if($_SESSION['pos']==20){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==20){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="19"><div class=<?php if($_SESSION['pos']==19){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==19){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="18"><div class=<?php if($_SESSION['pos']==18){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==18){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="17"><div class=<?php if($_SESSION['pos']==17){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==17){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="16"><div class=<?php if($_SESSION['pos']==16){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==16){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="15"><div class=<?php if($_SESSION['pos']==15){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==15){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="14"><div class=<?php if($_SESSION['pos']==14){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==14){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="13"><div class=<?php if($_SESSION['pos']==13){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==13){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="12"><div class=<?php if($_SESSION['pos']==12){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==12){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="11"><div class=<?php if($_SESSION['pos']==11){ echo "$b";}else{ echo "$a";}?>><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==11){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		</tr>
		<tr>
		<td name="1"><div class="<?php if($_SESSION['pos']==1){ echo $b;}else{ echo $a;}?>"><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==1){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="2"><div class="<?php if($_SESSION['pos']==2){ echo $b;}else{ echo $a;}?>"><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==2){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="3"><div class="<?php if($_SESSION['pos']==3){ echo $b;}else{ echo $a;}?>"><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==3){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="4"><div class="<?php if($_SESSION['pos']==4){ echo $b;}else{ echo $a;}?>"><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==4){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="5"><div class="<?php if($_SESSION['pos']==5){ echo $b;}else{ echo $a;}?>"><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==5){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="6"><div class="<?php if($_SESSION['pos']==6){ echo $b;}else{ echo $a;}?>"><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==6){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="7"><div class="<?php if($_SESSION['pos']==7){ echo $b;}else{ echo $a;}?>"><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==7){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="8"><div class="<?php if($_SESSION['pos']==8){ echo $b;}else{ echo $a;}?>"><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==8){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="9"><div class="<?php if($_SESSION['pos']==9){ echo $b;}else{ echo $a;}?>"><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==9){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		<td name="10"><div class="<?php if($_SESSION['pos']==10){ echo $b;}else{ echo $a;}?>"><img src="2.png" width="25px" height="25px;" style="margin-left:20%;"> </div><div class="<?php if($_SESSION['pos1']==10){ echo $b;}else{ echo $a;}?>"><img src="1.png" width="25px" height="25px;" style="margin-left:20%;"> </div></td></td>
		</tr>
		</table>
	</form>
	</body>
</html>
