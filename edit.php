<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $nama=$_POST['nama'];
    $nomorhp=$_POST['nomorhp'];
    $email=$_POST['email'];

    $result = mysqli_query($mysqli, "UPDATE data_user SET nama='$nama',email='$email',nomorhp='$nomorhp' WHERE id=$id");
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM data_user WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $email = $user_data['email'];
    $nomorhp = $user_data['nomorhp'];
}
?>
<html>
<head>  
    <title>Edit User </title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="nomorhp" value=<?php echo $nomorhp;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>