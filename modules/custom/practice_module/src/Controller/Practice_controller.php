<?php

/**
 * @file
 * Contains Drupal\practice_module\Controller\Practice_controller;
 */

namespace Drupal\practice_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class Practice_controller extends ControllerBase {

  public function CustomPage() {
    // return t('Hello welcome to page');
    $reutn_markup = t('Hello world');

    $reutn_markup .= '<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>';




    return [
      '#type' => 'markup',
      '#markup' => $reutn_markup,
    ];
  }
}
