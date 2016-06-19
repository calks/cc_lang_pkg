<?php

	class langPkgBaseModuleRuTranslation extends langPkgRuTranslation {
	
		public function getTranslations() {
			
			$parent_translations = parent::getTranslations();
			
			$translations = array(
				'Object saved successfully' => 'Объект сохранен',
				'Order changed' => 'Порядок изменен',
				'Settins saved successfully' => 'Настройки сохранены',
				'delete' => 'удалить',
				'Upload' => 'Загрузить'				
			);
			
			$translations = array_merge($parent_translations, $translations);		
			
			return $translations;
			
			
					
		}
		
	}