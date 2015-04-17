<?php 
//defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_Add_table2 extends CI_Migration {

		public function up()
		{
			
			
			 $this->dbforge->add_field(array(
					'id' => array('type'=>'INT', 'constraint'=> 5, 'unsigned' => TRUE, 'auto_increment' => TRUE),
					'origen' => array('type'=> 'VARCHAR','constrain'=>'100',),
					'destino' => array('type'=> 'VARCHAR','constrain'=>'100',),
					'latitud' => array('type'=> 'VARCHAR','constrain'=>'20',),
					'longitud' => array('type'=> 'VARCHAR','constrain'=>'100',)
				));
			 $this->dbforge->add_key('id', TRUE);
             $this->dbforge->create_table('paquete');
			}

        public function down()
        {
               
        }
}
?>