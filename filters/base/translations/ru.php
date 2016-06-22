<?php

	class langPkgBaseFilterRuTranslation extends langPkgRuTranslation {
	
		public function getTranslations() {
			
			$parent_translations = parent::getTranslations();
			
			$translations = array(
				'Name or Email' => 'Имя или Email',
				'Role' => 'Роль'
			);
			
			$translations = array_merge($parent_translations, $translations);		
			
			return $translations;
		}
		
		
	}