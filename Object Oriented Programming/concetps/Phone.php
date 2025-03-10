<?php
require_once("./interfaces.php");

use \Devices\Phone;

class AndroidPhone implements Phone
{

    private string $imei = "imei-123456789";
    private string $macAddress = "mac-123456789";

    /**
     * @return string
     */
    public function getIMEI(): string
    {

        return $this->imei;
    }

    /**
     * @return string
     */
    public function getMAC(): string
    {

        return $this->macAddress;
    }

}

?>