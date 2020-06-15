window.onscroll = function(){changeHeader(), showTotopButton(), displayAbout(), displayTips(), displayContactForm()};
function changeHeader(){
    if(document.body.scrollTop > 35 || document.documentElement.scrollTop > 35){
        document.getElementById('mainHeader').className = 'new-header';
        /* document.getElementById('h1').style.width = '15%'; */
        /* document.querySelector('.logo').className = 'new-logo'; */
    }
    else{
        document.getElementById('mainHeader').className = 'main-head';
        /* document.getElementById('h1').style.width = '25%'; */
        /* document.querySelector('.logo').className = 'logo'; */
    }
}

function displayMenu(){
    let mobileMenu = document.getElementById('navigation')
    if(mobileMenu.style.display === "block"){
        mobileMenu.style.display = "none";
    }
    else{
        mobileMenu.style.display = "block";
    }
}
function showTotopButton(){
    let totopButton = document.querySelector('.to-top');
    if(document.body.scrollTop > 200 || document.documentElement.scrollTop > 200){
        totopButton.style.display = "block";
    }
    else{
        totopButton.style.display = "none"; 
    }
}

setTimeout(function(){
    let orderButton = document.querySelector('.order');
    orderButton.style.display = "block";
}, 10000)

setTimeout(function(){
    let helpButton = document.querySelector('.help');
    helpButton.style.display = "block";
}, 15000)

//display about us section
function displayAbout(){
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
        document.getElementById('whoWeAre').className = 'new-about';
    }
    else{
        document.getElementById('whoWeAre').className = '';
    }
}

//display featured cuisines
function displayFeatured(){
    if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500){
        document.querySelector('.featured_cousines').style.display = 'block';
    }
    else{
        document.querySelector('.featured_cousines').style.display = 'none';
    }
}

function displayTips(){
    if(document.body.scrollTop > 2000 || document.documentElement.scrollTop > 2000){
        document.querySelector('.tips').style.display = 'block';
    }
    else{
        document.querySelector('.tips').style.display = 'none';
    }
}
/* function displayFoodOfTheDay(){
    if(document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000){
        document.querySelector('.food-of-the-day').style.display = 'block';
    }
    else{
        document.querySelector('.food-of-the-day').style.display = 'none';
    }
} */
//display call contact form
/* function displayContactForm(){
    if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
        document.querySelector('.contactForm').style.display = 'block';
    }
    document.querySelector('.contactForm').style.display = 'none';
}
 */

 //display order confirmation
 /* setTimeout(function(){
   document.querySelector('.order_confirmation').style.display = "block"; 
 }, 2000); */