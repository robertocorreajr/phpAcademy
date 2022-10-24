<?php

require_once '../../core/Modules/Upload/Gateways/IngestXmlGateway.php';

class XmlIngestorAdapter implements IngestXmlGateway
{
    public function ingestXml(Document $document): void
    {
        try {
            # código de ingestão =P
        } catch (\Throwable $th) {
            throw new Exception("IngestionException: Ocorreu algum problema ao solicitar a ingestão do XML. Favor tentar novamente");
        }
    }
}

?>