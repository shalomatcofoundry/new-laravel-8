<?php

use App\Events\GiftCertificatePurchased;
use Illuminate\Support\Facades\Event;
use function Illuminate\Events\queueable;

// Closure based event listener
Event::listen(function (GiftCertificatePurchased $event) {
    dd($event);
});

// Queueable
//Event::listen(queueable(function (GiftCertificatePurchased $event) {
//    dd($event);
//}));
