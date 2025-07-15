 <?php
require("Connect1.php");
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['privilleged'])) {
        $name = $_POST['product_name'];
        $price = $_POST['product_price'];
        $quantity = $_POST['product_quantity'];
        $user = $_SESSION['privilleged'];

        $sql = "INSERT INTO cart (product_name, product_price, product_quantity, username) VALUES ('$name', $price, $quantity, '$user')";

        $stmt = $pdo->prepare($sql);

        $stmt->execute();

        echo '<script>alert("Product ' . $name . ' has been added to the cart successfully")</script>';
        //include('Shop.php');
        header('location: Shop.php');
        exit();
    
    }
   else {
        echo '<script>alert("Please login first")</script>';
        include("Sign.php");
    }
}
?>
 
 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Game Console Store</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Montserrat&family=Poppins:ital,wght@0,300;0,500;0,700;0,800;1,100&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/shop.css">
    </head>
    <body>

        <div class="header">
            <div class="nav1">
                <ul>
                    <li ><a href="index.php">Home</a></li>
                    <li class="active"><a href="Shop.html">Shop</a></li>
                    <li><a href="Event.html">Events</a></li>
                    <li><a href="Contact2.php">Contact</a></li>
                </ul> 
            </div>
        </div>

        
        
        <!-- Carsoul -->

            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <video   class="d-block w-100" controls>
                        <source src="photo/The Future Games Show Presents_ The Future of Gaming.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                      </video>
                </div>
                  <div class="carousel-item">
                    <img src="photo/residentevil4.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="photo/S.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


              <!--  Cart section -->
              <div class="head2">
            <div class="nav2">
                <div class="cart"><a href="cart2.php"><i class="fa-solid fa-cart-shopping"><h5>My Cart</h5></i></a></div>
            </div>
        </div>
        

        <!-- The products section -->
         <div class="container">
            <div class="root">

                <div class="box">
                    <div class="imgbox">
                             <img src="photo/play.jpg" alt="">
                    </div>

                    <div class="left">
                        <h2>PlayStation 5</h2>
                        <p>White Edition</p>
                        <p>Price: $499</p>
                        <button class="veiw">View</button>
                    </div>
                </div>

                <div class="box">
                    <div class="imgbox">
                        <img src="photo/xbox.jpg" alt="xbox">
                    </div>

                    <div class="left">
                        <h2>XBox 360</h2>
                            <p>Experience the next generation of gaming with PS5.</p>
                            <p>Price: $599</p>
                            <button  class="veiw1">View</button>
                    </div>
                </div>

                <div class="box">
                    <div class="imgbox">
                        <img src="photo/pc.jpg" alt="pc">
                    </div>

                    <div class="left">
                            <h2>PC(Personal Computer)</h2>
                            <p>Experience the next generation of gaming with PS5.</p>
                            <p>Price: $999</p>
                            <button class="veiw2">View</button>
                    </div>
                </div>

                <div class="box">
                    <div class="imgbox">
                        <img src="photo/playblack.jpg">
                    </div>
                    
                    <div class="left">
                        <h2>PlayStation 5 Black Edition</h2>
                        <p>Experience the next generation of gaming with PS5.</p>
                        <p>Price: $699</p>
                        <button class="veiw3">View</button>

                    </div>
                </div>

                <div class="box">
                    <div class="imgbox">
                        <img src="photo/xbox12.jpg" alt="xbox12">
                    </div>

                    <div class="left">
                            <h2>Xbox Series x</h2>
                            <p>Experience the next generation of gaming with XBOX SERIES X.</p>
                            <p>Price: $200</p>
                            <button class="veiw4">View</button>
                    </div>
                </div>

                <div class="box">
                    <div class="imgbox">
                        <img src="photo/pc10.jpg" alt="pc12">
                    </div>

                    <div class="left">
                            <h2>PC Ultimate Edition</h2>
                            <p>Experience the next generation of gaming with the Ultimate Edition</p>
                            <p>Price: $500</p>
                            <button class="veiw5">View</button>
                    </div>
                </div> 
            
            </div>
        </div>
        <h2 class="acc">-----Accesories------</h2>

        <div class="container">
            <div class="root">
                <form method="post">
                <div class="box">
                    <div class="imgbox">
                    <img src="photo/acc1.jpg" alt="acc1">
                    </div>

                    <div class="left">
                        <input type="hidden" name="product_name" value="HeadSet" >
                        <input type="hidden" name="product_price" value="50" >
                        <input type="hidden" name="product_quantity" value="1" >

                        <h2>HeadSet</h2>
                        <p>Price: $50</p>
                        <button class="veiw" >Buy</button>
                    </div>
                </div>
