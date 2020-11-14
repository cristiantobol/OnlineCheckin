<?php

class ReservationHandler {

	public $reservationStatusCondition;
	public $reservationStateCondition;
	public $guestFirstNameCondition;
	public $post_string;

	public function setXmlConditions($status, $state, $name) {
		$this->reservationStatusCondition = $status;
		$this->reservationStateCondition = $state;
		$this->guestFirstNameCondition = $name;

		$this->post_string = 
		'<?xml version="1.0" encoding="UTF-8"?>
		<fidelio xmlns="V8XMLInterface" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="V8XMLInterface
		c:\duffy\Specifications\XMLInterface\FidelioXML.xsd" Version="1.1.0">
			<request ID="1234"  UserName="XMLInterface" Password="interface">
				<query ReqType="Reservation" Name="ResRequest1">
					<conditions>
						<condition xsi:type="ReservationConditionType" name="ReservationStatus" operation="eq">' . $this->reservationStatusCondition . '</condition>
						<link operator="AND">
							<condition>
								<condition xsi:type="ReservationConditionType" name="GuestFirstname" operation="like">%' . $this->guestFirstNameCondition . '%</condition>
									<link operator="AND">
										<condition>
											<condition xsi:type="ReservationConditionType" name="ReservationState" operation="eq">' . $this->reservationStateCondition . '</condition>
										</condition>
									</link>
							</condition>
						</link>
					</conditions>
					<fields>
						<field name="ReservationStatus"/>
						<field name="ReservationState"/>
						<field name="GuestFirstname"/>
						<field name="GuestNum"/>
						<field name="GuestName"/>
						<field name="GuestArrival"/>
						<field name="GuestDeparture"/>
						<field name="ProfileID"/>
						<field name="NoOfAdults"/>
					</fields>
				</query>
			</request>
		</fidelio>';

		return $this->post_string;
	}
}
