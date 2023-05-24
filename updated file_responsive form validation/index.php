<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
<!-- JavaScript  -->
    <script src="script.js" type="text/javascript"></script>

<!-- CSS styling -->
    <link rel="stylesheet" href="mystyle.css">
    
    <!-- Styling starts here -->
    <style>
        label{
            margin: 0;
            padding: 0;
        
        }

        .registration{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background-color: #45a049;
            border-radius: 4px;
            box-sizing: border-box;
            border: 2px solid rgb(42, 165, 165);
           
        }
        img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 15%;
            margin-right: 200px;
            margin-bottom: 10px;

           
            top: 0;
            left: 0;
            animation: bounce 2s infinite;
            
        }

         @keyframes bounce {
            0%, 100% {
                        transform: translateY(0);
                    }
            50% {
                transform: translateY(-50px);
                }
            }

        #myform select{
            height: 25px;
            width: 150px;
            text-indent: 0;
            outline: 0;
            border: 0;
        }

    
    .sumbit-button{
    color: black;
    font-size: medium;
    background-color: rgb(255, 255, 255);
    height: 38px;
    font-weight: bold;
    outline: 0;
    width: 100%;
    border: 2px solid rgb(42, 165, 165);
}

.sumbit-button:hover{
    background-color: #45a049;
}

.submit:hover {
    background-color: #45a049;
}



    </style>
    <!-- styling ends here -->
</head>
<body>
    <div class="container">
        <div class="login-form">
            <!-- View saved data -->
        <form action="viewinfo.php" method="post" id="form">
  <input type="submit" value="Manipulate Data" title="Click to view saved data" class="submit"/>
        </form>
            <!-- Registration Form -->
            <form action="process.php" method="post" id="myform" name="myform">
             </label> <img src="myface.jpeg" alt="#" title="Abdulrazaq">
             <h4 class="registration" >Registration Form</h4>
  
                <div class="form-div">
                    <label for="name">Name: </label>
                     <input type="text" id ="name" name="name" placeholder=" your name">
                </div>
                <div class="form-div">
                    <label for="Email">Email: </label>
                    <input type="email" id = "email" name="email" placeholder=" your email">
                </div>
                <div class="form-div">
                    <label for="password">Password: </label>
                    <input type="password" name="password"id="password">
                </div>
                <div class="form-div">
                    <label for="phoneno">Phone Number: </label>
                    <input type="number" name="phonenumber" id ="phoneno">
                </div>
                <div class="form-div">
                 <strong for=""><fieldset><legend>Gender: </legend></stromg>
                    <div>
                        <label>Male:</label>
                        <input type="radio" name="gender" value="male" >
                        <label>Female: </label>
                        <input type="radio" name="gender" id="" value="female" >
                        <label>Other: </label>
                        <input type="radio" name="gender" id="" value="others">
                    </div> </fieldset>   
                </div>
                <!-- Felching languages from database -->
                <div class="form-div">
                    <label for="language">Language </label>
                    <?php 
                    $con = mysqli_connect("localhost","root","","forminfo");
                    $s = mysqli_query($con, "select * from Language")
                    ?>
                    <select name="language" id="form-div2">
                        <?php
                        while($r=mysqli_fetch_array($s))
                        {
                        ?>
                       <!--  <option>Select Language</option> -->
                        <option value="<?php echo $r['language'];?>"><?php echo $r['language'];?></option>
                        <?php 
                        }?>
                    </select>
                </div>
               <div class="form-div">
                <label for="">Zip Code: </label>
                <input type="text" name="zipcode" id="">
               </div>
                <div class="form-div">
                    <label for="">About: </label>
                    <textarea name="about" id="" cols="30" rows="2" class="no-resize">Write about yourself...</textarea>
                </div>
                <button class="sumbit-button" onclick="return validateform()" title="Click to register now">Register</button>
            </form>
            </div>
    </div>
</body>
</html>