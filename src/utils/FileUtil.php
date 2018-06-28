<?php
namespace Simboss\Sdk\Utils;

class FileUtil
{

    /**
     * 文件转换为Base64字符串
     *
     * @param string $localFilePath 本地文件的地址
     */
    public static function convertFileToBase64($localFilePath) {
        $base64Str = null;
        if (file_exists($localFilePath)) {
            $fp = fopen($localFilePath, "r"); // 图片是否可读权限
            if ($fp) {
                $filesize = filesize($localFilePath);
                $content = fread($fp, $filesize);
                $fileContent = chunk_split(base64_encode($content)); // base64编码
                //$imgInfo = getimagesize($localFilePath); // 取得图片的大小，类型等
                //$imgBase64 = 'data:' . $imgInfo['mime'] . ';base64,' . $fileContent; // 合成图片的base64编码
                $base64Str = $fileContent; // 合成图片的base64编码
            }
            fclose($fp);
        }
        return $base64Str;
    }
}
