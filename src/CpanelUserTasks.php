<?php

namespace CpanelApi;

/**
 * Class CpanelUserTasks
 *
 * Cpanel Token operations
 *
 * @package CpanelApi
 */
class CpanelUserTasks extends CpanelBase
{
    const OPERATION = 'UserTasks';

    /**
     * Remove items from tasks quene
     * @param string $taskId
     * @return json
     */
    public function delete(string $taskId)
    {
        $params = ['id' => $taskId];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }

    /**
     * Retrive a list of tasks
     * @return json
     */
    public function retrieve()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }
}
