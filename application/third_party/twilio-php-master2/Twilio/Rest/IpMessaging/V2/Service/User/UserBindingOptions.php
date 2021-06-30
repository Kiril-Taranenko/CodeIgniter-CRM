<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\IpMessaging\V2\Service\User;

use Twilio\Options;
use Twilio\Values;

abstract class UserBindingOptions
{
    /**
     * @param string $bindingType The binding_type
     * @return ReadUserBindingOptions Options builder
     */
    public static function read($bindingType = Values::NONE)
    {
        return new ReadUserBindingOptions($bindingType);
    }
}

class ReadUserBindingOptions extends Options
{
    /**
     * @param string $bindingType The binding_type
     */
    public function __construct($bindingType = Values::NONE)
    {
        $this->options['bindingType'] = $bindingType;
    }

    /**
     * The binding_type
     *
     * @param string $bindingType The binding_type
     * @return $this Fluent Builder
     */
    public function setBindingType($bindingType)
    {
        $this->options['bindingType'] = $bindingType;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.IpMessaging.V2.ReadUserBindingOptions ' . implode(' ', $options) . ']';
    }
}