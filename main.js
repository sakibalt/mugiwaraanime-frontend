async function loadAnime() {
    try {
        let response = await fetch("https://gogoanime-api-xnd4.onrender.com/api/anime");
        let data = await response.json();

        let container = document.getElementById("anime-container");
        container.innerHTML = "";

        data.forEach(anime => {
            let animeCard = document.createElement("div");
            animeCard.classList.add("anime-card");

            animeCard.innerHTML = `
                <h2>${anime.title}</h2>
                <p>${anime.description}</p>
                <iframe src="${anime.server1}" allowfullscreen></iframe>
                <iframe src="${anime.server2}" allowfullscreen></iframe>
            `;

            container.appendChild(animeCard);
        });
    } catch (error) {
        console.error("Error loading anime:", error);
    }
}

loadAnime();
