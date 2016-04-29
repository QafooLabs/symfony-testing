<?php

namespace AppBundle\Service;

class SoapVatValidator implements VatValidator
{
    public function validVat($vat)
    {
        return true;
    }
}
