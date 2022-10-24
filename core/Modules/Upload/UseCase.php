<?php

require_once 'Rules/DecodeXmlRule.php';
require_once 'Gateways/IngestXmlGateway.php';
require_once 'Gateways/SaveDocumentGateway.php';

class UseCase
{

    private IngestXmlGateway $ingestXmlGateway;
    private SaveDocumentGateway $saveDocumentGateway;
    public function __construct(IngestXmlGateway $ingestXmlGateway, SaveDocumentGateway $saveDocumentGateway)
    {
        $this->ingestXmlGateway = $ingestXmlGateway;
        $this->saveDocumentGateway = $saveDocumentGateway;
    }
    
    public function execute(): void
    {
        $decodeXmlRule = new DecodeXmlRule;
        $document = $decodeXmlRule->apply('xml');
        
        $validadeCnpjRule = new ValidateCnpjRule;
        $validadeCnpjRule->apply($document,'cnpj');

        $validadeUfRule = new ValidateUfRule;
        $validadeUfRule->apply($document,'uf');

        $sendToXmlIngestorRule = new SendToXmlIngestorRule($this->ingestXmlGateway);
        $sendToXmlIngestorRule->apply($document);

        $saveDocument = new SaveDocumentRule($this->saveDocumentGateway);
        $saveDocument->apply($document);
    }
}

?>