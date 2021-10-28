<?php 


namespace App\Controller\Admin\Field;

use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\FieldTrait;

final class TicketStatusField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_STATUS = 'status';

    public static function new(string $propertyName, ?string $label = null): self
    {
        return (new self())
            // ...
            ->setCustomOption(self::OPTION_STATUS, 'OPEN')
        ;
    }

    public function openStatus(): self
    {
        $this->setCustomOption(self::OPTION_STATUS, 'OPEN');

        return $this;
    }

    public function closeStatus(): self
    {
        $this->setCustomOption(self::OPTION_STATUS, 'CLOSED');

        return $this;
    }
}


