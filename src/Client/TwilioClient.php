<?php

declare(strict_types = 1);

namespace Uc\TwilioClient\Client;

use Twilio\Rest\Client as TwilioRestClient;

/**
 * Twilio client used to send message via sms.
 */
class TwilioClient
{
    /**
     * @var \Twilio\Rest\Client
     */
    private TwilioRestClient $client;

    /**
     * @throws \Twilio\Exceptions\ConfigurationException
     */
    public function __construct()
    {
        $accountSid = config('twilio.sid');
        $authToken = config('twilio.auth_token');

        $this->client = new TwilioRestClient($accountSid, $authToken);
    }

    /**
     * Sends sms to user using Twilio's programmable sms client
     *
     * @param string $body
     * @param string $recipient
     *
     * @return void
     *
     * @throws \Twilio\Exceptions\TwilioException
     */
    public function sendMessage(string $body, string $recipient) : void
    {
        $twilioNumber = config('twilio.number');

        $this->client->messages->create($recipient, [
                'from' => $twilioNumber,
                'body' => $body
            ]
        );
    }
}
