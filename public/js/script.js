// Toggle mobile menu
document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("navbarToggle");
  const menu = document.getElementById("navbarMenu");

  if (toggleBtn && menu) {
    toggleBtn.addEventListener("click", function () {
      menu.classList.toggle("active");

      // Change icon
      const icon = this.querySelector("i");
      if (menu.classList.contains("active")) {
        icon.classList.remove("bi-list");
        icon.classList.add("bi-x");
      } else {
        icon.classList.remove("bi-x");
        icon.classList.add("bi-list");
      }
    });
  }

  // Close menu when clicking outside
  document.addEventListener("click", function (event) {
    if (
      menu &&
      toggleBtn &&
      !menu.contains(event.target) &&
      !toggleBtn.contains(event.target)
    ) {
      menu.classList.remove("active");
      const icon = toggleBtn.querySelector("i");
      if (icon) {
        icon.classList.remove("bi-x");
        icon.classList.add("bi-list");
      }
    }
  });

  // Add animation on table rows
  const rows = document.querySelectorAll("tbody tr");
  rows.forEach((row, index) => {
    row.style.animation = `fadeIn 0.3s ease forwards ${index * 0.05}s`;
    row.style.opacity = "0";
  });
});

// Add CSS animation
const style = document.createElement("style");
style.textContent = `
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
`;
document.head.appendChild(style);
