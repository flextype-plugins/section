<?php

/**
 *
 * Flextype Section Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Flextype\Component\{Event\Event, Registry\Registry};

// Event: onShortcodesInitialized
Event::addListener('onShortcodesInitialized', function () {

    // Shortcode: [section_create name=test]Section content here[/section_create]
    Content::shortcode()->addHandler('section_create', function(ShortcodeInterface $s) {
        Registry::set('sections.section_'.$s->getParameter('name'), $s->getContent());
    });

    // Shortcode: [section name=test]
    Content::shortcode()->addHandler('section', function(ShortcodeInterface $s) {
        return Registry::get('sections.section_'.$s->getParameter('name'));
    });
});
