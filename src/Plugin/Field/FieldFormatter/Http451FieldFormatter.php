<?php

namespace Drupal\http451\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Implements a field formatter for HTTP451.
 *
 * @FieldFormatter(
 *   id = "http451_formatter",
 *   label = @Translation("HTTP451 Formatter"),
 *   field_types = {
 *     "http451_fieldtype",
 *   }
 * )
 */
class Http451FieldFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];
    $summary[] = $this->t('Formatter for HTTP451 Widget');
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];

    return $elements;
  }

}
