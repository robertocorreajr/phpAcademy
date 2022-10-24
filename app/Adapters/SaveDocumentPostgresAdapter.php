<?php

require_once '../../core/Modules/Upload/Gateways/IngestXmlGateway.php';

class SaveDocumentPostgresAdapter implements SaveDocumentGateway
{
    public function saveDocument(Document $document): void
    {
        try {
            # salva ( ou finge q salva =P )
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

?>