<!DOCTYPE = HTML>
<html>
<body>
<br>
Welcome
<?php echo $_POST["name"];?> !
<br>
<br>
Your SAT score is: <?php echo $_POST["number"]; ?>
<br><br>
<?php 
if ($_POST["number"] >= 1400){
    $un = ["MIT", "Stanford", "Harvard","Oxford","Caltech","University of Cambridge","UCL","Imperial College London","NUS","Princeton","Yale","Columbia","Cornell","Upenn"];
    echo '<body style="background-color:lightgreen">';
    echo '<img src="download.png">';
} else {
    $un = ["NYU","University of Toronto","Northeastern","UCLA","Purdue"];
    echo '<body style="background-color:yellow">';
}

?>
<br><br>
<?php 
foreach ($un as $i){
    echo "$i";?>
    <br><br><?php
}
?>

</body>
</html>
