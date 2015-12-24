<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<h1>感謝你!!</h1>

<?php

	
	$fo = fopen("subject.txt", "r");
	$n = fgets($fo);
	fclose($fo);
	
	$n++;

	$fo = fopen("subject.txt", "w");
	fwrite($fo, $n);
	fclose($fo);

	$ave = $_POST[Q1]+$_POST[Q2]+$_POST[Q3]+$_POST[Q4]+$_POST[Q5]+$_POST[Q6]+$_POST[Q7]+$_POST[Q8]+$_POST[Q9]+$_POST[Q10]+$_POST[Q11]+$_POST[Q12]+$_POST[Q13]+$_POST[Q14]+$_POST[Q15]+$_POST[Q16]+$_POST[Q17]+$_POST[Q18];
	$ave /= 18;
	$prefer = $_POST[sec3AveReacTime] - $_POST[sec4AveReacTime];
	if($_POST[sequence] == 0)
	{
		$fo = fopen("result.txt", "a");
		fwrite($fo, "\r\n");
		fwrite($fo, $n.",性別：".$_POST["gender"].",年齡：".$_POST[age].",教育程度：".$_POST[education].",政黨傾向：".$_POST[party].",順序：".$_POST[sequence]."\r\n");
		fwrite($fo, "1,1,1,1,2,2,2,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0\r\n");
		fwrite($fo, "0,0,0,0,0,0,0,0,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2\r\n");
		fwrite($fo, $_POST[sec3ReacTime]."\r\n");
		fwrite($fo, $_POST[sec3Correct]."\r\n");
		fwrite($fo, "1,1,1,1,2,2,2,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0\r\n");
		fwrite($fo, "0,0,0,0,0,0,0,0,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2\r\n");
		fwrite($fo, $_POST[sec4ReacTime]."\r\n");
		fwrite($fo, $_POST[sec4Correct]."\r\n");
		fwrite($fo, $_POST[Q1].",".$_POST[Q2].",".$_POST[Q3].",".$_POST[Q4].",".$_POST[Q5].",".$_POST[Q6].",".$_POST[Q7].",".$_POST[Q8].",".$_POST[Q9].",".$_POST[Q10].",".$_POST[Q11].",".$_POST[Q12].",".$_POST[Q13].",".$_POST[Q14].",".$_POST[Q15].",".$_POST[Q16].",".$_POST[Q17].",".$_POST[Q18]."\r\n");
		fclose($fo);
		$fo = fopen("summary.txt", "a");
		fwrite($fo, $n.",".$_POST[sec1AveReacTime].",".$_POST[sec2AveReacTime].",".$_POST[sec3AveReacTime].",".$_POST[sec4AveReacTime].",".$prefer.",".$ave."\r\n");
		fclose($fo);
	}
	else
	{
		$fo = fopen("result.txt", "a");
		fwrite($fo, "\r\n");
		fwrite($fo, $n.",性別：".$_POST["gender"].",年齡：".$_POST[age].",教育程度：".$_POST[education].",政黨傾向：".$_POST[party].",順序：".$_POST[sequence]."\r\n");
		fwrite($fo, "1,1,1,1,2,2,2,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0\r\n");
		fwrite($fo, "0,0,0,0,0,0,0,0,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2\r\n");
		fwrite($fo, $_POST[sec4ReacTime]."\r\n");
		fwrite($fo, $_POST[sec4Correct]."\r\n");
		fwrite($fo, "1,1,1,1,2,2,2,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0\r\n");
		fwrite($fo, "0,0,0,0,0,0,0,0,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2\r\n");
		fwrite($fo, $_POST[sec3ReacTime]."\r\n");
		fwrite($fo, $_POST[sec3Correct]."\r\n");
		fwrite($fo, $_POST[Q1].",".$_POST[Q2].",".$_POST[Q3].",".$_POST[Q4].",".$_POST[Q5].",".$_POST[Q6].",".$_POST[Q7].",".$_POST[Q8].",".$_POST[Q9].",".$_POST[Q10].",".$_POST[Q11].",".$_POST[Q12].",".$_POST[Q13].",".$_POST[Q14].",".$_POST[Q15].",".$_POST[Q16].",".$_POST[Q17].",".$_POST[Q18]."\r\n");
		fclose($fo);
		$fo = fopen("summary.txt", "a");
		fwrite($fo, $n.",".$_POST[sec1AveReacTime].",".$_POST[sec2AveReacTime].",".$_POST[sec3AveReacTime].",".$_POST[sec4AveReacTime].",".$prefer.",".$ave."\r\n");
		fclose($fo);
	}
