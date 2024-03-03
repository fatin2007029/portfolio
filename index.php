<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">

</head>
<body>
    <nav id="desktop-nav">
        <div class="logo">Rahimeen Fatin</div>
        <div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#project">Project</a></li>
                <li><a href="#contact">Contact</a></li> 
                <li><a href="login.html">login</a></li>


                <script src="https://kit.fontawesome.com/ddbb6917b5.js" crossorigin="anonymous"></script>

            </ul>
        </div>
    </nav>
    <nav id="hamburger-nav">
        <div class="logo">Rahimeen Fatin</div>
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="togglMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <li><a href="#about" onclick="togglMenu()">About</a></li>
                <li><a href="#experience" onclick="togglMenu()">Experience</a></li>
                <li><a href="#project" onclick="togglMenu()">Project</a></li>
                <li><a href="#contact" onclick="togglMenu()">Contact</a></li>
            </div>
        </div>
    </nav>
    <section id="profile">
        <div class="section__pic-container">
            <img src="portfolio.jpg" alt="My profile">
        </div>
        <div class="section__text">
            <p class="section__text__p1">Hello,I'm</p>
            <h1 class="title">Rahimeen Fatin</h1>
            <p class="section__text__p2">Web developer</p>
            <div class="btn-container">
                <button class="btn btn-color-1" onclick="location.href='./#contact'">
                Contact info
                </button>
            </div>
            <div id="socials-container">
                <img src="linedin.jpg"
                alt="Linked-in-profile"
                class="icon"
                onclick="location.href='https://linkedin.com/'"
                />
                <img src="github.jpg"
                alt="Github-profile"
                class="icon"
                onclick="location.href='https://github.com/fatin2007029/'"
                />
            </div>
        </div>
    </section>
    <section id="about">
        <p class="section__text__p1">Get to know more</p>
        <p class="title">About me</p>
        <div class="section-container">
            <div class="section__pic-container">
                <img
                src="about-pic.jpg"
                alt="Profile picture"
                class="about-pic"
                />
                </div>
                <div class="about-details-container">
                    <div class="about-containers">
                        <div class="details-container">
                            <img
                            src="experience.jpg"
                            alt="Experience icon"
                            class="icon"
                            />
                            <h3>Experience</h3>
                            <p>2+ months <br />Web development</p>
                        </div>
                        <div class="details-container">
                            <img
                            src="education.jpg"
                            alt="Education icon"
                            class="icon"
                            />
                            <h3>Education</h3>
                            <p>S.S.C and H.S.C Degree 
                                <br />B.Sc in C.S.E[ongoing]</p>
                        </div>
                    </div>
                    <div class="text-container">
                        <p>Assalamualaikum, I am M Rahimeen Fatin.</br> I was born and brought up in Dhaka.</br>
                    I wish to serve my nation with integrity by contributing immensely for the betterment of the general mass. </p>
                    </div>
            </div>
        </div>
        <img src="arrow.jpg" alt="arrow icon" class="icon arrow"
        onclick="location.href='./#experience'"
        />
    </section>
    <section id="experience">
        <p class="section__text__p1">Explore my</p>
        <h1 class="title">Experience</h1>
        <div class="experience-details-container">
            <div class="about-containers">
                <div class="details-container">
                    <h2 class="experience-sub-title">Web Development</h2>
                    <div class="article-container">
                        <article>
                            <img src="checkmark.jpg" alt="experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>HTML</h3>
                                <p>Experienced</p>

                            </div>
                        </article>
                        <article>
                            <img src="checkmark.jpg" alt="experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>CSS</h3>
                                <p>Experienced</p>

                            </div>
                        </article>
                        <article>
                            <img src="checkmark.jpg" alt="experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>JAVASCRIPT</h3>
                                <p>Experienced</p>

                            </div>
                        </article>
                        <article>
                            <img src="checkmark.jpg" alt="experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>PHP</h3>
                                <p>BASIC</p>

                            </div>
                        </article>
                        <article>
                            <img src="checkmark.jpg" alt="experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>MYSQL</h3>
                                <p>Intermediate</p>

                            </div>
                        </article>
                        <article>
                            <img src="checkmark.jpg" alt="experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>C#</h3>
                                <p>BASIC</p>

                            </div>
                        </article>
                    </div>
                </div>
                <div class="details-container">
                    <h2 class="experience-sub-title">Software Development</h2>
                    <div class="article-container">
                        <article>
                            <img src="checkmark.jpg" alt="experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>C </h3>
                                <p>Experienced</p>

                            </div>
                        </article>
                        <article>
                            <img src="checkmark.jpg" alt="experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>C++ </h3>
                                <p>Experienced</p>

                            </div>
                        </article>
                        <article>
                            <img src="checkmark.jpg" alt="experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>JAVA</h3>
                                <p>BASIC</p>

                            </div>
                        </article>
                        <article>
                            <img src="checkmark.jpg" alt="experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>PYTHON</h3>
                                <p>BASIC</p>

                            </div>
                        </article>
                        
                    </div>
                </div>
            </div>
        </div>
        <img src="arrow.jpg" alt="arrow icon" class="icon arrow"
        onclick="location.href='./#project'"
        />
    </section>
    <section id="project">
        <p class="section__text__p1">Browse My Recent</p>
        <h1 class="title">Projects</h1>
        <div class="experience-details-container">
            <div class="about-containers">
            <div class="details-container color-container">
                <div class="article-container">
                    <img src="prodef.jpg"
                    alt="Project 1"
                    class="project-img"
                    />
                </div>
                <h2 class="experience-sub-title project-title">Project: Emergency surveilance system</h2>
                <div class="btn-container">
                    <button
                    class="btn btn-color-2 project-btn"
                    onclick="location.href='https://github.com/fatin2007029/'"
                    >
                    Github
                </button>
                <button
                    class="btn btn-color-2 project-btn"
                    onclick="location.href='https://github.com/fatin2007029/Emergency-Surveillance'"
                    >
                    Live demo
                </button>
                </div>
            </div></div>
        </div>
        <img src="arrow.jpg" alt="arrow icon" class="icon arrow"
        onclick="location.href='./#contact'"
        />
    </section>
    <br /><br /><br /><br />
    <br /><br /><br /><br />
    <br /><br /><br /><br />
    <br /><br /><br /><br />
    <br /><br /><br /><br />
    
    
    
    
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="subt">Contact Me </h1>
                    <p><i class="fa-solid fa-envelope"></i>fatincommands@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i>01962579496</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/samuel.barnard.18?mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                        <a href="https://www.instagram.com/endeavouring_lad/*"><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <a href="https://www.coolfreecv.com/doc/CV_TEMPLATE_0020.docx" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <form action="submit_message.php" method="post">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
                        <button type="submit" class="btn btn2" id="submit-button">Submit</button>
                        <button type="submit" class="btn btn2" id="admin-button">Admin</button>
                        
                    </form>
                    
                </div>
            </div>
        </div>

    <footer>
        <nav>
            <div class="nav-links-container">
                <ul class="nav-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#project">Project</a></li>
                    <li><a href="#contact">Contact</a></li>
    
                </ul>
            </div>
        </nav>
        <p>Copyright &#169; 2024 Rahimeen Fatin. All rights reserved.</p>
    </footer>
    <script src="script.js">



    </script>
    <script>
        document.getElementById("admin-button").onclick = function() {
            window.location.href = "login.html";
        };
    </script>

</body>
</html>