 <?php

 //Feedcreeps+CommentSys 50

 // Load Vars
 $ART_ID = $_POST["ARTID"]; // Posted by a JavaScript 
 
 $CONTENT = $_POST["CONT"]; // + ys
 $UID = $_POST["UID"]; // JS
 
 
 $NORM_ID = $ART_ID . ".html"; 
$current = file_get_contents($NORM_ID );

 file_put_contents( $NORM_ID ,'<div class="cont"><span style="color:gray">' . $UID. '</span><br><span style="color:black">'.$CONTENT.'<br> ' . ' </span><br></div><br>'.$current);

echo 'done';
echo 'debug var drops' . $ART_ID . $CONTENT . $UID;
?>
