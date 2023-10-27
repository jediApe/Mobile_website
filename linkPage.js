// DOM Ready event handler
document.addEventListener('DOMContentLoaded', function () {
    // Add animation class to heading
    var heading = document.querySelector('.animate__animated');
    heading.classList.add('animate__swing');

    // Add click event listeners to navigation buttons
    var buttons = document.querySelectorAll('.button');
    buttons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            var target = button.getAttribute('href');
            scrollToSection(target);
        });
    });
});

// Scroll to section function
function scrollToSection(target) {
    var section = document.querySelector(target);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}

// Add click event listener to the arrow
var arrow = document.querySelector('.arrow-down');
arrow.addEventListener('click', function () {
    // Your code here for arrow click behavior
    var arrow = document.q
});


