<?php

namespace Noxxie\Database\Progress;

use Illuminate\Database\Connection;
use Noxxie\Database\Progress\Query\Grammer\ProgressGrammer;
use PDO;

class ProgressConnection extends Connection
{
    /**
     * @param \PDO   $pdo
     * @param string $database
     * @param string $tablePrefix
     * @param array  $config
     */
    public function __construct(PDO $pdo, $database = '', $tablePrefix = '', array $config = [])
    {
        parent::__construct($pdo, $database, $tablePrefix, $config);
    }

    /**
     * @return \Illuminate\Database\Grammar
     */
    protected function getDefaultQueryGrammar()
    {
        $defaultGrammar = new ProgressGrammer(
            $this,
            $this->config
        );

        return $defaultGrammar;
    }
}
