<?php
return array (
  'orderedSets' => 
  array (
    'bootstrap-package/content-elements' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/content-elements',
       'label' => 'Bootstrap Package: Content Elements',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.view.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Layouts/ContentElement/',
           'label' => 'Layout Root Path',
           'description' => 'Path to layouts',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.view.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Partials/ContentElement/',
           'label' => 'Partial Root Path',
           'description' => 'Path to partials',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.view.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Templates/ContentElement/',
           'label' => 'Template Root Path',
           'description' => 'Path to templates',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.header.defaultHeaderType',
           'type' => 'number',
           'default' => 2,
           'label' => 'Default Header type',
           'description' => 'Enter the number of the header layout to be used by default [1-5]',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.header.class',
           'type' => 'string',
           'default' => 'element-header',
           'label' => 'Default Header class',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.header.date.format',
           'type' => 'string',
           'default' => '%B %e, %Y',
           'label' => 'Header date format',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.subheader.class',
           'type' => 'string',
           'default' => 'element-subheader',
           'label' => 'Default Subheader class',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.subheader',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.lightbox.cssClass',
           'type' => 'string',
           'default' => 'lightbox',
           'label' => 'CSS Class',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.lightbox',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.lightbox.prefix',
           'type' => 'string',
           'default' => 'lightbox-group',
           'label' => 'Group Prefix',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.lightbox',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.lightbox.image.maxHeight',
           'type' => 'int',
           'default' => 1200,
           'label' => 'Max Image Hight',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.lightbox',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.lightbox.image.maxWidth',
           'type' => 'int',
           'default' => 1200,
           'label' => 'Max Image Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.lightbox',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.autoplay',
           'type' => 'bool',
           'default' => false,
           'label' => 'Autoplay',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.controls',
           'type' => 'bool',
           'default' => true,
           'label' => 'Controls',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.loop',
           'type' => 'bool',
           'default' => false,
           'label' => 'Loop',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.enablejsapi',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable JavaScript API',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.showinfo',
           'type' => 'bool',
           'default' => false,
           'label' => 'Show Info',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.relatedVideos',
           'type' => 'bool',
           'default' => false,
           'label' => 'Related Videos',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.modestbranding',
           'type' => 'bool',
           'default' => false,
           'label' => 'Modest Branding',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.nocookie',
           'type' => 'bool',
           'default' => true,
           'label' => 'No Cookie',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.gallery.columns.1.class',
           'type' => 'string',
           'default' => 'gallery-item-size-1',
           'label' => 'Item CSS Class for 1 column',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.gallery',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.gallery.columns.2.class',
           'type' => 'string',
           'default' => 'gallery-item-size-2',
           'label' => 'Item CSS Class for 2 columns',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.gallery',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.gallery.columns.3.class',
           'type' => 'string',
           'default' => 'gallery-item-size-3',
           'label' => 'Item CSS Class for 3 columns',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.gallery',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.gallery.columns.4.class',
           'type' => 'string',
           'default' => 'gallery-item-size-4',
           'label' => 'Item CSS Class for 4 columns',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.gallery',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        23 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.gallery.columns.5.class',
           'type' => 'string',
           'default' => 'gallery-item-size-5',
           'label' => 'Item CSS Class for 5 columns',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.gallery',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        24 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.gallery.columns.6.class',
           'type' => 'string',
           'default' => 'gallery-item-size-6',
           'label' => 'Item CSS Class for 6 columns',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.gallery',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        25 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_thumbnail.title.crop',
           'type' => 'int',
           'default' => 100,
           'label' => 'Crop Title',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-thumbnail',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        26 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_thumbnail.subtitle.crop',
           'type' => 'int',
           'default' => 100,
           'label' => 'Crop Subtitle',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-thumbnail',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        27 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_card.title.crop',
           'type' => 'int',
           'default' => 100,
           'label' => 'Crop Title',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-card',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        28 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_card.subtitle.crop',
           'type' => 'int',
           'default' => 100,
           'label' => 'Crop Subtitle',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-card',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        29 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_card.abstract.crop',
           'type' => 'int',
           'default' => 250,
           'label' => 'Crop Abstract',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-card',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        30 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_card.icon.enable',
           'type' => 'bool',
           'default' => false,
           'label' => 'Enable Icon',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-card',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        31 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_card.icon.height',
           'type' => 'string',
           'default' => '32',
           'label' => 'Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-card',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        32 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_card.icon.width',
           'type' => 'string',
           'default' => '32c',
           'label' => 'Icon Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-card',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        33 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.default.height',
           'type' => 'string',
           'default' => '32',
           'label' => 'Default Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        34 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.default.width',
           'type' => 'string',
           'default' => '32',
           'label' => 'Default Icon Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        35 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.medium.height',
           'type' => 'string',
           'default' => '48',
           'label' => 'Medium Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        36 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.medium.width',
           'type' => 'string',
           'default' => '48',
           'label' => 'Medium Icon Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        37 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.large.height',
           'type' => 'string',
           'default' => '64',
           'label' => 'Large Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        38 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.large.width',
           'type' => 'string',
           'default' => '64',
           'label' => 'Large Icon Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        39 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.awesome.height',
           'type' => 'string',
           'default' => '80',
           'label' => 'Awesome Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        40 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.awesome.width',
           'type' => 'string',
           'default' => '80',
           'label' => 'Awesome Icon Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        41 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.timeline.date.format',
           'type' => 'string',
           'default' => '%B %e, %Y - %H:%M',
           'label' => 'Date Format',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.timeline',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        42 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.uploads.preview.height',
           'type' => 'string',
           'default' => '100c',
           'label' => 'Preview Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.uploads',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        43 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.uploads.preview.width',
           'type' => 'string',
           'default' => '100c',
           'label' => 'Preview Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.uploads',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements',
           'label' => 'Content Elements',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.templates',
           'label' => 'Templates',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.header',
           'label' => 'Header',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.subheader',
           'label' => 'Subheader',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.lightbox',
           'label' => 'Lightbox',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.media',
           'label' => 'Media',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.gallery',
           'label' => 'Gallery',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.menu-thumbnail',
           'label' => 'Menu Thumbnail',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.menu-card',
           'label' => 'Menu Card',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.text-and-icon',
           'label' => 'Text and Icon',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.timeline',
           'label' => 'Timeline',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.uploads',
           'label' => 'Uploads',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/ContentElements/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/ContentElements/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/container' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/container',
       'label' => 'Bootstrap Package: Container',
       'dependencies' => 
      array (
        0 => 'bootstrap-package/content-elements',
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/Container/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/Container/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/indexed-search' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/indexed-search',
       'label' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:label',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'indexedsearch.view.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:indexed_search/Resources/Private/Templates/',
           'label' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.indexedsearch.view.templateRootPath',
           'description' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.description.indexedsearch.view.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'indexedsearch.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'indexedsearch.view.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:indexed_search/Resources/Private/Partials/',
           'label' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.indexedsearch.view.partialRootPath',
           'description' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.description.indexedsearch.view.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'indexedsearch.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'indexedsearch.view.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:indexed_search/Resources/Private/Layouts/',
           'label' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.indexedsearch.view.layoutRootPath',
           'description' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.description.indexedsearch.view.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'indexedsearch.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'indexedsearch.targetPid',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.indexedsearch.targetPid',
           'description' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.description.indexedsearch.targetPid',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'indexedsearch',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'indexedsearch.rootPidList',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.indexedsearch.rootPidList',
           'description' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.description.indexedsearch.rootPidList',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'indexedsearch',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'indexedsearch.pagination_type',
           'type' => 'string',
           'default' => 'simple',
           'label' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.indexedsearch.pagination_type',
           'description' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.description.indexedsearch.pagination_type',
           'readonly' => false,
           'enum' => 
          array (
            'simple' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.indexedsearch.pagination_type.enum.simple',
            'slidingWindow' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.indexedsearch.pagination_type.enum.slidingWindow',
          ),
           'category' => 'indexedsearch',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'indexedsearch.page_links',
           'type' => 'int',
           'default' => 10,
           'label' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.indexedsearch.page_links',
           'description' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:settings.description.indexedsearch.page_links',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'indexedsearch',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'indexedsearch',
           'label' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:categories.indexedsearch',
           'description' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:categories.description.indexedsearch',
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'indexedsearch.templates',
           'label' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:categories.indexedsearch.templates',
           'description' => 'LLL:EXT:indexed_search/Configuration/Sets/IndexedSearch/labels.xlf:categories.description.indexedsearch.templates',
           'icon' => NULL,
           'parent' => 'indexedsearch',
        )),
      ),
       'typoscript' => 'EXT:indexed_search/Configuration/Sets/IndexedSearch/',
       'pagets' => 'EXT:indexed_search/Configuration/Sets/IndexedSearch/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/indexed-search' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/indexed-search',
       'label' => 'Bootstrap Package: Indexed Search',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
        0 => 'typo3/indexed-search',
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/IndexedSearch/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/IndexedSearch/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/backend-layouts' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/backend-layouts',
       'label' => 'Bootstrap Package: Backend Layouts',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.default',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Default Layout',
           'description' => 'Enable the default backend layout with border, content before/after, main content and footer columns.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.simple',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Simple Layout',
           'description' => 'Enable the simple backend layout with border, content before/after and main content columns.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.2_columns',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable 2 Columns Layout',
           'description' => 'Enable the 2 columns (75/25) backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.2_columns_25_75',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable 2 Columns 25/75 Layout',
           'description' => 'Enable the 2 columns (25/75) backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.2_columns_50_50',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable 2 Columns 50/50 Layout',
           'description' => 'Enable the 2 columns (50/50) backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.2_columns_offset_right',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable 2 Columns Offset Right Layout',
           'description' => 'Enable the 2 columns offset right backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.3_columns',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable 3 Columns Layout',
           'description' => 'Enable the 3 columns backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.special_feature',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Special Feature Layout',
           'description' => 'Enable the special feature backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.special_start',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Special Start Layout',
           'description' => 'Enable the special start backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.subnavigation_left',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Subnavigation Left Layout',
           'description' => 'Enable the subnavigation left backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.subnavigation_left_2_columns',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Subnavigation Left 2 Columns Layout',
           'description' => 'Enable the subnavigation left with 2 columns backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.subnavigation_right',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Subnavigation Right Layout',
           'description' => 'Enable the subnavigation right backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.subnavigation_right_2_columns',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Subnavigation Right 2 Columns Layout',
           'description' => 'Enable the subnavigation right with 2 columns backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.backendLayouts',
           'label' => 'Backend Layouts',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/BackendLayouts/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/BackendLayouts/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/bootstrap-5' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/bootstrap-5',
       'label' => 'Bootstrap Package: Bootstrap 5',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.primary',
           'type' => 'string',
           'default' => '#577760',
           'label' => '$primary',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.secondary',
           'type' => 'string',
           'default' => '#514553',
           'label' => '$secondary',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.tertiary',
           'type' => 'string',
           'default' => '#758c7f',
           'label' => '$tertiary',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.quaternary',
           'type' => 'string',
           'default' => '#2d1e2f',
           'label' => '$quaternary',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.default',
           'type' => 'string',
           'default' => '#eaebec',
           'label' => '$default',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.success',
           'type' => 'string',
           'default' => '#3A833A',
           'label' => '$success',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.info',
           'type' => 'string',
           'default' => '#287F9A',
           'label' => '$info',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.warning',
           'type' => 'string',
           'default' => '#a4660e',
           'label' => '$warning',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.danger',
           'type' => 'string',
           'default' => '#d4403a',
           'label' => '$danger',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.lighter',
           'type' => 'string',
           'default' => '$gray-100',
           'label' => '$lighter',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.light',
           'type' => 'string',
           'default' => '$gray-200',
           'label' => '$light',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.dark',
           'type' => 'string',
           'default' => '$gray-800',
           'label' => '$dark',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.darker',
           'type' => 'string',
           'default' => '$gray-900',
           'label' => '$darker',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.min-contrast-ratio',
           'type' => 'number',
           'default' => 4.5,
           'label' => '$min-contrast-ratio',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.contrast',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.body-bg',
           'type' => 'string',
           'default' => '$white',
           'label' => '$body-bg',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.body',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.body-color',
           'type' => 'string',
           'default' => '$gray-900',
           'label' => '$body-color',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.body',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.link-color',
           'type' => 'string',
           'default' => '$primary',
           'label' => '$link-color',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.links',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.link-shade-percentage',
           'type' => 'string',
           'default' => '20%',
           'label' => '$link-shade-percentage',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.links',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.link-hover-color',
           'type' => 'string',
           'default' => 'shift-color($link-color, $link-shade-percentage)',
           'label' => '$link-shade-percentage',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.links',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.font-family-sans-serif',
           'type' => 'string',
           'default' => '"#{$google-webfont}", sans-serif',
           'label' => '$font-family-sans-serif',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.fonts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.font-family-monospace',
           'type' => 'string',
           'default' => 'SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace',
           'label' => '$font-family-monospace',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.fonts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.enable-rounded',
           'type' => 'bool',
           'default' => true,
           'label' => '$enable-rounded',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.options',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.enable-shadows',
           'type' => 'bool',
           'default' => true,
           'label' => '$enable-shadows',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.options',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        23 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.enable-gradients',
           'type' => 'bool',
           'default' => false,
           'label' => '$enable-gradients',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.options',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        24 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.enable-transitions',
           'type' => 'bool',
           'default' => true,
           'label' => '$enable-transitions',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.options',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss',
           'label' => 'SCSS',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss.colors',
           'label' => 'Colors',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.scss',
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss.contrast',
           'label' => 'Contrast',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.scss',
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss.body',
           'label' => 'Body',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.scss',
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss.links',
           'label' => 'Links',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.scss',
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss.fonts',
           'label' => 'Fonts',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.scss',
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss.options',
           'label' => 'Options',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.scss',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/Bootstrap5/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/Bootstrap5/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/cookie-consent' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/cookie-consent',
       'label' => 'Bootstrap Package: Cookie Consent',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Cookie Consent',
           'description' => 'For more information about this solution please head over to https://cookieconsent.insites.com/',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.layout',
           'type' => 'string',
           'default' => 'basic-header',
           'label' => 'Layout',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            'basic' => 'Basic',
            'basic-close' => 'Basic Close',
            'basic-header' => 'Basic Header',
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.position',
           'type' => 'string',
           'default' => 'bottom',
           'label' => 'Position',
           'description' => 'If you specify "top" or "bottom", we assume that a full width "banner" is required. If however you specify a horizontal direction, we assume that a corner popup is required (which we call "floating").',
           'readonly' => false,
           'enum' => 
          array (
            'top' => 'Banner Top',
            'bottom' => 'Banner Bottom',
            'top-left' => 'Floating Top Left',
            'top-right' => 'Floating Top Right',
            'bottom-left' => 'Floating Bottom Left',
            'bottom-right' => 'Floating Bottom Right',
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.static',
           'type' => 'bool',
           'default' => false,
           'label' => 'Static Position',
           'description' => 'The popup uses position fixed to stay in one place on the screen despite any scroll bars. This option makes the popup position static so it displays at the top of the page. A height animation has also been added by default so the popup doesn’t make the page jump, but gradually grows and fades in.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.content.href',
           'type' => 'string',
           'default' => '',
           'label' => 'Privacy Police',
           'description' => 'Insert a full Link to the privacy police page or a page uid from your current TYPO3 System.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.revokable',
           'type' => 'bool',
           'default' => false,
           'label' => 'Revokable',
           'description' => 'If set true, revoke button is displayed every time. If false, revoke button is only displayed for advanced compliance options (opt-in and opt-out) and in countries that require revokable consent. The latter can be disabled by regionalLaw.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.location',
           'type' => 'bool',
           'default' => false,
           'label' => 'Location Detection',
           'description' => 'Location is simply a tool for getting the two letter country code that the user is in.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.law.countryCode',
           'type' => 'string',
           'default' => '',
           'label' => 'Country Code',
           'description' => 'Rather than getting the country code from the location services, you can hard code a particular country into the tool.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.law.regionalLaw',
           'type' => 'bool',
           'default' => true,
           'label' => 'Regional Law',
           'description' => 'If false, then we only enable the popup if the country has the cookie law. We ignore all other country specific rules.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.type',
           'type' => 'string',
           'default' => 'info',
           'label' => 'Compliance',
           'description' => 'The informal confirmation does not require any further adjustments to your JavaScript. The Opt-In and Opt-Out options are not out-of-the-box solutions, manual adjustments to your software are necessary. For your support we provide the events bk2k.cookie.enable, bk2k.cookie.disable and bk2k.cookie.revoke. These events allow you to let your application react to them and to set or remove cookies accordingly. The cookie that contains the current status is called cookieconsent_status.',
           'readonly' => false,
           'enum' => 
          array (
            'info' => 'Informal',
            'opt-in' => 'Opt-In',
            'opt-out' => 'Opt-Out',
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.cookie.expiryDays',
           'type' => 'number',
           'default' => 365,
           'label' => 'Expiry Days',
           'description' => 'The cookies expire date, specified in days (specify -1 for no expiry)',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.cookie-consent',
           'label' => 'Cookie Consent',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/CookieConsent/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/CookieConsent/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/google-font' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/google-font',
       'label' => 'Bootstrap Package: Google Font',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.googleFont.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.google-font',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.googleFont.font',
           'type' => 'string',
           'default' => 'Source Sans Pro',
           'label' => 'Font',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.google-font',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.googleFont.weight',
           'type' => 'string',
           'default' => '300,400,700',
           'label' => 'Font Weights',
           'description' => 'Comma separated list of font weights',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.google-font',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.google-font',
           'label' => 'Google Font',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/GoogleFont/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/GoogleFont/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/google-tag-manager' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/google-tag-manager',
       'label' => 'Bootstrap Package: Google Tag Manager',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.tracking.google.tagManagerContainerId',
           'type' => 'string',
           'default' => '',
           'label' => 'Container-ID',
           'description' => 'Google Tag Manager Container ID',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.google-tag-manager',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.google-tag-manager',
           'label' => 'Google Tag Manager',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/GoogleTagManager/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/GoogleTagManager/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/rte' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/rte',
       'label' => 'Bootstrap Package: RTE',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/RTE/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/RTE/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/skiplink' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/skiplink',
       'label' => 'Bootstrap Package: Skiplink',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/Skiplink/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/Skiplink/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/form' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/form',
       'label' => 'Form Framework',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:form/Configuration/Sets/Form/',
       'pagets' => 'EXT:form/Configuration/Sets/Form/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/seo-sitemap' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/seo-sitemap',
       'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:label',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.view.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:seo/Resources/Private/Templates/',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.view.templateRootPath',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.view.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.view.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:seo/Resources/Private/Partials/',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.view.partialRootPath',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.view.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.view.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:seo/Resources/Private/Layouts/',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.view.layoutRootPath',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.view.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.pages.excludedDoktypes',
           'type' => 'string',
           'default' => '3, 4, 6, 7, 199, 254',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.pages.excludedDoktypes',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.pages.excludedDoktypes',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.pages.excludePagesRecursive',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.pages.excludePagesRecursive',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.pages.excludePagesRecursive',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.pages.additionalWhere',
           'type' => 'string',
           'default' => '{#no_index} = 0 AND {#canonical_link} = \'\'',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.pages.additionalWhere',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.pages.additionalWhere',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'seo',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:categories.seo',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:categories.description.seo',
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'seo.templates',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:categories.seo.templates',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:categories.description.seo.templates',
           'icon' => NULL,
           'parent' => 'seo',
        )),
      ),
       'typoscript' => 'EXT:seo/Configuration/Sets/Sitemap/',
       'pagets' => 'EXT:seo/Configuration/Sets/Sitemap/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
        'PageTypeSuffix' => 
        array (
          'type' => 'PageType',
          'map' => 
          array (
            'sitemap.xml' => 1533906435,
          ),
        ),
        'Sitemap' => 
        array (
          'type' => 'Simple',
          'routePath' => 'sitemap-type/{sitemap}',
          'aspects' => 
          array (
            'sitemap' => 
            array (
              'type' => 'StaticValueMapper',
              'map' => 
              array (
                'pages' => 'pages',
              ),
            ),
          ),
          '_arguments' => 
          array (
            'sitemap' => 'tx_seo/sitemap',
          ),
        ),
      ),
    )),
    'bootstrap-package/full' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/full',
       'label' => 'Bootstrap Package: Full Package',
       'dependencies' => 
      array (
        0 => 'bootstrap-package/backend-layouts',
        1 => 'bootstrap-package/bootstrap-5',
        2 => 'bootstrap-package/content-elements',
        3 => 'bootstrap-package/cookie-consent',
        4 => 'bootstrap-package/google-font',
        5 => 'bootstrap-package/google-tag-manager',
        6 => 'bootstrap-package/rte',
        7 => 'bootstrap-package/skiplink',
      ),
       'optionalDependencies' => 
      array (
        0 => 'typo3/form',
        1 => 'typo3/seo-sitemap',
        2 => 'bootstrap-package/indexed-search',
        3 => 'bootstrap-package/container',
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.logo.file',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Public/Images/BootstrapPackage.svg',
           'label' => 'Logo',
           'description' => 'Leave blank to use website title from template instead',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.logo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.logo.fileInverted',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Public/Images/BootstrapPackageInverted.svg',
           'label' => 'Logo Inverted',
           'description' => 'Leave blank to use website title from template instead',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.logo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.logo.height',
           'type' => 'number',
           'default' => 52,
           'label' => 'Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.logo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.logo.width',
           'type' => 'number',
           'default' => 180,
           'label' => 'Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.logo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.logo.alt',
           'type' => 'string',
           'default' => '',
           'label' => 'Alternative text',
           'description' => 'Text of the alt attribute of the logo image (default: "<website title> logo"',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.logo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.logo.linktitle',
           'type' => 'string',
           'default' => '',
           'label' => 'Link title',
           'description' => 'Title of the link attribute of the logo image',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.logo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.favicon.file',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Public/Icons/favicon.ico',
           'label' => 'Favicon',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.favicon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.style',
           'type' => 'string',
           'default' => 'default',
           'label' => 'Navigation Style',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            'default' => 'Default',
            'default-transition' => 'Default Transition',
            'inverse' => 'Inverse',
            'inverse-transition' => 'Inverse Transition',
          ),
           'category' => 'BootstrapPackage.navigation.main',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.type',
           'type' => 'string',
           'default' => '',
           'label' => 'Navigation Style',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            '' => 'Default',
            'top' => 'Fixed',
          ),
           'category' => 'BootstrapPackage.navigation.main',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.icon.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Navigation Icon Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.main',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.icon.width',
           'type' => 'int',
           'default' => 20,
           'label' => 'Navigation Icon Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.main',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.icon.height',
           'type' => 'int',
           'default' => 20,
           'label' => 'Navigation Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.main',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.dropdown.icon.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Dropdown Icon Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.dropdown',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.dropdown.icon.width',
           'type' => 'int',
           'default' => 16,
           'label' => 'Dropdown Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.dropdown',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.dropdown.icon.height',
           'type' => 'int',
           'default' => 16,
           'label' => 'Dropdown Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.dropdown',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.subnavigation.icon.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'SubNavigation Icon Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.sub',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.subnavigation.icon.width',
           'type' => 'int',
           'default' => 16,
           'label' => 'SubNavigation Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.sub',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.subnavigation.icon.height',
           'type' => 'int',
           'default' => 16,
           'label' => 'SubNavigation Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.sub',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.breadcrumb.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.breadcrumb',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.breadcrumb.enableLevel',
           'type' => 'int',
           'default' => 2,
           'label' => 'Show menu level if greater or equal to this value',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.breadcrumb',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.breadcrumb.icon.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Breadcrumb Icon Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.breadcrumb',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.breadcrumb.icon.width',
           'type' => 'int',
           'default' => 16,
           'label' => 'Breadcrumb Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.breadcrumb',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.breadcrumb.icon.height',
           'type' => 'int',
           'default' => 16,
           'label' => 'Breadcrumb Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.breadcrumb',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        23 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.meta.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        24 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.meta.navigationValue',
           'type' => 'string',
           'default' => '',
           'label' => 'Values',
           'description' => 'Comma separated list of page uids',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        25 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.meta.navigationType',
           'type' => 'string',
           'default' => 'list',
           'label' => 'Type',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            'list' => 'List',
            'directory' => 'Directory',
          ),
           'category' => 'BootstrapPackage.navigation.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        26 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.meta.includeNotInMenu',
           'type' => 'bool',
           'default' => true,
           'label' => 'Include items not in menu',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        27 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        28 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.navigationValue',
           'type' => 'string',
           'default' => '',
           'label' => 'Values',
           'description' => 'Comma separated list of page uids',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        29 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.navigationType',
           'type' => 'string',
           'default' => 'list',
           'label' => 'Type',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            'list' => 'List',
            'directory' => 'Directory',
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        30 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.includeNotInMenu',
           'type' => 'bool',
           'default' => true,
           'label' => 'Include items not in menu',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        31 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.levels',
           'type' => 'int',
           'default' => 2,
           'label' => 'Levels',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        32 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.icon.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Footer Icon Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        33 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.icon.width',
           'type' => 'int',
           'default' => 16,
           'label' => 'Footer Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        34 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.icon.height',
           'type' => 'int',
           'default' => 16,
           'label' => 'Footer Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        35 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.language.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.language',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        36 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.language.languageValue',
           'type' => 'string',
           'default' => 'auto',
           'label' => 'Language Navigation',
           'description' => 'Comma separated list of language uids or set to "auto" to load all enabled system languages',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.language',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        37 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.enable',
           'type' => 'bool',
           'default' => false,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        38 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.label',
           'type' => 'string',
           'default' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/locallang.xlf:contact.label',
           'label' => 'Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        39 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.title',
           'type' => 'string',
           'default' => '',
           'label' => 'Title',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        40 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.addressLine1',
           'type' => 'string',
           'default' => '',
           'label' => 'Address Line 1',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        41 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.addressLine2',
           'type' => 'string',
           'default' => '',
           'label' => 'Address Line 2',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        42 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.addressLine3',
           'type' => 'string',
           'default' => '',
           'label' => 'Address Line 3',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        43 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.country',
           'type' => 'string',
           'default' => '',
           'label' => 'Country',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        44 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.phone',
           'type' => 'string',
           'default' => '',
           'label' => 'Phone',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        45 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.fax',
           'type' => 'string',
           'default' => '',
           'label' => 'Fax',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        46 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.email',
           'type' => 'string',
           'default' => '',
           'label' => 'Email',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        47 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.www',
           'type' => 'string',
           'default' => '',
           'label' => 'WWW',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        48 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.button.pageUid',
           'type' => 'int',
           'default' => 0,
           'label' => 'Page Uid',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.button',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        49 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.button.label',
           'type' => 'string',
           'default' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/locallang.xlf:contact.button.label',
           'label' => 'Page Uid',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.button',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        50 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.button.colorClass',
           'type' => 'string',
           'default' => 'primary',
           'label' => 'Class',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            'primary' => 'primary',
            'secondary' => 'secondary',
          ),
           'category' => 'BootstrapPackage.contact.button',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        51 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.copyright.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.copyright',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        52 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.copyright.text',
           'type' => 'string',
           'default' => 'Running with <a href="http://www.typo3.org" rel="noopener" target="_blank">TYPO3</a> and <a href="https://www.bootstrap-package.com" rel="noopener" target="_blank">Bootstrap Package</a>.',
           'label' => 'Text',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.copyright',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        53 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        54 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.facebook.label',
           'type' => 'string',
           'default' => 'Facebook',
           'label' => 'Facebook Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        55 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.facebook.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Facebook Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        56 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.x.label',
           'type' => 'string',
           'default' => 'X',
           'label' => 'X Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        57 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.x.url',
           'type' => 'string',
           'default' => '',
           'label' => 'X Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        58 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.bluesky.label',
           'type' => 'string',
           'default' => 'Bluesky',
           'label' => 'Bluesky Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        59 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.bluesky.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Bluesky Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        60 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.mastodon.label',
           'type' => 'string',
           'default' => 'Mastodon',
           'label' => 'Mastodon Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        61 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.mastodon.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Mastodon Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        62 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.threads.label',
           'type' => 'string',
           'default' => 'Threads',
           'label' => 'Threads Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        63 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.threads.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Threads Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        64 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.telegram.label',
           'type' => 'string',
           'default' => 'Telegram',
           'label' => 'Telegram Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        65 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.telegram.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Telegram Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        66 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.whatsapp.label',
           'type' => 'string',
           'default' => 'Whatsapp',
           'label' => 'Whatsapp Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        67 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.whatsapp.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Whatsapp Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        68 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.instagram.label',
           'type' => 'string',
           'default' => 'Instagram',
           'label' => 'Instagram Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        69 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.instagram.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Instagram Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        70 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.github.label',
           'type' => 'string',
           'default' => 'GitHub',
           'label' => 'GitHub Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        71 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.github.url',
           'type' => 'string',
           'default' => '',
           'label' => 'GitHub Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        72 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.researchgate.label',
           'type' => 'string',
           'default' => 'Research Gate',
           'label' => 'Research Gate Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        73 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.researchgate.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Research Gate Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        74 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.linkedin.label',
           'type' => 'string',
           'default' => 'LinkedIn',
           'label' => 'LinkedIn Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        75 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.linkedin.url',
           'type' => 'string',
           'default' => '',
           'label' => 'LinkedIn Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        76 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.xing.label',
           'type' => 'string',
           'default' => 'Xing',
           'label' => 'Xing Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        77 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.xing.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Xing Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        78 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.youtube.label',
           'type' => 'string',
           'default' => 'YouTube',
           'label' => 'YouTube Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        79 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.youtube.url',
           'type' => 'string',
           'default' => '',
           'label' => 'YouTube Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        80 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.vk.label',
           'type' => 'string',
           'default' => 'VK',
           'label' => 'VK Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        81 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.vk.url',
           'type' => 'string',
           'default' => '',
           'label' => 'VK Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        82 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.vimeo.label',
           'type' => 'string',
           'default' => 'Vimeo',
           'label' => 'Vimeo Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        83 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.vimeo.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Vimeo Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        84 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.rss.label',
           'type' => 'string',
           'default' => 'RSS',
           'label' => 'RSS Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        85 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.rss.url',
           'type' => 'string',
           'default' => '',
           'label' => 'RSS Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        86 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.discord.label',
           'type' => 'string',
           'default' => 'Discord',
           'label' => 'Discord Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        87 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.discord.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Discord Url',
           'description' => 'Insert the full server url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        88 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.fluidtemplate.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Layouts/Page/',
           'label' => 'Layout Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.page',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        89 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.fluidtemplate.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Partials/Page/',
           'label' => 'Partial Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.page',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        90 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.fluidtemplate.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Templates/Page/',
           'label' => 'Template Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.page',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        91 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_blocks.view.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Layouts/Blocks/',
           'label' => 'Layout Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.block',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        92 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_blocks.view.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Partials/Blocks/',
           'label' => 'Partial Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.block',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        93 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_blocks.view.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Templates/Blocks/',
           'label' => 'Template Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.block',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        94 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.view.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Layouts/',
           'label' => 'Layout Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.plugin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        95 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.view.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Partials/',
           'label' => 'Partial Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.plugin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        96 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.view.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Templates/',
           'label' => 'Template Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.plugin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        97 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.cssSourceMapping',
           'type' => 'bool',
           'default' => false,
           'label' => 'CSS source mapping',
           'description' => 'Create a CSS source map useful to debug CSS in browser developer tools. Note: CSS compression will be disabled.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.settings',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        98 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.overrideParserVariables',
           'type' => 'bool',
           'default' => true,
           'label' => 'Override Parser Variables',
           'description' => 'If enabled the variables defined in your SCSS files will be overridden with the ones defined as Site Settings',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.settings',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        99 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.meta.viewport',
           'type' => 'string',
           'default' => 'width=device-width, initial-scale=1, minimum-scale=1',
           'label' => 'viewport',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        100 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.meta.robots',
           'type' => 'string',
           'default' => 'index,follow',
           'label' => 'robots',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        101 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.meta.mobile-web-app-capable',
           'type' => 'string',
           'default' => 'no',
           'label' => 'mobile-web-app-capable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        102 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.meta.google',
           'type' => 'string',
           'default' => 'notranslate',
           'label' => 'google',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        103 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.meta.google-site-verification',
           'type' => 'string',
           'default' => '',
           'label' => 'google-site-verification',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        104 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.no_cache',
           'type' => 'bool',
           'default' => false,
           'label' => 'No Cache',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        105 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.removeDefaultJS',
           'type' => 'string',
           'default' => '0',
           'label' => 'Remove default JavaScript',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            0 => 'Do not remove',
            1 => 'Remove',
            'external' => 'Move to external file',
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        106 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.compressJs',
           'type' => 'bool',
           'default' => true,
           'label' => 'Compress JavaScript',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        107 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.compressCss',
           'type' => 'bool',
           'default' => true,
           'label' => 'Compress CSS',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        108 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.concatenateJs',
           'type' => 'bool',
           'default' => true,
           'label' => 'Concatenate JavaScript',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        109 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.concatenateCss',
           'type' => 'bool',
           'default' => true,
           'label' => 'Concatenate CSS',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        110 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.admPanel',
           'type' => 'bool',
           'default' => true,
           'label' => 'Admin Panel',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        111 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.headerComment',
           'type' => 'string',
           'default' => 'Based on the TYPO3 Bootstrap Package by Benjamin Kott - https://www.bootstrap-package.com/',
           'label' => 'Header Comment',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        112 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.sendCacheHeaders',
           'type' => 'bool',
           'default' => true,
           'label' => 'Send cache headers',
           'description' => 'Allow appropriate caching by transparent proxies and browser clients',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.logo',
           'label' => 'Logo',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.favicon',
           'label' => 'Favicon',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.templates',
           'label' => 'Templates',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.templates.page',
           'label' => 'Pages',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.templates',
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.templates.block',
           'label' => 'Block',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.templates',
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.templates.plugin',
           'label' => 'Plugin',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.templates',
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation',
           'label' => 'Navigation',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.main',
           'label' => 'Main',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.dropdown',
           'label' => 'Dropdown',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.sub',
           'label' => 'Subnavigation',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.breadcrumb',
           'label' => 'Breadcrumb',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.meta',
           'label' => 'Meta',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.footer',
           'label' => 'Footer',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.language',
           'label' => 'Language',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.contact',
           'label' => 'Contact',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.contact.data',
           'label' => 'Data',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.contact',
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.contact.button',
           'label' => 'Button',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.contact',
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.copyright',
           'label' => 'Copyright',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.socialmedia',
           'label' => 'Social Media',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.meta',
           'label' => 'Meta',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.config',
           'label' => 'Config',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.settings',
           'label' => 'Settings',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/Full/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/Full/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/felogin' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/felogin',
       'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:label',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.pid',
           'type' => 'string',
           'default' => '0',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.pid',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.pid',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.recursive',
           'type' => 'string',
           'default' => '0',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.recursive',
           'readonly' => false,
           'enum' => 
          array (
            0 => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive.enum.0',
            1 => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive.enum.1',
            2 => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive.enum.2',
            3 => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive.enum.3',
            4 => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive.enum.4',
            255 => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive.enum.255',
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.showForgotPassword',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.showForgotPassword',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.showForgotPassword',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.showPermaLogin',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.showPermaLogin',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.showPermaLogin',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.showLogoutFormAfterLogin',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.showLogoutFormAfterLogin',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.showLogoutFormAfterLogin',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.emailFrom',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.emailFrom',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.emailFrom',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.emailFromName',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.emailFromName',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.emailFromName',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.replyToEmail',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.replyToEmail',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.replyToEmail',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.dateFormat',
           'type' => 'string',
           'default' => 'Y-m-d H:i',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.dateFormat',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.dateFormat',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.email.layoutRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.email.layoutRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.email.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.email.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:felogin/Resources/Private/Email/Templates/',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.email.templateRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.email.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.email.partialRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.email.partialRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.email.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.email.templateName',
           'type' => 'string',
           'default' => 'PasswordRecovery',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.email.templateName',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.email.templateName',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectMode',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectMode',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectMode',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectFirstMethod',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectFirstMethod',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectFirstMethod',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectPageLogin',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectPageLogin',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectPageLogin',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectPageLoginError',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectPageLoginError',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectPageLoginError',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectPageLogout',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectPageLogout',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectPageLogout',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectDisable',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectDisable',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectDisable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.forgotLinkHashValidTime',
           'type' => 'int',
           'default' => 12,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.forgotLinkHashValidTime',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.forgotLinkHashValidTime',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.domains',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.domains',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.domains',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.view.templateRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.view.templateRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.view.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.view.partialRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.view.partialRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.view.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        23 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.view.layoutRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.view.layoutRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.view.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'felogin',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:categories.felogin',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:categories.description.felogin',
           'icon' => NULL,
           'parent' => NULL,
        )),
      ),
       'typoscript' => 'EXT:felogin/Configuration/Sets/Felogin/',
       'pagets' => 'EXT:felogin/Configuration/Sets/Felogin/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/theme-camino' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/theme-camino',
       'label' => 'Theme: Camino',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
        0 => 'typo3/felogin',
        1 => 'typo3/indexed-search',
        2 => 'typo3/form',
        3 => 'typo3/seo-sitemap',
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'camino.colorScheme',
           'type' => 'string',
           'default' => 'theme-caramel-cream',
           'label' => 'LLL:EXT:theme_camino/Configuration/Sets/camino/labels.xlf:settings.camino.colorScheme',
           'description' => 'LLL:EXT:theme_camino/Configuration/Sets/camino/labels.xlf:settings.description.camino.colorScheme',
           'readonly' => false,
           'enum' => 
          array (
            'theme-caramel-cream' => 'LLL:EXT:theme_camino/Configuration/Sets/camino/labels.xlf:settings.camino.colorScheme.enum.theme-caramel-cream',
            'theme-ocean-breeze' => 'LLL:EXT:theme_camino/Configuration/Sets/camino/labels.xlf:settings.camino.colorScheme.enum.theme-ocean-breeze',
            'theme-forest-mist' => 'LLL:EXT:theme_camino/Configuration/Sets/camino/labels.xlf:settings.camino.colorScheme.enum.theme-forest-mist',
            'theme-violet-velvet' => 'LLL:EXT:theme_camino/Configuration/Sets/camino/labels.xlf:settings.camino.colorScheme.enum.theme-violet-velvet',
          ),
           'category' => 'camino',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'camino.header.fixedPosition',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:theme_camino/Configuration/Sets/camino/labels.xlf:settings.camino.header.fixedPosition',
           'description' => 'LLL:EXT:theme_camino/Configuration/Sets/camino/labels.xlf:settings.description.camino.header.fixedPosition',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'camino',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'camino',
           'label' => 'LLL:EXT:theme_camino/Configuration/Sets/camino/labels.xlf:categories.camino',
           'description' => 'LLL:EXT:theme_camino/Configuration/Sets/camino/labels.xlf:categories.description.camino',
           'icon' => NULL,
           'parent' => NULL,
        )),
      ),
       'typoscript' => 'EXT:theme_camino/Configuration/Sets/camino/',
       'pagets' => 'EXT:theme_camino/Configuration/Sets/camino/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/fluid-styled-content' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/fluid-styled-content',
       'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:label',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.defaultHeaderType',
           'type' => 'int',
           'default' => 2,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.defaultHeaderType',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.defaultHeaderType',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.shortcut.tables',
           'type' => 'string',
           'default' => 'tt_content',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.shortcut.tables',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.shortcut.tables',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.image.lazyLoading',
           'type' => 'string',
           'default' => 'lazy',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.image.lazyLoading',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.image.lazyLoading',
           'readonly' => false,
           'enum' => 
          array (
            'lazy' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.image.lazyLoading.enum.lazy',
            'eager' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.image.lazyLoading.enum.eager',
            'auto' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.image.lazyLoading.enum.auto',
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.image.imageDecoding',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.image.imageDecoding',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.image.imageDecoding',
           'readonly' => false,
           'enum' => 
          array (
            'sync' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.image.imageDecoding.enum.sync',
            'async' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.image.imageDecoding.enum.async',
            'auto' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.image.imageDecoding.enum.auto',
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.maxW',
           'type' => 'int',
           'default' => 600,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.maxW',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.maxW',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.maxWInText',
           'type' => 'int',
           'default' => 300,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.maxWInText',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.maxWInText',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.columnSpacing',
           'type' => 'int',
           'default' => 10,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.columnSpacing',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.columnSpacing',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.rowSpacing',
           'type' => 'int',
           'default' => 10,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.rowSpacing',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.rowSpacing',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.textMargin',
           'type' => 'int',
           'default' => 10,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.textMargin',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.textMargin',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.borderColor',
           'type' => 'color',
           'default' => '#000000',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.borderColor',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.borderColor',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.borderWidth',
           'type' => 'int',
           'default' => 2,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.borderWidth',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.borderWidth',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.borderPadding',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.borderPadding',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.borderPadding',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.linkWrap.width',
           'type' => 'string',
           'default' => '800m',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.linkWrap.width',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.linkWrap.width',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.linkWrap.height',
           'type' => 'string',
           'default' => '600m',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.linkWrap.height',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.linkWrap.height',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.linkWrap.newWindow',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.linkWrap.newWindow',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.linkWrap.newWindow',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.linkWrap.lightboxEnabled',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.linkWrap.lightboxEnabled',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.linkWrap.lightboxEnabled',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.linkWrap.lightboxCssClass',
           'type' => 'string',
           'default' => 'lightbox',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.linkWrap.lightboxCssClass',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.linkWrap.lightboxCssClass',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.linkWrap.lightboxRelAttribute',
           'type' => 'string',
           'default' => 'lightbox[{field:uid}]',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.linkWrap.lightboxRelAttribute',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.linkWrap.lightboxRelAttribute',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.templates.templateRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.templates.templateRootPath',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.templates.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.templates.partialRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.templates.partialRootPath',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.templates.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.templates.layoutRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.templates.layoutRootPath',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.templates.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'fsc',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:categories.fsc',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:categories.description.fsc',
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'fsc.templates',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:categories.fsc.templates',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:categories.description.fsc.templates',
           'icon' => NULL,
           'parent' => 'fsc',
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'fsc.content',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:categories.fsc.content',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:categories.description.fsc.content',
           'icon' => NULL,
           'parent' => 'fsc',
        )),
      ),
       'typoscript' => 'EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/',
       'pagets' => 'EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/fluid-styled-content-css' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/fluid-styled-content-css',
       'label' => 'Fluid Styled Content CSS',
       'dependencies' => 
      array (
        0 => 'typo3/fluid-styled-content',
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:fluid_styled_content/Configuration/Sets/FluidStyledContentCss/',
       'pagets' => 'EXT:fluid_styled_content/Configuration/Sets/FluidStyledContentCss/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'social-dashboard' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'social-dashboard',
       'label' => 'Social Dashboard',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:social_dashboard/Configuration/Sets/SocialDashboard/',
       'pagets' => 'EXT:social_dashboard/Configuration/Sets/SocialDashboard/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/email' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/email',
       'label' => 'TYPO3 Email Configuration',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'email.format',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.format',
           'description' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.description.email.format',
           'readonly' => false,
           'enum' => 
          array (
            '' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.format.enum.',
            'html' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.format.enum.html',
            'plain' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.format.enum.plain',
            'both' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.format.enum.both',
          ),
           'category' => 'email',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'email.templateRootPaths',
           'type' => 'stringlist',
           'default' => 
          array (
            0 => '',
          ),
           'label' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.templateRootPaths',
           'description' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.description.email.templateRootPaths',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'email',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'email.layoutRootPaths',
           'type' => 'stringlist',
           'default' => 
          array (
            0 => '',
          ),
           'label' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.layoutRootPaths',
           'description' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.description.email.layoutRootPaths',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'email',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'email.partialRootPaths',
           'type' => 'stringlist',
           'default' => 
          array (
            0 => '',
          ),
           'label' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.partialRootPaths',
           'description' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.description.email.partialRootPaths',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'email',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'email',
           'label' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:categories.email',
           'description' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:categories.description.email',
           'icon' => NULL,
           'parent' => NULL,
        )),
      ),
       'typoscript' => 'EXT:core/Configuration/Sets/Email/',
       'pagets' => 'EXT:core/Configuration/Sets/Email/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/redirects' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/redirects',
       'label' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:label',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'redirects.autoUpdateSlugs',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.redirects.autoUpdateSlugs',
           'description' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.description.redirects.autoUpdateSlugs',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'redirects',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'redirects.autoCreateRedirects',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.redirects.autoCreateRedirects',
           'description' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.description.redirects.autoCreateRedirects',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'redirects',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'redirects.redirectTTL',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.redirects.redirectTTL',
           'description' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.description.redirects.redirectTTL',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'redirects',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'redirects.httpStatusCode',
           'type' => 'int',
           'default' => 307,
           'label' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.redirects.httpStatusCode',
           'description' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.description.redirects.httpStatusCode',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'redirects',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'redirects',
           'label' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:categories.redirects',
           'description' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:categories.description.redirects',
           'icon' => NULL,
           'parent' => NULL,
        )),
      ),
       'typoscript' => 'EXT:redirects/Configuration/Sets/redirects/',
       'pagets' => 'EXT:redirects/Configuration/Sets/redirects/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
  ),
  'invalidSets' => 
  array (
  ),
);
#