<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateDevopsProjectSprintResponseBody;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateDevopsProjectSprintResponseBody\object\planToDo;
use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $executor;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $accomplished;

    /**
     * @var bool
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var string
     */
    public $dueDate;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;

    /**
     * @var planToDo
     */
    public $planToDo;
    protected $_name = [
        'status'       => 'Status',
        'projectId'    => 'ProjectId',
        'startDate'    => 'StartDate',
        'creatorId'    => 'CreatorId',
        'executor'     => 'Executor',
        'description'  => 'Description',
        'accomplished' => 'Accomplished',
        'isDeleted'    => 'IsDeleted',
        'updated'      => 'Updated',
        'dueDate'      => 'DueDate',
        'created'      => 'Created',
        'name'         => 'Name',
        'id'           => 'Id',
        'planToDo'     => 'PlanToDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->executor) {
            $res['Executor'] = $this->executor;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->accomplished) {
            $res['Accomplished'] = $this->accomplished;
        }
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
        }
        if (null !== $this->dueDate) {
            $res['DueDate'] = $this->dueDate;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->planToDo) {
            $res['PlanToDo'] = null !== $this->planToDo ? $this->planToDo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return object
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Executor'])) {
            $model->executor = $map['Executor'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Accomplished'])) {
            $model->accomplished = $map['Accomplished'];
        }
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }
        if (isset($map['DueDate'])) {
            $model->dueDate = $map['DueDate'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PlanToDo'])) {
            $model->planToDo = planToDo::fromMap($map['PlanToDo']);
        }

        return $model;
    }
}
