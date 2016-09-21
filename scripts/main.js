// CORRECTION FOR SAFARI 
// decrease of menu-item's "margin-left" from 15px to 10 px to prevent menu wrap 
var header = document.getElementsByClassName('header');
var menuItems = document.getElementsByClassName('menu__menu-item');
window.addEventListener("load", function() {    
    var headerHeight = window.getComputedStyle(header[0]).getPropertyValue('height');
    headerHeight = parseFloat(headerHeight);
    // menu items may wrap, it leads to increase of header height.
    // If it is more than standard, then menu=item's margin-left has to be decreased to 10px
    if (headerHeight > 120) {
        for (var i = 0; i < menuItems.length; i++) {
            menuItems[i].style.marginLeft = "10px";
        }
    }
});

// COLLAPSE MENU ON MOBILE DEVICES
// hamburger menu button
var menuButton = document.getElementsByClassName('menu-collapse-button');
var menu = document.getElementsByClassName('menu');
// section slider
var slider = document.getElementsByClassName('slider');
// section About Us
var aboutUs = document.getElementsByClassName('about-us');
function showMenu() {
    menu[0].style.transform = "translateX(300px)";
    menuButton[0].addEventListener('click', hideMenu);
    aboutUs[0].addEventListener('click', hideMenu);
    slider[0].addEventListener('click', hideMenu);  
}
function hideMenu() {
    menu[0].style.transform = "translateX(0px)";
    menuButton[0].removeEventListener('click', hideMenu);
    slider[0].removeEventListener('click', hideMenu);
    aboutUs[0].removeEventListener('click', hideMenu);
}
menuButton[0].addEventListener('click', function() {
    showMenu();   
});

// SLIDER ANIMATION
// collection of divs
var sliderWrapperSlide = document.getElementsByClassName('slider-wrapper__slide');
// collection of buttons
var sliderNavigationButton = document.getElementsByClassName('slider-navigation__button');    
// number of active div. Animation starts from last div
var slidesNumber = sliderWrapperSlide.length - 1;
// all divs get "opacity: 1" and "z-index: 2"
for (var i = 0; i <= slidesNumber; i++) {
    sliderWrapperSlide[i].style.opacity = 1;
    sliderWrapperSlide[i].style.zIndex = 2;	
}
// button of active div gets corresponding class
sliderNavigationButton[slidesNumber].classList.add('slider-navigation__button_active');
// variable to stop animation in the case of button click.
// Default value "1" permits animation
var sliderPlay = 1;
// function to change slide with button click
function changeSlideByClick() {
    for (var j = 0; j < sliderWrapperSlide.length; j++) {
        if (j <= slidesNumber) {
          sliderWrapperSlide[j].style.opacity = 1;        
        } else {
          sliderWrapperSlide[j].style.opacity = 0;
        }
        sliderNavigationButton[j].classList.remove('slider-navigation__button_active');                         
    }
    sliderNavigationButton[slidesNumber].classList.add('slider-navigation__button_active'); 
}
// variable with window width to determine whether device is mobile or not
var windowWidth = window.innerWidth;
// addEventListener for buttons. It determines required 
// number of div and changes "sliderPlay" value to "0" for 
// animation break
var sliderNavigation = document.getElementById('id-slider-navigation');
sliderNavigation.addEventListener('click', function(e) {
    if (e.target && e.target.nodeName == "A") {
        for (var i = 0; i < sliderNavigationButton.length; i++) {
    		    if (sliderNavigationButton[i] == e.target) {   	    			
    			      slidesNumber = i;   	    			
    			      sliderPlay = 0;
                // change slide by click without animation for mobile devices
                if (windowWidth < 768) {
                    changeSlideByClick();
                }	    			
    		    }   	    		
    	  }
    }
});  
// assigning of variable to 5 frames per sec 
var fpsInterval = 1000/20;
var slideOpacity;
// two variables to modify speed of animation
var timePassed = 0;
var progress;
// animation function
function opacityImageDecrease(timestamp) {   
    // check whether timestamp corresponds to established interval
    if (timestamp > fpsInterval) {       
        fpsInterval += 1000/20;
        slideOpacity = Number(sliderWrapperSlide[slidesNumber].style.opacity);	  
  	    // check whether opacity is not naught and any button is not clicked,
        // if it is so opacity of div starts gradually decrease by 0.005
        if (slideOpacity > 0 && sliderPlay == 1) {
  	   	    // determine animation progress and modifying it 
            // with corresponding function for easeIn mode
            timePassed += 1000/20;
            progress = timePassed / 20000;           
            function progressCalculated(progress) {
              return Math.pow(progress, 3);
            }           
            slideOpacity -= progressCalculated(progress);           
  	   	    sliderWrapperSlide[slidesNumber].style.opacity = slideOpacity;	   	   
  	   	    requestAnimationFrame(opacityImageDecrease); 
  	    } else {
            // if opacity is naught or button is pressed
  	   	    sliderNavigationButton[slidesNumber].classList.remove('slider-navigation__button_active');
  	   	    slidesNumber -= 1;
            timePassed = 0;	
            // then it checks is any button is pressed.   	   
  	   	    if (sliderPlay == 0) {               
                slidesNumber += 1;               
                sliderWrapperSlide[0].style.zIndex = 2;
                changeSlideByClick();
                if (slidesNumber == 0) {
                  	sliderWrapperSlide[0].style.zIndex = 3;
                  	for (var i = 1; i < sliderWrapperSlide.length; i++) {
  	   	    		        sliderWrapperSlide[i].style.opacity = 1;
  		   	    	    }
                }
                sliderPlay = 1;
                requestAnimationFrame(opacityImageDecrease);
            // There is simple code for all divs except first div.      
  	   	    } else if (slidesNumber > 0) {
  	   	    	  sliderNavigationButton[slidesNumber].classList.add('slider-navigation__button_active');
  	   	    	  requestAnimationFrame(opacityImageDecrease);
                // That is certain code for first div.
  	   	    } else if (slidesNumber == 0) {
  	   	    	  sliderNavigationButton[slidesNumber].classList.add('slider-navigation__button_active');
  	   	    	  sliderWrapperSlide[0].style.zIndex = 3;
  	   	    	  for (var i = 1; i < sliderWrapperSlide.length; i++) {
  	   	    	  	sliderWrapperSlide[i].style.opacity = 1;
  	   	    	  }
  	   	    	  requestAnimationFrame(opacityImageDecrease);	
                // And some code to finish animation cycle and start another one.   	    	
  	   	    } else if (slidesNumber == -1) {	   	    	 
  	   	    	  sliderWrapperSlide[0].style.zIndex = 2;
  	   	    	  sliderWrapperSlide[0].style.opacity = 1;
  	   	    	  slidesNumber =  sliderWrapperSlide.length - 1;
  	   	    	  sliderNavigationButton[slidesNumber].classList.add('slider-navigation__button_active');
  	   	    	  requestAnimationFrame(opacityImageDecrease);
  	   	    } 	  
        }
    } else {
        requestAnimationFrame(opacityImageDecrease);
    }        
}
// prohibition of automatic sliding for mobile devices
if (windowWidth >= 768) {
    requestAnimationFrame(opacityImageDecrease);
}

