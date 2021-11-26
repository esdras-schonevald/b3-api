<?php

namespace Views;

use Basic\View;

abstract class BasicGetView extends View {
    public function buy (array $data) {
        $this->toJson($data);
    }

    public function sell (array $data) {
        $this->toJson($data);
    }

    public function both (array $data) {
        $this->toJson($data);
    }
}