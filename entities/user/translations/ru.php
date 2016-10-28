<?php

	class langPkgUserEntityRuTranslation extends langPkgBaseEntityRuTranslation {
	
		public function getTranslations() { 
			
			$parent_translations = parent::getTranslations();
			
			$translations = array(
				'Name' => 'ФИО',
				'First Name' => 'Имя',
				'Last Name' => 'Фамилия',				
				'Roles' => 'Роли',
				'Login' => 'Логин'
			);
			
			$translations = array_merge($parent_translations, $translations);		
			
			return $translations;
		}
		
	}