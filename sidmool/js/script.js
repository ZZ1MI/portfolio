$(document).ready(function(){
    // var sliderWidth = $('.solution.items .item').length;

    // console.log(sliderWidth);
    
    // var sliwidth = $('.solution.slider').css('width', 'calc(310px * ' + sliderWidth);

    // console.log(sliwidth);


    // var solutionSl = 0;

    //     $('.slide-nav .prev').click(function() {

    //         solutionSl--;
    //         if(solutionSl < 0) {
    //             solutionSl = sliwidth
    //         }

    //         $('.solution.slider').css('transform','translateX('+(-solutionSl * 330)+'px');
            

    //     });

    //     $('.slide-nav .next').click(function() {

    //         solutionSl++;

    //         if(solutionSl > sliwidth) {
    //             solutionSl = 0
    //         }

    //         $('.solution.slider').css('transform','translateX('+(-solutionSl * 330)+'px');

            

    //     });


    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
        } else {
        navbar.classList.remove("sticky");
        }
    }

    const slider = document.querySelector(".items");
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener("mousedown", (e) => {
  isDown = true;
  slider.classList.add("active");
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
  console.log("erreerre", scrollLeft);
});

slider.addEventListener("mouseleave", () => {
  isDown = false;
  slider.classList.remove("active");
});

slider.addEventListener("mouseup", () => {
  isDown = false;
  slider.classList.remove("active");
});

slider.addEventListener("mousemove", (e) => {
  if (!isDown) return; // stop the fn from running
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 2;
  slider.scrollLeft = scrollLeft - walk;

  console.log("sdsd", scrollLeft);
  console.log(slider.scrollLeft);
});

//   touchEvents

slider.addEventListener("touchstart", (e) => {
  isDown = true;
  slider.classList.add("active");
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});

slider.addEventListener("touchend", () => {
  isDown = false;
  slider.classList.remove("active");
});

slider.addEventListener("touchcancel", () => {
  isDown = false;
  slider.classList.remove("active");
});

slider.addEventListener("touchmove", (e) => {
  if (!isDown) return; // stop the fn from running
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 2;
  slider.scrollLeft = scrollLeft - walk;
});

});

