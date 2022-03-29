<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Query</title>
</head>
<style>
    ul{
        margin:0px;
        padding:30px 20px;
        list-style-type: none;
        text-align: right;
    }
    li{
        display: inline;
        margin-left:20px;
        font-size: 30px;
    }
    a{
        color:rgb(28, 154, 228);
        text-decoration: none;
        transition: all 0.2s ease-in-out;
        font-family: Arial, Helvetica, sans-serif;
    }
    A:hover {
        COLOR: rgb(19, 239, 255); TEXT-DECORATION: none; font-weight: none; text-shadow:0 0 15px rgb(56, 255, 255); 
    }
    body{
        background-image: url("welcome.jpg");
    }
    h1{
        color:white;
        text-align: center;
        font-size: 30px;
        font-family: Arial, Helvetica, sans-serif;
        text-shadow:0 0 25px rgb(56, 255, 255);
        margin-top: 50px;
        background: -webkit-linear-gradient(#33ccff, white);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    button{
        border-radius: 20px;
        font-size: 20px;
        background:black;
        padding: 10px;
        border-style: dotted; 
        color: rgb(44, 178, 255);
        transition: all 0.3s ease-in-out;
        margin-left:10px;
    }
    .tab:hover{
        box-shadow: 0 0 20px white;
    }
    .but:hover {
        color: rgba(255, 255, 255, 1);
        box-shadow: 0 0 10px white;
    }
    h3{
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
        margin-left:38%;
        
    }
    .burn:hover {
        COLOR: red; TEXT-DECORATION: none; font-weight: none; text-shadow:0 0 20px #ff5e18;
    }

    table,th,td{
        padding:10px;
        font-size: 20px;
        background: white;
        border: 1px solid black;
        border-collapse: collapse;
        font-family: Arial, Helvetica, sans-serif;
        transition: all 0.3s ease-in-out;
        opacity: 0.9;
    }
    
</style>
<body>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="citizens.php">Citizens</a></li>
        <li><a href="vehicles.php">Vehicles</a></li>
        <li><a href="districts.php">Districts</a></li>
        <li><a href="jobs.php">Jobs</a></li>
        <li><a href="custom.php">Query</a></li>
        <li><a href="index.php" class="burn">Logout</a></li>
    </ul>
    <h1>
        Main Queries
    </h1>
    <div>
        <h3>
            <a href="couple.php" style="color:white">1. Show married citizens</a><br/>
            <a href="cars.php" style="color:white">2. Show citizens who own cars</a><br/>
            <a href="family.php" style="color:white">3. Show parents of citizens</a><br/>
            <a href="workers.php" style="color:white">4. Show citizens and their jobs</a><br/>
        </h3>
    </div>
    <h1>
        Custom Queries
    </h1>
    <div>
        <h3>
            <a href="ageorder.php" style="color:white">1. Show citizens ordered by age</a><br/>
            <a href="more50.php" style="color:white">2. Show citizens who earn more than 50k</a><br/>
        </h3>
    <div>
    <h1>
    More to be added in the future!
    </h1>
</body>
</html>