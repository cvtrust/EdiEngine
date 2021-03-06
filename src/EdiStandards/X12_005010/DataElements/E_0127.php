<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 3:32 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

class E_0127 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(2);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["CA","CC","CD","CH","CO","CP","CT","DA","DG","DO","DR","DT","GD","LT","NP","NR","OP","OR","PS","PT","RT","SA","SC","SF","SN","SS","ST","T1","TD","TR","UT"]);
    }
}