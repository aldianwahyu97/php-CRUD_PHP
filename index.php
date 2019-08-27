<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM data_user ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="adduser.php">Menambahkan User Baru</a><br/><br/>

    <table width='80%' border=1>
    <tr>
        <th>Nama</th>
        <th>Nomor HP</th>
        <th>Email</th>
        <th>Aksi</th>

        <?php
        while ($user_data = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$user_data['nama']."</td>";
            echo "<td>".$user_data['nomorhp']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td> <a href = 'edit.php?id=$user_data[id]'> EDIT </a> | <a href = 'delete.php?id=$user_data[id]'> HAPUS </a></td>";
            echo "</tr>";
        }
        ?>
    </tr>
    </table>
</body>
</html>