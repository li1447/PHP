<?php 
header("Content-Type:text/html;charset=utf-8");?>

<form action="chuli.php" method="post">
	<img id="img" src="yanzhengma.php"  style="border:1px solid gray "/>
	<a href="javascript:void(0)" id="a">看不清，换一张</a><br>
	<input type="text"  name="code"/>	
	<input type="submit" />	
	
</form>
<script type = "text/javascript">
	var a = document.getElementById("a");
	var img = document.getElementById("img");
	a.onclick = function(){
			img.src = "yanzhengma.php?a=<?php echo rand(1,100);?>";	
	}
	img.onclick = function(){
		img.src = "yanzhengma.php?a=<?php echo rand(1,100);?>";	
}
</script>