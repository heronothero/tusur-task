/*const flipper = document.querySelector('.flipper');
const btn = flipper.querySelector('.bttn');
const results = flipper.querySelector('.results button');


btn.addEventListener('click', () => {
  flipper.classList.toggle('flip');
});

results.addEventListener('click', () => {
  flipper.classList.toggle('flip');
});*/
document.addEventListener('DOMContentLoaded', function() {
  const flipper = document.querySelector('.flipper');
  const btn = flipper.querySelector('.bttn');
  const results = flipper.querySelector('.results button');
  const backButton = document.getElementById('backButton');

  btn.addEventListener('click', () => {
      flipper.classList.toggle('flip');
  });

  results.addEventListener('click', () => {
      flipper.classList.toggle('flip');
  });

  backButton.addEventListener('click', (event) => {
      event.preventDefault(); // Предотвращаем отправку формы по умолчанию
      flipper.classList.remove('flip'); // Удаляем класс flip только при нажатии на кнопку назад
  });

  document.querySelector('.side-form').addEventListener('submit', function(event) {
      event.preventDefault(); // Предотвращаем отправку формы по умолчанию

      // Получаем данные формы
      const formData = new FormData(this);

      // Отправляем AJAX запрос
      fetch('/calculate', {
              method: 'POST',
              body: formData
          })
          .then(response => response.json()) // Преобразуем ответ сервера в JSON
          .then(data => {
              // Обновляем содержимое страницы с результатами
              document.querySelector('.result-info').innerHTML = `
                  <div class="value-result">
                      <p><b>D = ${data.D}</b></p>
                  </div>
                  <div class="value-result">
                      <p><b>X<sub>1</sub> = ${data.X1}</b></p>
                  </div>
                  <div class="value-result">
                      <p><b>X<sub>2</sub> = ${data.X2}</b></p>
                  </div>
              `;
              // Переворачиваем блок с результатами
              flipper.classList.add('flip');
          })
          .catch(error => {
              console.error('Ошибка:', error);
          });
  });
});