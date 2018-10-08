<!doctype html>
<html>

    <head>
	
       <meta charset="utf-8">
       <title>Homework 1</title>
	   
    </head>
	
	<body>
	
	   <?php
		  
		  //開創一個$score陣列，並且存放十位同學的成績
		  $score = array(85,60,54,91,99,77,75.5,14,30,59.9);
		  
		  echo "成績列表(排序前):<br><br>";
		  
		  //將每位同學的成績輸出出來
		  for($count = 0 ; $count < 10 ; $count++) 
		  {
			  echo "第 ".($count+1)." 位同學的分數 : ".$score[$count]." 分<br>";
		  }
		  
		  /*宣告一個$score_temp陣列來去將放在$score中的數值複製給$score_temp陣列，
		    目的就是為了避免其原先的陣列因為排序過後，整個順序都變得不同，這樣到時
			才能區分出其同學是排名第幾*/
		  $score_temp = $score;
		  
		  //利用 Bubble Sort 將成績由高到低依序排序下來
		  for($count1 = 0; $count1 < $count-1 ; $count1++)
		  {
			  for($count2=0 ; $count2 < $count-1-$count1 ; $count2++)
			  {
				  if($score_temp[$count2] < $score_temp[$count2+1])
				  {
					  $temp = $score_temp[$count2];
					  $score_temp[$count2] = $score_temp[$count2+1];
					  $score_temp[$count2+1] = $temp;
				  }
			  }
		  }
		  
		  echo "<br>成績列表(排序後):<br><br>";
		  
		  //輸出每位同學的成績分別是排名在第幾
		  for($count = 0 ; $count < 10 ; $count++) 
		  {
			  echo "第 ".($count+1)." 名是同學 ";
			  
			  for($search = 0 ; $search < 10 ; $search++)
			  {
				  //尋找其分數是原來第幾位同學的分數
				  if($score_temp[$count] == $score[$search])
				  {
					  $remember = $search;
					  break;//假如找到一樣的分數之後，直接跳出迴圈，不在去尋找
				  }
			  }
			  
			  echo ($search+1)." : ".$score_temp[$count]." 分<br>";
		  }
		  
		  //輸出最高分與最低分
		  echo "<br>總成績結果 : <br><br>最高分 : ".$score_temp[0]." 分<br>最低分 : ".$score_temp[9]." 分<br>";
		  
	   ?>
	   
	</body>
</html>