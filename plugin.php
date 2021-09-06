<?php

declare(strict_types=1);

namespace Flextype\Plugin\Section;

use Thunder\Shortcode\ShortcodeFacade;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// Shortcode: [section_create id=section-uid]Section content here[/section_create]
parsers()->shortcodes()->addHandler('section_create', function (ShortcodeInterface $s) {
    registry()->set('sections.' . $s->getParameter('id'), $s->getContent());
});

// Shortcode: [section_fetch id=section-uid]
parsers()->shortcodes()->addHandler('section_fetch', function (ShortcodeInterface $s) {
    return registry()->get('sections.' . $s->getParameter('id'));
});
