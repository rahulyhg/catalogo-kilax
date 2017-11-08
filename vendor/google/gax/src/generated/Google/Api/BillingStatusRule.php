<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/billing.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines the billing status requirements for operations.
 * When used with
 * [Service Control API](https://cloud.google.com/service-control/), the
 * following statuses are supported:
 * - **current**: the associated billing account is up to date and capable of
 *                paying for resource usages.
 * - **delinquent**: the associated billing account has a correctable problem,
 *                   such as late payment.
 * Mostly services should only allow `current` status when serving requests.
 * In addition, services can choose to allow both `current` and `delinquent`
 * statuses when serving read-only requests to resources. If the list of
 * allowed_statuses is empty, it means no billing requirement.
 *
 * Generated from protobuf message <code>google.api.BillingStatusRule</code>
 */
class BillingStatusRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Selects the operation names to which this rule applies.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     */
    private $selector = '';
    /**
     * Allowed billing statuses. The billing status check passes if the actual
     * billing status matches any of the provided values here.
     *
     * Generated from protobuf field <code>repeated string allowed_statuses = 2;</code>
     */
    private $allowed_statuses;

    public function __construct() {
        \GPBMetadata\Google\Api\Billing::initOnce();
        parent::__construct();
    }

    /**
     * Selects the operation names to which this rule applies.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @return string
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * Selects the operation names to which this rule applies.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSelector($var)
    {
        GPBUtil::checkString($var, True);
        $this->selector = $var;

        return $this;
    }

    /**
     * Allowed billing statuses. The billing status check passes if the actual
     * billing status matches any of the provided values here.
     *
     * Generated from protobuf field <code>repeated string allowed_statuses = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedStatuses()
    {
        return $this->allowed_statuses;
    }

    /**
     * Allowed billing statuses. The billing status check passes if the actual
     * billing status matches any of the provided values here.
     *
     * Generated from protobuf field <code>repeated string allowed_statuses = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedStatuses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_statuses = $arr;

        return $this;
    }

}

