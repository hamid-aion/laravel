<!-- resources/views/layouts/footer.blade.php -->

<style>
    /* styles.css */
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

 .footer {
    background-color: #f0f0f0; /* Light Grey */
    color: #333333; /* Dark Grey Text */
    padding: 20px;
    text-align: center;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 0 20px;
}

.footer-section {
    flex: 1;
    min-width: 200px;
    margin: 10px 0;
}

.footer-section h5 {
    margin-bottom: 10px;
    font-size: 16px;
    font-weight: bold;
}

.footer-section p, .footer-section ul, .footer-section li {
    font-size: 14px;
    margin: 5px 0;
}

.footer-section ul {
    list-style-type: none;
    padding: 0;
}

.footer-section ul li a {
    color: #333333; /* Dark Grey Text */
    text-decoration: none;
}

.footer-section ul li a:hover {
    text-decoration: underline;
}

.footer-bottom {
    background-color: #e0e0e0; /* Slightly Darker Grey */
    padding: 10px 0;
    margin-top: 20px;
}

.footer-bottom p {
    margin: 0;
    font-size: 12px;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Footer</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Other content of your page -->

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h5>About Us</h5>
                <p>We are building Web applications, mobile applications and desktop applications</p>
            </div>
            <div class="footer-section">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h5>Contact Us</h5>
                <p>Email: Climesoft@gmail.com</p>
                <p>Phone: +123 456 7890</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Clime Soft. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>

