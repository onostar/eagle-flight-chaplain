<?php 
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $busStop = $_POST['busStop'];
    $itemOrdered = $_POST['orderedItem'];
    $quantity = $_POST['quantity'];
    $message = $_POST['otherInformation'];
    $orderContent = "From: $name \n Phone Number: $phone \n Address: $address \n City: $city \n Nearest Bus stop: $busStop \n Food requested: $itemOrdered \n Quantity: $quantity \n Other Information: $message";
    $recipient = "info@onostarmedia.com.ng";
    $subject = "You have an order to attend to from Chef Pee Signatures";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $orderContent, $mailheader) or die("Error!");
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Chef Pee Signatures</title>
        <meta name='author' content='Onostar media'>
        <meta name='description' content='Chef pee signatures is a catering company that render all forms of catering services, from baking of various pasteries to cooking of all delicacies(Nigerian or overseas). We offer services to clients on weddings, burials, birthdays, anniversary and more'>
        <meta name='keyword' content='catering, baking, cooking, food, rice, jollof rice, stew, banga soup, ogbono soup, fried rice, salad, egusi soup, okra soup'>
        <link rel='icon' href='images/chef-pee-logo.png' type='image/png' size='33X32'>
        <link rel='stylesheet' href='fontawesome-free-5.12.1-web/css/all.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css'>
        <link rel='stylesheet' href='bootstrap.min.css'>
       
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <section class='frontPage' id='frontPage'>
            <header class='main-head' id='mainHeader'>
                <h1 id='h1'><a href='index.html' title='home'><img class='logo' src='images/chef-pee-logo3.png' alt='chef pee signatures'></a></h1>
                <nav id='navigation'>
                    <ul>
                        <li><a href='about.html' title='who we are'>About us</a></li>
                        <li><a href='javascript:void(0)' title='Our menus'>Menu <i class='fas fa-sort-down'></i></a>
                            <ul>
                                <li><a href='corporate_cuisines.html' title='strictly for the office'>Corporate cuisines</a></li>
                                <li><a href='home_brunches.html' title='Specially for home consumption'>In-home brunch</a></li>
                                <li><a href='events_cuisines.html' title='cuisines for special events'>Events</a></li>
                                <li><a href='cakes.html' title='Special cakes'>Cakes</a></li>
                                <li><a href='special_cuisines.html' title='barbecues N hot-dogs'>Special cuisines</a></li>
                            </ul>
                        </li>
                        <li><a href='gallery.html' title='Our photo gallery'>Gallery</a></li>
                        <li><a href='blog.html' title='Tips and Tricks'>Blog</a></li>
                        <li><a href='contact.html' title='contact us'>Get in touch</a></li>
                    </ul>
                </nav>
                <div class='menu-icon' onclick='displayMenu()'>
                    <a href='javasrcipt:void(0)'><i class='fas fa-bars'></i></a>
                </div>
            </header>
            <div class='banner'>
            <img src='images/about.jpg' alt='chef pee signatures'>
            </div>
        <div class='tag'>
            <h2>Lets take your order</h2>
            <form method='POST' action='order.php' id='orderForm'>
                <input type='text' id='fullName' name='fullName' placeholder='Full Name*' required>
                <input type='email' name='email' id='email' placeholder='Email'>
                <input type='tel' id='phone' name='phone' placeholder='Phone Number*' required>
                <input type='text' name='address' id='address' placeholder='Delivery Address*' required>
                <input type='text' name='city' id='city' placeholder='City'> 
                <input type='text' name='busStop' id='busStop' placeholder='Closest Bus Stop*' required>
                <select name='orderedItem' id='orderedItem' required>
                    <option value='' selected>Select your order</option>
                    <option value='Food of the day'>Food of the day</option>
                    <option value='Fried rice with chicken'>Fried rice and Chicken</option>
                    <option value='Jollof rice with chicken'>Jollof rice and Chicken</option>
                    <option value='Fried rice with salad and chicken'>Fried rice with salad and Chicken</option>
                    <option value='Jollof rice with salad and chicken'>Jollof rice with salad and Chicken</option>
                    <option value='CatFish baga soup '>CatFish Banga Soup</option>
                    <option value='CatFish baga soup with starch '>CatFish Banga Soup with starch</option>
                    <option value='Fried rice with chicken'>Fried rice and Chicken</option>
                    <option value='Fried rice with chicken'>Fried rice and Chicken</option>
                    <option value='Fried rice with chicken'>Fried rice and Chicken</option>
                    <option value='Fried rice with chicken'>Fried rice and Chicken</option>
                    <option value='Fried rice with chicken'>Fried rice and Chicken</option>
                </select> 
                <input type='number' name='quantity' id='quantity' placeholder='Quantity*' required>
                <textarea name='otherInformation' id='otherInformation' placeholder='Other Information'></textarea>
                <button type='submit' name='order' id='order'>Order</button>
            </form>
        </div>
        
    </section>
    <main class='container'>
        <!-- Tips and tricks -->
        <section class='tips-n-tricks'></section>

        <!-- social media section -->
        <section class='connect'>
            <h2 class='text-center'>Connect with us</h2>
            <div class='socila-media'>
                <a href='#' title='Connect with us on facebook'><i class='fab fa-facebook'></i></a>
                <a href='#' title='Connect with us on Instagram'><i class='fab fa-instagram'></i></a>
                <a href='#' title='Connect with us on twitter'><i class='fab fa-twitter'></i></a>
                <a href='#' title='Connect with us on youtube'><i class='fab fa-youtube'></i></a>
            </div>
        </section>
    </main>
    <footer>
        <div class='container'>
            <div class='row'>
                <div class='col-md-4 work-hours'>
                    <h3>Working hours</h3>
                    <p>Weekdays: 8:00am - 4:00pm</p>
                    <p>Weekends: 10:00am - 4:00pm</p>
                </div>
                <div class='col-md-4 col-sm-4 bottom-nav'>
                    <h3>Contact us</h3>
                    <p><i class='fas fa-mobile-alt'></i> Call us: +2348012345678</p>
                    <p><i class='fas fa-envelope-open-text'></i> info@chefpeesignatures.com</p>
                </div>
                <div class='col-md-4 copy-right'>
                    <p>Chef Pee &copy; 2020.  All Rights reserved </p>
                </div>
            </div>
        </div>
    </footer>
    <div class='to-top'>
        <a href='#frontPage'><i class='fas fa-angle-double-up'></i></a>
    </div>
    <div class='help'>
        <a href='javascript:void(0)'><i class='fab fa-whatsapp'></i> How may we be of help?</a>
    </div>
    <script src='script.js'></script>
    <div class='order_confirmation'>
        <div class='content'>
            <p>You have placed your order!!!</p>
            <p>We will deliver in a bit</p>
            <div class='buttons'>
                <a href='index.html'><button>Home</button</a>
                <a href='order.html'><button>New Order</button</a>
            </div>
        </div>
    </div>
</body>
</html>";

   

?>