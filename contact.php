<?php 
    $name = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $phone = $_POST['contactPhone'];
    $address = $_POST['contactAddress'];
    $service = $_POST['serviceRequest'];
    $eventDate = $_POST['eventDate'];
    $eventBudget = $_POST['eventBudget'];
    $eventLocation = $_POST['eventLocation'];
    $message = $_POST['contactMessage'];
    $formContent = "From: $name \n Phone Number: $phone \n Address: $address \n Service requested: $service \n Event date: $eventDate \n Event Budget: $eventBudget \n Location of Event: $eventLocation \n Message: $message";
    $recipient = "info@onostarmedia.com.ng";
    $subject = "Contact form from Chef Pee Signatures";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formContent, $mailheader) or die("Error!");
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
        <section class='frontPage' id='contactPage'>
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
                        <li><a class='active' href='contact.html' title='contact us'>Get in touch</a></li>
                    </ul>
                </nav>
                <div class='menu-icon' onclick='displayMenu()'>
                    <a href='javasrcipt:void(0)'><i class='fas fa-bars'></i></a>
                </div>
            </header>
            <div class='banner'>
            <img src='images/chef-pee-contact.jpg' alt='chef pee signatures'>
        </div>
        <div class='tag'>
            <h2>Get in touch</h2>
            <p>Please feel free to reach out to our friendly and responsive CHEF PEE staff with any questions you may have.</p>
        </div>
        
    </section>
    <main class='container'>
        <section class='about contact-us'>
            <h2>We are here to serve</h2>
            <div class='row'>
                <div class='col-md-6 text-justify'>
                   <p>Our team is entirely committed to you and your needs. We are very prompt and return inquiries within minutes during our normal hours of operation. Please feel free to inquire about any questions or comments you may have.</p>
                   <p>You can also visit us at<br>
                195 Edjeba road, Edjeba Warri, Delta state.<br> Or call us: +2348147540990<br>Send us a mail: info@chefpeesignatures.com</p>
                </div>
                <div class='col-md-6 contactForm'>
                    <h2 class='text-center'>Drop your message</h2>
                    <form method='POST' action='contact.php' id='contactForm'>
                        <div class='contact-flex'>
                            <input type='text' name='contactName' id='contactName' placeholder='Full Name*' required>
                            <input type='text' name='contactEmail' id='contactEmail' placeholder='Email*' required>
                        </div>
                        <div class='contact-flex'>
                            <input type='tel' name='contacPhone' id='contactPhone' placeholder='Phone Number*' required>
                            <input type='text' name='contactAddress' id='contactAddress' placeholder='Your Address*' required>
                        </div>
                        <div class='contact-flex'>
                            <select name='serviceRequest' id='serviceRequest'>
                                <option selected value=''>Service Request</option>
                                <option value='Complaints and review'>General Complaints and review</option>
                                <option value='Full catering service'>Full catering service</option>
                                <option value='Corporate catering'>Corporate catering service</option>
                                <option value='Drop-off catering'>Drop-off catering</option>
                                <option value='Wedding package'>Wedding package</option>
                                <option value='cooking lessons'>Cooking lessons</option>
                            </select>
                            <input type='text' name='eventDate' id='eventDate' placeholder='Event Date'>
                        </div>
                        <div class='contact-flex'>
                            <input type='text' name='eventBudget' id='eventBudget' placeholder='Event Budget'>
                            <input type='text' name='eventLocation' id='eventLocation' placeholder='Event Location'>
                        </div>
                        <textarea name='contactMessage' id='contactMessage' placeholder='Your message'></textarea>
                        <button type='submit' name='submitContact' id='submitContact'>Send</button>
                    </form>
                </div>
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
    <script>alert('Thanks for Contacting us!!! \n We will be in touch shortly')</script>
</body>
</html>";


?>