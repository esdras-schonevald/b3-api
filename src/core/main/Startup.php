<?php

namespace Main;

use Main\Router;
use Exception;
use ParseError;

class Startup
{
    # Main Method
    function __construct()
    {   try
        {   # Get Config
            $this->defineConfig(__DIR__ . "/../config/bootstrap.yaml");

            # Auto-Load
            require_once __DIR__ . "/../../../vendor/autoload.php";

            # Set routes in Router
            $routes =   yaml_parse_file(__DIR__ . "/" . __FILES__["routes"]);
            $Router =   new Router($routes);

            # Run the Router
            $Router->run();
        }

        catch (ParseError $pe)
        {   ini_set("error_log", __DIR__ . "/../../tmp/log/php-error.log");
            error_log($pe->getCode() . " - " . $pe->getMessage() . " " . $pe->getFile() . " " . $pe->getLine());
            print("<h1>Serciço Temporariamente Indisponível!</h1>");
        }

        catch (Exception $e)
        {   ini_set("error_log", __DIR__ . "/../../tmp/log/php-error.log");
            error_log($e->getMessage());
            $error_page = file_get_contents(__DIR__ . "/../../app/views/src/exception/404.html");
            print($error_page);
        }
    }

    /**
     * Define constantes do projeto
     *
     * @param string $configPath
     * @return void
     */
    private function defineConfig(string $configPath)
    {   // Busca as configurações iniciais no arquivo config.ini
        $config = yaml_parse_file($configPath);

        // Define constantes do projeto
        foreach ($config as $constant => $value)
        {   define("__{$constant}__", $value);
            unset($config[$constant]);
        }
    }

}