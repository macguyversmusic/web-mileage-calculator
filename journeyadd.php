<?  

include("/home/skinfo/public_html/journey/settings.php"); 

//setting variables
 
 $distance      =$_POST['distance'];
 $date          =$_POST['date'];
 $journey       =$_POST['journey'];
 $insert_record = "INSERT INTO journey VALUES ('$distance','$date','$journey','')";
 
//connecting now

  mysql_connect ("localhost","$user","$pass");
  
//selecting the database to use
  
  @mysql_select_db($dbase) or die( "oopsi poopsy pooo");
  
//run the query  

  mysql_query($insert_record);  

//close database

  mysql_close();
   
//send the viewer back to the form page

$URL="http://journey.ski-infotech.co.uk/journey.php";

header ("Location: $URL");

?>