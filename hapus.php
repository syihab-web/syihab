<?php 
$nps = ["Enuma Elish","Vasavi Shakti","Rhongomyniad","Gae Bolg"];
$hero = ["Enkidu","Karna","Arthur Pendragon", "Cu Chulain"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar servant Lancer with Noble Phantasm</title>
</head>
<body>
    <h1 align="center">Daftar Noble Phantasm Lancer Class</h1>
    <table border="1" align="center" width="40%">
        <tr>
            <th>Hero</th>
            <th>Noble Phantasm</th>
        </tr>
        <tr>
            <td><?php echo $hero[0];?></td>
            <td><?php echo $nps[0];?></td>
        </tr>
        <tr>
            <td><?php echo $hero[1];?></td>
            <td><?php echo $nps[1];?></td>
        </tr>
        <tr>
            <td><?php echo $hero[2];?></td>
            <td><?php echo $nps[2];?></td>
        </tr>
        <tr>
            <td><?php echo $hero[3];?></td>
            <td><?php echo $nps[3];?></td>
        </tr>
    </table>
</body>
</html>