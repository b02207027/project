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
	<h1 id="left">國民黨</h1>
	<h1 id="left"><font color = red>Q</font></h1>
</div>
<div id="right">
	<h1 id="right">民進黨</h1>
	<h1 id="right"><font color = red>P</font></h1>
</div>
<div id="center">
	<div class="inputPic" id="intro" ><img src="intro10.jpg" width='900' height='600'></div>
	<div class="inputPic" id="inputPic"></div>
	<div class="input" id="inputWord"></div>
	<form id="send" method="post" action="">
		<input type="hidden" name="sec2ReacTime" id="sec2ReacTime" value="">
		<input type="hidden" name="sec2AveReacTime" id="sec2AveReacTime" value="">
		<input type="hidden" id="sec1ReacTime" name="sec1ReacTime" value= "<?php echo $_POST[sec1ReacTime] ?>"/>
		<input type="hidden" name="sec1AveReacTime" id="sec1AveReacTime" value="<?php echo $_POST[sec1AveReacTime] ?>">
		<input type="hidden" id="sequence" name="sequence" value="">
		<input type="hidden" name="gender" id="gender" value="<?php echo $_POST[gender] ?>">
		<input type="hidden" name="age" id="age" value="<?php echo $_POST[age] ?>">
		<input type="hidden" name="education" id="education" value="<?php echo $_POST[education] ?>">
		<input type="hidden" name="party" id="party" value="<?php echo $_POST[party] ?>">
	</form>
	<form id="repeat" method="post" action="section2.php">
		<input type="hidden" name="sec2Start" id="sec2Start" value="<?php echo $_POST[sec2Start] ?>">
	</form>
</div>
</body>

<script>
var trials = 16;
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
var p=document.getElementById("inputPic");
var show = ["<img src='K1.jpg' width='300' height='300' vspace = '150'>","<img src='K1.jpg' width='300' height='300' vspace = '150'>","<img src='K2.jpg' width='300' height='300' vspace = '150'>","<img src='K2.jpg' width='300' height='300' vspace = '150'>","<img src='K3.jpg' width='300' height='300' vspace = '150'>","<img src='K3.jpg' width='300' height='300' vspace = '150'>","<img src='K4.jpg' width='300' height='300' vspace = '150'>","<img src='K4.jpg' width='300' height='300' vspace = '150'>","<img src='D1.jpg' width='300' height='300' vspace = '150'>","<img src='D1.jpg' width='300' height='300' vspace = '150'>","<img src='D2.jpg' width='300' height='300' vspace = '150'>","<img src='D2.jpg' width='300' height='300' vspace = '150'>","<img src='D3.jpg' width='300' height='300' vspace = '150'>","<img src='D3.jpg' width='300' height='300' vspace = '150'>","<img src='D4.jpg' width='300' height='300' vspace = '150'>","<img src='D4.jpg' width='300' height='300' vspace = '150'>"];
var i = 0;
var preTime , postTime;
var prepared = false;
var sec2ReacTime = new Array();
var sec2Correct = new Array();
if(document.getElementById("sec2Start").value == 1)
{
	document.getElementById("intro").innerHTML = "<img src='' width='0' height='0'>";
	setTimeout(change,1000);
}
document.onkeydown = function onkeydown(e)
{
	var e=window.event;
	if(document.getElementById("sec2Start").value == 0 && e.keyCode == 32)
	{
		document.getElementById("intro").innerHTML = "<img src='' width='0' height='0'>";
		document.getElementById("sec2Start").value = 1;
		setTimeout(change,1000);
	}
	else if(document.getElementById("sec2Start").value == 1 && prepared == true && (e.keyCode == 81 || e.keyCode == 80))//Q鍵81 P鍵80
	{
		prepared = false;
		postTime = new Date().getTime();
		sec2ReacTime[sequence[i]] = (postTime-preTime)/1000;
		if(sequence[i] <= 7)
		{
			if (e.keyCode == 81)
			{
				p.innerHTML = "<img src='' width='0' height='0'>";
				document.getElementById("inputWord").innerHTML = "<font color=red>正確";
				setTimeout(clear,500);
				sec2Correct[sequence[i]] = 1;
			}
			else
			{
				p.innerHTML = "<img src='' width='0' height='0'>";
				document.getElementById("inputWord").innerHTML = "<font color=red>錯誤";
				setTimeout(clear,500);
				sec2Correct[sequence[i]] = 0;
			}
		}
		else
		{
			if (e.keyCode == 80)
			{
				p.innerHTML = "<img src='' width='0' height='0'>";
				document.getElementById("inputWord").innerHTML = "<font color=red>正確";
				setTimeout(clear,500);
				sec2Correct[sequence[i]] = 1;
			}
			else
			{
				p.innerHTML = "<img src='' width='0' height='0'>";
				document.getElementById("inputWord").innerHTML = "<font color=red>錯誤";
				setTimeout(clear,500);
				sec2Correct[sequence[i]] = 0;
			}
		}
		i++;
		setTimeout(change,1000);
	}
}
function clear()
{
	document.getElementById("inputWord").innerHTML = " ";
}
function change()
{
	if(i == trials)
	{
		var CAR = 0;
		for(var k = 0; k < trials; k++)
			CAR += sec2Correct[k];
		CAR /= trials;
		if(CAR < 0.7)
		{
			var sec2Start = 1;
			window.alert("您的正確率不到七成，請重新練習");
			document.getElementById("repeat").submit();
		}
		else
		{
			var seq = Math.floor(Math.random()*2);
			document.getElementById("sequence").value = seq;
			if (seq == 0)
				document.getElementById("send").action = "section3.php";
			else
				document.getElementById("send").action = "section4.php";
			var sec2AveReacTime = 0;
			for(var k = 0; k < trials; k++)
			{
				sec2AveReacTime += sec2ReacTime[k];
			}
			sec2AveReacTime /= 16;
			document.getElementById("sec2AveReacTime").value = sec2AveReacTime;
			document.getElementById("sec2ReacTime").value = sec2ReacTime;
			document.getElementById("send").submit();
		}
	}
	else
	{
		p.innerHTML = show[sequence[i]];
		preTime = new Date().getTime();
		prepared = true;
	}
}
</script>



