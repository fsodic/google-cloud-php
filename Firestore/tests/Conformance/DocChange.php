<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Google\Cloud\Firestore\Tests\Conformance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tests.DocChange</code>
 */
class DocChange extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.tests.DocChange.Kind kind = 1;</code>
     */
    private $kind = 0;
    /**
     * Generated from protobuf field <code>.google.firestore.v1.Document doc = 2;</code>
     */
    private $doc = null;
    /**
     * Generated from protobuf field <code>int32 old_index = 3;</code>
     */
    private $old_index = 0;
    /**
     * Generated from protobuf field <code>int32 new_index = 4;</code>
     */
    private $new_index = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kind
     *     @type \Google\Cloud\Firestore\V1\Document $doc
     *     @type int $old_index
     *     @type int $new_index
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Test::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.tests.DocChange.Kind kind = 1;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Generated from protobuf field <code>.tests.DocChange.Kind kind = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\Tests\Conformance\DocChange\Kind::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.firestore.v1.Document doc = 2;</code>
     * @return \Google\Cloud\Firestore\V1\Document
     */
    public function getDoc()
    {
        return $this->doc;
    }

    /**
     * Generated from protobuf field <code>.google.firestore.v1.Document doc = 2;</code>
     * @param \Google\Cloud\Firestore\V1\Document $var
     * @return $this
     */
    public function setDoc($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\Document::class);
        $this->doc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 old_index = 3;</code>
     * @return int
     */
    public function getOldIndex()
    {
        return $this->old_index;
    }

    /**
     * Generated from protobuf field <code>int32 old_index = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOldIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->old_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 new_index = 4;</code>
     * @return int
     */
    public function getNewIndex()
    {
        return $this->new_index;
    }

    /**
     * Generated from protobuf field <code>int32 new_index = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNewIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->new_index = $var;

        return $this;
    }

}

