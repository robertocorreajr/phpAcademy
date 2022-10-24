<?php

interface SaveDocumentGateway
{
    public function saveDocument(Document $document): void;
}

?>