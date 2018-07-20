<?php

/**
 * Class Gallery
 */
class Gallery
{
    /**
     * path to image folder
     */
    const GALLERY_DIR = 'img/';

    /**
     * Get folder names of all albums in the gallery
     * @return array|mixed
     */
    public function GetItemList()
    {
        $directories = glob(Gallery::GALLERY_DIR . '*', GLOB_ONLYDIR);
        $directories = str_replace(Gallery::GALLERY_DIR, '', $directories);
        return (array)$directories;
    }

    /**
     * Get address of cover image
     * @param $album_name string
     * @return string
     * @throws Exception
     */
    public function GetCoverUrl($album_name)
    {
        foreach (glob("img/*.*") as $file=>$value)
        {
                if (strpos($value, $album_name)!=false){return $value;}
        }
        throw new Exception();
    }
}

/**
 * Class Album
 */
class Album extends Gallery
{
    public $album_name;

    function __construct($album_name)
    {
        $this->album_name = $album_name;
    }

    /**
     * Returns photo name by id
     * @param $id string Photo id
     * @return string
     */
    public function GetItemName($id)
    {
        $files = $this->GetItemList();
        return (string)$files[$id];
    }

    /**
     * Returns the list of current album photo names
     * @return array|mixed
     */
    public function GetItemList()
    {
        $current_album = $this->album_name;
        $path = Gallery::GALLERY_DIR.'/'.$current_album;
        $files = array_diff(scandir($path), array('.', '..'));
        return $files;
    }

    /**
     * Returns a link to the photo by name
     * @param $photo_name string The name of the photo file (the name contains an file extension)
     * @return string
     */
    public function GetUrl($photo_name)
    {
        $current_album = $this->album_name;
        $photo_ref = Gallery::GALLERY_DIR.'/'.$current_album.'/'.$photo_name;
        return $photo_ref;
    }

    /**
     * Returns url of photo
     * @param $id string
     * @return string
     */
    public function GetItemUrl($id)
    {
        $photo_name = $this->GetItemName($id);
        $photo_ref = $this->GetUrl($photo_name);
        return $photo_ref;
    }
}


//final class Photo extends Album
//{
//    public $name;
//    function __construct($name)
//    {
//        $this->name = $name;
//    }
//}