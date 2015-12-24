<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<style type="text/css">
	.input{
		font-size:100pt;
		font-family: Microsoft JhengHei;
		text-align: center;}
</style>
<body>
	<div class="input" id="input"><img src="intro1.jpg" width="900" height="600"></div>
	<form id="send" method="post" action="section1.php">
		<input type="hidden" name="sec1Start" id="sec1Start" value="0">
		<input type="hidden" name="gender" id="gender" value="<?php echo $_POST[gender] ?>">
		<input type="hidden" name="age" id="age" value="<?php echo $_POST[age] ?>">
		<input type="hidden" name="education" id="education" value="<?php echo $_POST[education] ?>">
		<input type="hidden" name="party" id="party" value="<?php echo $_POST[party] ?>">
	</form>
</body>
<script>
var show = ["<img src='intro2.jpg' width='900' height='600'>","<img src='intro3.jpg' width='900' height='600'>","<img src='intro4.jpg' width='900' height='600'>","<img src='intro5.jpg' width='900' height='600'>","<img src='intro6.jpg' width='900' height='600'>","<img src='intro7.jpg' width='900' height='600'>","<img src='intro8.jpg' width='900' height='600'>"];
var i = -1;	
var p=document.getElementById("input");
var prepared = true;
document.onkeydown = function onkeydown(e)
{
	var e=window.event;
	if(prepared == true && e.keyCode == 32)//空白32
	{
		prepared = false;
		i++;
		p.innerHTML = "<img src='' width='0' height='0'>";
		setTimeout(change,1000);
	}
}
function change()
{
	if(i > 6)
	{
		document.getElementById("send").submit();
	}
	else
	{
		p.innerHTML = show[i];
		prepared = true;
	}
}
</script>