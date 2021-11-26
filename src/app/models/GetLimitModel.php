<?php

namespace Models;

use Basic\Model;
use Services\AnalyserConnect;

class GetLimitModel extends Model
{
    private AnalyserConnect $conn;

    public function __construct()
    {   $this->conn = new AnalyserConnect(
            yaml_parse_file(__DIR__ . "/../config/servers.yaml")["analyser"]["url"]
        );
    }

    public function buy (int $limit) {
        return array_chunk(
            (array) $this->conn->getResponse()->compra, $limit
        )[0];
    }

    public function sell ($limit) {
        return array_chunk(
            (array) $this->conn->getResponse()->venda, $limit
        )[0];
    }

    public function both ($limit) {
        return [
            "buy" => array_chunk(
                (array) $this->conn->getResponse()->compra, $limit
            )[0],
            "sell" => array_chunk(
                (array) $this->conn->getResponse()->venda, $limit
            )[0]
        ];
    }
}