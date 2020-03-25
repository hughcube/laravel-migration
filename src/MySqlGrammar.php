<?php
/**
 * Created by IntelliJ IDEA.
 * User: hugh.li
 * Date: 2020/3/24
 * Time: 22:43.
 */

namespace HughCube\Laravel\Migrations;

use Illuminate\Database\Connection;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Fluent;

class MySqlGrammar extends \Illuminate\Database\Schema\Grammars\MySqlGrammar
{
    /**
     * {@inheritdoc}
     */
    public function compileCreate(Blueprint $blueprint, Fluent $command, Connection $connection)
    {
        $sql = parent::compileCreate($blueprint, $command, $connection);

        $sql = $this->compileCreateComment($sql, $connection, $blueprint);

        return $sql;
    }

    /**
     * Append the comment specifications to a command.
     *
     * @param string                                $sql
     * @param \Illuminate\Database\Connection       $connection
     * @param \Illuminate\Database\Schema\Blueprint $blueprint
     *
     * @return string
     */
    protected function compileCreateComment($sql, Connection $connection, Blueprint $blueprint)
    {
        if (isset($blueprint->comment) && !is_null($blueprint->comment)) {
            $sql .= " comment '".addslashes($blueprint->comment)."'";
        }

        return $sql;
    }
}
