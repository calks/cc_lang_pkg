<?php

	class langPkgBaseFormFieldRuTranslation extends langPkgRuTranslation {
	
		public function getTranslations() {
			
			$parent_translations = parent::getTranslations();
			
			$translations = array(
				'from' => 'от',
				'to' => 'до',
				' at ' => ' в '
			);
			
			$translations = array_merge($parent_translations, $translations);		
			
			return $translations;
		}
		
		
	}