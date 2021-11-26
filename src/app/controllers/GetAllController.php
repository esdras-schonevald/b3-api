<?php

namespace Controllers;

use Basic\Controller;
use Main\Container;

class GetAllController extends Controller {
    public function buy () {
        Container::view ("GetAllView") -> buy (
            Container::model ("GetAllModel") -> buy ()
        );
    }

    public function sell () {
        Container::view ("GetAllView") -> sell (
            Container::model ("GetAllModel") -> sell ()
        );
    }

    public function both () {
        Container::view ("GetAllView") -> both (
            Container::model ("GetAllModel") -> both ()
        );
    }
}