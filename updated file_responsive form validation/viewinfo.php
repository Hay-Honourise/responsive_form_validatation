<?php
    $conn = mysqli_connect("localhost", "root", "", "forminfo");
    $result= mysqli_query($conn, "select * from registerform") 


    ?> 
    <!DOCTYPE html> 
    <html> 
        <head> 
            <title> Fetch Data From Database </title> 
            
            <!-- my style starts here -->
            <style>
                *{
                    background-color: aqua;
                    color: black;
                }

                a{
                    text-align: left;
                }
                
                nav {
                    color: white;
                    content: center;
                    text-decoration: aliceblue;
                    }

                    #input {
                        font-size: 16px;
                        color: black;
                    }

                    #button
                    {
                        height: 25px;
                        width: 150px;
                        text-indent: 0;
                        outline: 0;
                        color: #fff;
                        border: 2px solid rgb(42, 165, 165);
                    }

                    #button:hover{
                        background-color: #45a049;
                    }

                    
            </style>
        </head> 
        <body class="body">

<!-- saved data display -->
        <table align="center" border="1px" style="width:auto; line-height:30px; color:white; background-color:azure;"> 
        <tr> 
            <th colspan="9"><h1>Saved User Information</h1><h2><a href="index.php" title="Back to Registration page">Home</a></h2> 
                <!--Search the data individually  -->
        <form action="querry.php" method="post" id="form">
            <input type="submit" value="Search individually" title="Click to search individually" class="submit"/>
        </form>
            </th> 
            
        
            </tr> 
                <th> ID </th> 
                <th> Name </th> 
                <th> Email </th> 
                <th> Password </th> 
                <th> Phone Number </th> 
                <th> Gender </th> 
                <th> Language </th> 
                <th> Zipcode </th> 
                <th> About </th> 
            </tr> 
            <!-- display the data -->
            <?php while($rows=mysqli_fetch_assoc($result)) 
            { 
            ?> 
            <tr>
            <td><?php echo $rows['id']; ?></td> 
            <td><?php echo $rows['name']; ?></td> 
            <td><?php echo $rows['email']; ?></td> 
            <td><?php echo $rows['password']; ?></td>
            <td><?php echo $rows['phonenumber']; ?></td> 
            <td><?php echo $rows['gender']; ?></td>  
            <td><?php echo $rows['language']; ?></td> 
            <td><?php echo $rows['zipcode']; ?></td> 
            <td><?php echo $rows['about']; ?></td> 
            </tr> 
            <?php 
                } 
            ?> 

        </table> 
        </body> 
    </html>
