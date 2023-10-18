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
                self::Pending => 'In attesa',
                self::Accepted => 'Accettato',
                self::InProgress => 'In corso',
                self::Declined => 'Declinato',
                self::Rejected => 'Rigettato',
                self::Cancelled => 'Cancellato',
                self::Processed => 'Processato',
                self::Completed => 'Completato',
                self::Done => 'Chiuso',
            };
        }
    }
