<?php
session_start();
if(!isset($_SESSION['privilleged'])){
   header("location:Sign.php");
}

?>
   
   <!DOCTYPE html>
    <html lang="en">
    <head>
      
  <!-- Search Engine  -->
    <meta name="google-site-verification" content="dW6c8vEYwXm8dOnF1eTvOreCScDDuU6oH-_D-VietJQ" />        <meta charset="UTF-8">


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GameCommunity</title>
        <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Montserrat&family=Poppins:ital,wght@0,300;0,500;0,700;0,800;1,100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/game.css">
    </head>
    <body>
        <div class="Game">
            <div class="main-w">

                <header>
                  <!-- LOGO -->
                    <div class="logo">
                        <h2><a href="#">GameCom</a></h2>
                    </div>
                    <nav>
                      <!-- Internal NavBar -->
                        <ul class="sidebar">
                            <li onclick="hide()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="Shop.php">Shop</a></li>
                            <li><a href="Event.html">Events</a></li>
                            <li><a href="Contact2.php">Contact</a></li>
                            
                        </ul>
                          <!-- External NavBar -->

                            <!-- External NavBar -->
                        <ul>
                      <li class="active" id="hide0"><a href="#">Home</a></li>
                      <li class="hidemob"><a href="Shop.php">Shop</a></li>
                      <li class="hidemob" ><a href="Event.html">Events</a></li>
                      <li class="hidemob"><a href="Contact2.php">Contact</a></li>
                      <div>

                          <?php if(isset($_SESSION['privilleged'])) { ?>

                              <li class="btn" id="hide1"><a href="#">Welcome, <?php echo $_SESSION['privilleged']; ?>!</a></li>
                              <li class="btn1" id="hide2"><a href="Signout.php">Log-out</a></li>
                              
                              <!-- <?php } else { ?>
                              <li id="hide1" class="btn"><a href="SignUp.html">Sign-up</a></li>
                              <li id="hide2" class="btn1"><a href="Sign.html">Log-in</a></li>
                          <?php } ?> -->
                      </div>
                      <li class="menu" onclick="show()"><a href="#"><i id="menu-icon" class="fa fa-bars"></i></a></li>
                  </ul>

                    </nav>
                </header>

                <!-- Content To View -->
                <div class="content">
                    <div class="main-t">
                        <h6>Trend in all the Universe</h6>
                        <h3>Epic Games,Rockstar Games</h3>
                        <h1>Game Console Store</h1>
                        <p>Our main goal is to sell Game Consoles that have to work with some featured games or it wont work unless you buy a Console</p>
                    </div>


                   <!-- First image to show -->
                    <div class="image">
                        <img src="photo/anime.png" alt="anime">
                    </div>

                    <!-- Second image for responsive -->
                    <div class="image2">
                        <img src="photo/anime.png" alt="anime">
                        </div>
               
                </div>
           
           </div>
        </div>

         <!-- The Whole section of Our Features -->

        <section class="sectionrow">

          <!-- Head to show  -->
          <div class="row1">
            <h1>Our Features</h1>
          </div>

          <div class="row1">

            <!-- The First Card -->
            <div class="column">
              <div class="card">

                <!-- ICON -->
                <div class="icon">
                  <i class="fa-solid fa-user"></i>
                </div>
                
                <h3>User Friendly</h3>
                <p>
                  My Website offers a user Friendly experience to all the people who want to enjoy this website.
                </p>
              </div>
            </div>

            <!-- The Second Card -->

            <div class="column">
              <div class="card">
                <div class="icon">
                  <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h3>Super Secure</h3>
                <p>
                 This Website will offer a scure database from the way of login to the wat of payment.
                </p>
              </div>
            </div>

             <!-- The Third Card -->

            <div class="column">
              <div class="card">
                <div class="icon">
                  <i class="fa-solid fa-headset"></i>
                </div>
                <h3>Quick Support</h3>
                <p>
                  The Website will offer a great performance and scalability due to its fat runn and support of the future.
                </p>
              </div>
            </div>


          </div>
        </section>
       
        <div class="row2">
          <h1>Our Viewed Products</h1>
        </div>



           <!-- The Main Part of this page for the Cards -->
        <main>

          <!-- The First Card -->
                                <form action="Shop.php" >
          <div class="card2" >
            <img src="photo/playblack.jpg" alt="PS5 Black">
              <p>A great performance to play with <strong>PS5 BLACK EDITION</strong> </p>
              <button class="btn-buy"  > View</button>
              
          </div>
          </form>
         <!-- The Second Card -->
         <from action="Shop.php">

          <div class="card2" >
            <img src="photo/handle.jpg" alt="handle">
              <p>Good experience to try and use  <strong>COLOURED HANDE CONSOLE</strong> </p>
              <button class="btn-buy" >View</button>
              
          </div>
          </from>
          <!-- The Third Card -->
          <form action="Shop.php">

          <div class="card2">
            <img src="photo/phantomliberty.jpg" alt="phantomliberty">
              <p> Most game played this year Go and try it  <strong>Phantomliberty</strong></p>
              <button class="btn-buy" > View</button>
             
          </div>
                              </form>
      </main>
        





             <!-- The Head of Contact -->

         <h1 class="heading1"> <span>contact</span> us </h1>


         <!-- The Part of the Contact like section and main -->
        <div class="contact" id="conatct" >
            <div class="row">

                <form action="Contact2.php">
                    <h3>get in touch</h3>
                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="text" placeholder="name">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-envelope"></span>
                        <input type="email" placeholder="email">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-phone"></span>
                        <input type="number" placeholder="number">
                    </div>
                    <input type="submit" value="contact now" class="btn4">
                </form>
    
            </div>
        </div>
       
          <!-- Footer -->
        <section class="footer">

            <div class="social">
                <a href="#"><i class="fa-brands fa-windows"></i></a>
                <a href="#"><i class="fa-brands fa-apple"></i></a>
                <a href="#"><i class="fa-solid fa-n"></i></a>
                <a href="#"><i class="fa-brands fa-android"></i></a>
                <a href="#"><i class="fa-brands fa-playstation"></i></a>
                <a href="#"><i class="fa-brands fa-xbox"></i></a>
                <a href="#"><i class="fa-solid fa-globe"></i></a>
            </div>
    
            <div class="links">
                <a href="index.php">Home</a>
                <a href="Shop.php">Shop</a>
                <a href="Event.html">Event</a>
                <a href="Contact2.php">Contact</a>
            </div>
    
            <div class="credit">created by <span>&copy;Yousef Feery</span> | all rights reserved</div>
    
        </section>

        <script src="js/game.js"></script>
           
        
        
    </body>
    </html>
    