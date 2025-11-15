<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorraine Cruz</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="header-title">
                <h1>Lorraine  Ann  J.  Cruz</h1>
            </div>
            <div class="header-right">
                <nav>
                    <a href="#about">About  </a>
                    <a href="#skills">Skills  </a>
                    <a href="#projects">Projects  </a>
                    <a href="#contact">Contact  </a>
                </nav>
                <button id="dark-mode-toggle">🌙</button>
            </div>
        </div>
    </header>

    <section class="hero">
        <h1>Web Developer & Designer</h1>
        <p>Computer Science | Web Development & UI/UX</p>
        <span class="puzzle" id="puzzle">🎲</span>
    </section>

    <button class="scroll-to-top" id="scroll-to-top"><i class="fas fa-arrow-up"></i></button>

    <section id="about" class="about">
        <h1>About Me</h1>
        <p>I'm Lorraine Ann J. Cruz, taking Bachelor of Science in Computer Science. I'm passionate about web development and UI/UX, creating intuitive and engaging digital experiences.</p>
    </section>

    <section id="skills" class="skills">
        <h1>Skills</h1>
        <h3><i class="fas fa-code"></i> Frontend</h3>
        <ul>
            <li><i class="fab fa-html5"></i> HTML</li>
            <li><i class="fab fa-css3-alt"></i> CSS</li>
            <li><i class="fab fa-js-square"></i> JavaScript</li>
        </ul>
        <h3><i class="fas fa-server"></i> Backend</h3>
        <ul>
            <li><i class="fab fa-php"></i> PHP</li>
            <li><i class="fas fa-laptop-code"></i> Laravel</li>
        </ul>
        <h3><i class="fas fa-database"></i> Databases</h3>
        <ul>
            <li><i class="fas fa-database"></i> MySQL</li>
        </ul>
        <h3><i class="fas fa-tools"></i> Tools</h3>
        <ul>
            <li><i class="fab fa-git-alt"></i> Git</li>
            <li><i class="fas fa-code"></i> VS Code</li>
            <li><i class="fab fa-figma"></i> Figma</li>
            <li><i class="fab fa-android"></i> Android Studio</li>
            <li><i class="fas fa-fire"></i> Firebase</li>
        </ul>
    </section>

    <section id="projects" class="projects">
        <h1>Projects</h1>
        <div class="project">
            <img src="{{ asset('images/insta.png') }}" alt="InstaRecipe Project">
            <h3>InstaRecipe</h3>
            <p>A web-based recipe-sharing platform where users can discover, post, and manage recipes. Built using Laravel, MySQL, and Bootstrap. Features: Recipe discovery, user authentication, search functionality, and content management.</p>
            <a href="https://www.figma.com/proto/SRJilrNQ22hrQ4sBwtTKMr?node-id=0-1&t=9xdUro82wmGcttnn-6" target="_blank"><i class="fas fa-external-link-alt"></i> View Live</a>
            <a href="https://github.com/crzlain" target="_blank"><i class="fab fa-github"></i> GitHub</a>
        </div>
        <div class="project">
            <img src="{{ asset('images/nexa.jpg') }}" alt="NEXA Project">
            <h3>NEXA</h3>
            <p>A Freelancer Marketplace and web app prototype designed for students and freelancers to connect with clients, post jobs, and apply for projects. Features: Job listings, user authentication, and multi-role access.</p>
            <a href="your-nexa-https://www.figma.com/design/he5q5BgQUTT1xfrW1a1xKa/Wireframe_Arnejo_Cruz_Pamintuan?m=auto&t=oRBwD3ElkwSaTZcf-6-link" target="_blank"><i class="fas fa-external-link-alt"></i> View Live</a>
            <a href="https://github.com/crzlain" target="_blank"><i class="fab fa-github"></i> GitHub</a>
        </div>
    </section>

    <section id="contact" class="contact">
        <h1>Contact</h1>
        <form id="contact-form">
            <input type="text" id="name" placeholder="Your Name" required>
            <input type="email" id="email" placeholder="Your Email" required>
            <textarea id="message" placeholder="Your Message" required></textarea>
            <button type="submit"><i class="fas fa-paper-plane"></i> Send</button>
        </form>
        <div class="contact-info">
            <p><i class="fas fa-envelope"></i> Email: <a href="mailto:lorraineanncruz00@gmail.com">lorraineanncruz00@gmail.com</a></p>
            <p><i class="fas fa-phone"></i> Phone: (+63)994-206-6032</p>
            <p><i class="fab fa-github"></i> GitHub: <a href="https://github.com/crzlain" target="_blank">https://github.com/crzlain</a></p>
        </div>
        <a href="#contact" class="cta"><i class="fas fa-handshake"></i> Let’s Work Together!</a>
    </section>

    <footer>
        <p>&copy; 2025 Lorraine Ann J. Cruz. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>