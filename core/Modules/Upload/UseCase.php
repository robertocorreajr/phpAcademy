<?php

require_once 'Rules/DecodeXmlRule.php';
require_once 'Gateways/IngestXmlGateway.php';
require_once 'Gateways/SaveDocumentGateway.php';

class UseCase
{
    private DecodeXmlRule $decodeXmlRule;
    private ValidateCnpjRule $validadeCnpjRule;
    private ValidateUfRule $validadeUfRule;
    private SendToXmlIngestorRule $sendToXmlIngestorRule;
    private SaveDocumentRule $saveDocument;

    public function __construct(IngestXmlGateway $ingestXmlGateway, SaveDocumentGateway $saveDocumentGateway)
    {
        
        $this->decodeXmlRule = new DecodeXmlRule;
        $this->validadeCnpjRule = new ValidateCnpjRule;
        $this->validadeUfRule = new ValidateUfRule;
        $this->sendToXmlIngestorRule = new SendToXmlIngestorRule($ingestXmlGateway);
        $this->saveDocument = new SaveDocumentRule($saveDocumentGateway);
    }
    
    public function execute(): void
    {
        

        
        $document = $this->decodeXmlRule->apply('xml');
        $this->validadeCnpjRule->apply($document,'cnpj');
        $this->validadeUfRule->apply($document,'uf');
        $this->sendToXmlIngestorRule->apply($document);
        $this->saveDocument->apply($document);
    }
}

?>