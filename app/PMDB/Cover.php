<?php

namespace App\PMDB;

use Illuminate\Support\Facades\App;

use Tmdb\Laravel\Facades\Tmdb;
use Tmdb\Repository\MovieRepository;
use Tmdb\Repository\ConfigurationRepository;
use Tmdb\Helper\ImageHelper;

class Cover
{
    static function getCoverImageUrl()
    {
        // Get backdrop url
        $backdrops = config('pmdb.cover_backdrop_movie_ids');
        $movie_repository = new MovieRepository(Tmdb::getMoviesApi()->getClient());
        $config_repository = new ConfigurationRepository(Tmdb::getMoviesApi()->getClient());
        $image_helper = new ImageHelper($config_repository->load());
        $backdrop = null;
        $backdrop_url = "";
        while($backdrop == null)
        {
            $backdrop = $movie_repository->load($backdrops[array_rand($backdrops)], ["language" => App::getLocale()])->getBackdropImage();
        }

        return 'https:' . $image_helper->getUrl($backdrop);
    }
}
