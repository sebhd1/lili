<?php

    namespace App\Enums;

    use App\Enums\Concerns\IsBackedEnum;

    enum Frequency: string implements BackedEnum
    {

        use IsBackedEnum;

        case Occasional = 'occasional';
        case Daily = 'daily';
        case Weekly = 'weekly';
        case Monthly = 'monthly';
        case Periodical = 'periodical';
        case Exceptional = 'exceptional';


        public function label(): string {
            return match($this) {
                self::Occasional => 'Occasionale',
                self::Daily => 'Giornaliero',
                self::Weekly => 'Settimanale',
                self::Monthly => 'Mensile',
                self::Periodical => 'Periodico',
                self::Exceptional => 'Eccezionale',
            };
        }
    }
