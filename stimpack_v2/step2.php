<?php include ("connect.php"); 
dbConnect();
$brewid = $_SESSION['brewid'];
$_SESSION['brewid'] = $brewid;

$brewname = $_SESSION['brewname'];
$_SESSION['brewname'] = $brewname;
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
        <li class="active"><a href="new.html">New<span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

				 		
				 		  

						 
						 
						
<div class="container">
<?
if($brewid <> NULL) 
{
?>
<div class="alert alert-success" role="alert">
<strong>Success!</strong> You successfully added <?php echo $brewname;?>.
</div>
<?
}
else               
{
}
?>
<form method="post" action="input_grain.php">
<input type="hidden" name="brewid" value="<?php echo $brewid;?>">
 <legend>Grains</legend>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <table class="table table-bordered table-hover" id="tab_logic">
                <thead>
                    <tr >
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Amount (lb)
                        </th>
                        <th class="text-center">
                            Grain
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr id='grain0'>
                        <td>
                        1
                        </td>
                        <td>
                        <input type="text" name='grain[0][amount]'  placeholder='amount' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='grain[0][name]' placeholder='grain' class="form-control"/>
                        </td>
                      
                    </tr>
                    <tr id='grain1'></tr>
                </tbody>
            </table>
        </div>
    </div>
    <a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
       <legend>Hops</legend>
    <div class="row clearfix">
    	

        <div class="col-md-12 column">
            <table class="table table-bordered table-hover" id="tab_logic_hops">
                <thead>
                    <tr >
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Amount (oz)
                        </th>
                        <th class="text-center">
                            Hop
                        </th>
                        <th class="text-center">
                            Time
                        </th>
                        <th class="text-center">
                            Use
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr id='hops0'>
                        <td>
                        1
                        </td>
                        <td>
                        <input type="text" name='hops[0][amount]'  placeholder='amount' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='hops[0][name]' placeholder='hop name' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='hops[0][time]' placeholder='time' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='hops[0][use]' placeholder='use' value ='Boil' class="form-control"/>
                        </td>
                      
                    </tr>
                    <tr id='hops1'></tr>
                </tbody>
            </table>
        </div>
    </div>
    <a id="add_row_hops" class="btn btn-default pull-left">Add Row</a><a id='delete_row_hops' class="pull-right btn btn-default">Delete Row</a>
 <legend>Yeast</legend>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <table class="table table-bordered table-hover" id="tab_logic_yeast">
                <thead>
                    <tr >
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Name
                        </th>
                        <th class="text-center">
                            Lab
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr id='yeast0'>
                        <td>
                        1
                        </td>
                        <td>
                        <input type="text" name='yeast[0][name]'  placeholder='yeast' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='yeast[0][lab]' placeholder='Wyeast' class="form-control"/>
                        </td>
                      
                    </tr>
                     <tr id='yeast1'></tr>
                </tbody>
            </table>
        </div>
     		<div class="col-md-12 column">
   			 	<a id="add_row_yeast" class="btn btn-default pull-left">Add Row</a><a id='delete_row_yeast' class="pull-right btn btn-default">Delete Row</a>
    		</div>
     </div>
     <div class="row clearfix">
     	<div class="col-md-12 column">
     		<button type="submit" class="btn btn-primary pull-right">Next</button>
     	</div>
     </div>
     </form>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">   var i=1;
     $("#add_row").click(function(){
      $('#grain'+i).html("<td>"+ (i+1) +"</td><td><input name='grain["+i+"][amount]' type='text' placeholder='amount' class='form-control input-md'  /></td><td><input  name='grain["+i+"][name]' type='text' placeholder='grain'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="grain'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
         if(i>1){
         $("#grain"+(i-1)).html('');
         i--;
         }
     });</script>
       

       <script type="text/javascript">   var z=1;
     $("#add_row_hops").click(function(){
      $('#hops'+z).html("<td>"+ (z+1) +"</td><td><input name='hops["+z+"][amount]' type='text' placeholder='amount' class='form-control input-md'  /></td><td><input  name='hops["+z+"][name]' type='text' placeholder='grain'  class='form-control input-md'></td><td><input  name='hops["+z+"][time]' type='text' placeholder='grain'  class='form-control input-md'></td><td><input  name='hops["+z+"][use]' type='text' placeholder='grain'  class='form-control input-md'></td>");

      $('#tab_logic_hops').append('<tr id="hops'+(z+1)+'"></tr>');
      z++; 
  });
     $("#delete_row_hops").click(function(){
         if(z>1){
         $("#hops"+(z-1)).html('');
         z--;
         }
     });</script>

      <script type="text/javascript">   var x=1;
     $("#add_row_yeast").click(function(){
      $('#yeast'+x).html("<td>"+ (x+1) +"</td><td><input name='yeast["+x+"][name]' type='text' placeholder='yeast' class='form-control input-md'  /></td><td><input  name='yeast["+x+"][lab]' type='text' placeholder='grain'  class='form-control input-md'></td>");

      $('#tab_logic_yeast').append('<tr id="yeast'+(x+1)+'"></tr>');
      x++; 
  });
     $("#delete_row_yeast").click(function(){
         if(x>1){
         $("#yeast"+(x-1)).html('');
         x--;
         }
     });</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>