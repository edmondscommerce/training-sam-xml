<?php declare(strict_types=1);


namespace EdmondsCommerce\SamTrainingXML\Reddit;

use SimpleXMLElement;

class SimpleXML
{

    public const EMPTY_XML_STRING = '<?xml version="1.0" encoding="UTF-8"?><root></root>';

    public function getXML(): string
    {
        return $this->getSimpleXMLObject()->asXML();
    }

    private function getSimpleXMLObject(): SimpleXMLElement
    {
        return new SimpleXMLElement(self::EMPTY_XML_STRING);
    }

}
