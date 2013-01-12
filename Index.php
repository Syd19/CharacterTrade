<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Char trade beta</title>

</head>

<body>

				<?php

$host = "";
$user = "";
$pass = "";
$chardb = "";
$authdb = "";				

//This was all created by Sydns12 so please dont remove the credits.

                 mysql_connect($host, $user, $pass) or die("Error 1-".mysql_error());
                 mysql_select_db($chardb)or die("Error 2-".mysql_error());

                 $chars_list = mysql_query("SELECT  name,level,armory,class,description FROM submited_chars")or die("Error 2-".mysql_error());
                
echo "<font size='4' color='gray'>  Character Trader System Beta</font><br><hr style='margin-left:-50px;' size='1' width='230' color='gray'><br>
                            <font size='2' color='gray'>Name &nbsp&nbsp Level  &nbsp&nbsp Class &nbsp&nbsp Description<br>";
                           while($chars_row = mysql_fetch_array($chars_list)){

                            echo " <font size='2' color='gray'><hr style='margin-left:-50px;' size='1' width='230' color='gray'>".$chars_row['name']." &nbsp&nbsp ".$chars_row['level']."  &nbsp&nbsp&nbsp&nbsp  ".$chars_row['class']."  
                          &nbsp&nbsp  ".$chars_row['description']."<br></font>";
                                   
                           }

mysql_close();
				?>
				
				
				
	<?php
	$username = $_SESSION['username']; //Replace it for the session you have on your login system.
	 mysql_connect($host, $user, $pass) or die("Error 3-".mysql_error());
	mysql_select_db($authdb)or die("Error 2-".mysql_error());
	
	$select1 = mysql_query("SELECT * FROM account WHERE username = '$username'")or die("Error 4-".mysql_error());
	$fetch1 = mysql_fetch_array($select1);
	$id = mysql_real_escape_string($fetch1['id']);

mysql_close();
?>
<form method="POST" action="">
<br><select name="my_chars">
<?php
 mysql_connect($host, $user, $pass) or die("Error 5-".mysql_error());
	
mysql_select_db($chardb)or die("Error 6-".mysql_error());
	
$select2 = mysql_query("SELECT * FROM characters WHERE account = '$id' ")or die("Error 7-".mysql_error());
	
	while($row1=mysql_fetch_array($select2)){
	
	echo " <br><option align='center'>".$row1['name']."</option>";
	
	}
	
	

	?>
	</form>
	</select>
	
	<form method="POST" action="">
<select name="submited_chars" value="submited">
<?php

	
$select3= mysql_query("SELECT name FROM submited_chars")or die("Error 8-".mysql_error());
	
	while($row2=mysql_fetch_array($select3)){
	
	echo "<option align='center'>".$row2['name']."</option>";
	
	}
	

	
	?>
	
	</select>
	
	<button name="propose">Propose</button>			
				
		
</form>		
		<?php
		if(isset($_POST['propose'])){
		
		$my_chars = $_POST['my_chars'];
                $submited_chars= $_POST['submited_chars'];
                
                $select_query = mysql_query("SELECT * FROM submited_chars WHERE name='$submited_chars'")or die("Error 9-".mysql_error());
                $sql_fetch = mysql_fetch_array($select_query);
                $s_char_id = mysql_real_escape_string($sql_fetch['s_id']);
                $chars_query = mysql_query("INSERT INTO char_proposal(p_char,s_char,p_id,s_id) VALUES('$my_chars', '$submited_chars', '$id', '$s_char_id')")or die("Error 10-".mysql_error());

                echo "Your proposal was sucessfully sended";
                 
                
		
		
		}
?>
<?php

print "<form method='POST'>";
print  "<select name='add_char'>";



	
$select4 = mysql_query("SELECT * FROM characters WHERE account = '$id' ")or die("Error 10-".mysql_error());
	
	while($row3=mysql_fetch_array($select4)){
	
	
	
	
	echo " <br><option align='center'>".$row3['name']."</option>";
	
	}
	
	

	
	
	
	print "</select>";
	
	
	print "<input type='text' name='desc' placeholder='Description'>";
		
		
print "<button name='sent2'>Send</button>";
print  "</form>";
	?>
	<?php
