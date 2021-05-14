<?php

namespace BearCosmetics\Weather\Block;

class Weather extends \Magento\Framework\View\Element\Template {
    const FEED_URL = "api.openweathermap.org/data/2.5/weather?q=HaNoi&appid=d3b83ec5eeb668e52d0d436a7b7f0d3d";
    const API_KEY = "3cc0b9dcca5952a335d95e822d5abdb7";

    
    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function fetchFeed() {
        $xml_string = file_get_contents(self::FEED_URL);
        $xml = simplexml_load_string($xml_string, 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json, true);
        return $array['channel']['item'];
    }
}