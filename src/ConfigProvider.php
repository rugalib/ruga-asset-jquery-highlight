<?php

declare(strict_types=1);

namespace Ruga\Asset\jquery_highlight;

/**
 * ConfigProvider.
 *
 * @author Roland Rusch, easy-smart solution GmbH <roland.rusch@easy-smart.ch>
 */
class ConfigProvider
{
    public function __invoke()
    {
        return [
            'ruga' => [
                'asset' => [
                    'rugalib/ruga-asset-jquery-highlight' => [
                        'scripts' => ['jquery.highlight.js'],
                        'stylesheets' => [],
                        'require' => ['rugalib/asset-jquery' => '^3.5']
                    ],
                ],
            ],
        ];
    }
}
