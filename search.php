<?php
    include("login_db.php");

    if(isset($_POST["uname"]) && isset($_POST["password"])){
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $uname = validate($_POST["uname"]);
        $password = validate($_POST["password"]);

        if (empty($uname)) {
            header("Location: index.php?error=User Name is required");
            exit();
        }else if(empty($password)){
            header("Location: index.php?error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM user WHERE user_name = '$uname' AND password = '$password'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)){
                echo"say hallo";
            }
        }
    }else{
        header("location: index.php");
        exit();
    }
?>

<!-- Certainly! Here are five different names:

1. Sophia Anderson
2. Liam Harrison
3. Olivia Martinez
4. Ethan Williams
5. Ava Johnson -->