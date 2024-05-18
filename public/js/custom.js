(function() {
	'use strict';

	var tinyslider = function() {
		var el = document.querySelectorAll('.testimonial-slider');

		if (el.length > 0) {
			var slider = tns({
				container: '.testimonial-slider',
				items: 1,
				axis: "horizontal",
				controlsContainer: "#testimonial-nav",
				swipeAngle: false,
				speed: 700,
				nav: true,
				controls: true,
				autoplay: true,
				autoplayHoverPause: true,
				autoplayTimeout: 3500,
				autoplayButtonOutput: false
			});
		}
	};
	tinyslider();




	var sitePlusMinus = function() {

		var value,
    		quantity = document.getElementsByClassName('quantity-container');

		function createBindings(quantityContainer) {
	      var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
	      var increase = quantityContainer.getElementsByClassName('increase')[0];
	      var decrease = quantityContainer.getElementsByClassName('decrease')[0];
	      increase.addEventListener('click', function (e) { increaseValue(e, quantityAmount); });
	      decrease.addEventListener('click', function (e) { decreaseValue(e, quantityAmount); });
	    }

	    function init() {
	        for (var i = 0; i < quantity.length; i++ ) {
						createBindings(quantity[i]);
	        }
	    };

	    function increaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	        console.log(quantityAmount, quantityAmount.value);

	        value = isNaN(value) ? 0 : value;
	        value++;
	        quantityAmount.value = value;
	    }

	    function decreaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	        value = isNaN(value) ? 0 : value;
	        if (value > 0) value--;

	        quantityAmount.value = value;
	    }

	    init();

	};
	sitePlusMinus();


})()
document.addEventListener('DOMContentLoaded', function() {
    var navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(function(navLink) {
        navLink.addEventListener('mouseover', function() {
            // Apply invert filter to the SVG and the text
            navLink.querySelectorAll('img, .login').forEach(function(element) {
                element.style.filter = 'invert(1)';
            });
        });

        navLink.addEventListener('mouseout', function() {
            // Reset the filter
            navLink.querySelectorAll('img, .login').forEach(function(element) {
                element.style.filter = 'none';
            });
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    var dropdown = document.querySelector('.dropdown');
    var dropdownMenu = dropdown.querySelector('.dropdown-menu');

    dropdown.addEventListener('mouseenter', function() {
        dropdownMenu.style.display = 'block';
    });

    dropdown.addEventListener('mouseleave', function() {
        dropdownMenu.style.display = 'none';
    });
});

