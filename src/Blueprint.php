<?php
/**
 * Created by IntelliJ IDEA.
 * User: hugh.li
 * Date: 2020/3/24
 * Time: 23:13
 */

namespace HughCube\Laravel\Migrations;

use Illuminate\Database\Schema\Blueprint as IlluminateBuilder;

class Blueprint extends IlluminateBuilder
{
    /** @var string */
    public $comment;

    /**
     * 添加 timestamp 类型的 created_at 字段
     *
     * @param string $column
     * @param int $precision
     * @return \Illuminate\Database\Schema\ColumnDefinition
     */
    public function createdAt($column = 'created_at', $precision = 0)
    {
        return $this->timestamp($column, $precision)->nullable();
    }

    /**
     * 添加 timestamp 类型的 updated_at 字段
     *
     * @param string $column
     * @param int $precision
     * @return \Illuminate\Database\Schema\ColumnDefinition
     */
    public function updatedAt($column = 'updated_at', $precision = 0)
    {
        return $this->timestamp($column, $precision)->nullable();
    }

    /**
     * @inheritDoc
     */
    public function softDeletes($column = 'deleted_at', $precision = 0)
    {
        return $this->timestamp($column, $precision)->nullable();
    }


    /**
     * 添加 timestampTz 类型的 created_at 字段
     *
     * @param string $column
     * @param int $precision
     * @return \Illuminate\Database\Schema\ColumnDefinition
     */
    public function createdAtTz($column = 'created_at', $precision = 0)
    {
        return $this->timestampTz($column, $precision)->nullable();
    }

    /**
     * 添加 timestampTz 类型的 updated_at 字段
     *
     * @param string $column
     * @param int $precision
     * @return \Illuminate\Database\Schema\ColumnDefinition
     */
    public function updatedAtTz($column = 'updated_at', $precision = 0)
    {
        return $this->timestampTz($column, $precision)->nullable();
    }

    /**
     * @inheritDoc
     */
    public function softDeletesTz($column = 'deleted_at', $precision = 0)
    {
        return $this->timestampTz($column, $precision)->nullable();
    }


    /**
     * 添加 timestampTz 类型的 created_at 字段
     *
     * @param string $column
     * @param int $precision
     * @return \Illuminate\Database\Schema\ColumnDefinition
     */
    public function createdAtInteger($column = 'created_at', $unsigned = false)
    {
        return $this->integer($column, false, $unsigned)->nullable();
    }

    /**
     * 添加 timestampTz 类型的 updated_at 字段
     *
     * @param string $column
     * @param int $precision
     * @return \Illuminate\Database\Schema\ColumnDefinition
     */
    public function updatedAtInteger($column = 'updated_at', $unsigned = false)
    {
        return $this->integer($column, false, $unsigned)->nullable();
    }

    /**
     * @inheritDoc
     */
    public function softDeletesInteger($column = 'deleted_at', $unsigned = false)
    {
        return $this->integer($column, false, $unsigned)->nullable();
    }


    /**
     * 添加 timestampTz 类型的 created_at 字段
     *
     * @param string $column
     * @param int $precision
     * @return \Illuminate\Database\Schema\ColumnDefinition
     */
    public function createdAtDouble($column = 'created_at', $total = null, $places = null, $unsigned = false)
    {
        return $this->double($column, $total, $places, $unsigned)->nullable();
    }

    /**
     * 添加 timestampTz 类型的 updated_at 字段
     *
     * @param string $column
     * @param int $precision
     * @return \Illuminate\Database\Schema\ColumnDefinition
     */
    public function updatedAtDouble($column = 'updated_at', $total = null, $places = null, $unsigned = false)
    {
        return $this->double($column, $total, $places, $unsigned)->nullable();
    }

    /**
     * @inheritDoc
     */
    public function softDeletesDouble($column = 'deleted_at', $total = null, $places = null, $unsigned = false)
    {
        return $this->double($column, $total, $places, $unsigned)->nullable();
    }

    public function hughTimestamps()
    {
        $this->double('created_at', $total, $places, $unsigned)->nullable();
    }
}
