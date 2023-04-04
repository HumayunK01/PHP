<!-- ------ CREATING OUR DATABASE ------ -->
<?php
    // Creating Our Database
    CREATE TABLE `user` (
        `userid` INT(11) NOT NULL AUTO_INCREMENT,
        `firstname` VARCHAR(30) NOT NULL,
        `lastname` VARCHAR(30) NOT NULL,
        PRIMARY KEY (`userid`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
?>

<!-- ------ CREATING OUR CONNECTION ------ -->
<?php
    conn = mysqli_connect("localhost","root","","basic_command");
    // Checking  connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

<!-- ------ CREATING OUR TABLE AND ADD FORM ------ -->
<!DOCTYPE html>
<html>

<head>
    <title>Basic MySQLi Commands</title>
</head>

<body>
    <div>
        <form method="POST" action="add.php">
            <label>Firstname:</label><input type="text" name="firstname">
            <label>Lastname:</label><input type="text" name="lastname">
            <input type="submit" name="add">
        </form>
    </div>
    <br>
    <div>
        <table border="1">
            <thead>
                <th>Firstname</th>
                <th>Lastname</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                include('conn.php');
                $query = mysqli_query($conn, "select * from `user`");
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['firstname']; ?>
                        </td>
                        <td>
                            <?php echo $row['lastname']; ?>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $row['userid'];
                            ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<!-- ------ CREATING OUR EDIT SCRIPT ------ -->
<?php
    include('conn.php');
    $id = $_GET['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    mysqli_query($conn, "update `user` set firstname='$firstname',
    lastname='$lastname' where userid='$id'");
    header('location:index.php');
?>

<!-- ------ CREATING OUR DELETE SCRIPT ------ -->
<?php
    $id=$_GET['id'];
    include('conn.php');
    mysqli_query($conn,"delete from `user` where userid='$id'");
    header('location:index.php');
?>
