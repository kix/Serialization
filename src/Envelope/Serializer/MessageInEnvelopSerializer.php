<?php

namespace SimpleBus\Serialization\Envelope\Serializer;

use SimpleBus\Serialization\Envelope\Envelope;
use SimpleBus\Message\Message;

interface MessageInEnvelopSerializer
{
    /**
     * Serialize a Message to a string representation of that Message wrapped in an Envelope
     *
     * @param Message $message
     * @return string
     */
    public function wrapAndSerialize(Message $message);

    /**
     * Extract a Message from a serialized string representation of an Envelope
     *
     * @param string $serializedEnvelope
     * @return Envelope
     */
    public function unwrapAndDeserialize($serializedEnvelope);
}
