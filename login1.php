<?php
session_start();
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
           // $_SESSION['user']=$row['user'];
            session_start();
            $_SESSION['authenticated'] = true;
            header("Location: stubhome.php");
            $_SESSION['authenticated'] = true;
            
            $_SESSION['user'] = $username;
        }  
        else{  
            echo  '<script>
                        window.location.href = "login.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>
