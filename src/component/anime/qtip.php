<?php

function fetchAnimeData($animeId) {
    session_start();

    require_once($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

    global $zpi;

    if (!isset($zpi)) {
        echo "API endpoint is not defined in _config.php.";
        exit();
    }

    $url = "$zpi/info?id=$animeId";
    $animeDataResponse = file_get_contents($url);

    if ($animeDataResponse === false) {
        echo "Failed to fetch anime data.";
        exit();
    }

    $animeResponse = json_decode($animeDataResponse, true);

    if ($animeResponse === null) {
        echo "Failed to decode JSON.";
        exit();
    }

    if (!empty($animeResponse['success']) && isset($animeResponse['results']['data'])) {
        $data = $animeResponse['results']['data'];
        $animeInfo = $data['animeInfo'] ?? [];
        $tvInfo = $animeInfo['tvInfo'] ?? [];
        $seasons = $animeResponse['results']['seasons'] ?? [];
        
        // Process seasons
        $seasonList = [];
        foreach ($seasons as $season) {
            $seasonList[] = [
                'id' => $season['id'] ?? null,
                'name' => $season['season'] ?? null,
                'title' => $season['title'] ?? null,
                'poster' => $season['season_poster'] ?? null,
                'isCurrent' => ($season['id'] === $animeId) // Check if this is the current season
            ];
        }

        // Process characters and voice actors
        $chList = [];
        $characters = $data['charactersVoiceActors'] ?? [];
        foreach ($characters as $character) {
            $voiceActors = [];
            foreach ($character['voiceActors'] ?? [] as $actor) {
                $voiceActors[] = [
                    'id' => $actor['id'] ?? null,
                    'name' => $actor['name'] ?? 'Unknown voice actor',
                    'poster' => $actor['poster'] ?? null
                ];
            }
            
            $chList[] = [
                'character' => [
                    'id' => $character['character']['id'] ?? null,
                    'name' => $character['character']['name'] ?? 'Unknown character',
                    'poster' => $character['character']['poster'] ?? null,
                    'cast' => $character['character']['cast'] ?? null
                ],
                'voiceActors' => $voiceActors
            ];
        }

        // Process recommended animes
        $recommendedAnimeList = [];
        $recommendedAnimes = $data['recommended_data'] ?? [];
        foreach ($recommendedAnimes as $recommendedAnime) {
            $recommendedAnimeList[] = [
                'id' => $recommendedAnime['id'] ?? null,
                'data_id' => $recommendedAnime['data_id'] ?? null,
                'name' => $recommendedAnime['title'] ?? $recommendedAnime['japanese_title'] ?? null,
                'japanese' => $recommendedAnime['japanese_title'] ?? null,
                'poster' => $recommendedAnime['poster'] ?? null,
                'duration' => $recommendedAnime['tvInfo']['duration'] ?? null,
                'type' => $recommendedAnime['tvInfo']['showType'] ?? null,
                'adultContent' => $recommendedAnime['adultContent'] ?? false,
                'episodes' => [
                    'sub' => $recommendedAnime['tvInfo']['sub'] ?? $recommendedAnime['tvInfo']['eps'] ?? null,
                    'dub' => $recommendedAnime['tvInfo']['dub'] ?? null
                ]
            ];
        }

        // Process related animes
        $relatedAnimeList = [];
        $relatedAnimes = $data['related_data'] ?? [];
        foreach ($relatedAnimes as $relatedAnime) {
            $relatedAnimeList[] = [
                'id' => $relatedAnime['id'] ?? null,
                'data_id' => $relatedAnime['data_id'] ?? null,
                'name' => $relatedAnime['title'] ?? $relatedAnime['japanese_title'] ?? null,
                'japanese' => $relatedAnime['japanese_title'] ?? null,
                'poster' => $relatedAnime['poster'] ?? null,
                'type' => $relatedAnime['tvInfo']['showType'] ?? null,
                'adultContent' => $relatedAnime['adultContent'] ?? false,
                'episodes' => [
                    'sub' => $relatedAnime['tvInfo']['sub'] ?? $relatedAnime['tvInfo']['eps'] ?? null,
                    'dub' => $relatedAnime['tvInfo']['dub'] ?? null
                ]
            ];
        }

        return [
            'poster' => $data['poster'] ?? 'default_poster.jpg',
            'id' => $data['id'] ?? null,
            'malId' => $data['malId'] ?? null,
            'anilistId' => $data['anilistId'] ?? null,
            'data_id' => $data['data_id'] ?? null,
            'title' => $data['title'] ?? null,
            'japanese' => $data['japanese_title'] ?? null,
            'synonyms' => $data['synonyms'] ?? null,
            'overview' => $animeInfo['Overview'] ?? 'No description',
            'showType' => $tvInfo['showType'] ?? null,
            'rating' => $tvInfo['rating'] ?? null,
            'subEp' => $tvInfo['sub'] ?? $tvInfo['eps'] ?? 0,
            'dubEp' => $tvInfo['dub'] ?? 0,
            'aired' => $animeInfo['Aired'] ?? null,
            'premiered' => $animeInfo['Premiered'] ?? null,
            'malscore' => $animeInfo['MAL Score'] ?? null,
            'status' => $animeInfo['Status'] ?? null,
            'genres' => $animeInfo['Genres'] ?? [],
            'quality' => $tvInfo['quality'] ?? null,
            'duration' => $tvInfo['duration'] ?? $animeInfo['Duration'] ?? null,
            'actors' => $chList,
            'studio' => $animeInfo['Studios'] ?? null,
            'producer' => $animeInfo['Producers'] ?? [],
            'season' => $seasonList,
            'relatedAnimes' => $relatedAnimeList,
            'recommendedAnimes' => $recommendedAnimeList,
            'adultContent' => $data['adultContent'] ?? false
        ];
    }

    return false;
}