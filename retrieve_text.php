<!DOCTYPE html>
<html>
<title>words count</title>
<body>
<h2>Words Count </h2><br>
<form action="" method="post">
Enter the words:<br>
<input type="text" name="words"> <br>
<input type="submit" value="Submit"><br><br>


<?php  
$c=$_POST["words"];
$cArray = array_count_values(str_word_count(strtolower($c), 1));
?>
<table>
    <tr>
        <th>Word</th>
        <th>Count</th>
    </tr>
    <?php foreach($cArray as $word=>$count): ?>
    <tr>
        <td><?php echo $word; ?></td>
        <td><?php echo $count; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</form>
</body>
</html>

