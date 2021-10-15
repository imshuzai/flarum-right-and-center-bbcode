<?php

/*
 * A Flarum extension template for BBCode created by Billy Wilcosky.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For instructions, please view the README file.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[right]{TEXT}[/right]',
                '<div align="right">{TEXT}</div>'
            );
            $config->BBCodes->addCustom(
                '[center]{TEXT}[/center]',
                '<div align="center">{TEXT}</div>'
            );
        })
];
