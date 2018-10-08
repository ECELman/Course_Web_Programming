<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>加密結果</title>
	</head>
	<body>
		<?php
		    //來去接取使用者在user_input.php表單裡頭所輸入的資料
			$user_input=$_POST["content"];
			$move_right=$_POST["right_move"];
			$move_left=$_POST["left_move"];
			
			//來去判斷是否使用者輸入的內容以及位移數是否是正確的
			/*假如其輸入的內容是空的，或者是其輸入的內容包含了英文字母
			或空格以外的字元，則將其網頁導向到content_error.php這個網頁*/
			if($user_input==NULL || !preg_match("/^[A-Za-z\s]+$/",$user_input)) 
			{
				header("Location: content_error.php");
			}
			else
			{
				/*假如其位移數的輸入包含了下列這幾種情況，則將網頁導向到move_error.php這個網頁:
				  (1)左移位元數以及右移位移元數都沒輸入任何的值
				  (2)只輸右移位元數這個欄位，可是其移位數超過了範圍
				  (3)只輸左移位元數這個欄位，可是其移位數超過了範圍
				  (4)左移位元數以及右移位移元數兩者都輸入了值進來*/
				if(($move_right==NULL && $move_left==NULL)
				    || ($move_right!=NULL && $move_left==NULL) && ($move_right<1 || $move_right>25) 
		            || ($move_right==NULL && $move_left!=NULL) && ($move_left<1 || $move_left>25)
					|| ($move_right!=NULL && $move_left!=NULL))
				{
					header("Location: move_error.php");
				}
			}
			
			echo "其加密結果為 : ";
			
			//依使用者是選擇左移還是右移來去決定執行左移這段程式碼還是右移這段程式碼
			
			//下列程式碼是針對右移加密
			if($move_right!=NULL && $move_left==NULL)
			{
				//先判斷使用者輸入進來的內容有多長
				for($i=0;$i<strlen($user_input);$i++)
				{
					//假如其字元是在大寫A到大寫Z這個範圍的話就執行下列程式碼
					if($user_input[$i]>="A" && $user_input[$i]<="Z")
					{
						//假如其字元右移之後超過了大寫Z這個字元的話，則執行下列程式碼
						if((ord($user_input[$i])+$move_right)>ord("Z"))
						{
							echo chr(ord($user_input[$i])+$move_right-26);
						}
						else
						{
							//假如其字元右移之後沒超過大寫Z這個字元的話，則執行下列程式碼
							echo chr(ord($user_input[$i])+$move_right);
						}
					}
					else
					{	
						//假如其字元是在小寫a到小寫z這個範圍的話就執行下列程式碼
						if($user_input[$i]>="a" && $user_input[$i]<="z")
						{
							//假如其字元右移之後超過了小寫z這個字元的話，則執行下列程式碼
							if((ord($user_input[$i])+$move_right)>ord("z"))
							{
								echo chr(ord($user_input[$i])+$move_right-26);
							}
							else
							{
								//假如其字元右移之後沒超過小寫z這個字元的話，則執行下列程式碼
								echo chr(ord($user_input[$i])+$move_right);
							}
						}
					}
					//假如遇到空格字元的話，則直接輸出出來
					if($user_input[$i]==" ") echo " ";
				}
			}
			
			//下列程式碼是針對左移加密
			if($move_right==NULL && $move_left!=NULL)
			{
				//先判斷使用者輸入進來的內容有多長
				for($i=0;$i<strlen($user_input);$i++)
				{
					//假如其字元是在大寫A到大寫Z這個範圍的話就執行下列程式碼
					if($user_input[$i]>="A" && $user_input[$i]<="Z")
					{
						//假如其字元左移之後遠離了大寫A這個字元的話，則執行下列程式碼
						if((ord($user_input[$i])-$move_left)<ord("A"))
						{
							echo chr(ord($user_input[$i])+26-$move_left);
						}
						else
						{
							//假如其字元左移之後沒遠離大寫A這個字元的話，則執行下列程式碼
							echo chr(ord($user_input[$i])-$move_left);
						}
					}
					else
					{	
						//假如其字元是在小寫a到小寫z這個範圍的話就執行下列程式碼
						if($user_input[$i]>="a" && $user_input[$i]<="z")
						{
							//假如其字元左移之後遠離了小寫a這個字元的話，則執行下列程式碼
							if((ord($user_input[$i])-$move_left)<ord("a"))
							{
								echo chr(ord($user_input[$i])+26-$move_left);
							}
							else
							{
								//假如其字元左移之後沒遠離小寫a這個字元的話，則執行下列程式碼
								echo chr(ord($user_input[$i])-$move_left);
							}
						}
					}
					//假如遇到空格字元的話，則直接輸出出來
					if($user_input[$i]==" ") echo " ";
				}
			}
		?>
	</body>
</html>