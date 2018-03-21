<?php

namespace Drupal\practice_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'BasicDemoBlock' block.
 *
 * @Block(
 *  id = "basic_demo_block",
 *  admin_label = @Translation("Basic demo block"),
 * )
 */
class BasicDemoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
            'hobbies' => Array,
          ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['hobbies'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Hobbies'),
      '#options' => ['chess' => $this->t('chess')],
      '#default_value' => $this->configuration['hobbies'],
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['hobbies'] = $form_state->getValue('hobbies');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['basic_demo_block_hobbies']['#markup'] = '<p>' . $this->configuration['hobbies'] . '</p>';

    return $build;
  }

}
