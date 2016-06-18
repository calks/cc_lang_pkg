<?php

	class langPkgBaseEntityRuTranslation extends langPkgRuTranslation {
	
		public function getTranslations() {

			
			$parent_translations = parent::getTranslations();
			
			$translations = array(							
				'Parent' => 'Родитель',
				'Type' => 'Тип',
				'Is active' => 'Активен',
				'META Description' => 'META Description',
				'META Keywords' => 'META Keywords',
				'&lt;title&gt; (browser tab heading)' => 'TITLE (заголовок окна броузера)',
				'URL slug' => 'фрагмент URL',
				'Content' => 'Контент'
			
			);
			
			$translations = array_merge($parent_translations, $translations);		
			
			return $translations;
			
			
					
		}
		
	}