// Hamburger Menu Code https://codepen.io/Tetsu4819/pen/dyYwRve
ham.addEventListener('click', function() {
	ham.classList.toggle('clicked');
  menu_wrapper.classList.toggle('clicked');
});

// Page Transition Code https://blog.adam-marsden.co.uk/minimal-page-transitions-with-jquery-css-d97f692d5292 
$(function() {

  $('a').each(function() { /* [1] */
       if ( location.hostname === this.hostname || !this.hostname.length ) { /* [1] */

          var link = $(this).attr("href"); /* [2] */

          if ( link.match("^#") ) { /* [3] */

              $(this).click(function() {
                  var target = $(link); /* [4] */ 
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']'); /* [4] */ 
                  if (target.length) {
                      $('html,body').animate({ /* [5] */ 
                          scrollTop: target.offset().top - 70 /* [5] */ 
                      }, 1000); return false; /* [5] */ 
                  }
              });

          } else if ( link.match("^mailto") ) { /* [6] */ 
              // Act as normal  /* [6] */ 
          } else {

              $(this).click(function(e) {
                  e.preventDefault(); /* [7] */ 
                  $('html').addClass('fadeSiteOut'); /* [8] */ 
                  setTimeout(function() { /* [9] */
                      window.location = link; /* [9] */
                  }, 500); /* [9] */
              });

          }

      }
  });

});

