<?php
$n=$_POST["number"];
$list=file("data/list.data");
$x=0;
while($x<count($list))
{
	$list[$x]=substr($list[$x],0,strlen($list[$x])-1);
	$x++;
}
$x=2;
$f=fopen("data/list.data","w");
while($x<count($list))
{
	if(strcmp($n,$list[$x])==0)
	{

	}
	else
	{
		fputs($f,$list[$x-2]);
		fputs($f,"\n");
		fputs($f,$list[$x-1]);
		fputs($f,"\n");
		fputs($f,$list[$x]);
		fputs($f,"\n");
		fputs($f,$list[$x+1]);
		fputs($f,"\n");
		fputs($f,$list[$x+2]);
		fputs($f,"\n");
		fputs($f,$list[$x+3]);
		fputs($f,"\n");
		fputs($f,$list[$x+4]);
		fputs($f,"\n");
	}
	$x+=7;
}
fclose($f);
include("akdjhfuyw72673763hjdnndjdnf8737hhdd.php");


?>