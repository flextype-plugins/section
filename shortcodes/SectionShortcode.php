<?php

namespace Flextype\Plugin\Section\Shortcodes;

use Thunder\Shortcode\ShortcodeFacade;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// Shortcode: [section_create id=section-uid]Section content here[/section_create]
$flextype->container('shortcode')->addHandler('section_create', function (ShortcodeInterface $s) use ($flextype) {
    $flextype->container('registry')->set('sections.' . $s->getParameter('id'), $s->getContent());
});

// Shortcode: [section_fetch id=section-uid]
$flextype->container('shortcode')->addHandler('section_fetch', function (ShortcodeInterface $s) use ($flextype) {
    return $flextype->container('registry')->get('sections.' . $s->getParameter('id'));
});
