<!DOCTYPE html>


<html>
<title>CFE(Courses for everyone)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Courses For Everyone</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a class="w3-bar-item w3-button">Thenk you for being Premium</a>
      <a href="#menu" class="w3-bar-item w3-button">Courses</a>
      <a href="index.php" class="w3-bar-item w3-button">Log Out</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="style/hamburger.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Be Smart</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
   <a href="https://en.wikipedia.org/wiki/Database"><img src="style/tablesetting2.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750"> </a>
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Databases Courses</h1><br>
      <p class="w3-large">Online Courses in Database Development
The fields of Data Science, Analytics, Web Application Development, Software Development, Big Data and more all depend on databases for the management of information. It is essential to learn how to create a database and to understand how they work.

Start with an introductory course in database design to learn key concepts of data independence, database architecture and the role of the DBMS in the application stack. Learn about relational databases, structured query languages and get hands-on experience creating a sample database.

Microsoft offers numerous self-paced courses for a deeper understanding of database architecture and development including how to set up a cloud-based datacenter with Azure. The courses are free and will help you build valuable skills in Microsoft SQL Server development and administration. <span class="w3-tag w3-light-grey"></span></p>
      <p class="w3-large w3-text-grey w3-hide-medium">The demand for database skills and expertise is strong with almost 4,000 open jobs listed on Indeed.com at the time of this writing. Top positions include Database Analyst, Database Architect, SQL Database Developer and Database Administrator and salary estimates range from $60k to well over $100K per year.</p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Learn C++</h1><br>
      <h4>Structure of a program</h4>
      <p class="w3-text-grey">A computer program is a sequence of instructions that tell the computer what to do.</p><br>
    
      <h4>A first look at variables, initialization, and assignment</h4>
      <p class="w3-text-grey">C++ programs create, access, manipulate, and destroy objects</p><br>
    
      <h4>Arrays and loops</h4>
      <p class="w3-text-grey">Loops are typically used with arrays to do one of three things:</p><br>
    
      <h4>Pointers and arrays</h4>
      <p class="w3-text-grey">Pointers and arrays are intrinsically related in C++.</p><br>
    
      <h4>Welcome to object-oriented programming</h4>
      <p class="w3-text-grey">Object-oriented programming (OOP) provides us with the ability to create objects</p>    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
     <a href="https://en.wikipedia.org/wiki/C%2B%2B"> <img src="style/tablesetting.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%"> </a>
    </div>
  </div>

  <hr>

<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by Gabriel Movila 2019 </p>
</footer>

</body>
</html>
