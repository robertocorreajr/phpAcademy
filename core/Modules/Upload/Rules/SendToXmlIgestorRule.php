<?php

require_once '../Gateways/IngestXmlGateway.php';
require_once '../Entities/Document.php';

class SendToXmlIngestorRule
{
    private readonly IngestXmlGateway $ingestXml;
    public function __construct(IngestXmlGateway $ingestXml)
    {
        $this->ingestXml = $ingestXml;
    }

    public function apply(Document $document): void
    {
            $this->ingestXml->ingestXml($document);
    }
}

?>
