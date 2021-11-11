<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="hero-text">
  <div class="alert alert-danger">
  
    <h1 style="font-size:50px; color: green">
        <strong><a href="index.php" class="alert-link">Mechanic is Not available </a></strong>
    </h1>           
    <button onclick="location='./home.php'">Go Back Home</button>
  </div>
    
  </div>
</body>
</html>



<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;

}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: black;
}

.hero-text button {
  border: none;
  font: 2em sans-serif;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: white;
  background-color: black;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #998CEB;
  color: black;
}
</style>