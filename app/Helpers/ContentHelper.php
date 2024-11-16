<?php

namespace App\Helpers;

class ContentHelper
{
    public static function limitHtmlContentWithFormatting($content, $limit)
    {
        $allowedTags = '<strong><br><ul><li><ol><blockquote><pre><p><em>';
        $text = strip_tags($content, $allowedTags);

        if (strlen($text) > $limit) {
            $text = substr($text, 0, $limit) . '...';

            $dom = new \DOMDocument();
            libxml_use_internal_errors(true); // HTML-Fehler unterdrücken
            $dom->loadHTML(mb_convert_encoding($text, 'HTML-ENTITIES', 'UTF-8'));
            $text = $dom->saveHTML();
        }

        return $text;
    }
}
