<?php

namespace Controllers;

use Basic\Controller;
use Main\Container;

class GetLimitController extends Controller {
    public function buy ($limit) {
        Container::view ("GetLimitView") -> buy (
            Container::model ("GetLimitModel") -> buy ($limit)
        );
    }

    public function sell ($limit) {
        Container::view ("GetLimitView") -> sell (
            Container::model ("GetLimitModel") -> sell ($limit)
        );
    }

    public function both ($limit) {
        Container::view ("GetLimitView") -> both (
            Container::model ("GetLimitModel") -> both ($limit)
        );
    }

}