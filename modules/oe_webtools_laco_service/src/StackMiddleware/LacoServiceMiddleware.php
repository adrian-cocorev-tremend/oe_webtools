<?php

declare(strict_types = 1);

namespace Drupal\oe_webtools_laco_service\StackMiddleware;

use Symfony\Component\HttpFoundation\Request;

/**
 * Laco service middleware for Drupal 9.
 *
 * Looks for Laco service requests and sets an attribute on the request.
 */
class LacoServiceMiddleware extends LacoServiceMiddlewareBase {

  /**
   * {@inheritdoc}
   */
  public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = TRUE) {
    return $this->doHandle($request, $type, $catch);
  }

}
