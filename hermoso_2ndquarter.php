<!DOCTYPE html>
<php>
    <head>
<style>

body {
  
            background-image: url('img/herobg.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            font-family: ariel, sans-serif;
        

}

html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 130px;
  background-color: #43a536ff;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: black;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #26a526ff;
  color: white;
}

li a:hover:not(.active) {
  background-color: #29a748ff;
  color: white;
}

img {
  display: block;
  margin-left: 150px;
  margin-top: 20px;
}

#borderimg { 
  border: 10px solid transparent;
  padding: 15px;
}


</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<img src="img/baby.jpg" width="150" height="150">


</body>
</php>
