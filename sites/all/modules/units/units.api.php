<?php

/**
 * @file
 * Documentation for Units module.
 */

/**
 * Convert value measured in one unit into value measured in another unit.
 *
 * @param float $value
 *   Value to be converted
 * @param string $from
 *   Units in which $value is measured. Supply machine-readable name of the unit
 * @param string $to
 *   Units in which $value needs to be converted. Supply machine-readable name
 *   of the unit
 * @param string $measure
 *   Optional. Measure of value to be converted, normally the measure is looked
 *   up using the provided $form and $to, but in case the same unit measure is
 *   used in different measures, this parameter may narrow down unit measures
 *   to necessary scope of the supplied measure.
 *
 * @return float
 *   Value $value, converted from $from units into $to units
 */
function units_convert_random($value, $from, $to, $measure = NULL) {
  // Normally we would load $from and $to and do some manipulations with it.
  // But in our case the result is just a random number.
  return rand();
}
