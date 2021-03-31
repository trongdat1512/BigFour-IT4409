<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Square and Cube</title>
</head>
<body>
    <font size="5", color="blue">Generate Square and Cube Values</font><br>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
        <?php
            if(array_key_exists("start", $_GET)){
                $start = $_GET["start"];
                $end = $_GET["end"];
            }
            else{
                $start = 0;
                $end = 0;
            }
        ?>
        <table>
            <tr>
                <td>Select Start Number:</td>
                <td>
                    <select name="start">
                        <?php
                            for ($i = 0; $i <= 10; $i++){
                                if ($start == $i){
                                    echo "<option selected>$i</option>";
                                }
                                else{
                                    echo "<option>$i</option>";
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Select End Number:</td>
                <td>
                    <select name="end">
                        <?php
                            for ($i = 0; $i <= 20; $i++){
                                if ($end == $i){
                                    echo "<option selected>$i</option>";
                                }
                                else{
                                    echo "<option>$i</option>";
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><input type="submit" value="Submit"></td>
                <td align="left"><input type="reset" value="Reset"></td>
            </tr>
        </table>
        <table>
            <?php
            if(array_key_exists("start", $_GET)){
                echo "<tr><th>Number</th><th>Square</th><th>Cube</th></tr>";
                $i = $start;
                while($i <= $end){
                    $sqr = $i * $i;
                    $cubed = $i * $i * $i;
                    echo "<tr><td>$i</td><td>$sqr</td><td>$cubed</td></tr>";
                    $i++;
                }
            }
            ?>
        </table>
    </form>
</body>
</html>
