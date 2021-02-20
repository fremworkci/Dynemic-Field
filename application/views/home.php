<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include("css.php"); ?>
</head>
<body>
<div class="container">
	<div class="col-xl-6">
		<form method="post" action="<?php echo base_url().'Home/insert' ?>">
			<table class="table" id="mytable">
				<tr>
					<td>Name : <input type="text" name="name[]" id="name" class="form-control"></td>
					<td><br><button class="btn btn-info" id="add">Add</button></td>
				</tr>
			</table>
			<input type="submit" name="submit" id="submit" value="Insert" class="btn btn-success">
		</form>
	</div>
</div>

<script src="<?php echo base_url('assist/jquery.js'); ?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var i=1;
		$("#add").on("click",function(e){
			e.preventDefault();
			i++;
			$("#mytable").append('<tr id="row'+i+'"><td>Name : <input type="text" name="name[]" id="name" class="form-control"></td><td><br><button name="remove" id="'+i+'" class="btn btn-success btn_remove">X</button></td></tr>');
		});

		//remove
		$(document).on("click",".btn_remove",function(){
			var id=$(this).attr("id");
			$("#row"+id+"").remove();
		});



		//submit
		// $("#submit").click(function(e){
		// 	e.preventDefault();
		// 	var data=$('#myform').serialize();
		// 	$.ajax({
		// 		url : 'insert.php',
		// 		type: 'POST',
		// 		data:$('#myform').serialize(),
		// 		success:function(data)
		// 		{
		// 			alert(data);
		// 		}
		// 	});
		// });


	});
</script>
</body>
</html>