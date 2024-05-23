<h4>While Loop</h4>
<?php 
// While loop 
$init = 0;
while ($init < 10) {
    print $init . " ";
    $init++;
}
?>

<h4>Do-While Loop</h4>
<?php 
// Do-while Loop 
$init = 0;
do {
    $init++;
    print $init . " ";
} while ($init < 10);
?>

<h4>For Loop</h4>
<?php 
// For loop 
for ($s = 45; $s < 55; $s += 2) {
    print $s . "<br>";
}
?>

<h4>foreach</h4>
<?php 
$months= ["January", "February", "March" ,"April" ,"May", "June" ,"July", "August", "September", "October" ,"November", "December"];

foreach ($months as $month){
    print$month."<br>";
}
?>
<?php 
foreach($months as month){
     echo "<option value=''>$month</option";

}
?>
<select name="" id=""> 
    <option value="">--Years--</option>
    <?php 
    $y=2015;

    while($y<2024){
        echo "<option value='$y'>$y</option>";
        $y++;
    }
    ?>
    </select>




