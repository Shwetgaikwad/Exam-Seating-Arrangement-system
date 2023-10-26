<?php
include('connect.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $student_name = $_POST['sname'];
    $student_class = $_POST['sclass'];
    $student_roll_no = $_POST['srollno'];
    $exam_wing = $_POST['swing'];
    $exam_room_no = $_POST['sroomno'];
    $exam_subject = $_POST['ssubject'];
    $exam_date = $_POST['sdate'];

    

    $query = "call updatestudent('$student_name','$student_class','$student_roll_no','$exam_wing','$exam_room_no',' $exam_subject','$exam_date');";
    mysqli_query($conn,$query);
    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
</head>
<body>
<section>
        <article>           
                <div>
                    <h1>Update Student</h1>
                </div>
                <form method="POST">
                    <div>
                        <label for="sname">student_name</label>
                        <input type="text" placeholder="Enter Student name" name="sname">
                    </div>
                
                    <div>
                        <label for="sclass">student_class</label>
                        <input type="text" placeholder="Enter class" name="sclass">
                    </div>
                
                    <div>
                        <label for="srollno">student_roll_no</label>
                        <input type="text" placeholder="Enter roll no" name="srollno">
                    </div>
                
                    <div>
                        <label for="swing">exam_wing</label>
                        <input type="text" placeholder="Enter wing" name="swing">
                    </div>
                    <div>
                        <label for="sroomno">exam_room_no</label>
                        <input type="text" placeholder="Enter roomno" name="sroomno">
                    </div>
                    <div>
                        <label for="ssubject">exam_subject</label>
                        <input type="text" placeholder="Enter subject" name="ssubject">
                    </div>
                    <div>
                        <label for="sdate">exam_date</label>
                        <input type="date" placeholder="Enter date" name="sdate">
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
    background: green ;
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
    font-size: 15px;}
</style>
</html>