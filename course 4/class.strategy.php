<?php 
abstract class FileNamingStrategy {
    abstract function createLinkName($file_name);
}

class ZipFile extends FileNamingStrategy {
    public function createLinkName($file_name)
    {
        return "<a href = '". $file_name .".zip'>". $file_name ."</a>";
    }

}
class TarFile extends FileNamingStrategy {
    public function createLinkName($file_name)
    {
        return "<a href = '". $file_name .".tar.gz'>". $file_name ."</a>";
    }

}
$strategy = new TarFile();
$dir = new DirectoryIterator('.');
foreach ($dir as $fileInfo) {
    if ($fileInfo->isFile()){
        echo $strategy->createLinkName($fileInfo->getBasename('.php'))."<br>\r\n";
    }
}

 ?>