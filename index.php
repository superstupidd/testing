<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Submit your details</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Submit your details</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 35px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 20px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}


    </style>
</head>
<body>
    <div class="background">
        
    <form method='post' action=''>
        <h3>Fill Your Details </h3>

        <label for="Name">Name</label>
        <input type="text" name='name' placeholder="Name " >

        <label for="Email">Email</label>
        <input type="email" name='email' placeholder="Email" >

        <label for="Phone">Phone</label>
        <input type="Phone" name='phone' placeholder="Phone" >

       
        <button name='submit' type="submit">Submit</button>
        
    </form>
</body>
</html>

<?php
include 'config.php';
if (isset($_POST['submit'])){
$name=($_POST['name']);
$email=($_POST['email']);
$phone=($_POST['phone']);
echo $name;
echo $email;
echo $phone;
    $sql= "INSERT INTO users(name,email,phone) VALUES ('$name','$email','$phone')";
    $result=mysqli_query($con,$sql);
    if($result){
      echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login Now');
        window.location.href='index.php';
        </script>");
    }else{
        echo"something went wrong";
}
    }


?>

