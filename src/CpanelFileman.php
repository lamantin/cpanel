<?php

namespace CpanelApi;

/**
 * Class CpanelFileman
 *
 * Cpanel Fileman operations
 *
 * @package CpanelApi
 */
class CpanelFileman extends CpanelBase
{
    const OPERATION = 'Fileman';


    public function convertFile(string $imageFile,string $type)
    {
        $params = ['image_file' => $imageFile,'type'=>$type];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function autocompletedir(string $path,int $dirsonly,int $html,int $listAll)
    {
        $params = ['path' => $path,'dirsonly'=>$dirsonly,'html'=>$html,'list_all'=>$listAll];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function emptyTrash()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function getFileContent(string $dir,string $file)
    {
        $params = ['dir' => $dir,'file'=>$file];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getFileInformation(string $path,int $checkForLeafDirectories,int $includeHash,int $includeMime,int $includePermissions,$showHidden)
    {
        $params = ['path' => $path,'check_for_leaf_directories'=>$checkForLeafDirectories,'include_hash'=>$includeHash,'include_mime'=>$includeMime,'include_permissions'=>$includePermissions,'show_hidden'=>$showHidden];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listFiles(string $dir)
    {
        $params = ['dir' => $dir];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function saveFileContent(string $file,string $content,string $dir,int $fallback,string $fromCharset,string $toCharset)
    {
        $params = ['file' => $file,'content'=>$content,'dir'=>$dir,'fallback'=>$fallback,'from_charset'=>$fromCharset,'to_charset'=>$toCharset];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function transcode(srting $content,int $discardIllegal,string $fromCharset,string $toCharset,int $transliterate)
    {
        $params = ['content' => $content,'discrard_illegal'=>$discardIllegal,'from_charset'=>$fromCharset,'to_chaerset'=>$toCharset,'transliterate'=>$transliterate];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }


}
