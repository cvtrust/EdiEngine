<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 3:06 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

class E_0329 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::AN());
        $this->setMinLength(4);
        $this->setMaxLength(9);
    }
}