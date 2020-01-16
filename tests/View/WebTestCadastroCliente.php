<?php

namespace Facebook\WebDriver\Remote;
use Facebook\WebDriver\Interactions\WebDriverActions;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverNavigation;
use Facebook\WebDriver\WebDriverOptions;
use Facebook\WebDriver\WebDriverWait;
use Facebook\WebDriver\WebDriverBy;
use PHPUnit\Framework\TestCase;

class WebTestCadastroCliente extends TestCase
{

    protected $webDriver;
    protected $url = 'https://www.google.com';
    protected $googlesearchpage;
    protected $searchresultspage;

    public function testOpen()
    {
        $host = 'http://localhost:4445/wd/hub';
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::firefox());
        $driver->get('http://localhost/fitchef/www/cliente/cadastrar');
        $driver->findElement(WebDriverBy::id('nome'))->sendKeys("Victor");
        $driver->findElement(WebDriverBy::id('telefone'))->sendKeys("123");
        $driver->findElement(WebDriverBy::id('endereco'))->sendKeys("123");
        $driver->findElement(WebDriverBy::id('cep'))->sendKeys("123");
        $driver->findElement(WebDriverBy::id('cpf'))->sendKeys("123");
        $driver->findElement(WebDriverBy::id('email'))->sendKeys("victor@gmail.com");
        $driver->findElement(WebDriverBy::id('senha'))->sendKeys("123");

        $submitElement = $driver->findElement(WebDriverBy::id('singlebutton'));
        $submitElement->click();
        $msg = $driver->findElement(WebDriverBy::id('msg'))->getText();
        $this->assertEquals($msg, "Cadastrado com sucesso");
    }
}
