<?php

namespace TNClock\News\Block;

class News extends \Magento\Framework\View\Element\Template {
    const FEED_URL = "https://vnexpress.net/rss/kinh-doanh.rss";

    
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