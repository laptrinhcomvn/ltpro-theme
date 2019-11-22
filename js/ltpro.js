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