// Dark/light mode toggle
const toggleBtn = document.getElementById("dark-mode-toggle");
const bodyEl = document.body;
const scrollTopBtn = document.getElementById("scroll-to-top");

function setTheme(theme) {
  if (theme === "dark") {
    bodyEl.classList.add("dark");
    toggleBtn.textContent = "☀️";
    localStorage.setItem("theme", "dark");
  } else {
    bodyEl.classList.remove("dark");
    toggleBtn.textContent = "🌙";
    localStorage.setItem("theme", "light");
  }
}

window.addEventListener("DOMContentLoaded", () => {
  const savedTheme = localStorage.getItem("theme");
  if (savedTheme) {
    setTheme(savedTheme);
  } else {
    setTheme("light");
  }
});

toggleBtn.addEventListener("click", () => {
  if (bodyEl.classList.contains("dark")) {
    setTheme("light");
  } else {
    setTheme("dark");
  }
});

// Scroll to top button show/hide and scroll
window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    scrollTopBtn.style.display = "flex";
  } else {
    scrollTopBtn.style.display = "none";
  }
});
scrollTopBtn.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// User dropdown toggle
const userBtn = document.querySelector(".user-btn");
const userMenu = document.querySelector(".user-menu");

userBtn.addEventListener("click", (e) => {
  e.stopPropagation();
  const expanded = userBtn.getAttribute("aria-expanded") === "true";
  userBtn.setAttribute("aria-expanded", expanded ? "false" : "true");
  userMenu.classList.toggle("show");
});

// Click outside closes dropdown
document.addEventListener("click", () => {
  userBtn.setAttribute("aria-expanded", "false");
  userMenu.classList.remove("show");
});

// Logout button action placeholder
document.getElementById("logout-btn").addEventListener("click", () => {
  document.getElementById("logout-form").submit();
});


// "Let's Work Together" button scroll
document.querySelector(".cta").addEventListener("click", () => {
  document.getElementById("contact").scrollIntoView({ behavior: "smooth" });
});

// Contact form simple alert
document.getElementById("contact-form").addEventListener("submit", (e) => {
  e.preventDefault();
  alert("Thank you for your message! I will get back to you soon.");
  e.target.reset();
});