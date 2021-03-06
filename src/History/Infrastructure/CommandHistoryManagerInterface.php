<?php

namespace Jakmall\Recruitment\Calculator\History\Infrastructure;

//TODO: create implementation.
interface CommandHistoryManagerInterface
{
    /**
     * Returns array of command history.
     *
     * @param mixed $command The command to log.
     * @param string $driver Driver storage
     *
     * @return array
     */
    public function findAll($command, string $driver): array;

    /**
     * Log command data to storage.
     *
     * @param mixed $command The command to log.
     *
     * @return bool Returns true when command is logged successfully, false otherwise.
     */
    public function log($command): bool;

    /**
     * Clear all data from storage.
     *
     * @return bool Returns true if all data is cleared successfully, false otherwise.
     */
    public function clearAll():bool;

    /**
     * Returns array of command history.
     *
     * @param string $driver Driver storage
     *
     * @return array
     */
    public function findAllApi($driver);

    /**
     * Returns array of command history.
     *
     * @param mixed $id The Id in History.
     * @param string $driver Driver storage
     *
     * @return array
     */
    public function getHistoryById($id, $driver);
}
