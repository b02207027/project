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
	<h1 id="left">好</h1>
	<h1 id="left"><font color = red>Q</font></h1>
</div>
<div id="right">
	<h1 id="right">民進黨</h1>
	<h1 id="right">壞</h1>
	<h1 id="right"><font color = red>P</font></h1>
</div>
<div id="center">
	<div class="inputPic" id="intro" ><img src="intro12.jpg" width='900' height='600'></div>
	<div class="inputPic" id="inputPic"></div>
	<div class="input" id="inputWord"></div>
	<form id="send" method="post" action="">
		<input type="hidden" name="sec3Correct" id="sec3Correct" value="">
		<input type="hidden" name="sec3ReacTime" id="sec3ReacTime" value="">
		<input type="hidden" name="sec3AveReacTime" id="sec3AveReacTime" value="">
		<input type="hidden" id="sec4sequence" name="sec4sequence" value="<?php echo $_POST[sec4sequence] ?>">
		<input type="hidden" name="sec4Correct" id="sec4Correct" value="<?php echo $_POST[sec4Correct] ?>">
		<input type="hidden" name="sec4ReacTime" id="sec4ReacTime" value="<?php echo $_POST[sec4ReacTime] ?>">
		<input type="hidden" name="sec4AveReacTime" id="sec4AveReacTime" value="<?php echo $_POST[sec4AveReacTime] ?>">
		<input type="hidden" name="sec2ReacTime" id="sec2ReacTime" value="<?php echo $_POST[sec2ReacTime] ?>">
		<input type="hidden" name="sec2AveReacTime" id="sec2AveReacTime" value="<?php echo $_POST[sec2AveReacTime] ?>">
		<input type="hidden" id="sec1ReacTime" name="sec1ReacTime" value= "<?php echo $_POST[sec1ReacTime] ?>"/>
		<input type="hidden" id="sec1AveReacTime" name="sec1AveReacTime" value= "<?php echo $_POST[sec1AveReacTime] ?>"/>
		<input type="hidden" name="gender" id="gender" value="<?php echo $_POST[gender] ?>">
		<input type="hidden" name="age" id="age" value="<?php echo $_POST[age] ?>">
		<input type="hidden" name="education" id="education" value="<?php echo $_POST[education] ?>">
		<input type="hidden" name="party" id="party" value="<?php echo $_POST[party] ?>">
		<input type="hidden" id="sequence" name="sequence" value="<?php echo $_POST[sequence] ?>">
		<input type="hidden" id="sec3sequence" name="sec3sequence" value="">
	</form>
</div>
</body>

<script>
var trials = 24;
var sec3sequence = new Array;
	for(var i = 0; i < trials; i++)
	{
		var exist = true;
		while(exist == true)
		{
			exist = false;
			var index=Math.floor(Math.random()*trials);
			for(var j = 0; j < i; j++)
			{
				if (sec3sequence[j] == index)
				{
					exist = true;
					break;
				}
			}
		}
		sec3sequence[i] = index;
	}
var p=document.getElementById("inputPic");
var w=document.getElementById("inputWord");
var show = ["<img src='K1.jpg' width='300' height='300' vspace = '150'>","<img src='K2.jpg' width='300' height='300' vspace = '150'>","<img src='K3.jpg' width='300' height='300' vspace = '150'>","<img src='K4.jpg' width='300' height='300' vspace = '150'>","<img src='D1.jpg' width='300' height='300' vspace = '150'>","<img src='D2.jpg' width='300' height='300' vspace = '150'>","<img src='D3.jpg' width='300' height='300' vspace = '150'>","<img src='D4.jpg' width='300' height='300' vspace = '150'>","喜悅","愛","和平","美妙","愉快","光榮","歡笑","快樂","苦惱","糟糕","恐怖","骯髒","邪惡","可怕","失敗","傷害"];
var i = 0;
var preTime , postTime;
var prepared = false;
var sec3ReacTime = new Array();
var sec3Correct = new Array();
var start = false;
document.onkeydown = function onkeydown(e)
{
	var e=window.event;
	if(start == false && e.keyCode == 32)
	{
		document.getElementById("intro").innerHTML = "<img src='' width='0' height='0'>";
		start = true;
		setTimeout(change,1000);
	}
	if(start == true && prepared == true && (e.keyCode == 81 || e.keyCode == 80))//Q鍵81 P鍵80
	{
		prepared = false;
		postTime = new Date().getTime();
		sec3ReacTime[sec3sequence[i]] = (postTime-preTime)/1000;
		if(sec3sequence[i] <= 3 || (sec3sequence[i] >= 8 && sec3sequence[i] <= 15))
		{
			if (e.keyCode == 81)
			{
				p.innerHTML = "<img src='' width='0' height='0'>";
				w.innerHTML = "";
				sec3Correct[sec3sequence[i]] = 1;
			}
			else
			{
				p.innerHTML = "<img src='' width='0' height='0'>";
				w.innerHTML = "";
				sec3Correct[sec3sequence[i]] = 0;
			}
		}
		else
		{
			if (e.keyCode == 80)
			{
				p.innerHTML = "<img src='' width='0' height='0'>";
				w.innerHTML = "";
				sec3Correct[sec3sequence[i]] = 1;
			}
			else
			{
				p.innerHTML = "<img src='' width='0' height='0'>";
				w.innerHTML = "";
				sec3Correct[sec3sequence[i]] = 0;
			}
		}
		i++;
		setTimeout(change,1000);
	}
}
function change()
{
	if(i == trials)
	{
		var sec3AveReacTime = 0;
		for(var k = 0; k < trials; k++)
		{
			sec3AveReacTime += sec3ReacTime[k];
		}
		sec3AveReacTime /= 24;
		document.getElementById("sec3AveReacTime").value = sec3AveReacTime;
		document.getElementById("sec3ReacTime").value = sec3ReacTime;
		document.getElementById("sec3Correct").value = sec3Correct;
		document.getElementById("sec3sequence").value = sec3sequence;
		if(document.getElementById("sequence").value == 0)
			document.getElementById("send").action = "section4.php";
		else
			document.getElementById("send").action = "section5.php";
		document.getElementById("send").submit();
	}
	else
	{
		if(sec3sequence[i] <= 7)
			p.innerHTML = show[sec3sequence[i]];
		else
			w.innerHTML = show[sec3sequence[i]];
		preTime = new Date().getTime();
		prepared = true;
	}
}
</script>



