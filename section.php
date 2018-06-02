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

    // Shortcode: [section_create name=section-name]Section content here[/section_create]
    Content::shortcode()->addHandler('section_create', function(ShortcodeInterface $s) {
        Registry::set('sections.section_'.$s->getParameter('name'), $s->getContent());
    });

    // Shortcode: [section name=section-name]
    Content::shortcode()->addHandler('section', function(ShortcodeInterface $s) {
        return Registry::get('sections.section_'.$s->getParameter('name'));
    });
});

class Section
{
    /**
     * Get content section
     *
     * echo Section::get('section-name');
     *
     * @access public
     * @param  string  $section_name  Section name
     * @return string
     */
    public static function get($section_name)
    {
        return Content::processContent(Registry::get('sections.section_'.$section_name));
    }
}
