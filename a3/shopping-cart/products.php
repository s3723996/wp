<table border="1">

    <tr>
        <td>1</td>
        <td>Loop Earrings</td>
        <td>30.00</td>
        <td><a href="cart.php?action=add&id=1">ADD</a></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Chain Necklace</td>
        <td>60.00</td>
        <td><a href="cart.php?action=add&id=2">ADD</a></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Buckle Belt</td>
        <td>120.00</td>
        <td><a href="cart.php?action=add&id=3">ADD</a>
        </td>
    </tr>

</table>
<a href="cart.php">View Cart</a>

<!-- CSV TO ARRAY TO TABLE(1)-->
<?php
    $csv = array_map('str_getcsv', file('products.csv'));

    if (count($csv) > 0):
?>

<table>
  <tbody>
<?php foreach ($csv as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>

<?php endif;?>



<?php
//session_start();


function csvFilePrint(){
    $file = fopen("products.csv", "r");

    while(!feof($file))
    {
        $content=fgetcsv($file);
        $count=count($content);

        for($i=0; $i<$count; $i++)
            {
                echo $content[$i]."\t";
            }
    }

}

function csvToArray(){
    $file = fopen("products.csv","r");
    flock($file, LOCK_EX);

    while ($line = fgets($file))
    {
       $records[] = explode(",",$line);
    }

    flock($file, LOCK_UN);
    fclose($file);
    echo "<p>{$records[1][2]}</p>";
}


function listToArray($filename){
    $lines = file($filename);

    echo "<ol>";

    foreach($lines as $i => $line)
        {
        echo "<li>$line</li>";

        }
    echo "</ol>";
}

function csvArrayFunc() {
    $csv = array_map('str_getcsv', file('products.csv'));

//    echo "<p>{$csv[0][1]}</p>";


    print_r ($csv);
    echo "<br>";
    echo "<br>";
    echo $csv[5][5];



}


function lines(){
    $line = "--------------------------";
    echo $line, $line, $line, $line, $line, $line, "<br>";
}


// MAIN METHOD CALLS

// VARIABLES
$filename = ("products.csv");


//echo csvFilePrint();
//echo csvToArray();
//echo listToArray($filename);
//echo csvArrayFunc();



?>


<!--CSV TO ARRAY TO TABLE(2)--->

<?php
//    function build_table($array){
//    // start table
//    $html = '<table>';
//    // header row
//    $html .= '<tr>';
//    foreach($array[0] as $key=>$value){
//            $html .= '<th>' . htmlspecialchars($key) . '</th>';
//        }
//    $html .= '</tr>';
//
//    // data rows
//    foreach( $array as $key=>$value){
//        $html .= '<tr>';
//        foreach($value as $key2=>$value2){
//            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
//        }
//        $html .= '</tr>';
//    }
//
//    // finish table and return it
//
//    $html .= '</table>';
//    return $html;
//}
//
//    $array = array_map('str_getcsv', file('products.csv'));
//
//echo build_table($array);


echo csvArrayFunc();
?>

