<?
////THIS FORM SHOULS BE EASY ENOUGH TO CONVERT  THE SUBMIT VALUES OF THESE BUTTONS WILL CALL FUNCTIONS IN THE NEW SMART CONTRACT BASED VERSION
echo "<html>";
echo "<center><form action=\"journeyadd.php\" method=\"post\">";
echo "distance: <input type=\"text\" name=\"distance\"><br>";
echo "date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type=\"text\" name=\"date\"><br>";
echo "journey:&nbsp; <input type=\"text\" name=\"journey\"><br>";
echo "<BR><input type=\"Submit\" value=\"Add Journey\"><BR>";
echo "</form>";
echo "<a href=\"calculate.php\"><input type=\"Submit\" value=\"Calculate\"></a><BR><BR>";
echo "<a href=\"clear.php\"><input type=\"Submit\" value=\"Clear Mileage\"></a>";
echo "</center>";
echo "</html>";

   ?>
