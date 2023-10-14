<?php

    namespace App\Enums;

    use App\Enums\Concerns\IsBackedEnum;

    enum OrderStatus: string implements BackedEnum
    {

        use IsBackedEnum;

        case Pending = 'pending';
        case Accepted = 'accepted';
        case InProgress = 'in_progress';
        case Declined = 'declined';
        case Rejected = 'rejected';
        case Cancelled = 'cancelled';
        case Processed = 'processed';
        case Completed = 'completed';
        case Done = 'done';


        public function label(): string {
            return match($this) {
                self::Pending => 'in_attesa',
                self::Accepted => 'accettato',
                self::InProgress => 'in_corso',
                self::Declined => 'declinato',
                self::Rejected => 'rigettato',
                self::Cancelled => 'cancellato',
                self::Processed => 'processato',
                self::Completed => 'completato',
                self::Done => 'chiuso',
            };
        }
    }
