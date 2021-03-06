<?php

namespace ResponsiveMenuPro\Filesystem;
use ResponsiveMenuPro\Filesystem\FileCreator;
use ResponsiveMenuPro\Filesystem\FolderCreator;
use ResponsiveMenuPro\Factories\CssFactory;
use ResponsiveMenuPro\Factories\JsFactory;
use ResponsiveMenuPro\Collections\OptionsCollection;

class ScriptsBuilder {

  public function __construct(CssFactory $css, JsFactory $js, FileCreator $files, FolderCreator $folders, $site_id) {
    $this->css = $css;
    $this->js = $js;
    $this->files = $files;
    $this->folders = $folders;
    $this->site_id = $site_id;
  }

  public function build(OptionsCollection $options) {

    $data_folder_dir = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/responsive-menu-pro-data';

    $js_folder = $data_folder_dir . '/js';
    $css_folder = $data_folder_dir . '/css';

    if(!$this->folders->exists($data_folder_dir)):
      $this->folders->create($data_folder_dir);
      $this->folders->create($css_folder);
      $this->folders->create($js_folder);
    endif;

    $this->files->create($css_folder, 'responsive-menu-pro-' . $this->site_id . '.css', $this->css->build($options));
    $this->files->create($js_folder, 'responsive-menu-pro-' . $this->site_id . '.js', $this->js->build($options));

  }

}
