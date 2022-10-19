<?php

require_once 'Rules/DecodeXmlRule.php';

class UseCase
{
    public function execute(): void
    {
        $decodeXmlRule = new DecodeXmlRule;
        $document = $decodeXmlRule->apply('xml');
        
        $validadeCnpjRule = new ValidateCnpjRule;
        $validadeCnpjRule->apply($document,'cnpj');

        $validadeUfRule = new ValidateUfRule;
        $validadeUfRule->apply($document,'uf');
    }
}

?>