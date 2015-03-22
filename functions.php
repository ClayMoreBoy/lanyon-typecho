<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {	
  $authorAvatar = new Typecho_Widget_Helper_Form_Element_Text('authorAvatar', NULL, NULL, _t('Author Avatar'), _t('Please give me the URL of your avatar'));
  $authorLocation = new Typecho_Widget_Helper_Form_Element_Text('authorLocation', NULL, NULL, _t('Author Location'), _t('Please tell me where you are'));
  $anotherSite = new Typecho_Widget_Helper_Form_Element_Text('anotherSite', NULL, NULL, _t('Another Site'), _t('If you have another site, please write it here with http://'));
  $authorBio = new Typecho_Widget_Helper_Form_Element_Text('authorBio', NULL, NULL, _t('Author Bio'), _t('Please say something about yourself...'));

  $form->addInput($authorAvatar);
  $form->addInput($authorLocation);
  $form->addInput($anotherSite);
  $form->addInput($authorBio);
}