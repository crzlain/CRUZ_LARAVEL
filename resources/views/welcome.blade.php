<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lorraine Cruz</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <style>
    /* Color variables */
    :root {
      --blue-dark: #3C8EC3;
      --blue-light: #6BB6E6;
      --soft-blue: #89C5EB;
      --white: #FFFFFF;
      --black: #000000;
    }

    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    html,
    body {
      height: 100%;
      background: var(--white);
      color: var(--black);
      overflow-x: hidden;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 1rem;
      text-align: center;
    }

    main {
      width: 75vw;
      max-width: 900px;
      min-height: 70vh;
      background-color: var(--white);
      border-radius: 20px;
      padding: 3rem 2rem 4rem 2rem;
      box-shadow:
        0 0 60px var(--blue-light),
        inset 0 0 28px var(--soft-blue);
      border: 2px solid var(--blue-dark);
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .typing-container {
      margin-bottom: 2rem;
    }

    .typing-text {
      font-size: 2.8rem;
      font-weight: 700;
      color: var(--blue-dark);
      font-family: monospace;
      white-space: nowrap;
      overflow: hidden;
      border-right: 3px solid var(--blue-light);
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      animation: blink-caret 1s steps(1) infinite;
    }

    @keyframes blink-caret {
      0%,
      100% {
        border-color: var(--blue-light);
      }

      50% {
        border-color: transparent;
      }
    }

    .description {
      font-size: 1.2rem;
      font-weight: 500;
      color: var(--black);
      line-height: 1.6;
      margin-bottom: 3rem;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    /* Buttons container */
    .btn-group {
      display: flex;
      justify-content: center;
      gap: 1.8rem;
      flex-wrap: wrap;
      margin-top: 1.5rem;
    }

    .btn {
      padding: 14px 38px;
      font-size: 1.15rem;
      font-weight: 700;
      border-radius: 30px;
      cursor: pointer;
      user-select: none;
      text-decoration: none;
      color: var(--white);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      box-shadow: 0 0 20px var(--blue-dark);
      background-color: var(--blue-dark);
    }

    .btn:hover {
      background-color: var(--blue-light);
      box-shadow: 0 0 28px var(--blue-light);
      transform: scale(1.05);
    }

    .btn-register {
      background: transparent;
      border: 2.5px solid var(--blue-dark);
      color: var(--blue-dark);
      box-shadow: none;
    }

    .btn-register:hover {
      background: var(--blue-dark);
      color: var(--white);
      box-shadow: 0 0 25px var(--blue-dark);
    }

    /* Responsive */
    @media (max-width: 600px) {
      main {
        width: 95vw;
        min-height: 60vh;
      }

      .typing-text {
        font-size: 2rem;
      }

      .description {
        font-size: 1rem;
      }

      .btn-group {
        flex-direction: column;
      }

      .btn,
      .btn-register {
        width: 100%;
      }
    }
  </style>
</head>

<body>

  <main role="main" aria-label="Welcome page">
    <div class="typing-container">
      <div class="typing-text" id="typing">Hi,</div>
    </div>

    <p class="description">
      A college student in City College of Angeles currently taking Bachelor of Science in Computer Science.
    </p>

    <div class="btn-group">
      <a href="{{ route('login') }}" class="btn btn-login">Login</a>
      <a href="{{ route('register') }}" class="btn btn-register">Register</a>
    </div>
  </main>

  <script>
    // Texts to cycle (without "Hi,")
    const texts = [
      " I'm Lorraine Cruz",
      " A Web Developer",
      " A UI/UX Designer"
    ];

    const typingElem = document.getElementById('typing');
    const typingSpeed = 120;
    const erasingSpeed = 80;
    const pauseDelay = 1500;

    let textIndex = 0;
    let charIndex = 0;
    let isErasing = false;

    function type() {
      const currentText = texts[textIndex];

      if (!isErasing && charIndex <= currentText.length) {
        typingElem.textContent = "Hi," + currentText.substring(0, charIndex);
        charIndex++;
        setTimeout(type, typingSpeed);
      } else if (isErasing && charIndex >= 0) {
        typingElem.textContent = "Hi," + currentText.substring(0, charIndex);
        charIndex--;
        setTimeout(type, erasingSpeed);
      } else {
        if (!isErasing) {
          isErasing = true;
          setTimeout(type, pauseDelay);
        } else {
          isErasing = false;
          textIndex++;
          if (textIndex >= texts.length) textIndex = 0;
          setTimeout(type, typingSpeed);
        }
      }
    }

    // Start the typing effect on DOM load
    document.addEventListener('DOMContentLoaded', () => {
      setTimeout(type, 500);
    });
  </script>

</body>

</html>