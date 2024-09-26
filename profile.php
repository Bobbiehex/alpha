<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="scripts.js"></script>
</head>
<body>
    <header>
        <div class="hamburger-menu" id="hamburger-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <h1 class="logo">Profile</h1>
    </header>

    <nav class="sidebar" id="sidebar">
        <ul>
        <li><a href="alpha.php">Home</a></li>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="referral.php">Referral</a></li>
            
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <main>
        <div class="container">
            <div class="tab-container">
                <button class="tab-link active" onclick="openTab(event, 'profile')">User Profile</button>
                <button class="tab-link" onclick="openTab(event, 'next-of-kin')">Next of Kin</button>
            </div>
    
            <div id="profile" class="tab-content active">
                <section class="profile-section">
                    <h2>User Profile</h2>
    
                    <!-- Old Password -->
                    <div class="form-group">
                        <label for="old-password">Old Password:</label>
                        <input type="password" id="old-password" name="old-password" class="form-control" placeholder="Enter your old password">
                    </div>
    
                    <!-- New Password -->
                    <div class="form-group">
                        <label for="new-password">New Password:</label>
                        <input type="password" id="new-password" name="new-password" class="form-control" placeholder="Enter new password">
                    </div>
    
                    <!-- Save Button -->
                    <button class="submit-button">Save Changes</button>
                </section>
            </div>
    
            <div id="next-of-kin" class="tab-content">
                <section class="next-of-kin-section">
                    <h2>Next of Kin</h2>
    
                    <!-- First Name -->
                    <div class="form-group">
                        <label for="first-name">First Name:</label>
                        <input type="text" id="first-name" name="first-name" class="form-control" placeholder="Enter first name">
                    </div>
    
                    <!-- Last Name -->
                    <div class="form-group">
                        <label for="last-name">Last Name:</label>
                        <input type="text" id="last-name" name="last-name" class="form-control" placeholder="Enter last name">
                    </div>
    
                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="phone-number">Phone Number:</label>
                        <input type="text" id="phone-number" name="phone-number" class="form-control" placeholder="Enter phone number">
                    </div>
    
                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email-address">Email Address:</label>
                        <input type="email" id="email-address" name="email-address" class="form-control" placeholder="Enter email address">
                    </div>
    
                    <!-- Save Button -->
                    <button class="submit-button">Save Changes</button>
                </section>
            </div>
        </div>

</main>
</body>
</html>
