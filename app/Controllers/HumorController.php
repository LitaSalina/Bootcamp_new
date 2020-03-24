<?php

class HumorController
{
    public function index(): string
    {
        $humor = HumorRepository::getHumor();
        return BaseView::generate('Humor', 'index', ['humor' => $humor]);
    }
    
    public function viewJoke(): string
    {
        $jokeId = $_GET['id'] ?? 0;
        $joke = HumorRepository::getJoke($JokeId);

        return BaseView::generate ('Humor', 'viewHumor', ['joke' => $joke]);
    }
}