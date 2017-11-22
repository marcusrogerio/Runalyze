<?php

namespace Runalyze\Bundle\CoreBundle\Component\Configuration\Category;

class ActivityForm extends AbstractCategory
{
    /**
     * @return array
     */
    public function getDefaultVariables()
    {
        return [
            'TRAINING_CREATE_MODE' => 'upload',
            'TRAINING_DO_ELEVATION' => 'true',
            'TRAINING_LOAD_WEATHER' => 'true',
            'PLZ' => '',
            'COMPUTE_KCAL' => 'true',
            'COMPUTE_POWER' => 'true',
            'TRAINING_SORT_SPORTS' => 'id-asc',
            'TRAINING_SORT_TYPES' => 'id-asc',
            'TRAINING_SORT_SHOES' => 'id-asc',
            'GARMIN_IGNORE_IDS' => '',
            'DETECT_PAUSES' => 'true',
            'FORMULAR_SHOW_SPORT' => 'true',
            'FORMULAR_SHOW_GENERAL' => 'true',
            'FORMULAR_SHOW_DISTANCE' => 'true',
            'FORMULAR_SHOW_SPLITS' => 'true',
            'FORMULAR_SHOW_WEATHER' => 'true',
            'FORMULAR_SHOW_OTHER' => 'true',
            'FORMULAR_SHOW_NOTES' => 'false',
            'FORMULAR_SHOW_PUBLIC' => 'false',
            'FORMULAR_SHOW_ELEVATION' => 'false',
            'FORMULAR_SHOW_GPS' => 'false',
        ];
    }

    /**
     * @return bool
     */
    public function isAutomaticElevationCorrectionActivated()
    {
        return 'true' === $this->Variables['TRAINING_DO_ELEVATION'];
    }

    /**
     * @return bool
     */
    public function isAutomaticWeatherForecastActivated()
    {
        return 'true' === $this->Variables['TRAINING_LOAD_WEATHER'];
    }

    /**
     * @return string
     */
    public function getDefaultLocationForWeatherForecast()
    {
        return $this->Variables['PLZ'];
    }

    /**
     * @return bool
     */
    public function isComputingEnergyActivated()
    {
        return 'true' === $this->Variables['COMPUTE_KCAL'];
    }

    /**
     * @return bool
     */
    public function isComputingPowerActivated()
    {
        return 'true' === $this->Variables['COMPUTE_POWER'];
    }

    /**
     * @return bool
     */
    public function isAutomaticPauseDetectionActivated()
    {
        return 'true' === $this->Variables['DETECT_PAUSES'];
    }

    /**
     * @return string
     */
    protected function getLegacyCategoryName()
    {
        return \Runalyze\Configuration\Category\ActivityForm::class;
    }
}
