 <?php

 //Feedcreeps+CommentSys 50
function post($ran)
{
$file = 'feedcreeps.txt';
 
$current = file_get_contents($file);

file_put_contents( $file,'<div class="cont"><span style="color:gray">' . $_POST["username"]. '</span><br><span style="color:black">'.$_POST["content"].'<br> ' . ' </span><br><a name="'. $ran .'" class="cmt" href="javascript:showCommentId(' . $ran . ')">Comments</a></div><br>'.$current);
 echo 'Server Responded.';
 
 
 }

function createComment($randomSeed) {

	file_put_contents('comments/' . $randomSeed . '.html' ,'<h1>Comments for ArticleID ' . $randomSeed . "</h1><br>" . ' <link rel="stylesheet" type="text/css" href="fcc.css">');
	post($randomSeed);
	
}
//Begin Generator Section
 
 
   	$rand=round(microtime(true) * 1000); //make another
   createComment($rand);
   
 
//End Generator Section

?>
