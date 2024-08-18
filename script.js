$("#checkoutForm").hide();
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('checkoutForm').style.display = 'none';
});
$(document).ready(function() {
    var totalItems = 0;
    var totalPrice = 0;
    var cart = {};

    $(document).on('click', '.add-to-cart', function() {
        var itemName = $(this).siblings('h4').text();
        var itemPrice = parseFloat($(this).siblings('p').eq(0).text().replace('Price: $', ''));

        if (cart[itemName]) {
           
            cart[itemName].quantity++;
            totalPrice += itemPrice;
        } else {
            
            cart[itemName] = { quantity: 1, price: itemPrice };
            totalItems++;
            totalPrice += itemPrice;
        }

        $('#cart-items').empty(); 
        $.each(cart, function(name, item) {
            $('#cart-items').append(
                '<li><span class="item-name">' + name +
                '</span> <span class="item-quantity">' + item.quantity + '</span> <span class="item-price">$' + item.price.toFixed(2) + '</span></li>'
            );
        });

        $('#total-items').text('Total Items: ' + totalItems);
        $('#total-price').text('Total Price: $' + totalPrice.toFixed(2));
    });

    $("#checkout").click(function() {
        if (totalItems > 0) {
            $("#cart").hide();
            $("#checkoutForm").show();
        } else {
            alert("Your cart is empty. Please add items to the cart before checking out.");
        }
    });

    $("#closeForm").click(function() {
        $("#checkoutForm").hide();
        $("#cart").show();
    });
});

function showSiblings(button) {
    var siblingDiv = button.nextElementSibling;
    $(siblingDiv).slideToggle();
}

window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.nav-container');
    if (window.scrollY > 50) { 
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll("nav-container a");

    links.forEach(link => {
        link.addEventListener("click", function(event) {
            event.preventDefault();

            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);

            targetElement.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        });
    });
});

$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    $('#rentDate').attr('min', maxDate);
});

$(document).ready(function() {
    $('.social-icons a').hover(function() {
        $(this).animate({ fontSize: '18px' }, 200);
    }, function() {
        $(this).animate({ fontSize: '16px' }, 200);
    });
});

$(document).ready(function() {
    $('#nav-toggle').click(function(e) {
        e.preventDefault();
        $('.nav-list').toggleClass('active');
    });
});

$(document).ready(function() {
    var totalItems = 0;
    var totalPrice = 0;
    var cart = {};

    function updateCartIcon() {
        $('#cart-item-count').text(totalItems);

        if (totalItems > 0) {
            $('#cart-icon').show();
        } else {
            $('#cart-icon').hide();
        }
    }

    $(document).on('click', '.add-to-cart', function() {
        var itemName = $(this).siblings('h4').text();
        var itemPrice = parseFloat($(this).siblings('p').eq(0).text().replace('Price: $', ''));

        if (cart[itemName]) {
            cart[itemName].quantity++;
            totalPrice += itemPrice;
        } else {
            cart[itemName] = { quantity: 1, price: itemPrice };
            totalItems++;
            totalPrice += itemPrice;
        }

        $('#cart-items').empty();
        $.each(cart, function(name, item) {
            $('#cart-items').append(
                '<li><span class="item-name">' + name +
                '</span> <span class="item-quantity">' + item.quantity + '</span> <span class="item-price">$' + item.price.toFixed(2) + '</span></li>'
            );
        });

        $('#total-items').text('Total Items: ' + totalItems);
        $('#total-price').text('Total Price: $' + totalPrice.toFixed(2));

        updateCartIcon();
    });

    $('#cart-icon').click(function() {
        $('html, body').animate({
            scrollTop: $('#cart').offset().top
        }, 500);
    });

    updateCartIcon();
});
