<?php
include("header.php");
#echo "<br>";

if ($_GET){
	#include($_GET['page'].".php");
	echo "<br><br><br><br>
 	<div class=jumbotron>";
	include($_GET['page']);
	echo "</div>";
}else {

?>

<br><br><br><br>
 <div class="jumbotron">
<br>
<pre>
<h4>
 /$$$$$$$  /$$                     /$$      
| $$__  $$| $$                    | $$      
| $$  \ $$| $$ /$$   /$$  /$$$$$$$| $$   /$$
| $$$$$$$/| $$| $$  | $$ /$$_____/| $$  /$$/
| $$____/ | $$| $$  | $$| $$      | $$$$$$/ 
| $$      | $$| $$  | $$| $$      | $$_  $$ 
| $$      | $$|  $$$$$$/|  $$$$$$$| $$ \  $$
|__/      |__/ \______/  \_______/|__/  \__/
</h4>
</pre>                                            


<br>
    </div>

<?php
}
echo "<br>";
include("footer.php");

?>
