<?php
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $query = "call deletestudent('$id');";
    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student</title>
</head>

<body>
    <section>
        <article>
            <div>
                <h1>Delete Student</h1>
            </div>
            <form method="POST">
                <div>
                    <label for="id">Id</label>
                    <input type="text" placeholder="Enter Id" name="id">
                </div>

                <div class="sub">
                    <input type="submit" value="Submit">
                    
                </div>
                
            </form>
        </article>
    </section>

</body>

<style>
    
    body {

        background-color: #3a0a0a;

        background-size: cover;
        padding: 0;
        margin: 0;
    }

    section {
        background-color: rgba(0, 0, 0, 0.7);
        width: 35%;
        margin: 40px auto;
        border-radius: 4px;
        border: 5px solid black;
    }

    article div {
        padding-bottom: 20;

    }

    article label {
        margin-left: 40px;
        color: rgba(0, 0, 22);
        color: white;
    }

    article input[type=text] {
        width: 85%;
        padding-bottom: 5px;
        padding-top: 5px;
        margin-left: 40px;
        box-sizing: none;
        background: whitesmoke;
        border: none;
        font-size: medium;
        border-bottom: 1px solid rgb(1, 1, 51);
    }

    article input[type=submit] {
        width: 85%;
        padding-bottom: 5px;
        padding-top: 5px;
        margin-left: 10px;
        box-sizing: none;
        background: green;
        color: whitesmoke;
        border: none;
        font-size: medium;
        border-bottom: 1px solid rgb(1, 1, 51);
    }

    ::placeholder {
        color: black;
    }

    article h1 {
        padding-top: 5px;
        font-size: 25px;
        text-align: center;
        color: white;
    }

    article .sub {
        margin: 40px 40px 15px 80px;
        padding-bottom: 30px;

    }

    article button {
        padding: 15px 120px 15px 120px;
        border: none;
        border-radius: 4px;
        font-weight: 600;
        font-size: 15px;
    }
</style>

</html>