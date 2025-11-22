<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lorraine Cruz</title>

  <!-- Google Fonts Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet" />

  <!-- FontAwesome for icons -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  />

  <!-- External CSS -->
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
  <header>
    <div class="header-title">
      <h1>Lorraine Ann J. Cruz</h1>
    </div>

    <nav>
      <a href="#about">About</a>
      <a href="#skills">Skills</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </nav>

    <div class="header-controls">
      <button id="dark-mode-toggle" aria-label="Toggle dark mode" title="Toggle dark mode">🌙</button>

      <div class="user-dropdown">
        <button class="user-btn" aria-haspopup="true" aria-expanded="false" aria-label="User menu" title="User menu">
          <i class="fas fa-user-circle"></i>
        </button>
        <div class="user-menu" role="menu" aria-hidden="true">
          <button role="menuitem" id="logout-btn">Logout</button>
        </div>
      </div>
    </div>
  </header>

  <section class="hero" aria-label="Introduction">
    <h1>Web Developer & Designer</h1>
    <p>Computer Science | Web Development & UI/UX</p>
  </section>

  <button class="scroll-to-top" id="scroll-to-top" aria-label="Scroll to top" title="Scroll to top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <section id="about" aria-label="About Me">
    <h1>About Me</h1>
    <p>I'm Lorraine Ann J. Cruz, taking Bachelor of Science in Computer Science. I'm passionate about web development and UI/UX, creating intuitive and engaging digital experiences.</p>
  </section>

  <section id="skills" aria-label="Skills">
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

  <section id="projects" aria-label="Projects">
    <h1>Projects</h1>
    <div class="project">
      <img src="{{ asset('img/insta.png') }}" alt="InstaRecipe Project" />
      <h3>InstaRecipe</h3>
      <p>
        A web-based recipe-sharing platform where users can discover, post, and manage recipes. Built using Laravel, MySQL, and Bootstrap. Features: Recipe discovery, user authentication, search functionality, and content management.
      </p>
      <a href="https://www.figma.com/proto/SRJilrNQ22hrQ4sBwtTKMr?node-id=0-1&t=9xdUro82wmGcttnn-6" target="_blank" rel="noopener">
        <i class="fas fa-external-link-alt"></i> View Live
      </a>
      <a href="https://github.com/crzlain" target="_blank" rel="noopener">
        <i class="fab fa-github"></i> GitHub
      </a>
    </div>
    <div class="project">
      <img src="{{ asset('img/nexa.jpg') }}" alt="NEXA Project" />
      <h3>NEXA</h3>
      <p>
        A Freelancer Marketplace and web app prototype designed for students and freelancers to connect with clients, post jobs, and apply for projects. Features: Job listings, user authentication, and multi-role access.
      </p>
      <a href="https://www.figma.com/design/he5q5BgQUTT1xfrW1a1xKa/Wireframe_Arnejo_Cruz_Pamintuan?m=auto&t=oRBwD3ElkwSaTZcf-6" target="_blank" rel="noopener">
        <i class="fas fa-external-link-alt"></i> View Live
      </a>
      <a href="https://github.com/crzlain" target="_blank" rel="noopener">
        <i class="fab fa-github"></i> GitHub
      </a>
    </div>
  </section>

  <section id="contact" aria-label="Contact">
    <h1>Contact</h1>
    <form id="contact-form" aria-label="Contact form">
      <input type="text" id="name" placeholder="Your Name" required aria-required="true" />
      <input type="email" id="email" placeholder="Your Email" required aria-required="true" />
      <textarea id="message" placeholder="Your Message" required aria-required="true"></textarea>
      <button type="submit"><i class="fas fa-paper-plane"></i> Send</button>
    </form>
    <div class="contact-info">
      <p><i class="fas fa-phone"></i> Phone: (+63)994-206-6032</p>
      <p><i class="fas fa-envelope"></i> Email: <a href="mailto:lorraineanncruz00@gmail.com">lorraineanncruz00@gmail.com</a></p>
      <p><i class="fab fa-github"></i> GitHub: <a href="https://github.com/crzlain" target="_blank" rel="noopener">https://github.com/crzlain</a></p>
    </div>

  </section>

  <footer>
    <p>&copy; 2025 Lorraine Cruz. All rights reserved.</p>
  </footer>

  <!-- External JS -->
  <script src="js/script.js"></script>
  <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
    @csrf
</form>

</body>
</html>