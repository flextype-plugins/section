<?php

namespace Flextype\Plugin\Section\Shortcodes;

use Thunder\Shortcode\ShortcodeFacade;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// Shortcode: [section_create id=section-uid]Section content here[/section_create]
$flextype['shortcode']->add('section_create', function (ShortcodeInterface $s) use ($flextype) {
    $flextype->registry->set('sections.' . $s->getParameter('id'), $s->getContent());
});

// Shortcode: [section_fetch id=section-uid]
$flextype['shortcode']->add('section_fetch', function (ShortcodeInterface $s) use ($flextype) {
    return $flextype->registry->get('sections.' . $s->getParameter('id'));
});
