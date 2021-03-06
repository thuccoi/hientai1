<?php
/**
 * RegisterFixture
 *
 */
class RegisterFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'division' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'lastName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'lastName_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstName_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'post' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'zip1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'zip2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'address1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'address2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'tel_num_a' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 7, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'tel_num_e' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'tel_num_n' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'fax_num_a' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'fax_num_e' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'fax_num_n' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'mail' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 129, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'mail_cf' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 129, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'siteurl' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'gyoshu' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'gyoshu_other' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'jigyou' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'personalInfo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'kubun' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'uriage' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'kibo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank01' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank02' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank03' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank04' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank05' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'firstank06' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank07' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank08' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'firstank09' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank10' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank11' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'firstank12' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank13' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank14' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'firstank15' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank16' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'firstank17' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank18' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'firstank19' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank20' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'firstank21' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank22' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'firstank23' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank24' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'firstank25' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank26' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'firstank27' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank28' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 128, 'unsigned' => false),
		'firstank29' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank30' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'firstank31' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'firstank32' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_name' => 'Lorem ipsum dolor sit amet',
			'division' => 'Lorem ipsum dolor sit amet',
			'lastName' => 'Lorem ipsum dolor sit amet',
			'firstName' => 'Lorem ipsum dolor sit amet',
			'lastName_kana' => 'Lorem ipsum dolor sit amet',
			'firstName_kana' => 'Lorem ipsum dolor sit amet',
			'post' => 'Lorem ipsum dolor sit amet',
			'zip1' => 'Lore',
			'zip2' => 'Lore',
			'address1' => 'Lorem ipsum dolor sit amet',
			'address2' => 'Lorem ipsum dolor sit amet',
			'tel_num_a' => 'Lorem',
			'tel_num_e' => 'Lor',
			'tel_num_n' => 'Lore',
			'fax_num_a' => 'Lorem',
			'fax_num_e' => 'Lor',
			'fax_num_n' => 'Lore',
			'mail' => 'Lorem ipsum dolor sit amet',
			'mail_cf' => 'Lorem ipsum dolor sit amet',
			'siteurl' => 'Lorem ipsum dolor sit amet',
			'gyoshu' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'gyoshu_other' => 'Lorem ipsum dolor sit amet',
			'jigyou' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'personalInfo' => 1,
			'kubun' => 'Lorem ipsum dolor sit amet',
			'uriage' => 'Lorem ipsum dolor sit amet',
			'kibo' => 'Lorem ipsum dolor sit amet',
			'firstank01' => 'Lorem ipsum dolor sit amet',
			'firstank02' => 'Lorem ipsum dolor sit amet',
			'firstank03' => 'Lorem ipsum dolor sit amet',
			'firstank04' => 'Lorem ipsum dolor sit amet',
			'firstank05' => 1,
			'firstank06' => 'Lorem ipsum dolor sit amet',
			'firstank07' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'firstank08' => 1,
			'firstank09' => 'Lorem ipsum dolor sit amet',
			'firstank10' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'firstank11' => 1,
			'firstank12' => 'Lorem ipsum dolor sit amet',
			'firstank13' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'firstank14' => 1,
			'firstank15' => 'Lorem ipsum dolor sit amet',
			'firstank16' => 1,
			'firstank17' => 'Lorem ipsum dolor sit amet',
			'firstank18' => 1,
			'firstank19' => 'Lorem ipsum dolor sit amet',
			'firstank20' => 1,
			'firstank21' => 'Lorem ipsum dolor sit amet',
			'firstank22' => 1,
			'firstank23' => 'Lorem ipsum dolor sit amet',
			'firstank24' => 1,
			'firstank25' => 'Lorem ipsum dolor sit amet',
			'firstank26' => 1,
			'firstank27' => 'Lorem ipsum dolor sit amet',
			'firstank28' => 1,
			'firstank29' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'firstank30' => 1,
			'firstank31' => 'Lorem ipsum dolor sit amet',
			'firstank32' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
