<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Sector extends Enum
{
    const Energy = 0;
    const Materials = 1;
    const CapitalGoods = 2;
    const CommercialProfessional = 3;
    const Transportation = 4;
    const ConsumerDurablesApparel = 5;
    const ConsumerServices = 6;
    const MediaEntertainment = 7;
    const Retailing = 8;
    const FoodStaplesRetailing = 9;
    const FoodBeverages = 10;
    const HealthCareEquipment = 11;
    const PharmaBiotechLifeScience= 12;
    const DiversifiedFinancials = 13;
    const Insurance = 14;
    const SoftwareServices = 15;
    const TelecommunicationServices = 16;
    const Utilities = 17;
    const REITs = 18;
    const RealEstateMgmt = 19;    
}
