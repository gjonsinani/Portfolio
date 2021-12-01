document.addEventListener("DOMContentLoaded", () => {
  let app = document.getElementById("typewriter");
  let typewriter = new Typewriter(app, {
    loop: false,
    cursor: "",
    skipAddStyles: true,
    delay: 70,
  });
  typewriter
    .pauseFor(2100)
    .typeString("<h3>Hello There!</h3>")
    .pauseFor(200)
    .typeString("<h2>I'm Gjon Sinani,</h2>")
    .pauseFor(1500)
    .typeString(
      '<h4>A student of <span class="font-bold">Computer Science</span>, in this Portfolio you can find my <span class="font-bold">skills</span> and qualifications.</h4>'
    )
    .start();
});

function classToggle() {
  const navs = document.querySelectorAll(".Navbar__Items");

  navs.forEach((nav) => nav.classList.toggle("Navbar__ToggleShow"));
}

document
  .querySelector(".Navbar__Link-toggle")
  .addEventListener("click", classToggle);
