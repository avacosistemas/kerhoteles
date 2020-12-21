$(function() {
    var txt1,
        txt2,
        txt3;

    if ($('.contact-form').length) {
        var lang = $('.contact-form').data('lang');
        if (lang == 'es') {
            txt1 = '¡Gracias!';
            txt2 = 'Tu mensaje se ha enviado correctamente. Pronto nos contactaremos contigo.';
            txt3 = 'El mensaje no se ha podido enviar. Por favor, intenta nuevamente.';
        }

        if (lang == 'en') {
            txt1 = 'Thank you!';
            txt2 = 'Your message has been sent successfully. We will contact you soon.';
            txt3 = 'The message could not be sent. Please try again.';
        }

        if (lang == 'pt') {
            txt1 = 'Obrigado!';
            txt2 = 'Sua mensagem foi enviada com sucesso. Entraremos em contato em breve.';
            txt3 = 'Não foi possível enviar a mensagem. Por favor tente novamente.';
        }

        $('.contact-form').parsley();
        $('.contact-form').on('submit', function(e) {
            e.preventDefault();
            if ($(this).parsley().isValid()) {
                $(this).append('<div id="contact-loader"><div id="loader"></div></div>');
                $('.contact-form').each(function() {
                    $.post($(this).attr('action'), $(this).serialize(), function(data) {
                        if (data == 'success') {
                            $('.contact-form').each(function() {
                                $('.contact-form').append('<div id="contact-msg-text"><h2>' + txt1 + '</h2><p>' + txt2 + '</p></div>')
                                $('#contact-msg-text').animate({ opacity: 1 });
                                $('#contact-loader').animate({ opacity: 0 });
                                this.reset();
                                setTimeout(function() {
                                    $('#contact-msg-text').animate({ opacity: 0 },
                                        function() {
                                            $('#contact-msg-text, #contact-loader').remove()
                                        });
                                }, 5000)
                            });
                        } else {
                            alert(txt3)
                        }
                    });
                });
            }
        });
    }

    $('.newletter-container .btn').on('click submit', function(e) {
        e.preventDefault();
        console.log('test')
    })

})