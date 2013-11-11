(function() {
    var nameField;
    var emailField;
    var messageField;
    var formEl;
    var spinner;

    var url = '/wp-content/themes/rg12/ajax/mail.php';

    var contactFormHandler = function(event) {
        event.preventDefault();
        formEl.fadeOut(200);
        formEl.parent().append(spinner).fadeIn(200);
        $.ajax({
            success: successHandler,
            error: errorHandler,
            data: formEl.serialize(),
            url: url,
            method: 'post',
            dataType: 'json'
        });
    };

    var successHandler = function(data) {
        if( data.success !== true ) {
            errorHandler();
            return;
        }
        var successEl = $('<div class="success"><p class="lead"></p></div>');
        var successHtml = 'Mottatt! Vi skal svare deg i løpet av kort tid. I mellomtiden kan du sjekke ' +
                          '<a href="/nyheter">bloggen vår</a>!';
        successEl.find('p').html(successHtml);
        spinner.hide();
        formEl.parent().append(successEl);
    };

    var errorHandler = function() {
        var errorEl = $('<div class="error"><p class="lead"></p></div>');
        var errorHtml = 'Sorry, meldingen kom ikke frem. Helt vår skyld. Du kan prøve igjen, ' +
                        'eller prøve <a href="/kontakt">kontaktsiden vårt</a>!';

        errorEl.find('p').html(errorHtml);
        spinner.hide();
        formEl.parent().append(errorEl);
    };

    var init = function(el) {
        formEl = el;
        nameField = formEl.find('#form-name');
        emailField = formEl.find('#form-email');
        messageField = formEl.find('#form-msg');
        spinner = $('<div class="spinner"></div>');

        formEl.on('submit', contactFormHandler);
    };

    init($('#footer-contact-form'));
})();
