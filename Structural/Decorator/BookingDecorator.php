<?php

namespace DesignPatterns\Structural\Decorator;

abstract class BookingDecorator implements Booking
{
    public function __construct(protected Booking $booking)
    {
        
    }
}