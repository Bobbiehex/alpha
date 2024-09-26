<div class="big-signup-button">
    <div class="signup-content">
        <span class="signup-text">Sign up and start <br> investing today.</span>
    </div>
    <div class="signup-form">
        <input type="email" placeholder="Enter your email" class="email-input" required>
            <button class="signup-button"><a class="signp" href="signup.php">Sign Up </a></button>
            <style>
                .signp{
                    text-decoration: none;
                    color: #040e30;
                }
            </style>
    </div>    
</div>

<footer class="footer-section">
    <div class="footer-container">
        <div class="footer-column">
            <h3 class="footer-title">Company</h3>
            <ul class="footer-links">
                <li><a href="about.php">About Us</a></li>
                <li><a href="faq.php">FAQs</a></li>
                <li><a href="alpha.php">Home</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3 class="footer-title">Navigation</h3>
            <ul class="footer-links">
                <li><a href="#product">Product</a></li>
                <li><a href="#learn">Learn</a></li>
                <li><a href="#support">Support</a></li>
                <li><a href="contact.php">Got a suggestion?</a></li>
                <li><a href="contact.php">Customer Support</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3 class="footer-title">Legal</h3>
            <ul class="footer-links">
                <li><a href="terms.php">Privacy policy</a></li>
                <li><a href="terms.php">Terms & conditions</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3 class="footer-title">Contact</h3>
            <ul class="footer-links">
                <li><a href="#email">E-mail: alphacapitals.co</a></li>
                <li><a href="#number">+234 903 208 7239</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Alpha Capitals INC. All rights reserved.</p>
    </div>
</footer>



<style>
    body {
    max-width: 1600px;
    min-width: 350px;
}

/* Sign-up section */
.big-signup-button {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, auto));
    background-color: #040e30;
    color: #fff;
    padding: 60px 50px;
    border-radius: 12px;
    max-width: 100%;
    margin: 40px auto;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.signup-content {
    display: flex;
    flex-direction: column;
    align-items: left;
    text-align: left;
    margin-right: 300px;
    border-radius: 1px solid #0000;
}

.signup-text {
    font-family: 'Tomato Grotesk', sans-serif;
    font-size: 1.8rem;
    margin-bottom: 20px;
    line-height: 1.2;
}

.signup-form {
    display: flex;
    flex-direction: column;
    width: 100%;
    max-width: 350px;
}

.email-input {
    padding: 15px;
    font-size: 1rem;
    border: none;
    border-radius: 8px;
    outline: none;
    margin-bottom: 10px;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.8);
}

.signup-button {
    padding: 15px 30px;
    font-size: 1rem;
    color: #040e30;
    background-color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.signup-button:hover {
    background-color: burlywood;
}

/* Footer */
.footer-section {
    height: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, auto));
}

footer {
    height: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, auto));
    background-color: #040e30;
    color: #fff;
    padding: 2em;
    text-align: left;
}

.footer-column {
    margin-bottom: 20px;
}

.footer-title {
    font-family: 'Tomato Grotesk', sans-serif;
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    font-family: 'DM Sans', sans-serif;
    font-size: 1rem;
    color: #f0f0f0;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: #ff6347;
}

.footer-bottom {
    text-align: center;
    padding-top: 20px;
    border-top: 1px solid #444;
    margin-top: 20px;
}

.footer-bottom p {
    font-family: 'DM Sans', sans-serif;
    font-size: 0.875rem;
    color: #ccc;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .signup-content {
        flex-direction: column;
    }
    
    .big-signup-button {
        padding: 40px 20px;
    }
    
    .signup-text {
        font-size: 1.4rem;
    }

    footer {
        grid-template-columns: 1fr;
        padding: 2em;
    }
}

</style>