<?php

namespace Drupal\drupalmoduleupgrader\Plugin\DMU\Converter;

use Drupal\drupalmoduleupgrader\ConverterBase;
use Drupal\drupalmoduleupgrader\TargetInterface;

/**
 * @Converter(
 *  id = "hook_field_attach_create_bundle",
 *  description = @Translation("Renames hook_field_attach_create_bundle()."),
 *  hook = "hook_field_attach_create_bundle"
 * )
 */
class HookFieldAttachCreateBundle extends ConverterBase {

  /**
   * {@inheritdoc}
   */
  public function convert(TargetInterface $target) {
    $hook = $target
      ->getIndexer('function')
      ->get($this->pluginDefinition['hook'])
      ->setName($target->id() . '_entity_bundle_create');

    $target->save($hook);
  }

}
