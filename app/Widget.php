<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Widget extends SuperModel
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
   protected $fillable = ['name', 'slug', 'user_id', 'image_weight'];

   /**
   * Get the user that owns the widget.
   */
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
