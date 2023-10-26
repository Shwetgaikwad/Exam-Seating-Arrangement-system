<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        *{
            background-color:#3a0a0a;
        }

        table{
            border: solid 1px whitesmoke;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            color: white        ;
            background:whitesmoke;
        }

        th{
            font-size: 30px;
            background:#3a0a0a;
            color: whitesmoke;
        }
        
        a{
            color: white;
            text-decoration: none;
            font-size: 20px;
        }

        .re{
            margin-left: 16%;
            font-size: 35px;
            color: white d;
        }
        .container{
            padding-top: 15%;
        }
        .buttons{
            margin-left: 54%;
        }
        .buttons button{
            background:#3a0a0a;
        }
        .buttons a{
            
        }
        
    </style>
</head>


<body>
    <section class="background">
        <div class="container">
    <table border="3">
        <tr>
            <th>Id</th>
            <th>student_name</th>
            <th>student_class</th>
            <th>student_roll_no</th>
            <th>exam_wing</th>
            <th>exam_room_no</th>
            <th>exam_subject</th>
            <th>exam_date</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ca2");
        // Check connection and to check if there is any error or not
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT id,student_name,student_class,student_roll_no,exam_wing,exam_room_no,exam_subject,exam_date FROM student";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["student_name"] . "</td><td>"
                    . $row["student_class"] . "</td><td>" . $row["student_roll_no"] . "</td><td>" . $row["exam_wing"] . "</td><td>" . $row["exam_room_no"] . "</td><td>" . $row["exam_subject"] . "</td><td>" . $row["exam_date"] . "</td></tr>";
            }
            echo "</table>";
        } 
        else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
    </div>
    <div class="buttons">
    <button><div><a href="update.php" target="_blank">Update Student</a></div></button>
    <button><div><a href="delete.php" target="_blank">Delete Student</a></div></button>
    <button><div><a href="home.php" target="_blank">back to home page</a></div></button>
    </div>
    </section>
</body>
<style>
    
</style>

</html>
