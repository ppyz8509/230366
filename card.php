<!DOCTYPE html>
<meta charset="UTF-8">
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
         
        .card {
            
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 40%;
            border-radius: 25px;
            padding: 20px; 
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
        .container {
            padding: 2px 16px;
        }
        
    </style>
</head>
<body>
    <h2>Student Card</h2>
    <div class="card">
        <img src="logo.png" alt="Studentcard" style="width:20%">
        <img src="pfp.png" alt="Studentcard" style="width:20%;float:right;">
        <div class="container">
         <?php include("../644259030/studentcard.php")
        ?>
        </div>
    </div>
</body>

</html>