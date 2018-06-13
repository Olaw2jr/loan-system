<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signed extends Model
{
  // ? Was told to add this here to fix this table having s at the end like "signeds"
  // // Hope it works
  protected $table = "signed";

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id', 'signed'
  ];

  /**
   * Get the user that is signed.
   */
  public function user()
  {
    return $this->belongsTo(User::class, 'user_id')
      ->as('signed');
  }
}
