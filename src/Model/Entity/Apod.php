<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Apod Entity
 *
 * @property \Cake\I18n\FrozenDate $date
 * @property string|null $copyright
 * @property string|null $explanation
 * @property string|null $hdurl
 * @property string|null $media_type
 * @property string|null $service_version
 * @property string|null $title
 * @property string|null $url
 */
class Apod extends Entity
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
     protected $_hidden = [];

    protected $_accessible = [
        'date' => true,
        'copyright' => true,
        'explanation' => true,
        'hdurl' => true,
        'media_type' => true,
        'service_version' => true,
        'title' => true,
        'url' => true,
    ];
}
