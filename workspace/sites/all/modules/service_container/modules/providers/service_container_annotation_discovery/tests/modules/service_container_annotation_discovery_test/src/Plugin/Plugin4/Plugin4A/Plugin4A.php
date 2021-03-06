<?php

namespace Drupal\service_container_annotation_discovery_test\Plugin\Plugin4\Plugin4A;

use Drupal\Component\Annotation\PluginID;
use Drupal\Component\Plugin\PluginBase;
use Drupal\service_container\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class Plugin4A
 *
 * @Plugin(
 *   id = "Plugin4A",
 *   label = "Label Plugin4A",
 *   arguments = {
 *    "@messenger"
 *   }
 * )
 *
 * @package Drupal\service_container_annotation_discovery_test\Plugin\Plugin4\Plugin4A
 */
class Plugin4A extends PluginBase {

  /**
   * @var \Drupal\service_container\Messenger\MessengerInterface
   */
  protected $messenger;

  public function __construct($configuration, $plugin_id, $plugin_definition, MessengerInterface $messenger) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->messenger = $messenger;
  }

  public function getMessenger() {
    return $this->messenger;
  }
}
