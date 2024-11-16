<?php

namespace CpanelApi;

/**
 * Class CpanelImageManager
 *
 * Cpanel ImageManager operations
 *
 * @package CpanelApi
 */
class CpanelImageManager extends CpanelBase
{
    const OPERATION = 'ImageManager';


    public function convertFile(string $imageFile,string $type)
    {
        $params = ['image_file' => $imageFile,'type'=>$type];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function createThumbnails(string $dir,string $widthPercentage,string $heightPercentage)
    {
        $params = ['dir' => $dir,'width_precentage'=>$widthPercentage,'height_percentage'=>$heightPercentage];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getDimensions(string $imageFile)
    {
        $params = ['image_file' => $imageFile];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function resizeImage(string $imageFile,string $width,srting $height)
    {
        $params = ['image_file' => $imageFile,'width'=>$width,'height'=>$height];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

}
