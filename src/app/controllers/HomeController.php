<?php

Namespace Controllers;

Use Basic\Controller;
Use Main\Container;

Class HomeController Extends Controller
{
    public function index()
    {   Container::view("HomeView") -> index(
            Container::model("HomeModel") -> index(
            )
        );
    }
}



/**
 * Controle da Qualidade
 * [x]  SRP - Controlar quando o Model será inserido na view
 * [x]  OCP - Testes unitarios para o selamento da classe
 * [x]  LSP - Pode representar sua gereralização perfeitamente
 * [x]  ISP - Segregado tanto quanto possível
 * [x]  DIP - Inversão de Controle realizada
 */