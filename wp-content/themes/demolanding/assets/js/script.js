$(function() {
    $(".owl-carousel").owlCarousel({
        items: 3,
        loop: false,
        dots: false,
        onInitialized: changeHideElement,
        onTranslated: changeHideElement,
        responsive: {
            0: {
              items:1
            },
            600: {
              items:2
            },
            1000: {
              items:3
            }
        }
    });
    function changeHideElement(event) {
        let idx = event.item.index;
        $(".owl-item.active").not(idx).last().addClass("hide");
        $(".owl-item.active").eq(1).removeClass("hide");
    }

    $(".list-btn-item").on("click", function(event) {
        $this = $(event.target);
        if ($this.hasClass("active")) {
            $this.removeClass("active");
        } else {
            $this.addClass("active");
        }
        return false;
    });

    $(".internet-button").on("click", function(event) {
        $this = $(event.target);
        if ($this.hasClass("active")) {
            $this.removeClass("active");
            $this.text("Выбрать тариф");
        } else {
            $this.addClass("active");
            $this.text("Тариф выбран");
        }
        return false;
    });
});