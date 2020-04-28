<?php

if (COCKPIT_API_REQUEST) {
  $app->on('cockpit.rest.init', function($routes) {
    $routes['linkPreview'] = 'CockpitLinkPreview\\Controller\\RestApi';
  });
}