<?php

declare(strict_types=1);

/**
 * @file
 * Theme settings form for Systemseed Tailwind Base theme theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function tailwind_base_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['tailwind_base'] = [
    '#type' => 'details',
    '#title' => t('Systemseed Tailwind Base theme'),
    '#open' => TRUE,
  ];

  $form['tailwind_base']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

}
