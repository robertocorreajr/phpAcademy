<?php

class UploadController
{
    public function store(array $clientRequest) //No mundo real receberia a Request do Laravel
    {
        $xmlIngestorAdapter = new XmlIngestorAdapter;
        $saveDocumentAdapter = new SaveDocumentPostgresAdapter;
        $request = new Request($clientRequest['xml'], $clientRequest['cnpj'], $clientRequest['uf'], $clientRequest['type']);

        $useCase = new UseCase($xmlIngestorAdapter,$saveDocumentAdapter);
        $useCase->execute($request);
    }
}

?>