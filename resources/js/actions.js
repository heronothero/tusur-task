const flipper = document.querySelector('.flipper');
const btn = flipper.querySelector('.bttn');
const results = flipper.querySelector('.results button');

btn.addEventListener('click', () => {
  flipper.classList.toggle('flip');
});

results.addEventListener('click', () => {
  flipper.classList.toggle('flip');
});