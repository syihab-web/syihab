<?php 
$hero = ["Gilgamesh","Emiya","Gilgamesh",'Arjuna'];
$np = ["Enuma Elish","Unlimited Blade Works","Gate of Babylon","Pashupata"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar servant Archer with Noble Phantasm</title>
</head>
<body>
    <h1 align="center">Daftar Noble Phantasm Archer Class</h1>
    <table border="1" align="center" width="40%">
        <tr>
            <th>Hero</th>
            <th>Noble Phantasm</th>
        </tr>
        <tr>
            <td><?php echo $hero[0];?></td>
            <td><?php echo $np[0];?></td>
        </tr>
        <tr>
            <td><?php echo $hero[1];?></td>
            <td><?php echo $np[1];?></td>
        </tr>
        <tr>
            <td><?php echo $hero[2];?></td>
            <td><?php echo $np[2];?></td>
        </tr>
        <tr>
            <td><?php echo $hero[3];?></td>
            <td><?php echo $np[3];?></td>
        </tr>
    </table>
</body>
</html>