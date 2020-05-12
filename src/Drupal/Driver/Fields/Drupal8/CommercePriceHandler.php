<?php

namespace Drupal\Driver\Fields\Drupal8;

use Drupal\commerce_price\Price;

class CommercePriceHandler extends AbstractHandler
{
  /**
   * {@inheritdoc}
   */
  public function expand($values) {
    $return = array();
    foreach ($values as $value) {
      $return[] = Price::fromArray([
        'number' => $value[0],
        'currency_code' => $value[1],
      ]);
    }
    return $return;
  }
}
