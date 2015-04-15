<?php
$vote = $_REQUEST['vote'];

$file = "pollResults.txt";
$results = file($file);

$array = explode('||',$results[0]);
$o1 = $array[0];
$o2 = $array[1];
$03 = $array[2];
$o4 = $array[3];

if ($vote == 0){
$o1 = $o1 + 1;
}
if ($vote == 1){
$o2 = $o2 + 1;
}
if ($vote == 2){
$o3 = $o3 + 1;
}
if ($vote == 3){
$o4 = $o4 + 1;
}

$newresults = $o1.'||'.$o2.'||'.$o3.'||'.$o4;
$f = fopen($file, 'w');
fputs($f,$newresults);
fclose($f);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Mudkip:</td>
<td>
<img src='images/pollBar.gif' width='<?php echo(100*round($o1/($o1+$o2+$o3+$o4),4)); ?>' height = '20'>
<?php echo(100*round($o1/($o1+$o2+$o3+$o4),2)); ?>%
</td>
</tr>
<tr>
<td>Bidoof:</td>
<td>
<img src='images/pollBar.gif' width='<?php echo(100*round($o2/($o1+$o2+$o3+$o4),4)); ?>' height = '20'>
<?php echo(100*round($o2/($o1+$o2+$o3+$o4),2)); ?>%
</td>
</tr>
<tr>
<td>Cyndaquil:</td>
<td>
<img src='images/pollBar.gif' width='<?php echo(100*round($o3/($o1+$o2+$o3+$o4),4)); ?>' height = '20'>
<?php echo(100*round($o3/($o1+$o2+$o3+$o4),2)); ?>%
</td>
</tr>
<tr>
<td>Will McGrath:</td>
<td>
<img src='images/pollBar.gif' width='<?php echo(100*round($o4/($o1+$o2+$o3+$o4),4)); ?>' height = '20'>
<?php echo(100*round($o4/($o1+$o2+$o3+$o4),2)); ?>%
</td>
</tr>
</table>