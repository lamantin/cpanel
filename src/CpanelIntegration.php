<?php

namespace CpanelApi;

/**
 * Class CpanelIntegration
 *
 * Cpanel Integration operations
 *
 * @package CpanelApi
 */
class CpanelIntegration extends CpanelBase
{
    const OPERATION = 'Integration';

    /**
     * This function returns the URL for an integrated application.
     * @param string $appName
     * @return json
     */
    public function fetchUrl(string $appName)
    {
        $params = ['app' => $appName];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }

    /**
     * This function reports the first file's URI, relative to the cPanel base directory.
     * @return void
     */

    public function parserApi(){

        $params = ['', ''];

        $command = ['Parser', 'firstfile_relative_uri'];
        return $this->doCommand($command, $params);

    }

}
