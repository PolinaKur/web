<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Pages extends Model
	{
		public function getById($id)
		{
			return $this->findOne("SELECT * FROM pages WHERE id=$id");
		}
		
		public function getAll()
		{
			return $this->findMany("SELECT id, title, text FROM pages");
		}
	}
?>
