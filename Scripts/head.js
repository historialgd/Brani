mybutton = document.getElementById("head2");
                window.onscroll = function() {scrollFunction()};
                function scrollFunction() {
                    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                        mybutton.style.display = "flex";
                    } else {
                        mybutton.style.display = "none";
                    }
                }