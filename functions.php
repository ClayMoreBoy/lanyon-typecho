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
  
  $linksSupport = new Typecho_Widget_Helper_Form_Element_Radio('linksSupport',array(0=>_t('Off'),1=>_t('On')),0,_t('Links Plugin Support'),_t('Only support the plugin by Henny'));
  $themeStyle = new Typecho_Widget_Helper_Form_Element_Select('themeStyle',array(0=>_t('Default'),'08'=>_t('08'),'09'=>_t('09'),'0a'=>_t('0a'),'0b'=>_t('0b'),'0c'=>_t('0c'),'0d'=>_t('0d'),'0e'=>_t('0e'),'0f'=>_t('0f')),0,_t('Theme Color Style<br /><div><img src="https://camo.githubusercontent.com/31722ca812424795bb0c9a6ea99ccdd5fa171c24/68747470733a2f2f662e636c6f75642e6769746875622e636f6d2f6173736574732f39383638312f313831373034342f65356230656330362d366636382d313165332d383364372d6163643139343237393761312e706e67" style="max-width:100%;" /></div>'));
  $themelayout = new Typecho_Widget_Helper_Form_Element_Checkbox('themelayout', 
    array(1 => _t('Reverse layout'),
    2 => _t('Sidebar overlay instead of push'), 3 => _t('Sidebar open on page load')),
    array(1, 2, 3), _t('Page Layout'));
  
  $form->addInput($linksSupport);
  $form->addInput($themeStyle);
  $form->addInput($themelayout);
}
