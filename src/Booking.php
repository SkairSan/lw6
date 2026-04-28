<?php

namespace Booking;

class Booking
{
    private \DateTime $startDate;
    private \DateTime $endDate;

    public function __construct(\DateTime $start, \DateTime $end)
    {
        $this->startDate = $start;
        $this->endDate = $end;
    }

    public function getDays(): string
    {
        return $this->startDate->diff($this->endDate)->format('%a days');
    }

    public function overlaps(Booking $other): bool
    {
        if ($this->endDate <= $other->startDate || $other->endDate <= $this->startDate) {
            return false;
        }
        return true;
    }
}
