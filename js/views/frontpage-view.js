(function() {
    var FrontPageView = function() {
        var nav = $('.nav');
        var navTab = $('.nav-tab');
        var search = $('.search-wrapper');
        var searchTab = $('.search-tab');
        var searchField = $('.search-wrapper input');

        var toggleMenu = function() {
            searchTab.toggleClass('hidden');
            navTab.toggleClass('hidden');
            nav.slideToggle(200);
        };

        var toggleSearch = function() {
            navTab.toggleClass('hidden');
            searchTab.toggleClass('hidden');
            search.find('.search-field-wrapper').slideToggle(200);

            if( search.is(':visible') ) {
                searchField.focus();
            }
        };

        var hideSearch = function() {
            navTab.toggleClass('hidden');
            searchTab.toggleClass('hidden');
            search.find('.search-field-wrapper').slideToggle(200);
        }

        navTab.on('click', toggleMenu);
        searchTab.on('click', toggleSearch);
        searchField.on('blur', hideSearch);
    };

    window.view = window.view || {};
    window.view.frontPage = new FrontPageView();
})();
