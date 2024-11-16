<?php

namespace CpanelApi;

use App\Core\Config;
use Exception;

/**
 * Class CpanelBase
 *
 * Cpanel parent class
 *
 * @package CpanelApi
 */
class CpanelBase
{
    const OPERATION = 'Base';

    /** @var $apitoken */
    protected $apitoken;

    /** @var $hostUrl */
    protected $hostUrl;

    /** @var $port */
    protected $port = '2083';

    protected $cpanelUser;

    /**
     * Constructor
     *
     * @param $cpanelUser
     * @param string $apiToken
     * @param string $hostUrl
     */
    public function __construct($cpanelUser = false, $apiToken = false, $hostUrl = false)
    {
        if (!($cpanelUser) || !($apiToken) || !($hostUrl)) {
            $ini_file = parse_ini_file(realpath(__DIR__ . DIRECTORY_SEPARATOR . '../cpanel.ini'), true);
            if (is_array($ini_file) && !empty(array_filter($ini_file))) {
                $cpanelUser = $ini_file['default_data_for_autoload']['cpanel_user'];
                $apiToken = $ini_file['default_data_for_autoload']['cpanel_api_token'];
                $hostUrl = $ini_file['default_data_for_autoload']['cpanel_api_host'];
            } else {
                throw new CpanelException('Invalid parameters in' . __CLASS__ . ',at line:' . __LINE__);
            }
        }
        $this->apitoken = $apiToken;
        $this->hostUrl = $hostUrl;
        $this->cpanelUser = $cpanelUser;
    }

    /**
     * Convert Function Camel Case  to underscore-separated
     * @param string $name The input string.
     * @return string
     */
    public static function nameResolver(string $name): string
    {
        if (empty($name)) {
            return $name;
        }
        $name = lcfirst($name);
        $name = preg_replace("/[A-Z]/", "_" . "$0", $name);
        return strtolower($name);
    }

    /**
     * Command executer Curl
     * @param array $command Commands.
     * @param array $separator Params
     * @return json
     */
    protected function doCommand(array $command, array $params,$method='GET')
    {
        $result = [];
        if (empty($command) || empty($params)) {
            throw new Exception('invalid parameters' . __CLASS__ . ',at' . __LINE__);
        }
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://' . $this->hostUrl . ':' . $this->port . '/execute/' . $command[0] . '/' . $command[1] . '?' . http_build_query($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);


        $headers = array();
        $headers[] = 'Authorization: cpanel ' . $this->cpanelUser . ':' . $this->apitoken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch));
        }
        curl_close($ch);
        //return as array not a string
        return json_decode($result, true);
    }

    /**
     * Command executer Curl without params
     * @return json
     */
    public function doEmptyCommand($functionName = __FUNCTION__)
    {
        $params = ['', ''];

        $command = [static::OPERATION, CpanelBase::nameResolver($functionName)];
        return $this->doCommand($command, $params);
    }
}
