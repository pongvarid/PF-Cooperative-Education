<?php include './session.php'; ?>
<html>
<head>
 <?php include './style.php';
$style = new style();
$style->head("");
$style->bootstrap();$style->tail();
$style->main(); 
$style->font();
include './navbar.php';
$nav = new navbar();
?>
</head>
<body>
    <div class="container custom">
        <?php
        if(!isset($objResult["role"])){header("location:index.php");}
        if($objResult["role"]!="Student"){$nav->admin();}
        else {$nav->student();}
        ?>
	
		<br>
		<h2 align="center">ค้นหา</h2>
		<br>
		<div class="form-group">
			<div class="input-group">
			<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Name" class="form-control" />	<span class="input-group-addon">Search</span>
                              
			</div>
		</div>
		<br>
		<div id="result"></div>
	</div>
</body>
</html>


<script>
$(document).ready(function(){
	$('#search_text').keyup(function(){
		var txt=$(this).val();
		if(txt !=''){
			$('#result').html('');
			$.ajax({
				url:"search.php",
				method:"post",
				data:{search:txt},
				dataType:"text",
				success:function(data){
					$('#result').html(data);
				}
				
				
			});
		}else{
			$('#result').html('');
			$.ajax({
				url:"search.php",
				method:"post",
				data:{search:txt},
				dataType:"text",
				success:function(data){
					$('#result').html(data);
				}
				
				
			});
			
		}
	});
});


</script>