(function () {
  const yearEl = document.getElementById("year");
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  const currentNav = document.body && document.body.dataset ? document.body.dataset.currentNav : "";
  if (!currentNav) return;

  const nav = document.querySelector("header nav");
  if (!nav) return;

  nav.querySelectorAll('a[data-nav]').forEach((a) => {
    const isActive = (a.dataset.nav || "") === currentNav;
    if (isActive) {
      a.classList.add("text-[#10B981]");
      a.setAttribute("aria-current", "page");
    } else {
      a.classList.remove("text-[#10B981]");
      a.removeAttribute("aria-current");
    }
  });
})();

