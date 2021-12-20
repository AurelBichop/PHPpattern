<?php

use App\Messages\AlertMessages\DefaultMessage;
use App\Messages\AlertMessages\WarningMessage;
use App\Messages\MessageGenerator;

require '../vendor/autoload.php';


$messageGenerator = new MessageGenerator();
$defaultMessage = new DefaultMessage();
$warningMessage = new WarningMessage();

dd($messageGenerator->generate($warningMessage));

