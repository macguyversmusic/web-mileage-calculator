<?
//THIS CAN PROBABLY BE DONE WITH ONE LINE OF CODE LIKE (ADDRESS[MAPPINGNAME].BANKEDMILES = 0)
// EVEN A FUNCTION ON THE SAME PAGE.  I FEEL LIKE THIS CAN ALL BE ON ONE SINGLE PAGE AND HAVE ABOUT 80% CODE STRIPPED.

include("/home/skinfo/public_html/journey/settings.php"); 

//setting variables

 $clear_database = "delete from journey where 1";
 
 //connecting
 
          mysql_connect ("localhost","$user","$pass");
		  
//selct database to use		  
		  
         @mysql_select_db($dbase) or die( "oopsi poopsy pooo");

//run query

          mysql_query($clear_database); 
		  
//close database

   mysql_close();
   
   $URL="http://journey.ski-infotech.co.uk/calculate.php";

   header ("Location: $URL");

?>
