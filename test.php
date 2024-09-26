<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Hamburger Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <script src="script.js"></script>
</body>
</html>


<style>
/* Navbar Styles */
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #333; /* Dark background for contrast */
}

.hamburger {
    display: none; /* Hidden on large screens */
    cursor: pointer;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 24px;
    background-color: transparent; /* Make sure it's not hidden */
}

.hamburger span {
    display: block;
    width: 100%;
    height: 3px;
    background-color: white; /* White lines for visibility against dark background */
    margin: 4px 0;
}

/* Styling for small screens */
@media (max-width: 768px) {
    .hamburger {
        display: flex; /* Show hamburger on small screens */
    }

    .nav-links {
        display: none; /* Hidden initially on small screens */
        flex-direction: column; /* Show vertically when active */
        align-items: center;
        position: absolute;
        top: 50px;
        right: 0;
        width: 100%;
        background-color: #333; /* Dark background for the dropdown */
        z-index: 1;
    }

    .nav-links.active {
        display: flex; /* Show links when the hamburger is clicked */
    }

    .nav-links li {
        margin: 10px 0;
    }
}

</style>

<script>
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active'); // Toggle the 'active' class to show/hide menu on small screens
});

</script>