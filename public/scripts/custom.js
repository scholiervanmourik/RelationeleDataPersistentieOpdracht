/**
 * Smooth scroll to the given y position
 * @param {number} y
 */
function smoothScroll(y) {
    window.scroll({
        top: y,
        behavior: 'smooth'
    });
}

/*

window.addEventListener('load', function () {
    var a = document.querySelectorAll('a[href^="#"]');
    var navbar = document.getElementById('navList');
    var navItems = Array.from(navbar.querySelectorAll('a[href^="#"]'));

    a.forEach(function (el) {
        el.addEventListener('click', function (e) {
            // Prevents a redirect
            e.preventDefault();
            smoothScroll(document.getElementById(el.getAttribute('href').substr(1)).offsetTop);
        });
    });
});
*/

/*/!** Usage of a builder so arguments would not be too long *!/
class FadeAnimatorBuilder {
    /!** @param {HTMLElement} el *!/
    constructor(el) {
        this.el = el;
        this.startOpacity = 1;
        this.minOpacity = 0;
        this.maxOpacity = 1.1;
        this.opacityIncremental = -.01;
        this.timer = 20;
    }

    /!** @param {number} startOpacity *!/
    setStartOpacity(startOpacity) {
        this.startOpacity = startOpacity;
    }

    /!** @param {number} minOpacity *!/
    setMinOpacity(minOpacity) {
        this.minOpacity = minOpacity;
    }

    /!** @param {number} maxOpacity *!/
    setMaxOpacity(maxOpacity) {
        this.maxOpacity = maxOpacity;
    }

    /!** @param {number} timer *!/
    setTimer(timer) {
        this.timer = timer;
    }

    /!** @param {number} opacityIncremental *!/
    setOpacityIncremental(opacityIncremental) {
        this.opacityIncremental = opacityIncremental;
    }

    getBuilder() {
        var builder = this;
        return {
            execute: function () {
                var opacity = builder.startOpacity;
                var timer = setInterval(function () {
                    if (opacity >= builder.minOpacity && opacity <= builder.maxOpacity) {
                        opacity += builder.opacityIncremental;
                        builder.el.style.opacity = opacity;
                    } else {
                        clearInterval(timer);
                    }
                }, builder.timer);
            }
        }
    }
}*/
