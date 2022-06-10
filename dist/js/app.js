const toggler = document.getElementById('toggler');
const menu = document.querySelector('.nav');
const header = document.querySelector('header');


toggler.addEventListener('click', function(){
    menu.classList.toggle('open');
});


/* Accordion - FAQ - START */
const accordions = document.querySelectorAll('.accordion');

accordions.forEach(accordion => {
    //Add event listener to each ACCORDION , use function not fat arrow to get access to "this"
    accordion.addEventListener("click", function(e) {
        //Check the event targe is an item header
        if (e.target.matches(".accordion__question")) {
            //Get current '.active', here "this" refers to the accordion group clicked
            let active = this.querySelector(".active");
        
        //Toggle element if '.active' element clicked
        if (active == e.target) {
            e.target.classList.toggle("active");

        } else {
            //Remove current '.active'
            if (active) {
                active.classList.remove("active");
            }
            //Add '.active'        
            e.target.classList.add("active");
        }
      }
    });
  });
/* Accordion - FAQ - END */



window.addEventListener('scroll', function () {
    let windowPosition = window.scrollY > 0;


    header.classList.toggle('scrolling-active', windowPosition);
});