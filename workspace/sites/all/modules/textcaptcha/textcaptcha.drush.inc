<?php

/**
 * @file
 * Text CAPTCHA drush commands
 */

/**
 * Implements hook_drush_command().
 *
 * See `drush topic docs-commands` for a list of recognized keys.
 *
 * @return array
 *   An associative array describing your command(s).
 */
function textcaptcha_drush_command() {
  $items = array();

  $items['textcaptcha-fetch'] = array(
    'description' => "Fetch questions from the Text CAPTCHA service",
    'examples' => array(
      'drush textcaptcha-fetch' => 'Fetch the default number of questions.',
    ),
  );

  return $items;
}

/**
 * Drush command callback.
 *
 * @see drush_invoke()
 * @see drush.api.php
 */
function drush_textcaptcha_fetch() {
  textcaptcha_get_new_challenges();
}
