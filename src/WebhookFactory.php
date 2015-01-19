<?php

/*
 * This file is part of NotifyMe.
 *
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NotifyMeHQ\Webhook;

use GuzzleHttp\Client;
use NotifyMeHQ\NotifyMe\FactoryInterface;

class WebhookFactory implements FactoryInterface
{
    /**
     * Create a new webhook gateway instance.
     *
     * @param string[] $config
     *
     * @return \NotifyMeHQ\Webhook\WebhookGateway
     */
    public function make(array $config)
    {
        $client = new Client();

        return new WebhookGateway($client, $config);
    }
}
