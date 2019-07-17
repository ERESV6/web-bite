$(function() {
    $('.btn-checkout').on('click', function() {
        $('.blocks-wrapper').css({ 'z-index': '1000', 'display': 'block' });
        setTimeout(function() {
            $('.home-section').css({ 'display': 'none' });
            $('.block.services,.block.gallery,.block.contact').css('margin-top', '0px');
        }, 1);
    });

    $('.blocks-wrapper .block').on('click', function() {
        $('.section-' + $(this)[0].classList[1]).addClass('visible');
    });

    $('.btn-close-section').on('click', function() {
        $('.section-' + $(this)[0].parentElement.className).removeClass('visible');
    });

    $('img#img-modal-open').click(function() {
        $('#modal-image')[0].src = $(this)[0].src;
        $('#modal-image')[0].alt = $(this)[0].alt;
    });

});