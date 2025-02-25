<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
      *{
    padding: 0px;
    margin:0px;
}
.main-container{
    margin:0px;
    padding: 0px;
    background-color: black;
    min-width: 100vw;
    min-height: 100vh;
    position: relative;
}
.blur-circle1{
    width: 200px;
    height: 200px;
    background: linear-gradient(to bottom,white,pink);
    border-radius: 50%;
    filter:blur(120px);
    position: absolute;
    left: 10%;
    top:20%;
    /* transform: translate(50%); */
}
.blur-circle2{
    width: 200px;
    height: 200px;
    background: linear-gradient(to bottom,white,pink);
    border-radius: 50%;
    filter:blur(100px);
    position: absolute;
    right: 10%;
    top:20%;
    /* transform: translate(50%); */
}
body {
    font-family: 'Open Sans', sans-serif;
  }
  a {
    text-decoration: none;
    color: #FFF;
  }
  ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .container {
    padding-left: 15px;
    padding-right: 15px;
    margin-left: auto;
    margin-right: auto;
  }
  /* Small */
  @media (min-width: 768px) {
    .container {
      width: 750px;
    }
  }
  /* Medium */
  @media (min-width: 992px) {
    .container {
      width: 970px;
    }
  }
  /* Large */
  @media (min-width: 1200px) {
    .container {
      width: 1170px;
    }
  }
  /* End Global Rules */
  
  /* Start Landing Page */
  .landing-page header {
    min-height: 80px;
    display: flex;
  }
  @media (max-width: 767px) {
    .landing-page header {
      min-height: auto;
      display: initial;
    }
  }
  .landing-page header .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  @media (max-width: 767px) {
    .landing-page header .container {
      flex-direction: column;
      justify-content: center;
    }
  }
  .landing-page header .logo {
    color: #5d5d5d;
    font-style: italic;
    text-transform: uppercase;
    font-size: 20px;
  }
  @media (max-width: 767px) {
    .landing-page header .logo {
      margin-top: 20px;
      margin-bottom: 20px;
    }
  }
  .landing-page header .links {
    display: flex;
    align-items: center;
  }
  @media (max-width: 767px) {
    .landing-page header .links {
      text-align: center;
      gap: 10px;
    }
  }
  .landing-page header .links li {
    margin-left: 30px;
    color: #5d5d5d;
    cursor: pointer;
    transition: .3s;
  }
  @media (max-width: 767px) {
    .landing-page header .links li {
      margin-left: auto;
    }
  }
  .landing-page header .links li:last-child {
    border-radius: 20px;
    padding: 10px 20px;
    color: #FFF;
    background-color: #6c63ff;
  }
  .landing-page header .links li:not(:last-child):hover {
    color: #6c63ff;
  }
  .landing-page .content .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 140px;
    min-height: calc(100vh - 80px);
  }
  @media (max-width: 767px) {
    .landing-page .content .container {
      gap: 0;
      min-height: calc(100vh - 101px);
      justify-content: center;
      flex-direction: column-reverse;
    }
  }
  @media (max-width: 767px) {
    .landing-page .content .info {
      text-align: center;
      margin-bottom: 15px 
    }
  }
  .landing-page .content .info h1 {
    color: #bbbbbb;
    font-size: 44px;
  }
  .landing-page .content .info p {
    margin: 0;
    line-height: 1.6;
    font-size: 15px;
    color: #b3b3b3;
  }
  .landing-page .content .info button {
    border: 0;
    border-radius: 20px;
    padding: 12px 30px;
    margin-top: 30px;
    cursor: pointer;
    color: #FFF;
    background-color: #6c63ff;
  }
  .landing-page .content .image img {
    max-width: 100%;
  }
  /* End Landing Page */

  .main-image{
    /* mix-blend-mode:exclusion */
    width: 600px;
    height: 400px;
  }
   h1,p{
    color:white;
  }  
    </style>

</head>
<body>
<div class="main-container">
        <div class="blur-circle1">

        </div>
        <div class="blur-circle2">

        </div>
          <!-- Start Landing Page -->
      <div class="landing-page">
        <header>
          <div class="container">
            <a href="home.php" class="logo">Tanima <b>Courier</b></a>
            <ul class="links">
              <li>Home</li>
              <li><a href="customer_details.php"> coustomer </a></li>
              <li><a href="tracking_order.php">Track order</a></li>
              <li><a href="login.html">login</a> </li>
            </ul>
          </div>
        </header>
        <div class="content">
          <div class="container">
            <div class="info">
              <h1>A trusted provider of courier services.</h1>
              <p>We deliver your products safely to your home in a reasonable time.</p>
              <button>Track Order</button>
            </div>
            <div class="image">
              <img class="main-image" src="image/hero.png">
            </div>
          </div>
        </div>
      </div>
      <!-- End Landing Page -->
    </div>
</body>
</html>