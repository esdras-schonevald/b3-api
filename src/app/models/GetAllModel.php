<?php

namespace Models;

use Services\AnalyserConnect;

class GetAllModel
{
    private AnalyserConnect $conn;

    public function __construct(){
        $this->conn = new AnalyserConnect(
            yaml_parse_file(__DIR__ . "/../config/servers.yaml")["analyser"]["url"]
        );
    }


    public function buy (): array {
        return (array) $this->conn->getResponse()->compra;
    }

    public function sell (): array {
        return (array) $this->conn->getResponse()->venda;
    }

    public function both (): array {
        return [
            "buy"   =>  $this->conn->getResponse()->compra,
            "sell"  =>  $this->conn->getResponse()->venda
        ];
    }
}