</form>
<form method="post">
                <div class="box">
                    <div class="imgbox">
                        <img src="photo/acc4.jpg" alt="acc2">
                    </div>

                    <div class="left">
                    <input type="hidden" name="product_name" value="Cooling fan" >
                        <input type="hidden" name="product_price" value="30" >
                        <input type="hidden" name="product_quantity" value="1" >
                        <h2>A Cooling fan</h2>
                            <p>Price: $30</p>
                            <button  class="veiw1">Buy</button>
                    </div>
                </div>
               </form> 
               <form method="post" >
                <div class="box">
                    <div class="imgbox">
                        <img src="photo/acc7.jpg" alt="acc3">
                    </div>

                    <div class="left">
                    <input type="hidden" name="product_name" value="Battery Controller" >
                        <input type="hidden" name="product_price" value="20" >
                        <input type="hidden" name="product_quantity" value="1" >
                        <h2>Battery Controller to Charge</h2>
                            <p>Price: $20</p>
                            <button  class="veiw1">Buy</button>
                    </div>
                </div>
</form>
    <form method="post" >
                <div class="box">
                    <div class="imgbox">
                        <img src="photo/handle.jpg" alt="handle">
                    </div>

                    <div class="left">
                    <input type="hidden" name="product_name" value=" Controller" >
                        <input type="hidden" name="product_price" value="10" >
                        <input type="hidden" name="product_quantity" value="1" >
                        <h2>Handle or Controller</h2>
                            <p>Price: $10</p>
                            <button  class="veiw1">Buy</button>
                    </div>
                </div>
</form>
                </div>
                </div>


                <h2 class="acc">-----Games------</h2>
                <div class="container">
                    <div class="root">
        <form  method="post">
                        <div class="box">
                            <div class="imgbox">
                            <img src="photo/godofwar.jpg" alt="godofwar">
                            </div>
        
                            <div class="left">
                            <input type="hidden" name="product_name" value=" Good of War Rangnarok" >
                        <input type="hidden" name="product_price" value="70" >
                        <input type="hidden" name="product_quantity" value="1" >
                                <h2>Good of War Rangnarok</h2>
                                <p>Price: $70</p>
                                <button class="veiw">Buy</button>
                            </div>
                        </div>
        </form>

        <form method="post" >
                        <div class="box">
                            <div class="imgbox">
                                <img src="photo/sipderman.jpg" alt="sipderman">
                            </div>
        
                            <div class="left">
                            <input type="hidden" name="product_name" value=" Spiderman 2" >
                        <input type="hidden" name="product_price" value="80" >
                        <input type="hidden" name="product_quantity" value="1" >
                                <h2>Spiderman 2</h2>
                                    <p>Price: $80</p>
                                    <button  class="veiw1">Buy</button>
                            </div>
                        </div>
                        </form>
                        <form method="post" >
                        <div class="box">
                            <div class="imgbox">
                                <img src="photo/phantomliberty.jpg" alt="phantomliberty">
                            </div>
        
                            <div class="left">
                            <input type="hidden" name="product_name" value=" Phantomliberty" >
                        <input type="hidden" name="product_price" value="50" >
                        <input type="hidden" name="product_quantity" value="1" >
                                <h2>Phantomliberty</h2>
                                    <p>Price: $50</p>
                                    <button  class="veiw1">Buy</button>
                            </div>
                        </div>
        </form>
        <form method="post" >
                        <div class="box">
                            <div class="imgbox">
                                <img src="photo/R1.jpg" alt="Last of us">
                            </div>
        
                            <div class="left">
                            <input type="hidden" name="product_name" value=" Last of Us Remastered<" >
                        <input type="hidden" name="product_price" value="100" >
                        <input type="hidden" name="product_quantity" value="1" >
                                <h2>Last of Us Remastered</h2>
                                    <p>Price: $100</p>
                                    <button  class="veiw1">Buy</button>
                            </div>
                        </div>
        </form>
                        </div>
                        </div>
        <script src="js/shop.js"></script>
        <script src="js/shop2.js"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
    </html>
  