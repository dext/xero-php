<?php

namespace XeroPHP\Remote\Exception;

use XeroPHP\Remote\Exception;

class SimpleXMLException extends Exception 
{
    private $_data = '';
    private $_xmlHeaderContentLength = 0;
    private $_xmlLength = 0;

    public function __construct($message, $data, $xmlContentLength = null) 
    {
        $this->_data = $data;
        $this->_xmlHeaderContentLength = $xmlContentLength ?? 0;
        $this->_xmlLength = count($data) ?? 0;
        parent::__construct($message);
    }

    public function getData()
    {
        return $this->_data;
    }

    public function getXmlContentLength()
    {
        return $this->_xmlHeaderContentLength;
    }

    public function getXmlLength()
    {
        return $this->_xmlLength;
    }
}
