<?php
if (isset($_POST['ASubmit'])) {
    // Input from text area
    $s = $_POST['input']; 
    // Replaces all punctuations with '' in string
    $s = str_replace(array(".", "?", "!", ",", ";", "\"", "'"), "", $s); 
    // Replaces all punctuations with '' in string using RE
    // $s = preg_replace("#[[:punct:]]#", "", $s); 
    // Removes multiple spaces using regular expression
    $s = preg_replace('!\s+!', ' ', $s);

    // Characters
    $go = array();
    for ($i = 0; $i < strlen($s); $i++) {
        if (!array_key_exists($s[$i], $go)) {
            $go[ $s[$i] ] = 1; 
        } else {
            $go[ $s[$i] ]++;
        }
    }
    asort($go);

    // Strings
    $fo = array();
    $po = explode(" ", $s);
    for ($i = 0; $i < count($po); $i++) {
        if (!array_key_exists($po[$i], $fo)) {
            $fo[ $po[$i] ] = 1;
        } else {
            $fo[ $po[$i] ]++;
        }
    }
    asort($fo);

    // File IO
    $fileName = uniqid('', false).".txt";
    $myfile = fopen("files/".$fileName, "w");

    fwrite($myfile, "CHARACTER COUNT\r\n");
    foreach (array_keys($go) as $i) {
        fwrite($myfile, $i." ".$go[$i]."\r\n");
    }
    fwrite($myfile, "\r\nSTRING COUNT\r\n");
    foreach (array_keys($fo) as $i) {
        fwrite($myfile, $i." ".$fo[$i]."\r\n");
    }
}   
?>

<html>

<head>
    <title>Output | CFC</title>
    <link rel="stylesheet" href="style.css">
</head>

<body align="center" style="font-family: Arial;">
    <h2>Character Frequency Count</h2>
    <table class="tableStyle" align="center" height="20" width="500">
        <?php
            echo "<div>Total Characters: ".count($go)."<br><br></div>";
        ?>
        <tr>
            <td>
                <b>Character</b>
            </td>
            <td>
                <b>Count</b>
            </td>
        </tr>
        <?php
        foreach (array_keys($go) as $i) {
            echo "<tr><td>".$i."</td>";
            echo "<td>".$go[$i]."</td></tr>";
        }
    ?>
    </table>
    <br>
    <form action="App.php">
        <input type="submit" class="ButtonStyle" value="Input Another String" size="10" />
    </form>
    <br>
    <h2>Word Count</h2>
    <?php
        echo "<div>Total Words: ".count($po)."<br><br></div>";
    ?>
    <table class="tableStyle" align="center" height="20" width="500">
        <tr>
            <td>
                <b>Word</b>
            </td>
            <td>
                <b>Count</b>
            </td>
        </tr>
        <?php
        foreach (array_keys($fo) as $i) {
            echo "<tr><td>".$i."</td>";
            echo "<td>".$fo[$i]."</td></tr>";
        }
    ?>
    </table>
    <br>
    <form action="App.php">
        <input type="submit" class="ButtonStyle" value="Input Another String" size="10" />
    </form>
    <br>
</body>

</html>