<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Widget;
Use DB;
use App\Queries\GridQueries\GridQuery;
use App\Queries\GridQueries\WidgetQuery;

class ApiController extends Controller
{
  public function widgetData(Request $request)
  {
    return GridQuery::sendData($request, new WidgetQuery);
  }
}
