<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/20/2018
 * Time: 8:29 AM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

class E_0097 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::N0());
        $this->setMinLength(1);
        $this->setMaxLength(6);
    }
}