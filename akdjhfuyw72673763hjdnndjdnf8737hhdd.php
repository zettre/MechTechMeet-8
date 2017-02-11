<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Registered Candidate</title>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
.delete
{
	cursor: pointer;
}
.delete:hover
{
	color: red;
}
</style>
<script>
$(document).ready(function(){
	$('#search').keyup(function(){
		searchTable($(this).val());
	});
});
function searchTable(val)
{
	var table=$(".table");
	table.find("tr").each(function(index,row){
		var allCells=$(row).find("td");
		if(allCells.length > 0)
		{
			var found=false;
			allCells.each(function(index,td){
				var regExp=new RegExp(val,"i");
				if(regExp.test($(td).text()))
				{
					found=true;
					return false;
				}
			});
			if(found==true) $(row).show();
			else $(row).hide();
		}
	});
}
function deleteNumber(name,n)
{
	k=confirm('delete username = '+name+' | mobile = '+n+' ?');
	if(k)
	{
		
		$('#number').val(n);
		deleteForm.submit();
	}
}
</script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="">Search</a>
  </div>
    <div class="col-sm-3 col-md-3">
        <form class="navbar-form">
        <div class="input-group">
            <input type="text" id="search" class="form-control" placeholder="Search" name="q">
            
        </div>
        </form>
        
    </div>
    <form class="navbar-form pull right" action="akdjhfuyw72673763hjdnndjdnf8737hhdd.php">
        <div class="input-group">
			<button class="btn btn-primary" type="submit">Refresh</button>            
        </div>
        </form>
 </div><!-- /.navbar-collapse -->
</nav>
<br>
<br>
<table class='table'>
<thead>
<tr>
<th>S.NO.</th>
<th>Name</th>
<th>Email</th>
<th>mobile</th>
<th>College</th>
<th>Branch</th>
<th>Semester</th>
<th><i class='fa fa-times-rectangle' aria-hidden='true'></th>
</tr>
</thead>
<tbody>

<?php
$list=file("data/list.data");
$x=0;
while($x<count($list))
{
	$list[$x]=substr($list[$x],0,strlen($list[$x])-1);
	$x++;
}
$x=0;
while($x<count($list))
{
	print "<tr>";
	print "<td>".$list[$x+6]."</td>";
	print "<td>".$list[$x]."</td>";
	print "<td>".$list[$x+1]."</td>";
	print "<td>".$list[$x+2]."</td>";
	print "<td>".$list[$x+3]."</td>";
	print "<td>".$list[$x+4]."</td>";
	print "<td>".$list[$x+5]."</td>";
	print "<td class='delete'><i onclick='deleteNumber(\"".$list[$x]."\",".$list[$x+2].")' class='fa fa-times' aria-hidden='true'></i></td>";
	print "</tr>";
	$x+=7;
}
?>

</tbody>
</table>
<form id="deleteForm" action="deletepncbjdbacbscbjdsbcjsdbcjsdcbjsdbcj.php" method="POST">
<input type="hidden" id="number" name="number"/>
</form>
</body>
</html>
