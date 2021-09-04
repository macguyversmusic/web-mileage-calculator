<?  
///SO THIS LOOKS LIKE WHERE WE CREATE THE MAPPING OF THE PERSON TO THE VALUES

//ADDRESS BECOMES THE OWNER SO NO NEED FOR LOGIN
//ALL THESE CALLS BELOW ARE SIMPLY CONNECTING TO PLACE DATA AFTER IT WAS COLLECTED.  THIS PAGE IS OBSOLETE AS THE DATA WILL BE PASSED DIRECTLY
//WITHIN THE FUNCTIONS TO AND FROM THE CONTRACT

include("/home/skinfo/public_html/journey/settings.php"); 

//setting variables
 //THESE WILL BE USEFUL IN MAPPING THE REST OF IT IS JUNK

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
