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
//    $filename = ("products.csv");

    $lines = file($filename);

    echo "<ol>";

    foreach($lines as $i => $line)
        {
        echo "<li>$line</li>";

        }
    echo "</ol>";
}

function lines(){
    $line = "--------------------------";
    echo $line, $line, $line, $line, $line, $line, "<br>";
}


// MAIN METHOD CALLS

// VARIABLES
$filename = ("products.csv");

echo "<br>";
echo "<br>";

echo lines();

echo csvFilePrint();
echo csvToArray();
echo listToArray($filename);


?>


