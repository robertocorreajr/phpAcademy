<?php

require_once '../Entities/Document.php';

class DecodeXmlRule
{
    public function apply(string $xml): Document
    {
        return new Document('1','2','3','4');
    }
}

?>