<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Patient Entity
 *
 * @property int $id
 * @property string $patient_name
 * @property string $phone
 * @property string $age
 * @property string $address
 * @property string $city
 * @property string $zip_code
 * @property int $doctor_id
 * @property int $carrier_id
 * @property bool|null $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Doctor $doctor
 * @property \App\Model\Entity\Carrier $carrier
 */
class Patient extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'patient_name' => true,
        'phone' => true,
        'age' => true,
        'address' => true,
        'city' => true,
        'zip_code' => true,
        'doctor_id' => true,
        'carrier_id' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'doctor' => true,
        'carrier' => true,
    ];
}
