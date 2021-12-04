<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit(); 
}

class SeatregRegistrationService {
    /**
     *
     * Return seat price from registration layout
     *
    */
    public static function getSeatPriceFromLayout($seatID, $roomUUID, $roomsData) {
        $price = 0;

        foreach($roomsData as $roomData) {
            if($roomData->room->uuid === $roomUUID) {
                foreach($roomData->boxes as $box) {
                    if($box->id === $seatID) {
                        $price = $box->price;

                        break 2;
                    }
                }
            }
        }

	    return $price;
    }
}