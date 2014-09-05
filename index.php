<?php

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Debug\Debug;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Vox\Treinamento\Exercicio1\Exercicio1Extension;
use Vox\Treinamento\Exercicio1\Model\Cafe;
use Vox\Treinamento\Exercicio1\Model\Leite;
use Vox\Treinamento\Exercicio1\Model\Chocolate;
use Vox\Treinamento\Exercicio1\Model\Creme;

require 'vendor/autoload.php';

Debug::enable();

$container = new ContainerBuilder();
$extension = new Exercicio1Extension();
$container->registerExtension($extension);
$container->loadFromExtension($extension->getAlias());
//$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/Resources/config'));
//$loader->load('services.yml');

$container->compile();

$tm = $container->get('exercicio1.cafe');




echo "<h1>EXERCICIO 1 - STARBUCKS COM DEPENDENCY INJECTION E COMPOSITE<h2>";

$cafe = new Cafe();
$cafe->addAdicional(new Leite());
$cafe->addAdicional(new Chocolate());
$cafe->addAdicional(new Creme());

echo "<p>Café sai por :".$cafe->calcValor()."</p>";



