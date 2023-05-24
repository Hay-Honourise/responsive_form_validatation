<!DOCTYPE html>
<html>
<head>

    <style>
        #form{
            margin-right: 200%;
        }
    </style>

    
    <title>Search Data from Database</title>
</head>
<body>
    <h1>Search Data from Database</h1>

    <form method="POST" action="">
        <label for="search">Search by Name:</label>
        <input type="text" name="search" id="search" placeholder="Enter a name">
        <input type="submit" value="Search">
         <!-- View saved data -->
         <form action="viewinfo.php" method="post" id="form">
             <input type="submit" value="Back to previous page" title="Click to view saved data" class="submit"/>
        </form>
    </form>

<!-- search record -->

            <?php
    // Database connection settings
    $servername = "localhost";  
    $username = "root";        
    $password = "";            
    $dbname = "forminfo"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

     // Check if the search form is submitted
     if (isset($_POST['search'])) {
        $searchName = $_POST['search'];
    

    // SQL query to fetch data from table
    $sql = "SELECT * FROM registerform WHERE name LIKE '%".$searchName."%'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // Display data in a table
        echo '<table align="center" border="1px" style="width:auto; line-height:30px;">';
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Phone Number</th><th>Gender</th><th>Language</th><th>Zipcode</th><th>About</th></tr>";

        // Loop through each row
        while ($row = $result->fetch_assoc()) {
            // Access the data using column names
            $id = $row["id"];
            $name = $row["name"];
            $email = $row["email"];
            $password = $row["password"];
            $phonenumber = $row["phonenumber"];
            $gender = $row["gender"];
            $language = $row["language"];
            $zipcode = $row["zipcode"];
            $about = $row["about"];
            
            
            // Display the data in table cells
            echo "<tr><td>".$id."</td><td>".$name."</td><td>".$email."</td><td>".$password."</td><td>".$phonenumber."</td><td>".$gender."</td><td>".$language."</td><td>".$about."</td><td>".$password."</td></tr>";
        }

        echo "</table>";
    } else {
        echo "No data found.";
    }
}

    // Close the connection
    $conn->close();
    ?>
            <!-- search record -->
</body>
</html>