<?php

class VideoStore{
    private ?array $videoStore;
    private ?array $checkedOutVideos;
    public function __construct(array $videoStore = null)
    {
        $this->videoStore = $videoStore;
    }


    public function getVideoStore(): array
    {
        return $this->videoStore;
    }

    public function addMovie(Video $video) {
        $this->videoStore[] = $video;
    }
    public function list() {
        foreach ($this->videoStore as $key=>$movie) {
            echo $key+1 . " | Name: " . $movie->getTitle() . " | Checked out: " . ((!$movie->getChecked()) ? "no" : "yes") . " | Rating: " . $movie->getRating() .  "\n";
        }
    }

}