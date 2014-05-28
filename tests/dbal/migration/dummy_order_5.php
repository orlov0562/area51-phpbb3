<?php
/**
*
* @package testing
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

class phpbb_dbal_migration_dummy_order_5 extends \phpbb\db\migration\migration
{
	function update_schema()
	{
		return array(
			'add_columns'	=> array(
				$this->table_prefix . 'column_order_test1'	=> array(
					'foobar8'	=> array('BOOL', 0, 'after' => 'foobar3'),
					'foobar9'	=> array('BOOL', 0, 'after' => 'foobar3'),
				),
			),
		);
	}
}
