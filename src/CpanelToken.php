<?php

namespace CpanelApi;

/**
 * Class CpanelMysql
 *
 * Cpanel Token operations
 *
 * @package CpanelApi
 */
class CpanelToken extends CpanelBase
{
    const OPERATION = 'Tokens';

    /**
     * create full access token
     * @param string $name
     * @return json
     */
    public function createFullAccess(string $name)
    {
        $params = ['name' => $name];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }

    /**
     * List of tokens
     * @return json
     * @throws \Exception
     */
    public function tokens()
    {
        $params = ['', ''];

        $command = [self::OPERATION, 'list'];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $name
     * @param string $newname
     * @return json
     * @throws \Exception
     */
    public function rename(string $name,string $newname)
    {
        $params = ['name' => $name,'new_name'=>$newname];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }

    /**
     * @param string $name
     * @return json
     * @throws \Exception
     */
    public function revoke(string $name)
    {
        $params = ['name' => $name];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }
}
