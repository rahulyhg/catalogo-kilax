<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for ListRootCategories request.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.ListRootCategoriesResponse</code>
 */
class ListRootCategoriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of all into type categories supported by the API.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.CategoryDescription categories = 1;</code>
     */
    private $categories;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * List of all into type categories supported by the API.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.CategoryDescription categories = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * List of all into type categories supported by the API.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.CategoryDescription categories = 1;</code>
     * @param \Google\Privacy\Dlp\V2beta1\CategoryDescription[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Privacy\Dlp\V2beta1\CategoryDescription::class);
        $this->categories = $arr;

        return $this;
    }

}

