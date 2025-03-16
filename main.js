document.getElementById("loadAnime").addEventListener("click", async function () {
    const response = await fetch("https://mugiwaraanime.vercel.app/api/v2/hianime/home");
    const data = await response.json();

    const animeList = document.getElementById("animeList");
    animeList.innerHTML = ""; // Clear old data

    data.data.spotlightAnimes.forEach(anime => {
        const animeItem = document.createElement("div");
        animeItem.innerHTML = `
            <h2>${anime.name}</h2>
            <img src="${anime.poster}" alt="${anime.name}" width="200">
            <p>${anime.description}</p>
        `;
        animeList.appendChild(animeItem);
    });
});
