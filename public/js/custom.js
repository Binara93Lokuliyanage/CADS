

  $(document).ready(function () {
    $('.slider-section .owl-carousel').owlCarousel({
      items: 3,
      loop: true,
      center: true,
      margin: 24,
      autoplay: false,
      nav: false,
      navContainer: '.success-slider .custom-nav',
      dots: true,
      dotsContainer: '.slider-dots',
      navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
      responsive: {
        1440: {
            items: 3
        },
        900: {
          items: 3
        },
        660: {
          items: 1.3
        },
        0: {
          items: 1.1
        }

    }
    });
  });

  

  document.addEventListener('DOMContentLoaded', function() {
    // Get the current URL path
    var currentPath = window.location.pathname;

    // Define a mapping of URL paths to menu item IDs
    var menuItems = {
        "/about": "menu-about",
        "/advisory-council": "menu-advisory-council",
        "/programs": "menu-programs",
        "/staff": "menu-staff",
        "/events": "menu-events"
    };

    // Check if the current path exists in the menuItems mapping
    if (menuItems[currentPath]) {
        // Get the corresponding menu item element
        var menuItem = document.getElementById(menuItems[currentPath]);
        if (menuItem) {
            // Add the text-primary class to the menu item
            menuItem.classList.add('text-primary');
        }
    }
});

  

  $(document).ready(function() {
    var currentPath = window.location.pathname;
    currentPath = currentPath.replace(/\/$/, "");

    // Find the corresponding menu item and add the "active" class for the bottom menu
    var bottomMenuItemId = currentPath === "" ? "home" : currentPath.substring(1);
    $('#' + bottomMenuItemId).addClass('active');

    // Find the corresponding menu item and add the "active" class for the top menu
    var topMenuItemId = currentPath === "" ? "home" : currentPath.substring(1); // Adjust for home page
    $('#' + topMenuItemId).addClass('active');
});

$(document).ready(function () {
  $('#mobile-menu-icon').click(function () {
      $('#mid-bar').toggleClass('hide-bar');
      $('#top-bar').toggleClass('rotate-top');
      $('#bot-bar').toggleClass('rotate-bot');
      $('#menu-dropdown').toggleClass('open');
      $('.mobile-menu-social-media-wrapper').toggleClass('show-hide');
  });
});

$(document).ready(function () {
  $('#admin-mobile-icon').click(function () {
      $('#mobile-dropdown').toggleClass('open');
  });
});

$(document).ready(function () {
  // Find the maximum height among all testimonial cards
  var maxHeight = 0;

  $('.testimonial-card').each(function () {
      var cardHeight = $(this).height();
      maxHeight = Math.max(maxHeight, cardHeight);
  });

  // Set the maximum height for all testimonial cards
  $('.testimonial-card').height(maxHeight);
});

$(document).ready(function(){
  $('.bottom-menu__item').mouseover(function(){
    $('.menu-drop-second-level').hide();
      var itemId = $(this).attr('id');

      var dropdownId = itemId + "-dropdown";
      var $dropdown = $('#' + dropdownId);

      if ($dropdown.length > 0) {
          $dropdown.css('display', 'flex');
      }
  });
  

  $('.menu-drop-second-level__item').mouseover(function(){
    $('.thired-level').hide();
      var itemId = $(this).attr('id');

      var dropdownId = itemId + "-dropdown";
      var $dropdown = $('#' + dropdownId);

      if ($dropdown.length > 0) {
          $dropdown.css('display', 'block');
      }
  });
  

  $('.bottom-menu__item').mouseout(function(event){
    var currentClass = $(event.relatedTarget).attr('class');

    if (
      currentClass.hasClass('menu-drop-second-level') ||
      $(event.relatedTarget).closest('#drop-down-header-container').length > 0
    ) {
        return; 
    }

    var itemId = $(this).attr('id');

    var dropdownId = itemId + "-dropdown";
    var $dropdown = $('#' + dropdownId);

    if ($dropdown.length > 0) {
        $dropdown.css('display', 'none');
    }
});

$('#drop-down-header-container').mouseout(function(event){
  var currentClass = $(event.relatedTarget).attr('class');

  if (
    $(event.relatedTarget).closest('#drop-down-header-container').length > 0
  ) {
      return; 
  }

  $('.menu-drop-second-level').hide();
});

});



// $(document).ready(function () {
//   $('.quiz-next-btn').on('click', function () {
//       var questionId = $('input[type="radio"]:checked').attr('name');
//       var answerId = $('input[type="radio"]:checked').val();

//       $.ajax({
//           type: 'POST',
//           url: '{{ route("save-answer") }}',
//           data: {
//               '_token': '{{ csrf_token() }}',
//               'question_id': questionId,
//               'answer_id': answerId,
//           },
//           success: function (data) {
//               // Handle success, e.g., show a success message
//               console.log('Answer saved successfully');
//           },
//           error: function (error) {
//               // Handle error, e.g., show an error message
//               console.error('Error saving answer');
//           }
//       });
//   });
// });

$(document).ready(function() {
  $('.mobile-menu-wrapper').click(function() {
      $(this).toggleClass('mobile-menu-active');
      $('.mobile-menu-content-wrapper').toggleClass('content-active ');
  });

  $('.mobile-menu').click(function() {
    $('.mobile-menu-content-wrapper').removeClass('content-active ');
});

$('.popup-close').click(function() {
  $('.success-popup-wrapper').removeClass('success-popup-active');
});

});

$(document).ready(function() {
  $('#read-more').click(function() {
      $('.popup-section').toggleClass('popup-active');
  });
  $('#close-btn').click(function() {
    $('.popup-section').toggleClass('popup-active');
});
});