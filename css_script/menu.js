window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("navigacio").style.top = "-100px";
        } else {
            document.getElementById("navigacio").style.top = "0";
        }
    }