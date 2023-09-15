$(document).ready(function(){
   
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


    //side menu
    $('.menu_btn').click(function(){
        $(this).toggleClass('menu_open');
        $('.gnb').toggleClass('open');
        $('.opacity_b').toggleClass('on');


        // if ($('.menu_btn').hasClass('menu_open')) {
        //     $('.gnb').addClass('open');
        // } else {
        //     $('.gnb').removeClass('open');
        // }
    });


    // accoedion

    $("#accordion .link > a").click(function (e) {
        $("#accordion ul ul").slideUp(),
          $(this).next().is(":visible") || $(this).next().slideDown(),
          e.stopPropagation();
        

        if ($(this).parent().hasClass('active') == false) {
            $("#accordion .link").removeClass('active');
            $(this).parent().addClass('active');

        } else if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        }
        

    });
    
      

});

