<?php

	class langPkgBaseModuleRuTranslation extends langPkgRuTranslation {
	
		public function getTranslations() {
			
			$parent_translations = parent::getTranslations();
			
			$translations = array(
				
			);
			
			$translations = array_merge($parent_translations, $translations);		
			
			return $translations;
			
			
					
		}
		
	}