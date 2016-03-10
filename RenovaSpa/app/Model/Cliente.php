<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 * @property Pais $Pais
 * @property Idioma $Idioma
 * @property Hotel $Hotel
 * @property Agencia $Agencia
 * @property CircustanciasMedica $CircustanciasMedica
 * @property Sesion $Sesion
 */
class Cliente extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'pais_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pais' => array(
			'className' => 'Pais',
			'foreignKey' => 'pais_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
		),
		'Idioma' => array(
			'className' => 'Idioma',
			'foreignKey' => 'idioma_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
		),
		'Hotele' => array(
			'className' => 'Hotele',
			'foreignKey' => 'hotel_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
		),
		'Agencia' => array(
			'className' => 'Agencia',
			'foreignKey' => 'agencia_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
		),
		'CircustanciasMedica' => array(
			'className' => 'CircustanciasMedica',
			'foreignKey' => 'circustancias_medica_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
		),
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Sesion' => array(
			'className' => 'Sesion',
			'foreignKey' => 'cliente_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => '',
		),
	);

}
