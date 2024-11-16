<?php

namespace CpanelApi;

/**
 * Class CpanelLocale
 *
 * Cpanel Locale  operations
 *
 * @package CpanelApi
 */
class CpanelLocale extends CpanelBase
{
    const OPERATION = 'Locale';

    /**
     * @return json
     */
    public function getAttributes()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @return json
     */
    public function listLocales()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @param string $locale
     * @return json
     * @throws \Exception
     */
    public function setLocale(string $locale)
    {
        $params = ['locale' => $locale];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

}
