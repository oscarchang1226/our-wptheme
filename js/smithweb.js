(function() {
    var header = document.querySelector('body > header');
    if (undefined === header) {
        return this;
    }
    document.body.onscroll = function() {
        if (document.body.scrollTop > 0) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

})();