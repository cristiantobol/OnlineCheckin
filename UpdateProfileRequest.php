<?php

class UpdateProfile {
    
    private $updateRequest;

    public function __construct()
    {
        $this->updateRequest = 
        '<?xml version="1.0" encoding="UTF-8"?>
        <fidelio xmlns="V8XMLInterface" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="V8XMLInterface
        c:\duffy\Specifications\XMLInterface\FidelioXML.xsd" Version="1.0.0">
            <request ID="12345"  UserName="XMLInterface" Password="interface">
                <update ReqType="Profile">
                    <fields>
                        <field name="PrimaryAddr" attr="ADR" addData="-1">1</field>
                        <field name="Street1" attr="ADR" addData="-1">OldStreet332</field>
                        <field name="City" attr="ADR" addData="-1">NewCity</field>
                        <field name="CountryISO2" attr="ADR" addData="-1">RU</field>
                        <!-- State – In case of profile insert or if updating both: state and country, this field must be sent after Country filed in the XML element sequence. -->
                        <field name="State" attr="ADR" addData="-1"></field>
                    </fields>
                    <conditions>
                        <condition name="ProfileID" operation="eq" xsi:type="ProfileConditionType">14417</condition>
                    </conditions>
                </update>
            </request>
        </fidelio>';
    }
}