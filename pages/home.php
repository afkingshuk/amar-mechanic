<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #FBF46D;
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
button {
  border: none;
  font: 1em sans-serif;
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
button:hover {
  border: 2px solid #998CEB;
  background-color: white;
  color: black;
}
</style>
</head>
<body>


  <div class="hero-text">
    <p>Welcome to আমার মেকানিক</p>
    <h1 style="font-size:50px">Amar Mechanic</h1>       
    
    <button onclick="location='./client.php'">Book your mechanic</button>
  </div>

<p><button onclick="location='./admin.php'" >ADMIN</button></p>

</body>
</html>
