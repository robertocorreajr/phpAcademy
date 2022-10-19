<?php

require_once '../Entities/Document.php';

class ValidateCnpjRule
{
    public function apply(Document $document, string $cnpj): void
    {
        if ($cnpj != $document->getCnpj()) {
            throw new Exception('WrongCnpjException o CNPJ informado não corresponde ao CNPJ da chave de acesso do XML.');
        }
    }
}

?>