<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<style type="text/css">
	#left{
		height: 50;
		width: 180;
		float: left;
		text-align: center;
		font-family: Microsoft JhengHei;
		//background-color: green;
	}
	#center{
		margin-left: 175;
		width: 1000px;
		height: 600px;
		text-align: center;
		line-height: 600px;
		font-size:100pt;
		font-family: Microsoft JhengHei;
		//background-color: red;
	}
	#right{
		height: 50;
		width: 180;
		float: right;
		text-align: center;
		font-family: Microsoft JhengHei;
		//background-color: green;
	}
</style>
<body>
<div id="left">
	<h1 id="left">好</h1>
	<h1 id="left"><font color = red>Q</font></h1>
</div>
<div id="right">
	<h1 id="right">壞</h1>
	<h1 id="right"><font color = red>P</font></h1>
</div>
<div id="center">
	<div class="inputPic" id="inputPic"><img src="intro9.jpg" width='900' height='600'></div>
	<div class="feedback"></div>
	<div class="input" id="inputWord"></div>
	<form id="send" method="post" action="section2.php">
		<input type="hidden" name="sec1ReacTime" id="sec1ReacTime" value="">
		<input type="hidden" name="sec1AveReacTime" id="sec1AveReacTime" value="">
		<input type="hidden" name="sec2Start" id="sec2Start" value="0">
		<input type="hidden" name="gender" id="gender" value="<?php echo $_POST[gender] ?>">
		<input type="hidden" name="age" id="age" value="<?php echo $_POST[age] ?>">
		<input type="hidden" name="education" id="education" value="<?php echo $_POST[education] ?>">
		<input type="hidden" name="party" id="party" value="<?php echo $_POST[party] ?>">
	</form>
	<form id="repeat" method="post" action="section1.php">
		<input type="hidden" name="sec1Start" id="sec1Start" value="<?php echo $_POST[sec1Start] ?>">
	</form>
</div>
</body>

<script>
var trials = 10;
var sequence = new Array;
	for(var i = 0; i < trials; i++)
	{
		var exist = true;
		while(exist == true)
		{
			exist = false;
			var index=Math.floor(Math.random()*trials);
			for(var j = 0; j < i; j++)
			{
				if (sequence[j] == index)
				{
					exist = true;
					break;
				}
			}
		}
		sequence[i] = index;
	}
var w=document.getElementById("inputWord");
var show = ['喜悅','愛','和平','美妙','愉快','苦惱','糟糕','恐怖','骯髒','邪惡'];
var i = 0;
var preTime , postTime;
var prepared = false;
var sec1ReacTime = new Array();
var sec1Correct = new Array();
if(document.getElementById("sec1Start").value == 1)
{
	document.getElementById("inputPic").innerHTML = "<img src='' width='0' height='0'>";
	setTimeout(change,1000);
}
document.onkeydown = function onkeydown(e)
{
	var e=window.event;
	if(document.getElementById("sec1Start").value == 0 && e.keyCode == 32)
	{
		document.getElementById("inputPic").innerHTML = "<img src='' width='0' height='0'>";
		setTimeout(change,1000);
		document.getElementById("sec1Start").value = 1;
	}
	if(document.getElementById("sec1Start").value == 1 && prepared == true && (e.keyCode == 81 || e.keyCode == 80))//Q鍵81 P鍵80
	{
		prepared = false;
		postTime = new Date().getTime();
		sec1ReacTime[sequence[i]] = (postTime-preTime)/1000;
		if(sequence[i] <= 4)
		{
			if (e.keyCode == 81)
			{
				document.getElementById("inputWord").innerHTML = "<font color=red>正確";
				setTimeout(clear,500);
				sec1Correct[sequence[i]] = 1;
			}
			else
			{
				document.getElementById("inputWord").innerHTML = "<font color=red>錯誤";
				setTimeout(clear,500);
				sec1Correct[sequence[i]] = 0;
			}
		}
		else
		{
			if (e.keyCode == 80)
			{
				document.getElementById("inputWord").innerHTML = "<font color=red>正確";
				setTimeout(clear,500);
				sec1Correct[sequence[i]] = 1;
			}
			else
			{
				document.getElementById("inputWord").innerHTML = "<font color=red>錯誤";
				setTimeout(clear,500);
				sec1Correct[sequence[i]] = 0;
			}
		}
		i++;
		setTimeout(change,1000);
	}
}
function clear()
{
	w.innerHTML = " ";
}
function change()
{
	if(i == trials)
	{
		var CAR = 0;
		for(var k = 0; k < trials; k++)
			CAR += sec1Correct[k];
		CAR /= trials;
		if(CAR < 0.7)
		{
			var sec1Start = 1;
			window.alert("您的正確率不到七成，請重新練習");
			document.getElementById("repeat").submit();
		}
		else
		{
			var sec1AveReacTime = 0;
			for(var k = 0; k < trials; k++)
			{
				sec1AveReacTime += sec1ReacTime[k];
			}
			sec1AveReacTime /= 10;
			document.getElementById("sec1AveReacTime").value = sec1AveReacTime;
			document.getElementById("sec1ReacTime").value = sec1ReacTime;
			document.getElementById("send").submit();
		}
	}
	else
	{
		w.innerHTML = show[sequence[i]];
		preTime = new Date().getTime();
		prepared = true;
	}
}
</script>



