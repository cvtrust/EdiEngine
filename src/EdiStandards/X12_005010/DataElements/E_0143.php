<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 3:04 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

class E_0143 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(3);
        $this->setMaxLength(3);
        $this->allowedValues = new \ArrayObject(["100","101","104","105","106","107","108","109","110","111","112","113","114","115","116","120","121","124","125","126","127","128","129","130","131","135","138","139","140","141","142","143","144","146","147","148","149","150","151","152","153","154","155","157","159","160","161","163","170","175","176","180","185","186","188","189","190","191","194","195","196","197","198","199","200","201","202","203","204","205","206","207","208","210","211","212","213","214","215","216","217","218","219","220","222","223","224","225","242","244","248","249","250","251","252","255","256","260","261","262","263","264","265","266","267","268","270","271","272","273","275","276","277","278","280","285","286","288","290","300","301","302","303","304","305","306","307","308","309","310","311","312","313","314","315","316","317","319","321","322","323","324","325","326","350","352","353","354","355","356","357","358","360","361","362","402","404","407","408","410","411","414","416","417","418","419","420","421","422","423","424","425","426","427","429","431","432","433","434","435","436","437","440","451","452","453","455","456","460","461","462","463","464","465","466","467","468","469","470","475","480","485","486","490","491","492","494","499","500","501","503","504","511","517","521","527","536","540","561","567","568","601","602","620","622","625","650","715","805","806","810","811","812","813","814","815","816","818","819","820","821","822","823","824","826","827","828","829","830","831","832","833","834","835","836","837","838","839","840","841","842","843","844","845","846","847","848","849","850","851","852","853","854","855","856","857","858","859","860","861","862","863","864","865","866","867","868","869","870","871","872","874","875","876","877","878","879","880","881","882","883","884","885","886","887","888","889","890","891","892","893","894","895","896","901","905","920","924","925","926","928","940","941","942","943","944","945","946","947","980","990","994","995","996","997","998","999"]);
    }
}