<?php

namespace Extensions\Eloquent\Relationships;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Arr;

class HasOne extends Relation
{
    protected string $pivotTable;
    protected string $foreignKey;
    protected string $localKey;
    public function __construct(Builder $query, Model $parent, $pivotTable, $foreignKey, $localKey)
    {
        $this->pivotTable = $pivotTable;
        $this->foreignKey = $foreignKey;
        $this->localKey = $localKey;

        parent::__construct($query, $parent);
    }

    public function addConstraints()
    {
        return $this
            ->query
            ->select("{$this->getQuery()->getModel()->getTable()}.*")
            ->limit(1)
            ->leftJoin(
                $this->pivotTable,
                "{$this->pivotTable}.{$this->localKey}",
                '=',
                "{$this->pivotTable}.{$this->foreignKey}"
            )
            ->where("{$this->pivotTable}.{$this->foreignKey}", '=', $this->getParent()->getKey())
        ;
    }

    public function addEagerConstraints(array $models)
    {
        return $this
            ->query
            ->whereIn("{$this->pivotTable}.{$this->foreignKey}", Arr::pluck($models, $this->getParent()->getKeyName()))
        ;
    }

    public function initRelation(array $models, $relation)
    {
        foreach ($models as $model)
        {
            $model->setRelation($relation, null);
        }

        return $models;
    }

    public function match(array $models, Collection $results, $relation)
    {
        if ($results->isEmpty()) {
            return $models;
        }

        foreach ($models as $model) {
            $model->setRelation(
                $relation,
                $results
                    ->filter(function($element){
                        return true;
                    })
                    ->first()
            );
        }

        return $models;
    }

    public function getResults()
    {
        return $this->query->first();
    }
}
