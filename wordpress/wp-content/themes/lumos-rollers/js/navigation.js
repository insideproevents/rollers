/**
 * Navigation toggle script
 */
(function() {
    var toggle = document.querySelector('.mobile-toggle');
    var nav = document.querySelector('.main-navigation');
    
    if (toggle && nav) {
        toggle.addEventListener('click', function() {
            nav.classList.toggle('active');
            toggle.classList.toggle('active');
        });
    }
})();