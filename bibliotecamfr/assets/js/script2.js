const track = document.getElementById("carousel-track");
const itemWidth = 220; // Largura de cada item incluindo margem

function scrollCarousel(direction) {
    track.scrollBy({ left: direction * itemWidth, behavior: "smooth" });
}

setInterval(() => {
    scrollCarousel(1); // Loop automático
}, 3000);
