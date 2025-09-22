import "./libs/trix";
import "../css/app.css";
import "../css/home.css";
import "./countup.js"

import AOS from "aos";
import "aos/dist/aos.css";

import "preline";

import.meta.glob([

  '../images/**',

  '../storage/**',

  '../fonts/**',

]);

AOS.init({
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: "DOMContentLoaded", // name of the event dispatched on the document, that AOS should initialize on
    initClassName: "aos-init", // class applied after initialization
    animatedClassName: "aos-animate", // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

    offset: 120, // offset (in px) from the original trigger point
    delay: 100, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: "ease", // default easing for AOS animations
    once: true, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: "top-bottom", // defines which position of the element regarding to window should trigger the animation
});

let mobileNavbar = document.querySelector("#mobile-navbar");
let menuButton = document.querySelector("#menu-button");

if (menuButton) {
    menuButton.addEventListener("click", () => {
        mobileNavbar.classList.toggle("mobile-open");
    });
}

document.querySelectorAll('.slider').forEach(slider => {
  const slides = Array.from(slider.querySelectorAll('.slide'));
  if (!slides.length) return;

  const duration = parseInt(slider.dataset.duration, 10) || 5000; // ms
  let current = slides.findIndex(s => s.classList.contains('active'));
  if (current === -1) {
    current = 0;
    slides[0].classList.add('active');
  }

  // initialisation des cercles pour chaque slide
  slides.forEach(slide => {
    const prog = slide.querySelector('.timer-progress');
    if (!prog) return;
    const r = parseFloat(prog.getAttribute('r')) || 45;
    const circumference = 2 * Math.PI * r;
    prog.style.strokeDasharray = circumference;
    prog.style.strokeDashoffset = circumference;
    // store circumference for later
    prog._circumference = circumference;
  });

  let start = null;
  let paused = false;
  let elapsed = 0; // ms

  // helper pour mettre à jour la progress circle du slide courant
  function updateProgressCircle(frac) {
    const prog = slides[current].querySelector('.timer-progress');
    if (!prog) return;
    const c = prog._circumference;
    const offset = Math.max(0, c * (1 - frac));
    prog.style.strokeDashoffset = offset;
  }

  // reset all circles except current (set to full circumference)
  function resetOthers() {
    slides.forEach((s, i) => {
      const p = s.querySelector('.timer-progress');
      if (!p) return;
      p.style.strokeDashoffset = p._circumference;
    });
  }

  // go to next slide
  function goNext() {
    slides[current].classList.remove('active');
    // ensure its circle reset
    const prevProg = slides[current].querySelector('.timer-progress');
    if (prevProg) prevProg.style.strokeDashoffset = prevProg._circumference;

    current = (current + 1) % slides.length;
    slides[current].classList.add('active');
    // ensure new slide starts with empty progress
    const newProg = slides[current].querySelector('.timer-progress');
    if (newProg) newProg.style.strokeDashoffset = newProg._circumference;
    elapsed = 0;
    start = null;
  }

  // animation loop
  function step(timestamp) {
    if (paused) {
      // when paused, keep start aligned so elapsed does not progress
      start = timestamp - elapsed;
      requestAnimationFrame(step);
      return;
    }

    if (!start) start = timestamp;
    elapsed = timestamp - start;
    const frac = Math.min(elapsed / duration, 1);
    updateProgressCircle(frac);

    if (frac >= 1) {
      goNext();
      // after switching, start counting for the new slide
      start = null;
      elapsed = 0;
    }

    requestAnimationFrame(step);
  }

  // pause on hover of the whole slider (category)
  slider.addEventListener('mouseenter', () => { paused = true; });
  slider.addEventListener('mouseleave', () => { paused = false; });

  // start loop
  resetOthers();
  requestAnimationFrame(step);
});