if(isset($_POST['sent2'])){
		




	$description = $_POST['desc'];
                $add_chars= $_POST['add_char'];
                $username = mysql_real_escape_string($_SESSION['username']);


$dada3 = mysql_query("SELECT * FROM submited_chars WHERE s_id = '$id'")or die ("Error 11-".mysql_error());
$rowe2 = mysql_fetch_assoc($dada3);
$i = $rowe2['s_id'];

if($i == $id){
die("You already sent a character.");
}else{



$dada = mysql_query("SELECT * FROM characters WHERE name = '$add_chars'")or die ("Error 12-".mysql_error());
$rowe = mysql_fetch_array($dada);
$l = mysql_real_escape_string($rowe['level']);



$dada2 = mysql_query("SELECT * FROM characters WHERE name = '$add_chars'")or die ("Error 13-".mysql_error());
$rowe2 = mysql_fetch_array($dada2);
$h = mysql_real_escape_string($rowe2['class']);
$class = "";
                
if ($rowe2['class'] == 1){

$class = "Warrior";

}

if ($rowe2['class'] == 2){

$class = "Pala";

}

if ($rowe2['class'] == 3){

$class = "Warrior";

}

if ($rowe2['class'] == 4){

$class = "Hunter";

}

if ($rowe2['class'] == 5){

$class = "Warrior";

}

if ($rowe2['class'] == 8){

$class = "Rogue";

}

if ($rowe2['class'] == 11){

$class = "Druid";

}

if ($rowe2['class'] == 36){

$class = "DeathKnight";

}



if ($rowe2['class'] == 256){

$class = "Warlock";

}


if ($rowe2['class'] == 128){

$class = "Mage";

}                
               

                 
                

                $send_db = mysql_query("INSERT INTO submited_chars(name,level,class,description,s_id) VALUES('$add_chars', '$l', '$class', '$description', '$id')")or die("Error 14-".mysql_error());

                echo "Your character was sucessfully sended";
                 
                
	
		}
		
		
mysql_close();	
	?>	
	
<form method="POST">

<br><font size="3" color="Gray">Char proposes :</font> 
<select name="proposes">
<?php

 mysql_connect($host, $user, $pass) or die("Error 15-".mysql_error());
	mysql_select_db($authdb)or die("Error 2-".mysql_error());
	
	$select6 = mysql_query("SELECT * FROM account WHERE username = '$username'")or die("Error 16-".mysql_error());
	$fetch6 = mysql_fetch_array($select6);
	$id2 = mysql_real_escape_string($fetch6['id']);

mysql_close();

mysql_connect($host, $user, $pass) or die("Error 17-".mysql_error());
	
mysql_select_db($chardb)or die("Error 18-".mysql_error());



$select5 = mysql_query("SELECT * FROM char_proposal WHERE s_id ='$id2'")or die("Error 19-".mysql_error());
	
	while($row9=mysql_fetch_array($select5)){
	
	
	
	
	echo " <br><option align='center'>".$row9['p_char']."</option>";
	
	}
	
	

	
	?>



	</select>
<button name="accept">Accept</button>
</form>	

<?php
if(isset($_POST['accept'])){

$proposed_char = mysql_real_escape_string($_POST['proposes']); 

$select_t1 = mysql_query("SELECT * FROM char_proposal WHERE p_char = '$proposed_char' and s_id ='$id'")or die("Error 20-".mysql_error());
$select_fetch2 = mysql_fetch_array($select_t1);
$account_id = $select_fetch2['p_id']; 



$select_t = mysql_query("SELECT * FROM submited_chars WHERE s_id = '$id2'")or die("Error 21-".mysql_error());
$select_fetch = mysql_fetch_array($select_t);
$char_name = $select_fetch['name']; 

$the_change = mysql_query("UPDATE characters SET account = '$account_id' WHERE name= '$char_name'")or die("Error 22-".mysql_error());

$the_change2 = mysql_query("UPDATE characters SET account = '$id2' WHERE name= '$proposed_char'")or die("Error 23-".mysql_error());

$delete_table = mysql_query("DELETE FROM char_proposal WHERE p_char='$proposed_char' AND s_id='$id2'")or die("Error 24-".mysql_error());;

$delete_entry = mysql_query("DELETE FROM submited_chars WHERE s_id='$id2'")or die("Error 10-".mysql_error());

echo "You characters have been traded";





}
}
?>
		
</body>
</html> 
