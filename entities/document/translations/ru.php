<?php

	class langPkgDocumentEntityRuTranslation extends langPkgBaseEntityRuTranslation {
	
		public function getTranslations() { 
			
			$parent_translations = parent::getTranslations();
			
			$translations = array(
				'folder' => 'раздел',
				'page' => 'страница',				
				'Menu and breadcrumbs title' => 'Название в меню и в breadcrumbs',
				'Open in new window' => 'Открывать в новом окне',
				'Display in menu' => 'Отображать в меню',
				'Link type' => 'Тип страницы',
				'top menu' => 'верхнее меню',
				'footer menu' => 'меню в подвале',
				'page itself' => 'сама страница',
				'page alias' => 'ссылка на другую страницу',
				'Link' => 'Ссылка на существующую страницу',
				'Menu' => 'Меню',
			);
			
			$translations = array_merge($parent_translations, $translations);		
			
			return $translations;
		}
		
	}