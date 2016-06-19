<?php

	class langPkgLoginModuleRuTranslation extends langPkgBaseModuleRuTranslation {
	
		public function getTranslations() {
			
			$parent_translations = parent::getTranslations();
			
			$translations = array(
				'Management panel login' => 'Вход в панель управления',
				'Login' => 'Логин',				
				'Password' => 'Пароль',
				'Enter' => 'Войти',
				'Wrong login and/or password' => 'Неправильный логин и/или пароль',
			);

			return array_merge($parent_translations, $translations);
		}
		
	}