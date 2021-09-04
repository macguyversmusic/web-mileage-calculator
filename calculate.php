 
<?

include("/home/skinfo/public_html/journey/settings.php"); 

//setting variables

$show_all="select * from journey order by date";
$sum_miles="select sum(distance) from journey";
 
//connecting
 
          mysql_connect ("localhost","$user","$pass");
		  
//selct database to use		  
		  
         @mysql_select_db($dbase) or die("oopsi poopsy pooo");

//run query

		  $result=mysql_query($show_all);
		  $result1=mysql_query($sum_miles);
		  
//find out ow many rows we are dealing with		  
		  
          $number_of_rows=mysql_numrows($result);
		  
 //close the database as we are finished for now  
       
		  mysql_close();
		  
  //start the pretty drawing of the page to show the data		  
      
	    //this bit puts the header on the page starting tables
		
		 echo "<html>";
		 echo "<center>";
		 echo "<table width=\"75%\" border=\"2\" cellspacing=\"3\" cellpadding=\"3\">";
		 echo "<tr>";
         echo "<td><center><b>Mileage from &nbsp;&nbsp;&nbsp;.....&nbsp;/&nbsp;.....&nbsp;/&nbsp;..... &nbsp;&nbsp;&nbsp;TO &nbsp;&nbsp;&nbsp;.....&nbsp;/&nbsp;.....&nbsp;/&nbsp;.....&nbsp;&nbsp;&nbsp; </b></center></td>";
         echo "</tr>";
		 echo "</table>";
		 echo "</center>";
		 echo "<BR>";
		 
		//put the main display table headings in
		
		 echo "<center>";
		 echo "<table width=\"75%\" border=\"2\" cellspacing=\"3\" cellpadding=\"3\">";
         echo "<tr>";
	     echo "<td><center><b>Distance in miles</b></center></td>";
         echo "<td><center><b>Date</b></center></td>";
         echo "<td><center><B>Journey</B></center></td>";
         echo "</tr>";	 
	 
		//here we start the loop to output the data
		 
         $i=0;
		 
         while ($i < $number_of_rows) {
		 
		 					  $distance=mysql_result($result,$i,'distance');
                              $date=mysql_result($result,$i,"date");
                              $journey=mysql_result($result,$i,"journey");
                              $journeyid=mysql_result($result,$i,"journeyid");
							  
                             //here we will output the results in tabular format 
							 
							 echo "<tr>";
							 echo "<td><center>$distance</center></td>";
							 echo "<td><center>$date</center></td>";
							 echo "<td><center>$journey</center></td>";
							
							 echo "</tr>";
													                               
		//now make i = i + 1 then return
		
         $i++;
                                       }

		//now that all the rows are displayed we close the table tags
		
		echo "</table>";
		
		//add some buttons to do stuff like go back, print, clear
		
		echo "<BR><BR><a href=\"clear.php\"><input type=\"Submit\" value=\"Clear Mileage\"></a><BR>";
		echo "<BR><a href=\"journey.php\"><input type=\"Submit\" value=\"Add Journey\"></a><BR>";

		//end the html
        $total_mileage = mysql_result($result1,0,'sum(distance)');
		echo "<BR><BR><center>Total Mileage = $total_mileage<BR><BR>";
		echo "Total Due @32p per mile = ".($total_mileage*0.32);
		//echo "<br><BR>Total Due @40p per mile = ".($total_mileage*0.4);
                echo"</html>";
?>