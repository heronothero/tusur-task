document.getElementById('showResults').addEventListener('click', function() {
  var values = document.querySelectorAll('.value');
  values.forEach(function(item) {
    item.style.display = 'none';
  });

  document.querySelector('.main-block').style.transform = 'rotateX(360deg)';
});