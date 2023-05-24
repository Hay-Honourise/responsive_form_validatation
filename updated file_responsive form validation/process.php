<?php
    $firstName = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $language = $_POST['language'];
    $gender = $_POST['gender'];
    $zipcode = $_POST['zipcode'];
    $about = $_POST['about'];

    /* echo $firstName; */

try {
    # code...
    $conn = new mysqli('localhost','root','','forminfo');
    if ($conn -> connect_error) {
        # code...
        die('Connection Failed :' .$conn->connect_error);
    }
    else{
        $stmt = $conn ->prepare("INSERT INTO registerform (name,email,password,phonenumber,gender,language,zipcode,about) VALUES(?,?,?,?,?,?,?,?)");
        $stmt->bind_param('ssiissis',$firstName,$email, $password,$phonenumber,$gender,$language,$zipcode,$about);
        // $stmt = $conn ->prepare("INSERT INTO Language (language) VALUES(?)");
        // $stmt->bind_param('s',$firstName);
        $stmt->execute();
        echo 'registration successful';
        $stmt->close();
        $conn->close();
    }
    header("Location: success.html");
} catch (\Throwable $e) {
    # code...
    echo $e;
}
?>