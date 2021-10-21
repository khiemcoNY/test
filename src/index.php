<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" integrity="sha384-7ynz3n3tAGNUYFZD3cWe5PDcE36xj85vyFkawcF6tIwxvIecqKvfwLiaFdizhPpN" crossorigin="anonymous">
    <title>Hiến máu</title>
</head>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    .them a{
        border: 1px solid red;
        margin: 15px;
        padding: 15px;
        text-decoration: none;
    }
    .add{
        margin-top: 40px;
    }
</style>

<body>
    <div class="container">
        <div class="row add" >
            <div class="col-md-10"></div>
            <div class="col-md-2 them">
            <a href="them.php" ><i class="bi bi-person-plus-fill"></i>Thêm</a>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <th>Mã người hiến máu</th>
                        <th>Tên Người hiến máu</th>
                        <th>Giới Tính</th>
                        <th>Năm Sinh</th>
                        <th>Nhóm Máu</th>
                        <th>Ngày Đăng Ký hiến máu</th>
                        <th>Số điện thoại</th>
                        <th>Sửa thông tin</th>
                        <th>Xóa thông tin</th>

                    </tr>
                    <?php
                    include('connect.php');
                    $sql = "SELECT * FROM BLOOD_DONOR";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                           
                            echo '<tr>';
                            echo '<td>'.$row["bd_id"].'</td>';
                            echo '<td>'.$row["bd_name"].'</td>';
                            echo '<td>'.$row["bd_sex"].'</td>';
                            echo '<td>'.$row["bd_age"].'</td>';
                            echo '<td>'.$row["bd_group"].'</td>';
                            echo '<td>'.$row["bd_reg_date"].'</td>';
                            echo '<td>'.$row["bd_phno"].'</td>';
                            echo '<td><a href="sua.php?id='.$row["bd_id"].'" ><i class="bi bi-emoji-heart-eyes"></i>Sửa</a></td>';
                            echo '<td><a href="process-xoa.php?id='.$row["bd_id"].'" ><i class="bi bi-trash-fill"></i>Xóa</a></td>';
                            echo '</tr>';
                            echo '<br>';
                            
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>