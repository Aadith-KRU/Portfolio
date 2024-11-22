<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/Contactstyles.css">
</head>
<body>
	 <header>
        <div class="nav">
            <div class="logo"><a href="index.php"><img src="images/logo.png" width="65" height="79" alt=""/></a></div>
            <nav>
                <ul>
                    
                    <li><a href="index.php" class="find-me-btn">Go Home</a></li>
                </ul>
            </nav>
        </div>
		 <div id="successModal" class="modal">
   
</div>

	</header>

    <section id="contact-form">
        <h2>CONTACT ME</h2>
        <form action="user.php" method="post">
            
            <div class="form-group">
                <label for="name">NAME</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" autocomplete="off">
            </div>
            
            
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" autocomplete="off">
            </div>

            
            <div class="form-group">
                <label for="subject">SUBJECT</label>
                <input type="text" id="subject" name="subject" placeholder="Subject of your message" autocomplete="off">
            </div>

            
            <div class="form-group">
                <label for="message">MESSAGE</label>
                <textarea id="message" name="message" rows="6" placeholder="Type your message here..." autocomplete="off"></textarea>
            </div>

            
            <div class="form-group">
                <button type="submit" name="submit" class="btn">Send Now</button>
            </div>
        </form>
    </section>
		 <footer>
        <p>Aadith Vasanthakumar &copy; 2024-2025</p>
        <div class="logo"><img src="images/logow.png" width="65" height="79" alt=""></div>
    </footer>
	<script src="js/script.js"></script>

</body>
</html>
