<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<form id="form1" name="form1" method="post" action="final.php">
  <input type="hidden" name="gender" id="gender" value="<?php echo $_POST[gender] ?>">
  <input type="hidden" name="age" id="age" value="<?php echo $_POST[age] ?>">
  <input type="hidden" name="education" id="education" value="<?php echo $_POST[education] ?>">
  <input type="hidden" name="party" id="party" value="<?php echo $_POST[party] ?>">
  <input type="hidden" name="sec4Correct" id="sec4Correct" value="<?php echo $_POST[sec4Correct] ?>">
  <input type="hidden" name="sec4ReacTime" id="sec4ReacTime" value="<?php echo $_POST[sec4ReacTime] ?>">
  <input type="hidden" name="sec4AveReacTime" id="sec4AveReacTime" value="<?php echo $_POST[sec4AveReacTime] ?>">
  <input type="hidden" id="sec4sequence" name="sec4sequence" value="<?php echo $_POST[sec4sequence] ?>">
  <input type="hidden" name="sec3Correct" id="sec3Correct" value="<?php echo $_POST[sec3Correct] ?>">
  <input type="hidden" name="sec3ReacTime" id="sec3ReacTime" value="<?php echo $_POST[sec3ReacTime] ?>">
  <input type="hidden" name="sec3AveReacTime" id="sec3AveReacTime" value="<?php echo $_POST[sec3AveReacTime] ?>">
  <input type="hidden" id="sec3sequence" name="sec3sequence" value="<?php echo $_POST[sec3sequence] ?>">
  <input type="hidden" name="sec2ReacTime" id="sec2ReacTime" value="<?php echo $_POST[sec2ReacTime] ?>">
  <input type="hidden" name="sec2AveReacTime" id="sec2AveReacTime" value="<?php echo $_POST[sec2AveReacTime] ?>">
  <input type="hidden" id="sec1ReacTime" name="sec1ReacTime" value= "<?php echo $_POST[sec1ReacTime] ?>"/>
  <input type="hidden" id="sec1AveReacTime" name="sec1AveReacTime" value= "<?php echo $_POST[sec1AveReacTime] ?>"/>

  <input type="hidden" id="sequence" name="sequence" value="<?php echo $_POST[sequence] ?>">

	<p>1. 我比較喜歡複雜而不喜歡簡單的問題：
    <input type="radio" style="width:20px;height:20px;" id="Q1" name="Q1" value="1" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q1" name="Q1" value="2" />不同意
    <input type="radio" style="width:20px;height:20px;" id="Q1" name="Q1" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" id="Q1" name="Q1" value="4" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q1" name="Q1" value="5" />非常同意  
  </p>
  <p>2. 我願意負責解決要花很多腦筋的事：
    <input type="radio" style="width:20px;height:20px;" id="Q2" name="Q2" value="1" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q2" name="Q2" value="2" />不同意
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q2" name="Q2" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" id="Q2" name="Q2" value="4" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q2" name="Q2" value="5" />非常同意  
  </p>
  <p>3. 我不以思考為樂：
    <input type="radio" style="width:20px;height:20px;" id="Q3" name="Q3" value="5" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q3" name="Q3" value="4" />不同意
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q3" name="Q3" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q3" name="Q3" value="2" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q3" name="Q3" value="1" />非常同意  
  </p>
  <p>4. 我比較喜歡去做不用思考的事,而不願去做需要思考的事：
    <input type="radio" style="width:20px;height:20px;" id="Q4" name="Q4" value="5" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q4" name="Q4" value="4" />不同意
    <input type="radio" style="width:20px;height:20px;" id="Q4" name="Q4" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" id="Q4" name="Q4" value="2" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q4" name="Q4" value="1" />非常同意  
  </p>
  <p>5. 我對那些要花很多心思去想事情的情境,避之唯恐不及：
    <input type="radio" style="width:20px;height:20px;" id="Q5" name="Q5" value="5" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q5" name="Q5" value="4" />不同意
    <input type="radio" style="width:20px;height:20px;" id="Q5" name="Q5" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q5" name="Q5" value="2" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q5" name="Q5" value="1" />非常同意  
  </p>
  <p>6. 我從深思和長考中得到滿足：
    <input type="radio" style="width:20px;height:20px;" id="Q6" name="Q6" value="1" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q6" name="Q6" value="2" />不同意
    <input type="radio" style="width:20px;height:20px;" id="Q6" name="Q6" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" id="Q6" name="Q6" value="4" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q6" name="Q6" value="5" />非常同意  
  </p>
  <p>7. 我不費心去多想：
    <input type="radio" style="width:20px;height:20px;" id="Q7" name="Q7" value="5" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q7" name="Q7" value="4" />不同意
    <input type="radio" style="width:20px;height:20px;" id="Q7" name="Q7" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q7" name="Q7" value="2" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q7" name="Q7" value="1" />非常同意  
  </p>
  <p>8. 與其去想一些長期計畫,我寧願想一些小的日常計畫：
    <input type="radio" style="width:20px;height:20px;" id="Q8" name="Q8" value="5" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q8" name="Q8" value="4" />不同意
    <input type="radio" style="width:20px;height:20px;" id="Q8" name="Q8" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" id="Q8" name="Q8" value="2" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q8" name="Q8" value="1" />非常同意  
  </p>
  <p>9. 我喜歡那些一旦學會就不用再想的工作：
    <input type="radio" style="width:20px;height:20px;" id="Q9" name="Q9" value="5" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q9" name="Q9" value="4" />不同意
    <input type="radio" style="width:20px;height:20px;" id="Q9" name="Q9" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" id="Q9" name="Q9" value="2" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q9" name="Q9" value="1" />非常同意  
  </p>
  <p>10. 靠著思考去往上爬的想法正合我意：
    <input type="radio" style="width:20px;height:20px;" id="Q10" name="Q10" value="1" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q10" name="Q10" value="2" />不同意
    <input type="radio" style="width:20px;height:20px;" id="Q10" name="Q10" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" id="Q10" name="Q10" value="4" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q10" name="Q10" value="5" />非常同意  
  </p>
  <p>11. 我喜歡那些需要想出新的方法來解決問題的工作：
    <input type="radio" style="width:20px;height:20px;" id="Q11" name="Q11" value="1" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q11" name="Q11" value="2" />不同意
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q11" name="Q11" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q11" name="Q11" value="4" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q11" name="Q11" value="5" />非常同意  
  </p>
  <p>12. 學習新的思考方式沒有什麼意思：
    <input type="radio" style="width:20px;height:20px;" id="Q12" name="Q12" value="5" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q12" name="Q12" value="4" />不同意
    <input type="radio" style="width:20px;height:20px;" id="Q12" name="Q12" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" id="Q12" name="Q12" value="2" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q12" name="Q12" value="1" />非常同意  
  </p>
  <p>13. 我願我這一生充滿著我必須解決的難題：
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q13" name="Q13" value="1" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q13" name="Q13" value="2" />不同意
    <input type="radio" style="width:20px;height:20px;" id="Q13" name="Q13" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" id="Q13" name="Q13" value="4" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q13" name="Q13" value="5" />非常同意  
  </p>
  <p>14. 我喜歡抽象地思考：
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q14" name="Q14" value="1" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q14" name="Q14" value="2" />不同意
    <input type="radio" style="width:20px;height:20px;" id="Q14" name="Q14" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q14" name="Q14" value="4" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q14" name="Q14" value="5" />非常同意  
  </p>
  <p>15. 我喜歡需要動腦筋且困難的重要工作,而不喜歡還算重要但不需多想的工作：
    <input type="radio" style="width:20px;height:20px;" id="Q15" name="Q15" value="1" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q15" name="Q15" value="2" />不同意
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q15" name="Q15" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" id="Q15" name="Q15" value="4" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q15" name="Q15" value="5" />非常同意  
  </p>
  <p>16. 當我完成一件很費心的工作後,我感到的是解脫而不是滿足：
    <input type="radio" style="width:20px;height:20px;" id="Q16" name="Q16" value="5" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q16" name="Q16" value="4" />不同意
    <input type="radio" style="width:20px;height:20px;" id="Q16" name="Q16" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q16" name="Q16" value="2" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q16" name="Q16" value="1" />非常同意  
  </p>
  <p>17. 我只在乎工作是否完成,我不在意它是如何或為何做成的：
    <input type="radio" style="width:20px;height:20px;" id="Q17" name="Q17" value="5" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q17" name="Q17" value="4" />不同意
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q17" name="Q17" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q17" name="Q17" value="2" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q17" name="Q17" value="1" />非常同意  
  </p>
  <p>18. 即使一些事務跟我個人沒有切身關係,我常會去對它們深思熟慮一番：
    <input type="radio" style="width:20px;height:20px;" id="Q18" name="Q18" value="1" checked />非常不同意 
    <input type="radio" style="width:20px;height:20px;" id="Q18" name="Q18" value="2" />不同意
    <input type="radio" style="width:20px;height:20px;" id="Q18" name="Q18" value="3" />不確定
    <input type="radio" style="width:20px;height:20px;" style="width:20px;height:20px;" id="Q18" name="Q18" value="4" />同意
    <input type="radio" style="width:20px;height:20px;" id="Q18" name="Q18" value="5" />非常同意  
  </p>
  </p>
  	<p>
  		<input type="submit" name="button" id="button" value="送出" />
  	</p>
 </form>
 </body>