<?php


if (!function_exists('limitHtmlContentWithFormatting')) {
    function limitHtmlContentWithFormatting($content, $limit) {
        $allowedTags = '<strong><br><ul><li><ol><blockquote><pre><p><em>';
        $text = strip_tags($content, $allowedTags);

        if (strlen($text) > $limit) {
            $text = substr($text, 0, $limit) . '...';

            $dom = new \DOMDocument();
            libxml_use_internal_errors(true); // Suppress HTML errors
            $dom->loadHTML(mb_convert_encoding($text, 'HTML-ENTITIES', 'UTF-8'));
            $text = $dom->saveHTML();
        }

        return $text;
    }
}
