<?
//устанавливает бесконечное время выполнения скрипта
set_time_limit(0);
$archiveDir = "archives/";
$srcDir = "../";
$archiveFile = $archiveDir."backup_".date('d-m-Y').".zip";
if(file_exists($archiveFile)) {
  unlink($archiveFile);
}
if(Zip($srcDir, $archiveFile) && file_exists($archiveFile)) {
  echo '<a href="/archive/'.$archiveFile.'">Скачать архив</a>';
} else {
  echo '<b>Архив не создан</b>';
}

function Zip($source, $destination){
  if (extension_loaded('zip') === true) {
    if (file_exists($source) === true) {
      $zip = new ZipArchive();

      if ($zip->open($destination, ZIPARCHIVE::CREATE) === true) {
        $source = realpath($source);

        if (is_dir($source) === true) {
          
          $zip->addEmptyDir('core/export/');
          $zip->addEmptyDir('core/import/');
          $zip->addEmptyDir('core/cache/');
          $zip->addEmptyDir('archive/archives/');
          
          $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);
          foreach ($files as $file) {
            if (is_dir($file) === true && !strpos($file,'.') && !strpos($file,'/core/cache/')) {
              $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
            }
            else if (is_file($file) === true && !strpos($file,'/core/cache/') && !strpos($file,'/archive/archives/')) {
              $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
            }
          }
        }
        else if (is_file($source) === true) {
          $zip->addFromString(basename($source), file_get_contents($source));
        }
        return $zip->close();
      }
    }
  }

  return false;
}

