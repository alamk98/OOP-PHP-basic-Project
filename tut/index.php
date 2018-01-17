<!DOCTYPE html>
<html>
<head>
	<title>Insert and Retrieve with Ajax</title>
	<style type="text/css">
		
	body{
		background-color: #fcfcfc;
	}
	#wrapper{
		width: 50%;
		height: auto;
		margin: 1px auto ;
		border:1px solid #cbcbcb;
		background-color: white ;
	}
	#comment_input_form li{
		list-style-type: none;
		margin: 5px;
	}
	#comment_input_form{
		width: 50%;
		margin: 10px auto;
		background-color: #fcfcfc;
		padding: 20px ;
	}
	#name,textarea{
		width: 90%;
	}

	</style>
</head>
<body>
	<div id="wrapper">
		
		<div id="comment_input_form">
			<li>Name: </li>
			<li><input type="text" name="name" id="name"></li>

			<li>Comment: </li>
			<li><textarea id="comment"></textarea></li>
			<li><input type="submit" name="submit" id="submit_comment" value="POST"></li>
		</div>

	</div>
</body>
</html>
<!-- add jquery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

   		 $("#submit_comment").click(function(){
   		 	var name = $("#name").val();
   		 	var comment = $("#comment").val();
         $.ajax({
         	url: "ajax.php",
         	type:"POST",
         	async: false,
         	data: {
         		"done":1,
         		"username" :name,
         		"comment_text" : comment
         	},
         	success:function(data){

         	}
         });
    });
});
</script>