const track = document.getElementById("carousel-track");
        const itemWidth = 220; // Largura de cada item incluindo margem (ajustável)
        let currentIndex = 0;
        const items = document.querySelectorAll('.carousel-item');
        const totalItems = items.length;

         // Função para mover o carrossel
        function scrollCarousel(direction) {
            currentIndex += direction;
            if (currentIndex < 0) currentIndex = totalItems - 1;
            if (currentIndex >= totalItems) currentIndex = 0;
            track.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
        }

        // Loop Automático do Carrossel
        setInterval(() => {
            scrollCarousel(1);
        }, 3000);  // Mover a cada 3 segundos

        function scrollCarousel(direction) {
            track.scrollBy({ left: direction * itemWidth, behavior: "smooth" });
        }

        function search() {
            const query = document.getElementById("search-input").value;
            alert("Você pesquisou por: " + query);
        }