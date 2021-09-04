<?

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
