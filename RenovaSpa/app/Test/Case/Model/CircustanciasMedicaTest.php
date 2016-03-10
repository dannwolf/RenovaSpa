<?php
App::uses('CircustanciasMedica', 'Model');

/**
 * CircustanciasMedica Test Case
 */
class CircustanciasMedicaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.circustancias_medica',
		'app.cliente',
		'app.pais',
		'app.idioma',
		'app.hotel',
		'app.agencia',
		'app.sesion',
		'app.opinion',
		'app.terapeuta',
		'app.tratamiento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CircustanciasMedica = ClassRegistry::init('CircustanciasMedica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CircustanciasMedica);

		parent::tearDown();
	}

}
