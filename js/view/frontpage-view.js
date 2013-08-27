(function() {
    var FrontPageView = function() {
        var nav = $('.nav-wrapper');
        var navTab = $('.nav-tab');
        var navClose = $('.nav-close');
        var search = $('.search-wrapper');
        var searchTab = $('.search-tab');
        var searchField = $('.search-wrapper input');

        var toggleMenu = function() {
            searchTab.toggleClass('hidden');
            navTab.toggleClass('hidden');
            nav.fadeToggle(200);
        };

        var toggleSearch = function() {
            navTab.toggleClass('hidden');
            searchTab.toggleClass('hidden');
            search.fadeToggle(200);

            if( search.is(':visible') ) {
                searchField.focus();
            }
        };

        var hideSearch = function() {
            navTab.toggleClass('hidden');
            searchTab.toggleClass('hidden');
            search.fadeOut(200);
        };

        var hideSearchKeyboard = function(e) {
            if(e.keyCode === 27) /* escape */ {
                searchField.blur();
            }
        }

        navTab.on('click', toggleMenu);
        navClose.on('click', toggleMenu);
        searchTab.on('click', toggleSearch);
        searchField.on('blur', hideSearch);
        searchField.on('keyup', hideSearchKeyboard);

        $(".slides").slidesjs({
            width: 600,
            height: 200,
            navigation: {
                active: false
            },
            play: {
                auto: true,
                active: false
            },
            pagination: {
                active: false
            }
        });
    };

    window.view = window.view || {};
    window.view.frontPage = new FrontPageView();
})();
