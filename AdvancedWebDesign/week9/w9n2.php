<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Matt's Contacts</title>
    </head>
    <body>
    <center>
        <h1>Matt's Contacts</h1>
        <form name="sourceForm" method="post" action="w9n2.php">
        <p>Enter first and last name followed by a phone number:<br>
        <textarea name="source" rows="10" cols="40">
        <?php
        if(!empty($_POST['source'])) {
            $source = $_POST['source'];
            echo "$source";
        }
        else {
            defaultSource();
        }
        ?>
        </textarea>
        </p>
        <input type="submit" value="List Contacts">
        </form>
        <?php
        $arr = explode("\n", $source);
        $listing = array();
        $machineCode = array();
        echo "<p>";
        for ($i=0; $i<count($arr); $i++) {
            preg_match('/(\w+)\s(\w+)\s+(((\d+)-)((\d+)-)(\d+))/', $arr[$i], $matches);
            $listing[] = sprintf("%-5s %-10s %-10s %-10s\n",
                  $i,  $matches[1], $matches[2], $matches[3]);
            $machineCode[] = $matches[3];
            $machineCode[] = $matches[4];
        }
        echo "</p>";
        echo "<p>Contacts</p>";
        echo "<pre>";
        foreach ($listing as $line) {
            echo "$line";
        }
        echo "</pre>";
        ?>
    </center>
    </body>
</html>
<?php
function defaultSource() {
    echo "Matthew Getz 570-222-3333\n";
    echo "Ben Thomas 570-345-6789\n";
    echo "Claire Williams 570-321-3212\n";
    echo "Dan Daniels 419-545-6578\n";
    echo "Katie Carrots 321-456-8798";
}
?>