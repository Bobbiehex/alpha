document.addEventListener('DOMContentLoaded', function() {
    var header = document.querySelector('header');
    var textItems = [
        document.getElementById('header-text-item-1'),
        document.getElementById('header-text-item-2'),
        document.getElementById('header-text-item-3')
    ];
    var images = [
        { url: 'https://images.unsplash.com/photo-1628348068343-c6a848d2b6dd?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', text: 'Secure Your Financial Future', texts: ['Welcome to Our Investment Platform', 'Secure Your Financial Future', 'Expert Investment Management'] },
        { url: 'https://images.unsplash.com/photo-1651340981821-b519ad14da7c?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', texts: ['Tailored Financial Solutions', 'Grow Your Wealth', 'Dedicated Support'] },
        { url: 'https://images.unsplash.com/photo-1554260570-e9689a3418b8?q=80&w=1782&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', texts: ['Innovative Investment Strategies', 'Comprehensive Planning', 'Trusted Advisors'] }
    ];
    var currentIndex = 0;

    function changeBackgroundImage() {
        currentIndex = (currentIndex + 1) % images.length;
        header.style.backgroundImage = 'url(' + images[currentIndex].url + ')';
        
        // Reset text items and apply the new texts
        for (var i = 0; i < textItems.length; i++) {
            textItems[i].style.opacity = 0;
            textItems[i].style.transform = 'translateY(50px)';
            textItems[i].innerHTML = images[currentIndex].texts[i];
        }
        
        // Trigger animations with delay
        setTimeout(function() {
            textItems[0].style.animation = 'slideUp 1s ease-in-out forwards';
        }, 500);
        setTimeout(function() {
            textItems[1].style.animation = 'slideUp 1s ease-in-out forwards';
        }, 1000);
        setTimeout(function() {
            textItems[2].style.animation = 'slideUp 1s ease-in-out forwards';
        }, 1500);
    }

    setInterval(changeBackgroundImage, 5000); // Change image and text every 5 seconds
    changeBackgroundImage(); // Initialize with the first image and text
});


document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const toggleButton = item.querySelector('.faq-toggle');

        toggleButton.addEventListener('click', function() {
            const isActive = item.classList.contains('active');

            // Toggle the active class on the FAQ item
            item.classList.toggle('active');

            // Update the button text based on the item state
            toggleButton.textContent = isActive ? '+' : '-';
        });
    });
});

 
document.addEventListener('DOMContentLoaded', function() {
    const fakItems = document.querySelectorAll('.fak-item');

    fakItems.forEach(item => {
        const toggleButton = item.querySelector('.fak-toggle');

        toggleButton.addEventListener('click', function() {
            const isActive = item.classList.contains('active');

            // Toggle the active class on the FAQ item
            item.classList.toggle('active');

            // Update the button text based on the item state
            toggleButton.textContent = isActive ? '+' : '-';
        });
    });
});



document.addEventListener('DOMContentLoaded', function() {
    const fadeInSteps = document.querySelectorAll('.fade-in-step');

    const handleScroll = () => {
        fadeInSteps.forEach((step, index) => {
            const sectionPosition = step.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;

            if (sectionPosition < screenPosition) {
                setTimeout(() => {
                    step.classList.add('show');
                }, index * 500);
            }
        });
    };

    // Trigger the scroll event on page load
    handleScroll();

    window.addEventListener('scroll', handleScroll);
});

const mobile_menu_icon = document.querySelector(".mobile_menu_icon");
const top_line = document.querySelector(".top_line");
const middle_line = document.querySelector(".middle_line");
const bottom_line = document.querySelector(".bottom_line");
const ul = document.querySelector("ul");

let mobile_menu_icon_add_at_runtime = document.querySelector(".mobile_menu_icon_add_at_runtime");
let top_line_add_at_runtime = document.querySelector(".top_line_add_at_runtime");
let middle_line_add_at_runtime = document.querySelector(".middle_line_add_at_runtime");
let bottom_line_add_at_runtime = document.querySelector(".bottom_line_add_at_runtime");


mobile_menu_icon.addEventListener("click", ()=>{
    if(menu_monitor ===0){
        // ul.style.display="block";
        ul.style.left= 0;

        menu_monitor = 1;

        mobile_menu_icon.classList.add("mobile_menu_icon_add_at_runtime");
        top_line.classList.add("top_line_add_at_runtime");
        middle_line.classList.add("middle_line_add_at_runtime");
        bottom_line.classList.add("bottom_line_add_at_runtime");

    }else{
        // ul.style.display="none";
        ul.style.left="-80em";

        menu_monitor = 0;

        mobile_menu_icon.classList.remove("mobile_menu_icon_add_at_runtime");
        top_line.classList.remove("top_line_add_at_runtime");
        middle_line.classList.remove("middle_line_add_at_runtime");
        bottom_line.classList.remove("bottom_line_add_at_runtime");
    }
});


// Toggle the dropdown menu on small screens
document.getElementById('menu-icon').addEventListener('click', function() {
    var navLinks = document.getElementById('nav-links');
    navLinks.classList.toggle('show');
});


const menuIcon = document.getElementById('menu-icon');
const navLinks = document.getElementById('nav-links');

// Toggle the navigation menu when the hamburger icon is clicked
menuIcon.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});



document.addEventListener("DOMContentLoaded", function() {
    const hamburgerMenu = document.getElementById("hamburger-menu");
    const sidebar = document.getElementById("sidebar");

    hamburgerMenu.addEventListener("click", function() {
        sidebar.classList.toggle("show");
    });
});

