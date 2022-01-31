<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Dead()
 * @method static static Alive()
 * @method static static Unknown()
 * @method static static Unknown()
 */
final class CharacterStatus extends Enum
{
    const Deceased =   'Deceased';
    const Alive =   'Alive';
    const Unknown = 'Unknown';
    const PresumedDead = 'Presumed dead'; 
}