/*	for($i = 1; $i <= 24; $i++)
	{
		if($_POST[sequence] == 0)
		{
			fwrite($fo, $n." ".$i." ");
			if($_POST[sec3sequence[$i-1]] <= 3)
				fwrite($fo, "1 0".$_POST[sec3ReacTime[sec3sequence[$i-1]]]." ".$_POST[sec3Correct[sec3sequence[$i-1]]]);
			else if($_POST[sec3sequence[$i-1]] <= 7 && $_POST[sec3sequence[$i-1]] > 3)
				fwrite($fo, "2 0".$_POST[sec3ReacTime[sec3sequence[$i-1]]]." ".$_POST[sec3Correct[sec3sequence[$i-1]]]);
			else if($_POST[sec3sequence[$i-1]] <= 15 && $_POST[sec3sequence[$i-1]] > 7)
				fwrite($fo, "0 1".$_POST[sec3ReacTime[sec3sequence[$i-1]]]." ".$_POST[sec3Correct[sec3sequence[$i-1]]]);
			else
				fwrite($fo, "0 2".$_POST[sec3ReacTime[sec3sequence[$i-1]]]." ".$_POST[sec3Correct[sec3sequence[$i-1]]]);
		}
		else
		{
			fwrite($fo, $n." ".$i." ");
			if($_POST[sec4sequence[$i-1]] <= 3)
				fwrite($fo, "1 0".$_POST[sec4ReacTime[sec4sequence[$i-1]]]." ".$_POST[sec4Correct[sec4sequence[$i-1]]]);
			else if($_POST[sec4sequence[$i-1]] <= 7 && $_POST[sec4sequence[$i-1]] > 3)
				fwrite($fo, "2 0".$_POST[sec4ReacTime[sec4sequence[$i-1]]]." ".$_POST[sec4Correct[sec4sequence[$i-1]]]);
			else if($_POST[sec4sequence[$i-1]] <= 15 && $_POST[sec4sequence[$i-1]] > 7)
				fwrite($fo, "0 1".$_POST[sec4ReacTime[sec4sequence[$i-1]]]." ".$_POST[sec4Correct[sec4sequence[$i-1]]]);
			else
				fwrite($fo, "0 2".$_POST[sec4ReacTime[sec4sequence[$i-1]]]." ".$_POST[sec4Correct[sec4sequence[$i-1]]]);
		}
		fwrite($fo, "\r\n");
	}
	for($i = 25; $i <= 48; $i++)
	{
		if($_POST[sequence] == 1)
		{
			fwrite($fo, $n." ".$i." ");
			if($_POST[sec3sequence[$i-25]] <= 3)
				fwrite($fo, "1 0".$_POST[sec3ReacTime[sec3sequence[$i-25]]]." ".$_POST[sec3Correct[sec3sequence[$i-25]]]);
			else if($_POST[sec3sequence[$i-25]] <= 7 && $_POST[sec3sequence[$i-25]] > 3)
				fwrite($fo, "2 0".$_POST[sec3ReacTime[sec3sequence[$i-25]]]." ".$_POST[sec3Correct[sec3sequence[$i-25]]]);
			else if($_POST[sec3sequence[$i-25]] <= 15 && $_POST[sec3sequence[$i-25]] > 7)
				fwrite($fo, "0 1".$_POST[sec3ReacTime[sec3sequence[$i-25]]]." ".$_POST[sec3Correct[sec3sequence[$i-25]]]);
			else
				fwrite($fo, "0 2".$_POST[sec3ReacTime[sec3sequence[$i-25]]]." ".$_POST[sec3Correct[sec3sequence[$i-25]]]);
		}
		else
		{
			fwrite($fo, $n." ".$i." ");
			if($_POST[sec4sequence[$i-25]] <= 3)
				fwrite($fo, "1 0".$_POST[sec4ReacTime[sec4sequence[$i-25]]]." ".$_POST[sec4Correct[sec4sequence[$i-25]]]);
			else if($_POST[sec4sequence[$i-25]] <= 7 && $_POST[sec4sequence[$i-25]] > 3)
				fwrite($fo, "2 0".$_POST[sec4ReacTime[sec4sequence[$i-25]]]." ".$_POST[sec4Correct[sec4sequence[$i-25]]]);
			else if($_POST[sec4sequence[$i-25]] <= 15 && $_POST[sec4sequence[$i-25]] > 7)
				fwrite($fo, "0 1".$_POST[sec4ReacTime[sec4sequence[$i-25]]]." ".$_POST[sec4Correct[sec4sequence[$i-25]]]);
			else
				fwrite($fo, "0 2".$_POST[sec4ReacTime[sec4sequence[$i-25]]]." ".$_POST[sec4Correct[sec4sequence[$i-25]]]);
		}
		fwrite($fo, "\r\n");
	}*/
	/*$fo = fopen("result.txt","a");
	for($i = 1; $i <= 2; $i++)
	{
		fwrite($fo,"Q".$i." : ".$_POST["question$i"]." ");
	}
	fwrite($fo, "\r\nReact Time: ".$_POST[reacTime]);
	fwrite($fo, "\r\nCorrect or not: ".$_POST[correct]."\r\n");
	fclose($fo);*/
?>

</body>