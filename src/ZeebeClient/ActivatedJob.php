<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: zeebe.proto

namespace ZeebeClient;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gateway_protocol.ActivatedJob</code>
 */
class ActivatedJob extends \Google\Protobuf\Internal\Message
{
    /**
     * the key, a unique identifier for the job
     *
     * Generated from protobuf field <code>int64 key = 1;</code>
     */
    private $key = 0;
    /**
     * the type of the job (should match what was requested)
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    private $type = '';
    /**
     * the job's workflow instance key
     *
     * Generated from protobuf field <code>int64 workflowInstanceKey = 3;</code>
     */
    private $workflowInstanceKey = 0;
    /**
     * the bpmn process ID of the job workflow definition
     *
     * Generated from protobuf field <code>string bpmnProcessId = 4;</code>
     */
    private $bpmnProcessId = '';
    /**
     * the version of the job workflow definition
     *
     * Generated from protobuf field <code>int32 workflowDefinitionVersion = 5;</code>
     */
    private $workflowDefinitionVersion = 0;
    /**
     * the key of the job workflow definition
     *
     * Generated from protobuf field <code>int64 workflowKey = 6;</code>
     */
    private $workflowKey = 0;
    /**
     * the associated task element ID
     *
     * Generated from protobuf field <code>string elementId = 7;</code>
     */
    private $elementId = '';
    /**
     * the unique key identifying the associated task, unique within the scope of the
     * workflow instance
     *
     * Generated from protobuf field <code>int64 elementInstanceKey = 8;</code>
     */
    private $elementInstanceKey = 0;
    /**
     * a set of custom headers defined during modelling; returned as a serialized
     * JSON document
     *
     * Generated from protobuf field <code>string customHeaders = 9;</code>
     */
    private $customHeaders = '';
    /**
     * the name of the worker which activated this job
     *
     * Generated from protobuf field <code>string worker = 10;</code>
     */
    private $worker = '';
    /**
     * the amount of retries left to this job (should always be positive)
     *
     * Generated from protobuf field <code>int32 retries = 11;</code>
     */
    private $retries = 0;
    /**
     * when the job can be activated again, sent as a UNIX epoch timestamp
     *
     * Generated from protobuf field <code>int64 deadline = 12;</code>
     */
    private $deadline = 0;
    /**
     * JSON document, computed at activation time, consisting of all visible variables to
     * the task scope
     *
     * Generated from protobuf field <code>string variables = 13;</code>
     */
    private $variables = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $key
     *           the key, a unique identifier for the job
     *     @type string $type
     *           the type of the job (should match what was requested)
     *     @type int|string $workflowInstanceKey
     *           the job's workflow instance key
     *     @type string $bpmnProcessId
     *           the bpmn process ID of the job workflow definition
     *     @type int $workflowDefinitionVersion
     *           the version of the job workflow definition
     *     @type int|string $workflowKey
     *           the key of the job workflow definition
     *     @type string $elementId
     *           the associated task element ID
     *     @type int|string $elementInstanceKey
     *           the unique key identifying the associated task, unique within the scope of the
     *           workflow instance
     *     @type string $customHeaders
     *           a set of custom headers defined during modelling; returned as a serialized
     *           JSON document
     *     @type string $worker
     *           the name of the worker which activated this job
     *     @type int $retries
     *           the amount of retries left to this job (should always be positive)
     *     @type int|string $deadline
     *           when the job can be activated again, sent as a UNIX epoch timestamp
     *     @type string $variables
     *           JSON document, computed at activation time, consisting of all visible variables to
     *           the task scope
     * }
     */
    public function __construct($data = NULL) {
        \ZeebeClient\Zeebe::initOnce();
        parent::__construct($data);
    }

    /**
     * the key, a unique identifier for the job
     *
     * Generated from protobuf field <code>int64 key = 1;</code>
     * @return int|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * the key, a unique identifier for the job
     *
     * Generated from protobuf field <code>int64 key = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkInt64($var);
        $this->key = $var;

        return $this;
    }

    /**
     * the type of the job (should match what was requested)
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * the type of the job (should match what was requested)
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * the job's workflow instance key
     *
     * Generated from protobuf field <code>int64 workflowInstanceKey = 3;</code>
     * @return int|string
     */
    public function getWorkflowInstanceKey()
    {
        return $this->workflowInstanceKey;
    }

    /**
     * the job's workflow instance key
     *
     * Generated from protobuf field <code>int64 workflowInstanceKey = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWorkflowInstanceKey($var)
    {
        GPBUtil::checkInt64($var);
        $this->workflowInstanceKey = $var;

        return $this;
    }

    /**
     * the bpmn process ID of the job workflow definition
     *
     * Generated from protobuf field <code>string bpmnProcessId = 4;</code>
     * @return string
     */
    public function getBpmnProcessId()
    {
        return $this->bpmnProcessId;
    }

    /**
     * the bpmn process ID of the job workflow definition
     *
     * Generated from protobuf field <code>string bpmnProcessId = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBpmnProcessId($var)
    {
        GPBUtil::checkString($var, True);
        $this->bpmnProcessId = $var;

        return $this;
    }

    /**
     * the version of the job workflow definition
     *
     * Generated from protobuf field <code>int32 workflowDefinitionVersion = 5;</code>
     * @return int
     */
    public function getWorkflowDefinitionVersion()
    {
        return $this->workflowDefinitionVersion;
    }

    /**
     * the version of the job workflow definition
     *
     * Generated from protobuf field <code>int32 workflowDefinitionVersion = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setWorkflowDefinitionVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->workflowDefinitionVersion = $var;

        return $this;
    }

    /**
     * the key of the job workflow definition
     *
     * Generated from protobuf field <code>int64 workflowKey = 6;</code>
     * @return int|string
     */
    public function getWorkflowKey()
    {
        return $this->workflowKey;
    }

    /**
     * the key of the job workflow definition
     *
     * Generated from protobuf field <code>int64 workflowKey = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWorkflowKey($var)
    {
        GPBUtil::checkInt64($var);
        $this->workflowKey = $var;

        return $this;
    }

    /**
     * the associated task element ID
     *
     * Generated from protobuf field <code>string elementId = 7;</code>
     * @return string
     */
    public function getElementId()
    {
        return $this->elementId;
    }

    /**
     * the associated task element ID
     *
     * Generated from protobuf field <code>string elementId = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setElementId($var)
    {
        GPBUtil::checkString($var, True);
        $this->elementId = $var;

        return $this;
    }

    /**
     * the unique key identifying the associated task, unique within the scope of the
     * workflow instance
     *
     * Generated from protobuf field <code>int64 elementInstanceKey = 8;</code>
     * @return int|string
     */
    public function getElementInstanceKey()
    {
        return $this->elementInstanceKey;
    }

    /**
     * the unique key identifying the associated task, unique within the scope of the
     * workflow instance
     *
     * Generated from protobuf field <code>int64 elementInstanceKey = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setElementInstanceKey($var)
    {
        GPBUtil::checkInt64($var);
        $this->elementInstanceKey = $var;

        return $this;
    }

    /**
     * a set of custom headers defined during modelling; returned as a serialized
     * JSON document
     *
     * Generated from protobuf field <code>string customHeaders = 9;</code>
     * @return string
     */
    public function getCustomHeaders()
    {
        return $this->customHeaders;
    }

    /**
     * a set of custom headers defined during modelling; returned as a serialized
     * JSON document
     *
     * Generated from protobuf field <code>string customHeaders = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomHeaders($var)
    {
        GPBUtil::checkString($var, True);
        $this->customHeaders = $var;

        return $this;
    }

    /**
     * the name of the worker which activated this job
     *
     * Generated from protobuf field <code>string worker = 10;</code>
     * @return string
     */
    public function getWorker()
    {
        return $this->worker;
    }

    /**
     * the name of the worker which activated this job
     *
     * Generated from protobuf field <code>string worker = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setWorker($var)
    {
        GPBUtil::checkString($var, True);
        $this->worker = $var;

        return $this;
    }

    /**
     * the amount of retries left to this job (should always be positive)
     *
     * Generated from protobuf field <code>int32 retries = 11;</code>
     * @return int
     */
    public function getRetries()
    {
        return $this->retries;
    }

    /**
     * the amount of retries left to this job (should always be positive)
     *
     * Generated from protobuf field <code>int32 retries = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRetries($var)
    {
        GPBUtil::checkInt32($var);
        $this->retries = $var;

        return $this;
    }

    /**
     * when the job can be activated again, sent as a UNIX epoch timestamp
     *
     * Generated from protobuf field <code>int64 deadline = 12;</code>
     * @return int|string
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * when the job can be activated again, sent as a UNIX epoch timestamp
     *
     * Generated from protobuf field <code>int64 deadline = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDeadline($var)
    {
        GPBUtil::checkInt64($var);
        $this->deadline = $var;

        return $this;
    }

    /**
     * JSON document, computed at activation time, consisting of all visible variables to
     * the task scope
     *
     * Generated from protobuf field <code>string variables = 13;</code>
     * @return string
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * JSON document, computed at activation time, consisting of all visible variables to
     * the task scope
     *
     * Generated from protobuf field <code>string variables = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setVariables($var)
    {
        GPBUtil::checkString($var, True);
        $this->variables = $var;

        return $this;
    }

}

