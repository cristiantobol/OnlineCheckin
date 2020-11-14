<?php

class UpdateReservationRequest
{
    private $reservationNumber;
    private $randomString;
    private $post_string;

    public function __construct($reservationNumber, $randomString)
    {
        $this->reservationNumber = $reservationNumber;
        $this->checkinNote = $randomString;

        $this->post_string = 
        '<?xml version="1.0" encoding="UTF-8"?>
        <fidelio xmlns="V8XMLInterface" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="V8XMLInterface
        c:\duffy\Specifications\XMLInterface\FidelioXML.xsd" Version="1.0.0">
            <request ID="12345" UserName="XMLInterface" Password="interface">
                <update ReqType="Reservation">
                    <conditions>
                        <condition name="GuestNum" operation="eq" xsi:type="ReservationConditionType">' . $this->reservationNumber . '</condition>
                    </conditions>
                    <fields>
                        <field name="Notes" attr="OCK">Online Check In ' . $this->reservationNumber . 'CODHOTEL' . $this->randomString . '</field>
                    </fields>
                </update>
            </request>
        </fidelio>';
    }

    public function updateReservation() {
        return $this->post_string;
    }
}
