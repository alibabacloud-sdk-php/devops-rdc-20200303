<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object\result\badges;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object\result\creator;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object\result\customfields;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object\result\executor;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object\result\reminder;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object\result\stage;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object\result\subtaskCount;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object\result\taskFlowStatus;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object\result\workTime;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var bool
     */
    public $isTopInProject;

    /**
     * @var badges
     */
    public $badges;

    /**
     * @var string[]
     */
    public $ancestorIds;

    /**
     * @var int
     */
    public $shareStatus;

    /**
     * @var reminder
     */
    public $reminder;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var bool
     */
    public $isArchived;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $rating;

    /**
     * @var string
     */
    public $taskFlowStatusId;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var stage
     */
    public $stage;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var int
     */
    public $pos;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $sprint;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $sourceDate;

    /**
     * @var bool
     */
    public $isFavorite;

    /**
     * @var string
     */
    public $executorId;

    /**
     * @var workTime
     */
    public $workTime;

    /**
     * @var string[]
     */
    public $tagIds;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $scenariofFeldConfigId;

    /**
     * @var creator
     */
    public $creator;

    /**
     * @var executor
     */
    public $executor;

    /**
     * @var string
     */
    public $accomplished;

    /**
     * @var string
     */
    public $taskListId;

    /**
     * @var string[]
     */
    public $involveMembers;

    /**
     * @var int
     */
    public $uniqueId;

    /**
     * @var taskFlowStatus
     */
    public $taskFlowStatus;

    /**
     * @var int
     */
    public $commentsCount;

    /**
     * @var string
     */
    public $recurrence;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var subtaskCount
     */
    public $subtaskCount;

    /**
     * @var string
     */
    public $untilDate;

    /**
     * @var string
     */
    public $storyPoint;

    /**
     * @var int
     */
    public $objectlinksCount;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $likesCount;

    /**
     * @var string
     */
    public $stageId;

    /**
     * @var string[]
     */
    public $divisions;

    /**
     * @var string
     */
    public $visible;

    /**
     * @var bool
     */
    public $isDone;

    /**
     * @var string
     */
    public $parent;

    /**
     * @var string
     */
    public $sprintId;

    /**
     * @var string
     */
    public $dueDate;

    /**
     * @var int
     */
    public $attachmentsCount;

    /**
     * @var customfields[]
     */
    public $customfields;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $taskUniqueId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'projectId'             => 'ProjectId',
        'isTopInProject'        => 'IsTopInProject',
        'badges'                => 'Badges',
        'ancestorIds'           => 'AncestorIds',
        'shareStatus'           => 'ShareStatus',
        'reminder'              => 'Reminder',
        'note'                  => 'Note',
        'updated'               => 'Updated',
        'isArchived'            => 'IsArchived',
        'content'               => 'Content',
        'rating'                => 'Rating',
        'taskFlowStatusId'      => 'TaskFlowStatusId',
        'progress'              => 'Progress',
        'stage'                 => 'Stage',
        'labels'                => 'Labels',
        'pos'                   => 'Pos',
        'startDate'             => 'StartDate',
        'sprint'                => 'Sprint',
        'creatorId'             => 'CreatorId',
        'sourceId'              => 'SourceId',
        'organizationId'        => 'OrganizationId',
        'sourceDate'            => 'SourceDate',
        'isFavorite'            => 'IsFavorite',
        'executorId'            => 'ExecutorId',
        'workTime'              => 'WorkTime',
        'tagIds'                => 'TagIds',
        'priority'              => 'Priority',
        'scenariofFeldConfigId' => 'ScenariofFeldConfigId',
        'creator'               => 'Creator',
        'executor'              => 'Executor',
        'accomplished'          => 'Accomplished',
        'taskListId'            => 'TaskListId',
        'involveMembers'        => 'InvolveMembers',
        'uniqueId'              => 'UniqueId',
        'taskFlowStatus'        => 'TaskFlowStatus',
        'commentsCount'         => 'CommentsCount',
        'recurrence'            => 'Recurrence',
        'objectType'            => 'ObjectType',
        'subtaskCount'          => 'SubtaskCount',
        'untilDate'             => 'UntilDate',
        'storyPoint'            => 'StoryPoint',
        'objectlinksCount'      => 'ObjectlinksCount',
        'source'                => 'Source',
        'likesCount'            => 'LikesCount',
        'stageId'               => 'StageId',
        'divisions'             => 'Divisions',
        'visible'               => 'Visible',
        'isDone'                => 'IsDone',
        'parent'                => 'Parent',
        'sprintId'              => 'SprintId',
        'dueDate'               => 'DueDate',
        'attachmentsCount'      => 'AttachmentsCount',
        'customfields'          => 'Customfields',
        'created'               => 'Created',
        'taskUniqueId'          => 'TaskUniqueId',
        'taskId'                => 'TaskId',
        'id'                    => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->isTopInProject) {
            $res['IsTopInProject'] = $this->isTopInProject;
        }
        if (null !== $this->badges) {
            $res['Badges'] = null !== $this->badges ? $this->badges->toMap() : null;
        }
        if (null !== $this->ancestorIds) {
            $res['AncestorIds'] = $this->ancestorIds;
        }
        if (null !== $this->shareStatus) {
            $res['ShareStatus'] = $this->shareStatus;
        }
        if (null !== $this->reminder) {
            $res['Reminder'] = null !== $this->reminder ? $this->reminder->toMap() : null;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
        }
        if (null !== $this->isArchived) {
            $res['IsArchived'] = $this->isArchived;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->rating) {
            $res['Rating'] = $this->rating;
        }
        if (null !== $this->taskFlowStatusId) {
            $res['TaskFlowStatusId'] = $this->taskFlowStatusId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->stage) {
            $res['Stage'] = null !== $this->stage ? $this->stage->toMap() : null;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->pos) {
            $res['Pos'] = $this->pos;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->sprint) {
            $res['Sprint'] = $this->sprint;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->sourceDate) {
            $res['SourceDate'] = $this->sourceDate;
        }
        if (null !== $this->isFavorite) {
            $res['IsFavorite'] = $this->isFavorite;
        }
        if (null !== $this->executorId) {
            $res['ExecutorId'] = $this->executorId;
        }
        if (null !== $this->workTime) {
            $res['WorkTime'] = null !== $this->workTime ? $this->workTime->toMap() : null;
        }
        if (null !== $this->tagIds) {
            $res['TagIds'] = $this->tagIds;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->scenariofFeldConfigId) {
            $res['ScenariofFeldConfigId'] = $this->scenariofFeldConfigId;
        }
        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toMap() : null;
        }
        if (null !== $this->executor) {
            $res['Executor'] = null !== $this->executor ? $this->executor->toMap() : null;
        }
        if (null !== $this->accomplished) {
            $res['Accomplished'] = $this->accomplished;
        }
        if (null !== $this->taskListId) {
            $res['TaskListId'] = $this->taskListId;
        }
        if (null !== $this->involveMembers) {
            $res['InvolveMembers'] = $this->involveMembers;
        }
        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }
        if (null !== $this->taskFlowStatus) {
            $res['TaskFlowStatus'] = null !== $this->taskFlowStatus ? $this->taskFlowStatus->toMap() : null;
        }
        if (null !== $this->commentsCount) {
            $res['CommentsCount'] = $this->commentsCount;
        }
        if (null !== $this->recurrence) {
            $res['Recurrence'] = $this->recurrence;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->subtaskCount) {
            $res['SubtaskCount'] = null !== $this->subtaskCount ? $this->subtaskCount->toMap() : null;
        }
        if (null !== $this->untilDate) {
            $res['UntilDate'] = $this->untilDate;
        }
        if (null !== $this->storyPoint) {
            $res['StoryPoint'] = $this->storyPoint;
        }
        if (null !== $this->objectlinksCount) {
            $res['ObjectlinksCount'] = $this->objectlinksCount;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->likesCount) {
            $res['LikesCount'] = $this->likesCount;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->divisions) {
            $res['Divisions'] = $this->divisions;
        }
        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
        }
        if (null !== $this->isDone) {
            $res['IsDone'] = $this->isDone;
        }
        if (null !== $this->parent) {
            $res['Parent'] = $this->parent;
        }
        if (null !== $this->sprintId) {
            $res['SprintId'] = $this->sprintId;
        }
        if (null !== $this->dueDate) {
            $res['DueDate'] = $this->dueDate;
        }
        if (null !== $this->attachmentsCount) {
            $res['AttachmentsCount'] = $this->attachmentsCount;
        }
        if (null !== $this->customfields) {
            $res['Customfields'] = [];
            if (null !== $this->customfields && \is_array($this->customfields)) {
                $n = 0;
                foreach ($this->customfields as $item) {
                    $res['Customfields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->taskUniqueId) {
            $res['TaskUniqueId'] = $this->taskUniqueId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['IsTopInProject'])) {
            $model->isTopInProject = $map['IsTopInProject'];
        }
        if (isset($map['Badges'])) {
            $model->badges = badges::fromMap($map['Badges']);
        }
        if (isset($map['AncestorIds'])) {
            if (!empty($map['AncestorIds'])) {
                $model->ancestorIds = $map['AncestorIds'];
            }
        }
        if (isset($map['ShareStatus'])) {
            $model->shareStatus = $map['ShareStatus'];
        }
        if (isset($map['Reminder'])) {
            $model->reminder = reminder::fromMap($map['Reminder']);
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }
        if (isset($map['IsArchived'])) {
            $model->isArchived = $map['IsArchived'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Rating'])) {
            $model->rating = $map['Rating'];
        }
        if (isset($map['TaskFlowStatusId'])) {
            $model->taskFlowStatusId = $map['TaskFlowStatusId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Stage'])) {
            $model->stage = stage::fromMap($map['Stage']);
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }
        if (isset($map['Pos'])) {
            $model->pos = $map['Pos'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Sprint'])) {
            $model->sprint = $map['Sprint'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['SourceDate'])) {
            $model->sourceDate = $map['SourceDate'];
        }
        if (isset($map['IsFavorite'])) {
            $model->isFavorite = $map['IsFavorite'];
        }
        if (isset($map['ExecutorId'])) {
            $model->executorId = $map['ExecutorId'];
        }
        if (isset($map['WorkTime'])) {
            $model->workTime = workTime::fromMap($map['WorkTime']);
        }
        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = $map['TagIds'];
            }
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ScenariofFeldConfigId'])) {
            $model->scenariofFeldConfigId = $map['ScenariofFeldConfigId'];
        }
        if (isset($map['Creator'])) {
            $model->creator = creator::fromMap($map['Creator']);
        }
        if (isset($map['Executor'])) {
            $model->executor = executor::fromMap($map['Executor']);
        }
        if (isset($map['Accomplished'])) {
            $model->accomplished = $map['Accomplished'];
        }
        if (isset($map['TaskListId'])) {
            $model->taskListId = $map['TaskListId'];
        }
        if (isset($map['InvolveMembers'])) {
            if (!empty($map['InvolveMembers'])) {
                $model->involveMembers = $map['InvolveMembers'];
            }
        }
        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }
        if (isset($map['TaskFlowStatus'])) {
            $model->taskFlowStatus = taskFlowStatus::fromMap($map['TaskFlowStatus']);
        }
        if (isset($map['CommentsCount'])) {
            $model->commentsCount = $map['CommentsCount'];
        }
        if (isset($map['Recurrence'])) {
            $model->recurrence = $map['Recurrence'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['SubtaskCount'])) {
            $model->subtaskCount = subtaskCount::fromMap($map['SubtaskCount']);
        }
        if (isset($map['UntilDate'])) {
            $model->untilDate = $map['UntilDate'];
        }
        if (isset($map['StoryPoint'])) {
            $model->storyPoint = $map['StoryPoint'];
        }
        if (isset($map['ObjectlinksCount'])) {
            $model->objectlinksCount = $map['ObjectlinksCount'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['LikesCount'])) {
            $model->likesCount = $map['LikesCount'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['Divisions'])) {
            if (!empty($map['Divisions'])) {
                $model->divisions = $map['Divisions'];
            }
        }
        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }
        if (isset($map['IsDone'])) {
            $model->isDone = $map['IsDone'];
        }
        if (isset($map['Parent'])) {
            $model->parent = $map['Parent'];
        }
        if (isset($map['SprintId'])) {
            $model->sprintId = $map['SprintId'];
        }
        if (isset($map['DueDate'])) {
            $model->dueDate = $map['DueDate'];
        }
        if (isset($map['AttachmentsCount'])) {
            $model->attachmentsCount = $map['AttachmentsCount'];
        }
        if (isset($map['Customfields'])) {
            if (!empty($map['Customfields'])) {
                $model->customfields = [];
                $n                   = 0;
                foreach ($map['Customfields'] as $item) {
                    $model->customfields[$n++] = null !== $item ? customfields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['TaskUniqueId'])) {
            $model->taskUniqueId = $map['TaskUniqueId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
