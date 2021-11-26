<?php

Namespace Views;

Use Basic\View;

Class HomeView Extends View
{
    public function index(array $data = [])
    {   $this->show('exampleTemplate', $data);
    }
}