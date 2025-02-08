const track = document.getElementById("carousel-track");
const itemWidth = 270; // Largura do item ajustada para ficar visível
const items = document.querySelectorAll(".carousel-item");
const maxScroll = (items.length - 4) * itemWidth; // Limite para o número de itens visíveis

function scrollCarousel(direction) {
    const currentScroll = track.scrollLeft;
    const newScroll = currentScroll + (direction * itemWidth);
    if (newScroll < 0 || newScroll > maxScroll) return; // Impede o scroll além dos limites
    track.scrollBy({ left: direction * itemWidth, behavior: "smooth" });
}

function search() {
    const query = document.getElementById("search-input").value;
    alert("Você pesquisou por: " + query);
}

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