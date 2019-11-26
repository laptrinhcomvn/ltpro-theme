WebFont.load({
    google: {
        families: ['Google Sans', 'Product Sans', 'Roboto']
    },
    active: function () {
        sessionStorage.fonts = true;
    }
});
(function () {
    if (sessionStorage.fonts) {
        document.documentElement.classList.add('wf-active');
    }
})();

jQuery(function(){
    const mainMobileNav = jQuery('#main-nav-mobile');
    mainMobileNav.on('show.bs.collapse', function () {
        mainMobileNav.addClass('fadeInLeft');
    });
    mainMobileNav.on('shown.bs.collapse', function () {
        mainMobileNav.removeClass('fadeInLeft');
    });
    mainMobileNav.on('hide.bs.collapse', function () {
        mainMobileNav.addClass('fadeOutLeft');
    });
    mainMobileNav.on('hidden.bs.collapse', function () {
        mainMobileNav.removeClass('fadeOutLeft');
    });
    mainMobileNav.on("click", "a", null, function () {
        mainMobileNav.collapse('hide');
    });
});

