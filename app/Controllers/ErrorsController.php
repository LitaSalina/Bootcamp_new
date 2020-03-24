<?php

class ErrorsController
{
    public function index(): string
    {
        return BaseView::generate('Errors', 'index');
    }
}