<html> <head> <title> DateTime</title></head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
			<table>
				<tr>
					<td>Your name: </td>
					<td colspan ="3"><input type="text" size="16" maxlength="20" name="name"></td>
				</tr>
				<tr> 
					<td>Date: </td>
					<td><select name = "day">
					<?php 
					   for ($i=0; $i<=31; $i++) {
					       print ("<option>$i</option>");
					   }
					?>
					</select>
					</td>
					<td><select name = "month">
					<?php 
					   for ($i=0; $i<=12; $i++) {
					       print ("<option>$i</option>");
					   }
					?>
					</select>
					</td>
					<td><select name = "year">
					<?php 
					   for ($i=1995; $i<=2030; $i++) {
					       print ("<option>$i</option>");
					   }
					?>
					</select>
					</td>
				</tr>
				<tr> 
					<td>Time: </td>
					<td><select name = "hour">
					<?php 
					   for ($i=0; $i<=23; $i++) {
					       print ("<option>$i</option>");
					   }
					?>
					</select>
					</td>
					<td><select name = "min">
					<?php 
					   for ($i=0; $i<=59; $i++) {
					       print ("<option>$i</option>");
					   }
					?>
					</select>
					</td>
					<td><select name = "sec">
					<?php 
					   for ($i=0; $i<=59; $i++) {
					       print ("<option>$i</option>");
					   }
					?>
					</select>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td align="right"> <input type="submit" value="SUBMIT"</td>
					<td align="left"> <input type="reset" value="RESET"</td>
				</tr>
			</table>
			<?php 
			if (array_key_exists("name", $_GET)) {
			    $name = $_GET["name"];
			    $day = $_GET["day"];
			    $month = $_GET["month"];
			    $year = $_GET["year"];
			    $hour = $_GET["hour"];
			    $min = $_GET["min"];
			    $sec = $_GET["sec"];
			    
			    print("<br> Hi $name");
			    print("<br> You have choose to have an appointment on $hour:$min:$sec, $day/$month/$year");
			    print("<br><br>More infomation<br><br>In 12 hours, the time and date is ");
			    if ($hour <= 12) print ("$hour:$min:$sec AM, $day/$month/$year"); 
			    else {
			        $hour2 =$hour - 12;
			        print ("$hour2:$min:$sec PM, $day/$month/$year");
			    }
			    $ans =0;
			    if ($year%4==0) {
			        $ans = 1;
			        if(($year%100==0)&&($year%400!=0)){ $ans = 0;}
			    }
			    if ($month ==2) {
			       if ($ans ==0) print ("This month has 28 days"); else print("This month has 29 days");
			    } else if (($month<8)&&($month%2==1)||(($month>7)&&($month%2==0))) print ("This month has 31 days"); else print("This month has 30 days");
			}
			?>
		</form>
	</body>
</html>