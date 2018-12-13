window.onscroll = function () {
        if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
            document.getElementById("navbar").className = "navbar sticky-top navbar-expand-lg navbar-light";
        } else {
            document.getElementById("navbar").className = "navbar sticky-top navbar-expand-lg navbar-light bg-light";
        }
    };
        $('a[href*="#"]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
            && 
            location.hostname == this.hostname
            ) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {

                event.preventDefault();
                $('html, body').animate({
                scrollTop: target.offset().top
                }, 1000, function() {

                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) {
                    return false;
                } else {
                    $target.attr('tabindex','-1');
                    $target.focus();
                };
                });
            }
            }
        });