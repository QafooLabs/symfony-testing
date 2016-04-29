<?php

namespace AppBundle\Service;

class AlwaysValidVatValidator implements VatValidator
{
    public function validVat($vat)
    {
        return true;
    }
}
