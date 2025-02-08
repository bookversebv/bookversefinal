document.addEventListener("DOMContentLoaded", function () {
    // Animação da barrinha nos ícones
    const icons = document.querySelectorAll(".icons .icon");

    icons.forEach(icon => {
        icon.addEventListener("mouseover", () => {
            icon.classList.add("active");
        });

        icon.addEventListener("mouseout", () => {
            icon.classList.remove("active");
        });
    });

    // Menu lateral dropdown funcional
    const dropdownButton = document.getElementById("dropdownButton");
    const dropdownMenu = document.getElementById("dropdownMenu");

    dropdownButton.addEventListener("click", function() {
        dropdownMenu.style.display = dropdownMenu.style.display === "none" || dropdownMenu.style.display === "" ? "block" : "none";
    });



});

document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        const nomeAluno = document.getElementById("nome_aluno").value.trim();
        const dataRetirada = document.getElementById("data_retirada").value;
        const dataEntrega = document.getElementById("data_entrega").value;
        const livroSelecionado = document.getElementById("livro").value;

        if (!nomeAluno || !dataRetirada || !dataEntrega || !livroSelecionado) {
            alert("Por favor, preencha todos os campos obrigatórios.");
            event.preventDefault();
        }
    });
});

