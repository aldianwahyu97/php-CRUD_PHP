<html>
<title> Tambah User </title>

<body>
    <a href = "index.php"> Kembali ke Beranda </a>

    <form action = "adduser.php" method = "POST" name = "form1">
        <table>
            <tr>
                <td> Nama </td>
                <td> <input type = "text" name ="nama"> </td>
            <tr>
            <tr>
                <td> Nomor HP </td>
                <td> <input type = "text" name ="nomorhp"> </td>
            <tr>
            <tr>
                <td> Email </td>
                <td> <input type = "text" name ="email"> </td>
            <tr>
            <tr>
                <td>  </td>
                <td> <input type = "submit" name = "simpan" value ="add"> </td>
            <tr>

        </table>
    </form>

    <?php
        if(isset($_POST['simpan'])){
            $nama = $_POST['nama'];
            $nomorhp = $_POST['nomorhp'];
            $email = $_POST['email'];

            include_once('config.php');

            $result = mysqli_query($mysqli,"INSERT INTO data_user(nama,nomorhp,email) VALUES ('$nama','$nomorhp','$email')");
            echo ("Sukses Input Data");
        }
    ?>
</body>

</html>