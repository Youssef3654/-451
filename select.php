    <?php
if (isset($_POST["Login"])) {
    $username = $_POST["uname"];
    $password = $_POST["psw"];

    include "connect.php";

    $select = "select * from users where username='$username'";
    $query = mysqli_query($conn , $select);

    if (mysqli_num_rows($query)>0) {
        $row = mysqli_fetch_array($query);
        if ($row["password"]==$password) {
            header("location:home.php");
        }

        else {
            echo "عذرا حدث خطا في الباسورد";
        }
    }

    else {
        echo "عذرا حدث خطا في اسم المستخدم غير مسجل بلنظام";
    }
}
?>
