<?php

require_once __DIR__ . '/vendor/autoload.php';

use Booking\Booking;
use Car\Car;

$booking1 = new Booking(new \DateTime('2024-01-01'), new \DateTime('2024-01-10'));
$booking2 = new Booking(new \DateTime('2024-01-05'), new \DateTime('2024-01-15'));
$booking3 = new Booking(new \DateTime('2024-01-10'), new \DateTime('2024-01-22'));


echo $booking1->getDays() . "\n";
echo $booking2->getDays() . "\n";
echo $booking3->getDays() . "\n";

if (!$booking1->overlaps($booking2)) {
    echo "Не пересекаются\n";
} else {
    echo "Пересекаются\n";
}


$car = new Car();
$car->addBooking($booking1);
$car->addBooking($booking2);

$start = new \DateTime('2024-01-05');
$end = new \DateTime('2024-01-12');

if ($car->isAvailable($start, $end)) {
    echo "Машина свободна\n";
} else {
    echo "Машина занята\n";
}
