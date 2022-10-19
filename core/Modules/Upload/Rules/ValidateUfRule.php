<?php

require_once '../Entities/Document.php';

class ValidateUfRule
{
    public function apply(Document $document, string $uf): void
    {
        if ($document->getUf() != $uf) {
            throw new Exception("WrongUfEception: a UF informada não corresponde à UF da chave de acesso do XML.");
        }
    }
}

?>