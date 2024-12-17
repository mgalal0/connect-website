
const wrapper = document.querySelector('.parteners')

let pressed = false
let startX = 0;

wrapper.addEventListener('mousedown', function (e) {
  pressed = true
  startX = e.clientX
  this.style.cursor = 'grabbing'
})

wrapper.addEventListener('mouseleave', function (e) {
  pressed = false
})

window.addEventListener('mouseup', function (e) {
  pressed = false
  wrapper.style.cursor = 'grab'
})

wrapper.addEventListener('mousemove', function (e) {
  if(!pressed) {
    return
  }

  this.scrollLeft += startX - e.clientX;
  // this.scrollLRight -= startX - e.clientX;
})

window.addEventListener("load", function () {
  // Hide the loader when the page finishes loading
  document.getElementById("loader").style.display = "none";
});

const video = document.getElementById('background-video');

// Play the video when it's allowed to autoplay
document.addEventListener('DOMContentLoaded', () => {
  video.play().catch((error) => {
    // Autoplay not allowed, handle this situation if needed
    console.error('Autoplay not allowed:', error);
  });
});