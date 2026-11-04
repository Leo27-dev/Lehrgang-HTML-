const toggle = document.querySelector(".theme-toggle");
const root = document.documentElement;

function applyTheme(dark) {
    root.dataset.theme = dark ? "dark" : "light";
    toggle.setAttribute("aria-pressed", String(dark));
    toggle.textContent = dark ? "Hellmodus" : "Dunkelmodus";

}

const saved = localStorage.getItem("soundwerk-theme");
const systemDark = window-matchMedia("(prefers-color-schema:dark)").matches;
applyTheme(saved == null ? systemDark : saved == "dark") ;

toggle.addEventListener("click", () => {
    // Korrektur: dataset.theme statt dataset.time abfragen
    const dark = root.dataset.theme !== "dark";
    applyTheme(dark);
    localStorage.setItem("soundwerk-theme", dark ? "dark" : "light");
});
