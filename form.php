
<?php
include('connect.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $student_name /*this should same as columnname in db */= $_POST['student_name'/* this can give whatever you want but should same to name ="this value"*/ ];
    $student_class = $_POST['student_class'];
    $student_roll_no = $_POST['student_roll_no'];
    $exam_wing = $_POST['exam_wing'];
    $exam_room_no = $_POST['exam_room_no'];
    $exam_subject = $_POST['exam_subject'];
    $exam_date = $_POST['exam_date'];
// cal produres created in db
    $query = "call addstudent('$student_name','$student_class','$student_roll_no','$exam_wing','$exam_room_no',' $exam_subject','$exam_date');";
    mysqli_query($conn,$query);
    // post method is use to store data in encrypted form
    // we fire if condition to store detail in database 

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student </title>
    
</head>

<body>
    
    <section>
        <article>           
                <div>
                    <h1>ADD STUDENT</h1>
                </div>
                <form method="POST">
                    <div>
                        <label for="student_name">student_name</label>
                        <input type="text" placeholder="Enter Student name" name="student_name">
                    </div>
                
                    <div>
                        <label for="student_class">student_class</label>
                        <input type="text" placeholder="Enter class" name="student_class">
                    </div>
                
                    <div>
                        <label for="student_roll_no">student_roll_no</label>
                        <input type="text" placeholder="Enter roll no" name="student_roll_no">
                    </div>
                
                    <div>
                        <label for="exam_wing">exam_wing</label>
                        <input type="text" placeholder="Enter wing" name="exam_wing">
                    </div>
                    <div>
                        <label for="exam_room_no">exam_room_no</label>
                        <input type="text" placeholder="Enter roomno" name="exam_room_no">
                    </div>
                    <div>
                        <label for="exam_subject">exam_subject</label>
                        <input type="text" placeholder="Enter subject" name="exam_subject">
                    </div>
                    <div>
                        <label for="exam_date">exam_date</label>
                        <input type="date" placeholder="Enter date" name="exam_date">
                    </div>
                       
                
                    <div class="sub">
                        <input type="submit" value="Submit">
                    </div>

                    <div><a href="table.php" target="_blank">View Data</a></div>
                </form>
        </article>
    </section>
    
</body>

<style>
    body{
        background-color: #3a0a0a;
    background-size: cover;
    padding: 0;
    margin: 0;
}

section{
    background-color:rgba(0, 0, 0, 0.7);
    width: 35%;
    margin: 40px auto;
    border-radius: 4px;
    border: 5px solid black;
}

article div{
    padding-bottom: 20;
    
}

article label{
    margin-left: 40px;
    color: rgba(0,0,22);
    color: white;
}

article input[type=text]{
    width: 85%;
    padding-bottom: 5px;
    padding-top: 5px;
    margin-left: 40px;
    box-sizing: none;
    background: whitesmoke ;
    border: none;
    font-size: medium;
    border-bottom: 1px solid rgb(1,1,51);
}

article input[type=date]{
    width: 85%;
    padding-bottom: 5px;
    padding-top: 5px;
    margin-left: 40px;
    box-sizing: none;
    background: whitesmoke ;
    border: none;
    font-size: medium;
    border-bottom: 1px solid rgb(1,1,51);
}

article input[type=submit]{
    width: 85%;
    padding-bottom: 5px;
    padding-top: 5px;
    margin-left: 10px;
    box-sizing: none;
    color:whitesmoke;
    background: green;
    border: none;
    font-size: medium;
    border-bottom: 1px solid rgb(1,1,51);
}

::placeholder{
    color: black;
}

article h1{
    padding-top: 5px;
    font-size: 25px;
    text-align: center;
    color: white;
}

article .sub{
    margin: 40px  40px 15px 80px;
    padding-bottom: 30px;
   
}

article button{
    padding: 15px 120px 15px 120px;
    border:  none;
    border-radius: 4px;
    font-weight: 600;
    font-size: 15px;
}

a:link, a:visited {
  margin: 0px  0px 0px 210px;
  background-color: green;
  color: whitesmoke;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}


</style>

</html>

