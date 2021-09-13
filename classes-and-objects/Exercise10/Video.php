<?php

class Video{
    private string $title;
    private bool $checkedOut;
    private float $rating;
    public function __construct(string $title, bool $checkedOut = false, float $rating = 0)
    {
        $this->title = $title;
        $this->checkedOut = $checkedOut;
        $this->rating = $rating;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRating(): float
    {
        return $this->rating;
    }


    public function getChecked(): bool
    {
        return $this->checkedOut;
    }


    public function setChecked(bool $checkedOut): bool
    {
       return $this->checkedOut = $checkedOut;
    }
    public function setRating(float $rating): void
    {
        $this->rating = $rating;
    }
}