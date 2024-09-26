document.addEventListener("DOMContentLoaded", function() {
    const hamburgerMenu = document.getElementById("hamburger-menu");
    const sidebar = document.getElementById("sidebar");

    hamburgerMenu.addEventListener("click", function() {
        sidebar.classList.toggle("show");
    });
});


document.addEventListener("DOMContentLoaded", function() {
    const toggleBalanceButton = document.getElementById("toggle-balance");
    const nairaBalance = document.getElementById("naira-balance");
    const eyeIcon = document.getElementById("eye-icon");

    toggleBalanceButton.addEventListener("click", function() {
        if (nairaBalance.style.display === "none") {
            nairaBalance.style.display = "block";
            eyeIcon.src = "eye-icon.png"; // Show eye icon
        } else {
            nairaBalance.style.display = "none";
            eyeIcon.src = "eye-closed-icon.png"; // Show closed eye icon
        }
    });
});

function openTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tab-content" and hide them
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tab-link" and remove the class "active"
    tablinks = document.getElementsByClassName("tab-link");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}


// const hamburger = document.getElementById('hamburger-menu');
// const sidebar = document.getElementById('sidebar');

// // Toggle sidebar when hamburger menu is clicked
// hamburger.addEventListener('click', () => {
//     sidebar.classList.toggle('menu-active');
// });

// // Close the sidebar when clicking outside
// document.addEventListener('click', function(event) {
//     if (!hamburger.contains(event.target) && !sidebar.contains(event.target)) {
//         sidebar.classList.remove('menu-active');
//     }
// });
