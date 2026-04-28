<?php

namespace Car;

use Booking\Booking;

class Car
{
     /**
     * @var Booking[]
     */
    private array $bookings = [];

    public function isAvailable(\DateTime $start, \DateTime $end): bool
    {
        $tempBooking = new Booking($start, $end);

        foreach ($this->bookings as $booking) {
            if ($tempBooking->overlaps($booking)) {
                return false;
            }
        }

        return true;
    }

    public function addBooking(Booking $booking): void
    {
        $this->bookings[] = $booking;
    }

     /**
     * @return Booking[]
     */
    public function getBookings(): array
    {
        return $this->bookings;
    }
}
