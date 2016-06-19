<?php

	class langPkgFileUploadModuleRuTranslation extends langPkgBaseModuleRuTranslation {
	
		public function getTranslations() {

			$parent_translations = parent::getTranslations();
			
			$translations = array(
				"Can't create file storage directory" => "Не удалось создать директорию для сохранения файла",
				'File was not uploaded' => 'Файл не загружен',				
				'Uploading error' => 'Произошла ошибка при загрузке файла',
				"Can't find uploaded file" => 'Загруженный файл не найден',
				'Wrong file format: %s' => 'Неверный формат файла: %s',
				'Failed to move uploaded file' => 'Не удалось скопировать загруженный файл',
				'No file ID supplied' => 'Не передан ID файла',
				'File not found' => 'Файл не найден',
				"You can't delete other object files" => 'Нельзя удалить файл, назначенный другому объекту',
				'Max size: %s' => 'Ограничение на размер: %s',
			);		
			
			return array_merge($parent_translations, $translations);
		}
		
	}