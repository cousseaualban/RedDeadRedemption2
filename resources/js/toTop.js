document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        var scrollPosition =
            window.pageYOffset || document.documentElement.scrollTop;
        var scrollToShowButton = 100;

        if (scrollPosition > scrollToShowButton) {
            document.querySelector(".scroll-to-top").classList.add("show");
        } else {
            document.querySelector(".scroll-to-top").classList.remove("show");
        }
    });

    document
        .querySelector(".scroll-to-top")
        .addEventListener("click", function (e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
});
