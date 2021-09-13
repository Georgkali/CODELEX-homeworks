<?php
require_once "Video.php";
require_once "VideoStore.php";

$videoStore = new VideoStore();
$videoStore->addMovie(new Video("The Matrix"));
$videoStore->addMovie(new Video("Godfather II"));
$videoStore->addMovie(new Video("Star Wars Episode IV: A New Hope."));

class Application{
    private VideoStore $videoStore;
    public function __construct(VideoStore $videoStore)
    {
        $this->videoStore = $videoStore;
    }

    function run()
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->addMovies();
                    break;
                case 2:
                    $this->rentVideo();
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->listInventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function addMovies()
    {
        $title = readline("Enter movie title: \n");
        $this->videoStore->addMovie(new Video($title));
    }

    private function rentVideo()
    {
        $this->listInventory();
        $i = readline("Choose the movie you want to rent: ");
        $this->videoStore->getVideoStore()[$i-1]->setChecked(true);
    }

    private function return_video()
    {
        //todo
    }

    private function listInventory()
    {
        $this->videoStore->list();
    }
}

$app = new Application($videoStore);
$app->run();

