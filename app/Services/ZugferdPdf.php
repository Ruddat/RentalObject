<?php

namespace App\Services;

use setasign\Fpdi\Fpdi;

class ZugferdPdf extends Fpdi
{
    private $embeddedFiles = [];

    public function attachZugferdXml($xml)
    {
        // Komprimiere das XML
        $compressedXml = gzcompress($xml);

        // Neues Objekt für die eingebettete Datei
        $this->_newobj();
        $n = $this->n; // Nummer des aktuellen Objekts
        $this->_put('<<');
        $this->_put('/Type /EmbeddedFile');
        $this->_put('/Subtype /application#2Fxml');
        $this->_put('/Filter /FlateDecode'); // Filter für die Komprimierung
        $this->_put('/Length ' . strlen($compressedXml));
        $this->_put('>>');
        $this->_put('stream');
        $this->_putstream($compressedXml);
        $this->_put('endstream');
        $this->_put('endobj');

        // Dateien-Spezifikation hinzufügen
        $this->_newobj();
        $this->_put('<<');
        $this->_put('/Type /Filespec');
        $this->_put('/F (ZUGFeRD-invoice.xml)');
        $this->_put('/EF << /F ' . $n . ' 0 R >>');
        $this->_put('>>');
        $fileSpecObject = $this->n;
        $this->_put('endobj');

        // Speichere die Datei-Spezifikation für den Katalog
        $this->embeddedFiles[] = [
            'name' => 'ZUGFeRD-invoice.xml',
            'object' => $fileSpecObject,
        ];
    }

    protected function _putcatalog()
    {
        parent::_putcatalog();

        // Eingebettete Dateien zum Katalog hinzufügen
        if (!empty($this->embeddedFiles)) {
            $this->_put('/Names << /EmbeddedFiles << /Names [');
            foreach ($this->embeddedFiles as $file) {
                $this->_put('(' . $file['name'] . ') ' . $file['object'] . ' 0 R');
            }
            $this->_put('] >> >>');
        }
    }
}
