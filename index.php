<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:title" content="Jerico Eijansantos' Portfolio">
        <meta property="og:description" content="I create end-to-end web solutions by handling both front-end and back-end development, ensuring seamless functionality and a user-friendly experience.">
        <meta property="og:image" content="https://skymans0n.github.io/portfolio-jerico-eijansantos/images/profile-photo-3.png">
        <meta property="og:url" content="https://www.jerico-dev.com">
        <meta property="og:type" content="website">
        <meta property="fb:app_id" content="270193152282911">
        <title>Jerico Eijansantos Portfolio</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="./styles/style.css">
    </head>
    <body>
        <div class="container">
            <header> <!-- Start of header -->
                <div class="nav-section">
                    <a id = "logo" href="index.php">
                        <img src="images/my-logo.png" alt="Jerico Eijansantos logo">
                    </a>
                    <input type="checkbox" id = "menu-toggle">
                    <label for="menu-toggle" class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>       
                    <nav class = "slide-menu">
                        <ul class = "nav-bar-links">
                            <li><a href="#projects" class="menu-link">Projects</a></li>
                            <li><a href="#aboutmyself" class="menu-link">About</a></li>
                            <li><a href="#contactlink" class="menu-link">Contact</a></li>
                            <button class="menu-send-message" onclick="location. href='mailto:jerico@developer.com?subject=Inquiry'">Send a message
                            </button>
                        </ul>
                    </nav>
                </div>
            </header> <!-- End of header -->
            <main>
                <section class="hero-section"> <!-- Start of Hero-Section -->
                    <div class="hero-container">
                        <div class="hero-details">
                            <!--<p>Hello there! I'm <span>Jerico</span>&#x1F44B;</p>-->
                            <h1>Versatile Web <span>Professional:</span></h1>
                            <p>Crafting, Testing, and Assuring Excellence.</p>
                            <h2>Web developer with a passion for software testing, adept in both automated and manual testing to ensure robust and high-quality solutions.</h2>
                            <div class="buttons">
                                <button class="view-work" onclick="location.href= '#projects' ">
                                    View my work
                                </button>
                                <button class="about-me" onclick="location.href= '#aboutmyself' ">
                                    More about me
                                </button>
                            </div>
                        </div>
                        <div class="hero-img">
                            <img src="images/profile-photo-2.png" alt="Jerico's professional profile photo">
                        </div>
                    </div>
                    <div id = "buttons2" class="buttons">
                        <button class="view-work" onclick="location.href= '#projects' ">
                            View my work
                        </button>
                        <button class="about-me" onclick="location.href= '#aboutmyself' ">
                            More about me
                        </button>
                    </div>
                </section> <!-- End of Hero-Section -->
                <section id = "projects" class="projects-section"> <!-- Start of Projects Section -->
                    <h3>PROJECTS</h3>
                    <h4> Some of my latest works.</h4>
                    <div class="featured-projects">
                        <div class="carousel">
                            <div class="project-a">
                                <img src="images/project-aa.png" alt="Mockup of the Zalora app design displayed on a mobile phone.">
                                <p>
                                    Discover Zalora: Lagos' premier e-commerce hub for farmers and agricultural developers. Shop high-quality agricultural products online with ease.
                                </p>
                                <div class="buttons-a">
                                    <button class="view-project">
                                        <span id = "view-live-site">View Live Site</span><span id = "live-site">Live Site</span>
                                    </button>
                                    <button class="source-code">
                                        Documentation
                                    </button>
                                </div>
                                <div class="doc-options">
                                    <a href="#">Source Code</a>
                                    <a href="#">Design Documentation</a>
                                    <a href="#">System Documentation</a>
                                </div>
                            </div>
                            <div class="project-b">
                                <img src="images/project-bb.png" loading = "lazy" alt="Mockup of the Noteshelf app design displayed on a tablet.">
                                <p>
                                    Discover Zalora: Lagos' premier e-commerce hub for farmers and agricultural developers. Shop high-quality agricultural products online with ease.
                                </p>
                                <div class="buttons-b">
                                    <button class="view-project">
                                        <span id = "view-live-site">View Live Site</span> <span id = "live-site">Live Site</span>
                                    </button>
                                    <button class="source-code">
                                        Documentation
                                    </button>
                                </div>
                                <div class="doc-options">
                                    <a href="#">Source Code</a>
                                    <a href="#">Design Documentation</a>
                                    <a href="#">System Documentation</a>
                                </div>
                            </div>
                            <div class="project-c">
                                <img src="images/project-cc.png" loading = "lazy" alt="Mockup of the Orthodox website design displayed on a computer monitor.">
                                <p>
                                    Discover Zalora: Lagos' premier e-commerce hub for farmers and agricultural developers. Shop high-quality agricultural products online with ease.
                                </p>
                                <div class="buttons-c">
                                    <button class="view-project">
                                        <span id = "view-live-site">View Live Site</span> <span id = "live-site">Live Site</span>
                                    </button>
                                    <button class="source-code">
                                        Documentation
                                    </button>
                                </div>
                                <div class="doc-options">
                                    <a href="#">Source Code</a>
                                    <a href="#">Design Documentation</a>
                                    <a href="#">System Documentation</a>
                                </div>
                            </div>
                        </div>
                        <div class="indicators">
                            <div class="indicator active"></div>
                            <div class="indicator"></div>
                            <div class="indicator"></div>
                        </div>
                    </div>
                    <h4>Other noteworthy projects</h4>
                    <div class="personal-projects">
                        <a href="#"><img src="images/my-project1.png" alt="project1 icon"></a>
                        <a href="#"><img src="images/my-project2.png" alt="project2 icon"></a>
                        <a href="#"><img src="images/my-project3.png" alt="project3 icon"></a>
                    </div>
                    <h4>Made specifically to increase productivity</h4>
                </section> <!-- End of Projects Section -->
                <section id = "aboutmyself" class="aboutmyself"> <!-- Start of About Section -->
                    <h3>ABOUT ME</h3>
                    <div class="about-me-container">
                        <div class="image-container">
                            <img src="images/Portrait.png" loading = "lazy" alt="Jerico's full-body profile picture">
                        </div>
                        <div class="about-me-details">
                            <div class="short-version">
                                <div class="about">
                                    <p>Hi there, I'm Jerico and I'm a web developer based in the Philippines. When I'm not glued to my computer screen, you can find me binge-watching Netflix, eating my favorite “Adobo”, and playing with my dogs Sola, Luna, Snoopy and Barkley. But don’t let my love for my doggies fool you - I’m passionate about creating websites and web applications that are both functional and beautiful.</p>
                                </div>
                            </div>
                            <div class="other-versions">
                                <div class="somewhat-long">
                                    <p>In January 2023, I embarked on an exciting journey to delve into the world of web development. To accelerate my learning, I enrolled in a <span>comprehensive</span> bootcamp that spanned four months. Equipped with the knowledge and skills gained from the bootcamp, I continued my web development journey through self-study starting in May 2023.
                                    <a href = "https://skymans0n.notion.site/My-Web-Development-Journey-6e979fca1455470f8a4ec24f5e71b810?pvs=4" class = "read-more">Read More</a></p>
                                </div>
                            </div>
                            <section class="skills"> <!-- Start of SKills Section -->
                                <p>Skills and Tools</p>
                                <div class="tech-skills-a">
                                    <div class="group-a">
                                        <div class="html"><img src="images/html-logo.svg" alt="HTML logo"></div>
                                        <div class="css"><img src="images/css-logo.svg" alt="CSS logo"></div>
                                        <div class="javascript"><img src="images/javascript-logo.svg" alt="JavaScript logo"></div>
                                        <div class="bootstrap"><img src="images/bootstrap-logo.svg" alt="Bootstrap logo"></div>
                                    </div>
                                    <div class="group-b">
                                        <div class="sass"><img src="images/sass-logo.svg" alt="Sass logo"></div>
                                        <div class="reactjs"><img src="images/react-logo.svg" alt="React logo"></div>
                                        <div class="php"><img src="images/php-logo.svg" alt="PHP logo"></div>
                                        <div class="codeigniter"><img src="images/codeigniter-logo.svg" alt="CodeIgniter logo"></div>
                                    </div>
                                </div>
                                <div class="tech-skills-b">
                                    <div class="group-c">
                                        <div class="laravel"><img src="images/laravel-logo.svg" alt="Laravel logo"></div>
                                        <div class="sql"><img src="images/sql-logo.svg" alt="SQL logo"></div>
                                        <div class="mysql"><img src="images/mysql-logo.svg" alt="MySQL logo"></div>
                                        <div class="postman"><img src="images/postman-logo.svg" alt="Postman logo"></div>
                                    </div>
                                    <div class="group-d">
                                        <div class="vscode"><img src="images/vscode-logo.svg" alt="VSCode logo"></div>
                                        <div class="selenium"><img src="images/selenium-logo.svg" alt="Selenium logo"></div>
                                        <div class="adobe-express"><img src="images/adobeexpress-logo.svg" alt="Adobe Express logo"></div>
                                        <div class="figma"><img src="images/figma-logo.svg" alt="Figma logo"></div>
                                    </div>
                                </div>
                            </section> <!-- End of Skills Section -->
                            <div class="downloadable-version">
                                <div class="cv-icon">
                                    <a href="https://drive.google.com/file/d/1-MSgQA9GisDxS7wqudNKQwvUlcKNErqS/view?usp=drive_link" download>Download Resume</a>
                                    <img src="images/cv.png" alt="download icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- End of About Section -->
                <section id = "contact" class="contact"> <!-- Start of Contact Section -->
                    <h3>Are you looking for a developer?</h3>
                    <h4>I'm currently available for work.</h4>
                    <div id= "contactlink" class="contact-container">
                        <div class="contact-form">
                            <h3>Lightning option?</h3>
                            <h4>Hit me up and I'll get back to you asap.</h4>
                            <form action="process.php" method="POST">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" required>
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                                <label for="message">Message:</label>
                                <textarea id="message" name="message" rows="4" required></textarea>
                                <button type="submit">Send</button>
                            </form>
                        </div>
                        <div class="contact-me">
                            <h3>Are you looking for a developer?</h3>
                            <h4>I'm currently available for work.</h4>
                            <h3>Prefer other methods?</h3>
                            <h4>I have those too.</h4>
                            <div class="contact-links">
                                <div class="business-phone">
                                    <div class="phone-icon">
                                        <img src="images/phone-icon.png" alt="phone icon">
                                    </div>
                                    <div class = "phone-number-details">
                                        <a href = "tel: 09279448803">+63 927-944-8803</a>
                                    </div>
                                </div>
                                <div class="business-email">
                                    <div class="email-icon">
                                        <img src="images/email-icon.png" alt="email icon">
                                    </div>
                                    <div class = "my-email">
                                        <a href = "mailto:contact@jerico-dev.com?subject=Inquiry">contact@jerico-dev.com</a>
                                    </div>
                                </div>
                                <address class="address2">
                                    <div class="address-icon">
                                        <img src="images/address-icon.png" alt="address icon">
                                    </div>
                                    <div class="local-address">
                                        <p>Martinez Avenue,</p>
                                        <p>Dahican, Mati City,</p>
                                        <strong><a href ="https://goo.gl/maps/rCKt6qw8Rq58fHYz7?coh=178572&entry=tt">Philippines, 8200</strong></a>
                                    </div>
                                </address>
                                <div class="social-links2">
                                    <div class="chat-icon">
                                        <img src="images/chat-icon.png" alt="social-media icon">
                                    </div>
                                    <div class="social-icon">
                                        <a href="https://www.linkedin.com/in/jerico-eijansantos/"><img src="images/linkedin-icon.png" alt="View Jerico Eijansantos' LinkedIn profile - White LinkedIn logo"></a>
                                        <a href="https://github.com/SkymanS0n"><img src="images/github-icon.png" alt="View SkymanS0n's GitHub profile - White GitHub logo"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- End of Contact Section -->
                <div class="dev-process">
                    <div class="icon">
                        <img src="images/dropdown.png" alt="A dropdown icon" tabindex="0">
                    </div>
                    <p>I designed and developed the responsive website using a blend of traditional paper sketches and Figma. The coding phase took place in Visual Studio Code, utilizing HTML, CSS (with Sass), and JavaScript. The finished website was then deployed on GitHub using GitHub Pages for seamless online accessibility.</p>
                </div>
            </main>
            <footer> <!-- Start of Footer -->
                <div class="footer-container">
                    <div class="sitemap">
                        <a href="#sitemap">Sitemap</a>
                    </div>
                    <address class="address">
                        <p>Martinez Avenue,</p>
                        <p>Dahican, Mati City,</p>
                        <strong><a href="https://goo.gl/maps/rCKt6qw8Rq58fHYz7?coh=178572&entry=tt">Philippines</a>
                        </strong><span id="zip">, 8200</span>
                    </address>
                    <div class="legal-regulations">
                        <a href=""><strong>Terms & Conditions</strong></a>
                        <p>© 2024 Jerico Eijansantos | All rights reserved</p>
                    </div>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/jerico-eijansantos/"><img src="images/linkedin-tile.svg" alt="View Jerico Eijansantos' LinkedIn profile - White LinkedIn logo"></a>
                        <a href="https://github.com/SkymanS0n"><img src="images/github-tile.svg" alt="View SkymanS0n's GitHub profile - White GitHub logo"></a>
                    </div>
                    <div class="hire">
                        <a href="mailto:jerico@developer.com?subject=Job Offer"><strong>Hire this guy!</strong></a>
                    </div>
                </div>
            </footer> <!-- End of Footer -->
        </div>
        <script src="script.js"></script>
    </body>
</html>