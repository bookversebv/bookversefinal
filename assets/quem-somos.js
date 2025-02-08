var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

// Pegando os elementos
const modal = document.getElementById("contact-modal");
const contactLink = document.getElementById("contact-link");
const closeBtn = document.getElementById("close-btn");

// Função para abrir o modal
contactLink.addEventListener("click", function(event) {
    event.preventDefault(); // Previne o comportamento padrão do link
    modal.style.display = "flex"; // Torna o modal visível
});

// Função para fechar o modal
closeBtn.addEventListener("click", function() {
    modal.style.display = "none"; // Esconde o modal
});

// Fechar o modal ao clicar fora dele
window.addEventListener("click", function(event) {
    if (event.target === modal) {
        modal.style.display = "none"; // Esconde o modal se clicar fora dele
    }
});