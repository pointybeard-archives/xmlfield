<?php
	
	class extension_XMLField extends Extension {

		public function about() {
			return array(
				'name'			=> 'Field: XML',
				'version'		=> '1.0',
				'release-date'	=> '2009-04-29',
				'author'		=> array(
					'name'			=> 'Alistair Kearney',
					'website'		=> 'http://www.symphony21.com',
					'email'			=> 'alistair@symphony21.com'
				),
				'description'	=> 'Textarea field that only accepts valid XML'
			);
		}
		
		public function uninstall() {
			$this->_Parent->Database->query("DROP TABLE `tbl_fields_xml`");
		}
		
		public function install() {
			return $this->_Parent->Database->query("CREATE TABLE IF NOT EXISTS `tbl_fields_xml` (
			  `id` int(11) unsigned NOT NULL auto_increment,
			  `field_id` int(11) unsigned NOT NULL,
			  `size` int(3) unsigned NOT NULL,
			  PRIMARY KEY  (`id`),
			  KEY `field_id` (`field_id`)
			) TYPE=MyISAM;"
			);
		}

	}
