<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Maps;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapLoop;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiStandards\X12_005010\Segments\{ACT,
    BGN,
    DMG,
    DTP,
    EC,
    ICM,
    INS,
    N1,
    N2,
    N3,
    N4,
    NM1,
    PER,
    PM,
    REF,
    AMT,
    QTY};

final class M_834 extends MapLoop
{
    public function __construct()
    {
        parent::__construct(null);

        $this->content->append(BGN::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
        $this->content->append(REF::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
        $this->content->append(DTP::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
        $this->content->append(AMT::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
        $this->content->append(QTY::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));

        $this->content->append(new class($this) extends MapLoop {
            public function __construct(?MapLoop $parentLoop)
            {
                parent::__construct($parentLoop);

                $this->name = 'L_N1';
                $this->reqDes = RequirementDesignator::Mandatory();
                $this->maxOccurs = 999999;

                $this->content->append(N1::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
                $this->content->append(N2::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 2));
                $this->content->append(N3::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 2));
                $this->content->append(N4::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 1));
                $this->content->append(PER::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 3));
                $this->content->append(new class($this) extends MapLoop
                {
                    public function __construct(?MapLoop $parentLoop)
                    {
                        parent::__construct($parentLoop);

                        $this->name = 'L_ACT';
                        $this->reqDes = RequirementDesignator::Optional();
                        $this->maxOccurs = 10;

                        $this->content->append(ACT::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
                        $this->content->append(REF::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 2));
                        $this->content->append(N3::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 2));
                        $this->content->append(N4::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 1));
                        $this->content->append(PER::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 3));
                        $this->content->append(DTP::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 3));
                        $this->content->append(AMT::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 3));
                    }
                });
            }
        });

        $this->content->append(new class($this) extends MapLoop
        {
            public function __construct(?MapLoop $parentLoop)
            {
                parent::__construct($parentLoop);

                $this->name = 'L_INS';
                $this->reqDes = RequirementDesignator::Optional();
                $this->maxOccurs = 999999;

                $this->content->append(INS::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
                $this->content->append(REF::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
                $this->content->append(DTP::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
                $this->content->append(new class($this) extends MapLoop
                {
                    public function __construct(?MapLoop $parentLoop)
                    {
                        parent::__construct($parentLoop);

                        $this->name = 'L_NM1';
                        $this->reqDes = RequirementDesignator::Optional();
                        $this->maxOccurs = 999999;

                        $this->content->append(NM1::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
                        $this->content->append(PER::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 1));
                        $this->content->append(N3::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 1));
                        $this->content->append(N4::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 1));
                        $this->content->append(DMG::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 1));
                        $this->content->append(PM::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 1));
                        $this->content->append(EC::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
                        $this->content->append(ICM::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 1));
                        $this->content->append(AMT::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 10));
                        $this->content->append(HLH::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 1));
                        $this->content->append(HI::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 10));
                        $this->content->append(LUI::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
                    }
                });

                $this->content->append(new class($this) extends MapLoop
                {
                    public function __construct(?MapLoop $parentLoop)
                    {
                        parent::__construct($parentLoop);

                        $this->name = 'L_DSB';
                        $this->reqDes = RequirementDesignator::Optional();
                        $this->maxOccurs = 4;

                        $this->content->append(DSB::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
                        $this->content->append(DTP::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 10));
                        $this->content->append(AD1::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 10));
                    }
                });

                $this->content->append(new class($this) extends MapLoop
                {
                    public function __construct(?MapLoop $parentLoop)
                    {
                        parent::__construct($parentLoop);

                        $this->name = 'L_HD';
                        $this->reqDes = RequirementDesignator::Optional();
                        $this->maxOccurs = 99;

                        $this->content->append(HD::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
                        $this->content->append(DTP::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 10));
                        $this->content->append(AMT::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 3));
                        $this->content->append(REF::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 5));
                        $this->content->append(IDC::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
                        $this->content->append(L_LX::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 30));
                        $this->content->append(L_COB::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 5));
                    }
                });

                $this->content->append(new class($this) extends MapLoop
                {
                    public function __construct(?MapLoop $parentLoop)
                    {
                        parent::__construct($parentLoop);

                        $this->name = 'L_LC';
                        $this->reqDes = RequirementDesignator::Optional();
                        $this->maxOccurs = 10;

                        $this->content->append(LC::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
                        $this->content->append(AMT::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 2));
                        $this->content->append(DTP::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 3));
                        $this->content->append(REF::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 3));
                        $this->content->append(L_BEN::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 3));
                    }
                });

                $this->content->append(new class($this) extends MapLoop
                {
                    public function __construct(?MapLoop $parentLoop)
                    {
                        parent::__construct($parentLoop);

                        $this->name = 'L_FSA';
                        $this->reqDes = RequirementDesignator::Optional();
                        $this->maxOccurs = 5;

                        $this->content->append(FSA::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
                        $this->content->append(AMT::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 2));
                        $this->content->append(DTP::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 2));
                        $this->content->append(REF::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 3));
                    }
                });

                $this->content->append(new class($this) extends MapLoop
                {
                    public function __construct(?MapLoop $parentLoop)
                    {
                        parent::__construct($parentLoop);

                        $this->name = 'L_RP';
                        $this->reqDes = RequirementDesignator::Optional();
                        $this->maxOccurs = 999999;

                        $this->content->append(RP::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
                        $this->content->append(DTP::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
                        $this->content->append(REF::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
                        $this->content->append(INV::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
                        $this->content->append(AMT::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 20));
                        $this->content->append(QTY::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 20));
                        $this->content->append(K3::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 3));
                        $this->content->append(REL::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 1));
                        $this->content->append(L_NM1_1::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
                        $this->content->append(L_FC::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
                        $this->content->append(L_AIN::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
                    }
                });
            }
        });
    }

}
