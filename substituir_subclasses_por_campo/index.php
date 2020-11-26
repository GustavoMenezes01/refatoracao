<?php declare(strict_types=1);

namespace Alura\SubstituirSubclassesPorCampo;

require 'Microondas.php';
require 'Microondas110.php';
require 'Microondas220.php';

$microondas110 = Microondas::criarMicroondas110();
echo "<p>{$microondas110->getVoltagem()}</p>";

$microondas220 = Microondas::criarMicroondas220();
echo "<p>{$microondas220->getVoltagem()}</p>";

