<?php
$vote = $_REQUEST['test'];

$filename = "pollResults.txt";
$results = file($filename);

$array = explode("||",$results);
$o1 = $array[0];
$o2 = $array[1];
$o3 = $array[2];
$o4 = $array[3];

if ($vote == 0){
$o1 = $o1 + 1;
};
elseif ($vote == 1){
$o2 = $o2 + 1;
};
elseif ($vote == 2){
$o3 = $o3 + 1;
};
elseif ($vote == 3){
$o4 = $o4 + 1;
};

$newresults = $o1."||".$o2."||".$o3."||".$o4;
$fp = fopen($filename, 'w');
fputs($fp,$newresults);
fclose($fp);

$voteTotal = ($o1+$o2+$o3+$o4);
$votes1 = $o1;
$votes2 = $o2;
$votes3 = $o3;
$votes4 = $o4;
$percent1 = round($o1/$voteTotal,2);
$percent2 = round($o2/$voteTotal,2);
$percent3 = round($o3/$voteTotal,2);
$percent4 = round($o4/$voteTotal,2);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Mudkip:</td>
<td>
<img src="images/pollBar.gif" width='<?php echo $votes1; ?>%' height = "20">
<?php echo $percent1; ?>%
</td>
</tr>
<tr>
<td>Bidoof:</td>
<td>
<img src="images/pollBar.gif" width="<?php echo $votes2; ?>" height = "20">
<?php echo $percent2; ?>%
</td>
</tr>
<tr>
<td>Cyndaquil:</td>
<td>
<img src="images/pollBar.gif" width="<?php echo $votes3; ?>" height = "20">
<?php echo $percent3; ?>%
</td>
</tr>
<tr>
<td>Will McGrath:</td>
<td>
<img src="images/pollBar.gif" width="<?php echo $votes4; ?>" height = "20">
<?php echo $percent4; ?>%
</td>
</tr>
</table>

//http://www.w3schools.com/php/php_ajax_poll.asp