<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Count</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #3a0a0a;
            margin: 0;
            padding: 0;
        }
        /* Reset some default styles */
      

/* Style the navigation bar */
.navbar {
background-color: #333;
overflow: hidden;
}

/* Style the navigation bar links */
.navbar a {
float: left;
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}

/* Style the "Home" and "About" links */
.navbar a:not(.dropdown) {
margin-right: 15px;
}

/* Style the dropdown container */
.dropdown {
float: right;
overflow: hidden;
}

/* Style the dropdown button */
.dropdown .dropbtn {
font-size: 16px;
border: none;
outline: none;
color: white;
background-color: inherit;
cursor: pointer;
padding: 14px 16px;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

/* Style the dropdown links */
.dropdown-content a {
float: none;
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
text-align: left;
}

/* Change the color of dropdown links on hover */
.dropdown-content a:hover {
background-color: #ddd;
}

/* Show the dropdown menu when hovering over the dropdown button */
.dropdown:hover .dropdown-content {
display: block;
}

        .container {
            max-width: 350px;
            margin-top: 50px;
            margin-left: 35%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>
<div class="navbar">
    <a href="home.php">Home</a>
    <a href="#">About</a>
    <a href="table.php">Viewdata</a>
    <div class="dropdown">
        <button class="dropbtn">Customize</button>
        <div class="dropdown-content">
            <a href="form.php">Add Item</a>
            <a href="delete.php"> Delete Item </a>
            <a href="update.php">Update Item </a>
            <a href="fun.php">Total </a>
            
        </div>
    </div>
</div>
<section class="background">
        <div class="container">
            <table border="3">
                <tr>
                    <th>Tid</th>
                    <th>Student id</th>
                    <th>Action</th>
                    <th>Date</th>
                    
                </tr>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "ca2");
                // Check connection and to check if there is any error or not
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM trig";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["tid"] . "</td><td>" . $row["id"] . "</td><td>"
                            . $row["action"] . "</td><td>" . $row["date"] . "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </table>
        </div>
        
        </div>
    </section>
</body>
</html>








