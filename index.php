<?php
//index.php
include('database_connection.php');
$book = '';
$query = "
	SELECT book FROM oppa GROUP BY book ORDER BY book ASC
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
	$book .= '<option value="'.$row["book"].'">'.$row["book"].'</option>';
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Search System</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="jquery.lwMultiSelect.js"></script>
		<link rel="stylesheet" href="jquery.lwMultiSelect.css" />

	</head>
	<body>
		<br /><br />

		<div class="container" style="width:1200px;">
			  <div class="panel panel-warning ">
        <div class="panel-heading">Test</div>
        <div class="panel-body">
		<div class="col-sm-6">
		<form action="" method="post">
				<select name="book" id="book" class="form-control action">
				<option value="">Select Type Book</option>
				<?php echo $book; ?>
				</select>
				</div>
				
				<div class="col-sm-6">
				<select name="nk" id="nk" class="form-control action">
				<option value="">Select Name</option>
				</select>
				</div><br/><br/><br/>
				
				<div class="col-sm-6">
				<select name="ao" id="ao" class="form-control action">
				<option value="">Image List</option>
				</select>
				</div>

				<div class="col-sm-6">
				<select name="co" id="co" class="form-control action">
				<option value="">Image List</option>
				</select>
				<br/>
				</div>
				<div style="text-align: center;">
				<button type="submit" class="btn btn-danger" name="submit" value="Submit">Search</button>
				<!--<input type="submit" name="submit" value="Submit"/>-->
				</div>
			</form>
				</div>
				<?php 
				if(isset($_POST['submit'])){ 
					//echo 'Book name : '.$_POST['book']; 
					echo '<div class="container" style="width:1150px;">';
					echo '<div class="panel panel-info">';
					echo ' <div class="panel-heading"><b>Show pictures and details</b></div>';
					echo '<b>';
					echo '<div class="panel-heading"> 
					 Book name : <u>'.$_POST['book'];
					echo '</u>  &nbsp; &nbsp;  ||  &nbsp; &nbsp;  ';
					echo ' </b><b>Product name : <u>'.$_POST['nk'];
					echo ' </b></u></div> ';
					echo ' <div class="panel-body">';
					echo '<div style="text-align: center;">';
					echo '<img src="'.$_POST['ao'].'" height="350" width="520"/>';
					echo '<span style="padding:10px 10px 75px 20px"></span>';
					echo '<img src="'.$_POST['co'].'" height="350" width="520"/><br/>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
				} 
				?>
				</div>
		</div>
		</div>
		</div>
		</div>
	</body>
</html>
<script>
$(document).ready(function(){
	$('#city').lwMultiSelect();
	$('.action').change(function(){
		if($(this).val() != '')
		{
			var action = $(this).attr("id");
			var query = $(this).val();
			var result = '';
			if(action == 'book')
			{
				result = 'nk';
			}else
			{
				result ='ao';
			}

			if(action == 'ao')
			{ 
				result='co';
			}
			
			$.ajax({
				url:'fetch.php',
				method:"POST",
				data:{action:action, query:query},
				success:function(data)
				{
					$('#'+result).html(data);
				}
			})
		}
	});
	
});
</script>



