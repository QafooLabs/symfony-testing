<?php

namespace AppBundle\Service;

interface VatValidator
{
    /**
     * @param string $vat
     * @return bool
     */
    public function validVat($vat);
}
