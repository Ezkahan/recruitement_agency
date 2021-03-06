<?php

/**
 * @apiGroup           Location
 * @apiName            getAllLocations
 *
 * @api                {GET} /v1/location Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\AppSection\Location\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('location', [Controller::class, 'getAllLocations'])
  ->name('api_location_get_all_locations')
  ->middleware(['auth:api']);
