<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
 <link rel="stylesheet" href="css/contact.css">
</head>       
<body>
<div class="header1">
            <div class="nav1">
                <ul>
                    <li ><a href="index.php">Home</a></li>
                    <li ><a href="Shop.html">Shop</a></li>
                    <li><a href="Event.html">Events</a></li>
                    <li class="active"><a href="Contact2.php">Contact</a></li>
                </ul> 
            </div>
        </div>
    <div class="header">
        <h1>Contact</h1>
    </div>
    <div class="head">
        <h5>Have a Question?</h5>
    </div>
    <form action="contact.php" method="post">
        <div class="row1">
            <div class="row2">
                <label for="fname">First name: </label>
                <input type="text" class="inputfname" name="firstname">
                <div class="row3">
                    <label for="lname" class="labelname">Last Name: </label>
                    <input type="text" class="inputlname" name="lastname">
                </div>
            </div>
        </div>
        <div class="Email">
            <label for="lname">Email-Address:</label>
            <input type="email" class="inputEmail" name="email">
        </div>
        <div class="Phone">
            <label for="phone">Phone:</label>
            <input type="tel" class="inputPhone" name="phone">
        </div>
        <div class="description">
            <label for="text">Notes</label>
            <textarea name="notes" id="notes" class="description1"></textarea>
        </div>
        <button class="submitt" name="insert">Submit</button>
    </form>
</body>
</html>
