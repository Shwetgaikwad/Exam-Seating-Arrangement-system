<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping </title>
    <style>
       *{
       
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            box-sizing: border-box;
       }

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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Create a container for the cards */
        .card-container {
            margin-top: 50px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        /* Style the individual card */
        .card {
            width:calc(33.33% - 20px);   /* Three cards in a row with some margin */
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Style the card content */
        .card-content {
            font-size: 16px;
        }

        /* Style the card button */
       .card-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3a0a0a;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#">Home</a>
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

<div class="card-container">
    <!-- Card 1 -->
    <div class="card">
        <div class="card-content">
            <h3>ADD </h3>
            <p>Add new student</p>
        </div>
       <a href="form.php" class="card-button">ADD</a>
    </div>

    <!-- Card 2 -->
    <div class="card">
        <div class="card-content">
            <h3>DELETE</h3>
            <p>Delete student</p>
        </div>
        <a href="delete.php" class="card-button">DELETE</a>
    </div>

    <!-- Card 3 -->
    <div class="card">
        <div class="card-content">
            <h3>Update</h3>
            <p>Update Student Detail</p>
        </div>
        <a href="update.php" class="card-button">UPDATE</a>
    </div> 
    <!-- Card 4 -->
    <div class="card">
        <div class="card-content">
            <h3>Total</h3>
            <p>Total NO. OF students</p>
        </div>
        <a href="fun.php" class="card-button">Total</a>
    </div> 
</div>
</body>
</html>






