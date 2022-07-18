<?
require_once(implode('/', [$_SERVER['DOCUMENT_ROOT'], 'bitrix', 'modules', 'main', 'include', implode('.', ['prolog_before', 'php'])]));
$result = NULL;
$id = array_key_exists('id', $_GET) ? ((int) $_GET['id']) : $USER->GetID();
if(array_key_exists('action', $_GET))
  {switch($_GET['action'])
     {case 'file-to':
        $target = $_GET['target'];
        $type = getallheaders()['Content-Type'];
        $extension = explode('/', $type)[1];
        $handle = fopen('php://input', 'rb');
        $outputHandle = fopen($path = implode('/', [__DIR__, 'upload', 'users', $name = implode('.', [implode('-', [$id, microtime(true) * 1000000]), $extension])]), 'wb');
        $content = '';
        while(!feof($handle))
          {fwrite($outputHandle, $newContent = fread($handle, 1024));
           $content .= $newContent;
          }
        fclose($outputHandle);
        fclose($handle);
        $detail = [$name, base64_encode($content)];
        //file_put_contents($path = implode('/', [__DIR__, 'upload', 'users', $name = implode('.', [$userId, $extension])]), $content);
        switch($target)
          {case 'personal-photo':
             $userId = $id;
             $idOfTheFile = CFile::SaveFile(['name' => 'user-'.$name, 'tmp_name' => $path, 'size' => strlen($content), 'type' => $type, 'content' => $content], 'users');
             new WebHook('user.update', ['ID' => $userId, 'PERSONAL_PHOTO' => $detail]);
             $result = (new WebHook('user.get', ['ID' => $userId]))->getLastResult();
             $result = $result[0]['PERSONAL_PHOTO'];
             break;
           case 'vehicle-photo':
             $informationAboutTheElement = (new WebHook('lists.element.get', ['IBLOCK_TYPE_ID' => 'lists', 'IBLOCK_ID' => 93, 'ELEMENT_ID' => $id]))->getLastResult()[0];
             /*new WebHook('lists.element.update', ['UF_CRM_1657710634' => 'lists', 'IBLOCK_ID' => 93]);
             */
             $informationAboutThePhoto = (new WebHook('disk.folder.uploadfile', ['id' => 1, 'fileContent' => $detail, 'data' => ['NAME' => $name]]))->getLastResult();
             $idOfThePhotoAsElement = array_key_exists('PROPERTY_499', $informationAboutTheElement) ? array_keys($informationAboutTheElement['PROPERTY_499'])[0] : 'n0';
             
             $informationAboutTheElement['PROPERTY_499'] = [$idOfThePhotoAsElement => $detail];//'n'.$informationAboutThePhoto['ID'];
             $resultOfTheUpdating = (new WebHook('lists.element.update', ['IBLOCK_TYPE_ID' => 'lists', 'UF_CRM_1657710634' => 'lists', 'IBLOCK_ID' => 93, 'ELEMENT_ID' => $id, 'FIELDS' => $informationAboutTheElement]))->getLastResult();
             $result = $informationAboutThePhoto['DOWNLOAD_URL'];
             break;
          }
        break;
     }
  }
\My\Helper::outJSON($result);