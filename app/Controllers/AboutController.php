<?php

class AboutController
{
    public function index(): string
    {
        return BaseView::generate('About', 'index');
    }   
}