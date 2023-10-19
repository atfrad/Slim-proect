<?php
class connectionDB
{
    private $conn;
    private $sql;
    private $res;
    private $row;

    function connectTodb()
    {
        include_once 'db.php';
        $this->conn = new mysqli(host, user, password, dbname);
        if ($this->conn->connect_error) {
            echo "اتصال موفقیت آمیز نبود";
            return;
        }else{
$this->sql = "SELECT * FROM stu";
$this->res = mysqli_query($this->conn, $this->sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
<table class="maintbl">
    <tr>
        <th>Name</th>
        <th>LastName</th>
        <th>MeliCode</th>
    </tr>


    <?php

    while ($this->row = mysqli_fetch_assoc($this->res)) {


        ?>
        <tr>
            <td><?php echo json_encode($this->row['name']); ?></td>
            <td><?php echo json_encode($this->row['lastname']); ?></td>
            <td><?php echo json_encode($this->row['melicode']); ?></td>
        </tr>
        <?php
    }
    }
            ?>
</table>
</body>
</html>
<?php
            }
        //return $this->row;

    }
?>
