
document.querySelector('.menu-btn').addEventListener('click', function() {
  this.classList.toggle('open');
  document.querySelector('.menu-nav').classList.toggle('open');
})