// TESTIMONIALS SLIDER
// collection of testimonials and its length
var testimonials = document.getElementsByClassName('testimonial');
var testimonialsLength = testimonials.length;
// two counters for slider control
var testimonialSliderCycle = 0;
var testimonialsIndex;
// collection of recommenders
var recommenderContainer = document.getElementsByClassName('recommender-icon-container');
// assigning different values of testimonials move according to window width value
var stepMoveRight, stepMoveLeft;
if (windowWidth < 768) {
    stepMoveRight = 310;
    stepMoveLeft = -310;
} else {
    stepMoveRight = 672;
    stepMoveLeft = -672;
}
// sequence of reccomenders icons moves and values for testimonials moves
var recommenderIconsIndicies = {
    0: [3, 1, 2, stepMoveRight],
    1: [1, 2, 3, 0],
    2: [2, 3, 1, stepMoveLeft],
    3: [1, 2, 3, 0]
};
// recommenders icons slider
function recommenderIconSlide(testimonialsIndex) {
    recommenderContainer[0].style.backgroundImage = "url(images/recommender" + recommenderIconsIndicies[testimonialsIndex][0] + "-icon.png)";
    recommenderContainer[1].style.backgroundImage = "url(images/recommender" + recommenderIconsIndicies[testimonialsIndex][1] + "-icon.png)";
    recommenderContainer[2].style.backgroundImage = "url(images/recommender" + recommenderIconsIndicies[testimonialsIndex][2] + "-icon.png)";
}
// initial rendering of background images for recommenders containers
recommenderIconSlide(1);
// testimonials slider
function testimonialSlider() {
    // counter to determine one of four steps
    testimonialsIndex = testimonialSliderCycle%4;
    // show corresponding recommender icon
    recommenderIconSlide(testimonialsIndex);
    // assignment of corresponding values for testimonial move
    for (var i = 0; i < testimonialsLength; i++) {
        testimonials[i].style.transform = "translateX(" + recommenderIconsIndicies[testimonialsIndex][3] + "px)";
    }
    testimonialSliderCycle++;  
}
// prohibition of automatic sliding for mobile devices
if (windowWidth >= 768) {
    var testimonialSliderInterval = setInterval(testimonialSlider, 8000);
}
//adding of eventListener to recommenders icons
var backgroundImage;
var imageNumber;
var recommendersIconsContainer = document.getElementsByClassName('recommenders-icons-container');
recommendersIconsContainer[0].addEventListener('click', function(e) {    
    //determination of property of "background-image"
    backgroundImage = e.target.style.backgroundImage;
    // slicing of string with b-image url to get number of recommender
    imageNumber = backgroundImage.slice(23, 24);
    imageNumber = parseInt(imageNumber, 10) - 1;
    // assignment of counter to clicked recommender index
    testimonialSliderCycle = imageNumber;
    testimonialSlider();
    // prohibition of automatic sliding for mobile devices
    if (windowWidth >= 768) {
        // make pause in the case of click and then continue sliding
        clearInterval(testimonialSliderInterval);
        setTimeout(function() {
            testimonialSliderInterval = setInterval(testimonialSlider, 8000);
        }, 6000); 
    }
});
