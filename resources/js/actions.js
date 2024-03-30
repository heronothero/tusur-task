foo.onclick = function(){
	this.classList.toggle('rotate')
}
const block = document.getElementById("main-block");
const button = document.querySelector(".btn button");
button.addEventListener("click", (event) => {
    event.preventDefault();
  
    block.classList.toggle("flipped");
    setTimeout(() => {
      block.innerHTML = ""; // Очищает содержимое блока после переворота
    }, 500); // Задержка для плавного перехода
  });