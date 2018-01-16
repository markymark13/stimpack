<?php 
include ("connect.php"); 
# connect mysql db
dbConnect();
$query = "SELECT * FROM `BREW` Order by ID Desc ";
$count_rows = mysql_num_rows($countlast10);
$brews = mysql_query($query);
$counter = 0;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Stimpack</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Stimpack</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="index.html">Beers</a></li>
        <li class=""><a href="new.html">New<span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  	<div class="container">
  			<!-- Stack the columns on mobile by making one full-width and the other half-width -->
			<div class="row">
				 <div class="col-xs-12 col-md-12">
				 	 <div class="" data-example-id="bordered-table"> 
					  <table class="table table-bordered"> 
					  	<thead> 
					  		<tr> 
					  			<th>#</th> 
					  			<th>Brew</th> 
					  			<th>Type</th> 
					  			<th>ABV</th>
					  			<th>Status</th>
					  			<th></th> 
					  		</tr> 
					  	</thead> 
					  	<tbody> 
					  	 <?
	
                                while($row = mysql_fetch_array($brews, MYSQL_ASSOC))
                                {
                               	$id = $row["ID"];
                                $brew = $row["Brew"];
                                $type = $row["Type"];
                                $created_date = $row["Created Date"];
                                $completed_date = $row["Completed Date"];
             
                                ?>
					  		<tr> 
				 		  		<th scope="row"><? echo $id ?></th> 
						  		<td><? echo $brew ?></td> 
						  		<td><? echo $type ?></td> 
						  		<td>7%</td> 
						  		<td>
								<? if($completed_date = NULL)
								{
							 	?><span class="label label-warning">in progress</span>
							 	<?
								}
									else{
										?>
										<span class="label label-success">complete</span>
										<?
										} ?>
						  		</td>
						  		<td><a href=edit.php/id?=<? echo $id ?>>edit</a></td>
					  		</tr>
					  		    <?
                                }
                                ?>

					  	</tbody>
					  </table> 
				 	</div>
				</div> 
			</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>