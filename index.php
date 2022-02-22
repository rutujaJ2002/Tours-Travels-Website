<?php
include './database/conn.php';

try{
    if(isset($_POST['book'])){
        $name = $_POST['name'];
        $place = $_POST['place'];
        $members = $_POST['members'];
    
        $q = " INSERT INTO `booking`(`name`, `place`, `members`) VALUES ('$name','$place','$members')";
        $query = mysqli_query($conn, $q);
        if($query){
            $msg = "Booked your tour successfully";
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('$msg');
                    window.location.href='index.php';
                    </script>");
        }
    }
}
catch(Exception $e){
    $error_msg= $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours & Travels Website</title>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css">

    <!--custom js file link-->
    <script src="js/index.js"></script>
    
</head>
<body>

    <!--header section-->
    <header class="header">

        <div id="menu-btn" class="fa fa-bars">
        </div>

        <a href="" class="logo">
            <i class="fa fa-paper-plane"></i>
            Travel
        </a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#destination">Destination</a>
            <a href="#service">Services</a>
            <a href="#gallery">Gallery</a>
            <a href="#blogs">Blogs</a>
            <a href="#contact">Contact</a>
        </nav>

        <a href="#book-form" class="btn">Book Now</a>
    </header>
    

    <!--home section-->

    <section class="home" id="home">
        <div class="content">
            <span>Follow Us</span>
            <h3>To The Unknown</h3>
            <p>Let us plan you a
                perfect India Holiday
                Personalised, well-crafted tour packages for best experiences</p>
            <a href="#book-now" class="home-btn">Book now</a>
        </div>
    </section>


    <!--booking form section-->
    <section class="book-form" id="book-form">
        <form action="#" method="POST">

            <div class="inputBox">
                <span>Your Name:</span>
                <input type="text" placeholder="Name" name="name">
            </div>

            <div class="inputBox">
                <span>where to?</span>
                <input type="text" placeholder="Place name" name="place">
            </div>


            <div class="inputBox">
                <span>how many?</span>
                <input type="number" placeholder="Number of travellers" name="members">
            </div>

            <button class="btn" type="submit" name="book">Book Now</button>

        </form>
    </section>


    <!--about section starts-->
    <section id="about" class="about">
        <div class="video-container">
            <img src="images/des-1.jpg" alt="" class="image">
        </div>

        <div class="content">
            <span>why choose us?</span>
            <h3>nature's majesty awaits you</h3>
            <p>For kids and younger members of the family, we proffers opportunities of indulging in adventurous activities like trekking, rafting, yak safari, wildlife safari and paragliding. The state also boasts lovely family-friendly accommodations with rooms opening to gorgeous views. There’s something for every family member in India and we ensure to include it in our best holiday packages for you.</p>
            <a href="#" class="btn">Read more..</a>
        </div>
    </section>


    <!--destination section start-->
    <section class="destination" id="destination">
        <div class="heading">
            <span>our destination</span>
            <h1>makes your destinations</h1>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="images/des-2.jpg" alt="">
            <div class="content">
                <h3>tours & travels</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit est a 
                    ducimus in facilis vitae nostrum, iste atque voluptas ut dicta rem placeat
                </p>
                      <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
            </div>

            <div class="box">
                <img src="images/des-3.jpg" alt="">
            <div class="content">
                <h3>tours & travels</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit est a 
                    ducimus in facilis vitae nostrum, iste atque voluptas ut dicta rem placeat
                     </p>
                      <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
        </div>

            <div class="box">
                <img src="images/des-4.jpg" alt="">

            <div class="content">
                <h3>tours & travels</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit est a 
                    ducimus in facilis vitae nostrum, iste atque voluptas ut dicta rem placeat
                    </p>
                      <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
        </div>

            <div class="box">
                <img src="images/des-8.jpg" alt="">
            <div class="content">
                <h3>tours & travels</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit est a 
                    ducimus in facilis vitae nostrum, iste atque voluptas ut dicta rem placeat
                    </p>
                      <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
        </div>

            <div class="box">
                <img src="images/des-6.jpg" alt="">
            <div class="content">
                <h3>tours & travels</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit est a 
                    ducimus in facilis vitae nostrum, iste atque voluptas ut dicta rem placeat
                    </p>
                      <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
        </div>

            <div class="box">
                <img src="images/des-7.jpg" alt="">
            <div class="content">
                <h3>tours & travels</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit est a 
                    ducimus in facilis vitae nostrum, iste atque voluptas ut dicta rem placeat
                    </p>
                      <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box">
            <img src="images/des-8.jpg" alt="">
        <div class="content">
            <h3>tours & travels</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit est a 
                ducimus in facilis vitae nostrum, iste atque voluptas ut dicta rem placeat
                </p>
                  <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
        </div>
        </div>

        <div class="box">
            <img src="images/des-1.jpg" alt="">
        <div class="content">
            <h3>tours & travels</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit est a 
                ducimus in facilis vitae nostrum, iste atque voluptas ut dicta rem placeat
                </p>
                <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
        </div>
        </div>

        </div>
    </section>

    <!--services section-->

    <section class="service" id="service">
        <div class="heading">
            <span>our Services</span>
            <h1>countless experiences</h1>
        </div>

        <div class="box-container">
            <div class="box">
                <i class="fa fa-globe"></i>
                <h3>worldwide</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Incidunt, adipisci.</p>
            </div>

            <div class="box">
                <i class="fa fa-globe"></i>
                <h3>adventures</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Incidunt, adipisci.</p>
            </div>

            <div class="box">
                <i class="fa fa-hotel"></i>
                <h3>food & drinks</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Incidunt, adipisci.</p>
            </div>

            <div class="box">
                <i class="fa fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Incidunt, adipisci.</p>
            </div>

            <div class="box">
                <i class="fa fa-bars"></i>
                <h3>24/7 support</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Incidunt, adipisci.</p>
            </div>
            
            <div class="box">
                <i class="fa fa-female"></i>
                <h3>happy customer</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Incidunt, adipisci.</p>
            </div>
        </div>
    </section>


    <!--gallery section starts-->
    <section class="gallery" id="gallery">
        <div class="heading">
            <span>our gallery</span>
            <h1>we record memories</h1>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="images/gallery-img-1.jpg" alt="">
                <span>travel spot</span>
                <h3>iceland</h3>
            </div>

            <div class="box">
                <img src="images/gallery-img-2.jpg" alt="">
                <span>travel spot</span>
                <h3>greenland</h3>
            </div>

            <div class="box">
                <img src="images/gallery-img-3.jpg" alt="">
                <span>travel spot</span>
                <h3>alaska</h3>
            </div>

            <div class="box">
                <img src="images/gallery-img-4.jpg" alt="">
                <span>travel spot</span>
                <h3>thailand</h3>
            </div>

            <div class="box">
                <img src="images/gallery-img-5.jpg" alt="">
                <span>travel spot</span>
                <h3>brazil</h3>
            </div>

            <div class="box">
                <img src="images/gallery-img-6.jpg" alt="">
                <span>travel spot</span>
                <h3>maldives</h3>
            </div>

            <div class="box">
                <img src="images/gallery-img-7.jpg" alt="">
                <span>travel spot</span>
                <h3>new york</h3>
            </div>

            <div class="box">
                <img src="images/gallery-img-8.jpg" alt="">
                <span>travel spot</span>
                <h3>kashmir</h3>
            </div>

            <div class="box">
                <img src="images/gallery-img-9.jpg" alt="">
                <span>travel spot</span>
                <h3>london</h3>
            </div>

        </div>
    </section>


    <!--blogs section starts-->
    <section class="blogs" id="blogs">
        <div class="heading">
            <span>blogs & posts</span>
            <h1>we untold stories</h1>
        </div>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/gallery-img-3.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">Life is journey, not a destination</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, illo.</p>
                    <div class="icon">
                        <a href="#"><i class="fa fa-calendar"></i>03rd march,2021</a>
                        <a href="#"><i class="fa fa-user"></i>by admin</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">Live it to the fullest</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, illo.</p>
                    <div class="icon">
                        <a href="#"><i class="fa fa-calendar"></i> 22nd september,2021</a>
                        <a href="#"><i class="fa fa-user"></i>by manager</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">you live only once</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, illo.</p>
                    <div class="icon">
                        <a href="#"><i class="fa fa-calendar"></i>02nd may,2021</a>
                        <a href="#"><i class="fa fa-user"></i>by tech head</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--banner section starts-->
    <section class="banner">
        <div class="content">
            <span>Start your adventure</span>
            <h3>let's explore this world</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, perferendis sit! Natus odio facere modi reiciendis harum explicabo
                 fuga, rem eos ex expedita nihil ipsa iure quam, maiores et cumque 
                 voluptatibus illum eligendi. Voluptas, tempore modi tempora sit non 
                 repellat!</p>
                 <a href="#book-form" class="btn">book now</a>
        </div>
    </section>

    <!--footer section starts-->
    <section class="footer" id="footer">
        <div class="box-container">
            <div class="box">
                <a href="" class="logo">
                    <i class="fa fa-paper-plane"></i>
                    Travel
                </a>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id 
                    praesentium iste quidem expedita eos ex dolorem tenetur consectetur possimus totam.</p>

                <div class="share">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-pinterest"></a>
                </div>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home" class="links"><i class="fa fa-arrow-right"></i>home</a>
                <a href="#about" class="links"><i class="fa fa-arrow-right"></i>about</a>
                <a href="#destination" class="links"><i class="fa fa-arrow-right"></i>destination</a>
                <a href="#service" class="links"><i class="fa fa-arrow-right"></i>serivce</a>
                <a href="#gallery" class="links"><i class="fa fa-arrow-right"></i>gallery</a>
                <a href="#blogs" class="links"><i class="fa fa-arrow-right"></i>blogs</a>
                <a href="#contact" class="links"><i class="fa fa-arrow-right"></i>contact</a>
            </div>

            <div class="box">
                <h3>reach to us</h3>
                <p><i class="fa fa-map"></i>&nbsp;Satara, India</p>
                <p><i class="fa fa-phone"></i>&nbsp;123-456-7890</p>
                <p><i class="fa fa-envelope"></i>&nbsp;rutujsamiksha123@gmail.com</p>
                <p><i class="fa fa-calendar"></i>&nbsp;8:00am- 10:00pm</p>
            </div>

            <div class="box">
                <h3>Something about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque distinctio
                     ipsum maiores non dolorum consequuntur ratione quis atque laborum aliquid 
                     sit, adipisci ad ea omnis voluptate, corporis ipsam, molestias eum.</p>
            </div>
        </div>
    </section>

    <div class="credit">Created by: <span>Rutuja Jadhav</span> | all rights reserved!</div>
</body>
</html>