<?php

	class langPkgUserEntityRuTranslation extends langPkgBaseEntityRuTranslation {
	
		public function getTranslations() { 
			
			$parent_translations = parent::getTranslations();
			
			$translations = array(
				'Name' => 'ФИО',
				'First Name' => 'Имя',
				'Last Name' => 'Фамилия',				
				'Roles' => 'Роли',
				'Login' => 'Логин',
				'Password' => 'Пароль',
				'New password' => 'Новый пароль'
			);
			
			$translations = array_merge($parent_translations, $translations);		
			
			return $translations;
		}
		
	}