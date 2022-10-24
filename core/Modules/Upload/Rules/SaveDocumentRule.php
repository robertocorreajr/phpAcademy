<?php

class SaveDocumentRule
{
    private SaveDocumentGateway $saveDocumentGateway;
    public function __construct(SaveDocumentGateway $saveDocumentGateway)
    {
        $this->saveDocumentGateway = $saveDocumentGateway;
    }

    public function apply(Document $document): void
    {
        $this->saveDocumentGateway->saveDocument($document);
    }
}

?>