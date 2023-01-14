<?php

namespace App\Enums;

enum TableStatus: string{
    case Folyamatban = "folyamatban";
    case Elérhető = "elérhető";
    case Elfogyott ="elfogyott";
 
}