<?php declare(strict_types=1);


namespace EdmondsCommerce\SamTrainingXML\Reddit;

class SimpleXML
{

    public function getXML(): string
    {
        return $this->getSimpleXMLObject()->asXML();
    }

    private function getSimpleXMLObject(): \SimpleXMLElement
    {
        return new \SimpleXMLElement('');
    }

}
