async function loadAnime() {
    try {
        let response = await const API_BASE_URL = "https://mugiwara-anime.vercel.app/api/v2/hianime";

fetch(`${API_BASE_URL}/home`)
  .then((response) => response.json())
  .then((data) => console.log(data)) // Check if it logs anime data
  .catch((error) => console.error("Error fetching anime:", error));
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
