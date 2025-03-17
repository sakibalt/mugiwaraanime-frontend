document.getElementById("loadAnime").addEventListener("click", function() {
    fetch("https://mugiwaraanime.vercel.app/api/v2/hianime/home")
    .then(response => response.json())
    .then(data => {
        let animeContainer = document.getElementById("animeContainer");
        animeContainer.innerHTML = ""; // Clear previous content

        data.data.spotlightAnimes.forEach(anime => {
            let animeCard = document.createElement("div");
            animeCard.classList.add("anime-card");
            animeCard.innerHTML = `
                <img src="${anime.poster}" alt="${anime.name}">
                <h3>${anime.name}</h3>
                <p>${anime.description.substring(0, 100)}...</p>
                <a href="https://hianime.to/anime/${anime.id}" target="_blank">Watch Now</a>
            `;
            animeContainer.appendChild(animeCard);
        });
    })
    .catch(error => console.error("Error loading anime:", error));
});
