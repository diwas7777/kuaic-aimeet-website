<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Meet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/team.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/event.css">
</head>
<body>
    <!-- Logo and Navbar -->
    <header>
        <a href="#" class="logo"><img src="./assets/img/logo.png" alt="AI Meet" width="80%"/></a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#events">Events</a>
            <a href="#timeline">Timeline</a>
            <a href="#team">Team</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-content">
            <h1>Welcome to AI Meet</h1>
            <p>Join us for an exciting event on Artificial Intelligence</p>
            <a href="#events"><button class="cool-btn">Learn More</button></a>
        </div>
    </section>

<!-- Events Section -->
<section id="events">
    <h2 class="topic">Upcoming Events</h2>
    <div class="content-wrapper" id="event-data">
        <!-- Content will be serverd here by event-details script -->
      
      </div>
</section>

    <!-- Timeline Section -->
    <section id="timeline">
        <h2 class="topic">Event Timeline</h2>
        <ul>
            <li>
                <span>9:00 AM</span>
                <p>Registration and Breakfast</p>
          /li>
            <li>
                <span>10:00 AM</span>
                <p>Keynote Speaker</p>
            </li>
            <li>
                <span>12:00 PM</span>
                <p>Lunch Break</p>
            </li>
            <li>
                <span>2:00 PM</span>
                <p>Panel Discussion</p>
            </li>
        </ul>
    </section>

    <!-- Team Section -->
    <section id="team">
        <h2 class="topic">Meet Our Team</h2>
        <div class="Team">
            <div class="container">
                <div class="row" id="team-data">
                    <!-- Content will be shown here -->
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Kathmandu University, Panchkhal</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+977 9809183750</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>aiclub@ku.edu.np</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="#"><img src="./assets/img/logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p style="text-align: justify;">AI MEET is Nepal’s first university-level students-led AI event, organized by the 
                                    joint collaborative effort of the Kathmandu University Artificial Intelligence Club
                                    (KUAIC) and the Department of Artificial Intelligence (DoAI).</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#events">Events</a></li>
                                <li><a href="#timeline">Timeline</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2024, All Right Reserved | Made with ❤️ by <a href="https://linkedin.com/in/diwas7777" style="text-decoration: none; color: #ff5e14">Diwas</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#events">Events</a></li>
                                <li><a href="#timeline">Timeline</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/team-members.js"></script>
    <script src="./assets/js/event-details.js"></script>
</body>
</html>