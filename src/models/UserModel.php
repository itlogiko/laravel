<?php

namespace itLogiko\Laravel\Models;

use App\User as Model;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Database\Eloquent\SoftDeletes;
use function bcrypt;
use function config;
use function route;
use function url;

class UserModel extends Model
{
  use SoftDeletes;

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'email',
    'name',
    'password',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'users';

  /**
   * Route notifications for the mail channel.
   *
   * @param  \Illuminate\Notifications\Notification  $notification
   * @return array|string
   */
  public function routeNotificationForMail($notification)
  {
    return [$this->email => $this->name];
  }

  /**
   * Add mutator for password attribute
   */
  public function setPasswordAttribute($value)
  {
    $this->attributes['password'] = bcrypt($value);
  }

  /**
   * Send the password reset notification.
   *
   * @param  string  $token
   * @return void
   */
  public function sendPasswordResetNotification($token)
  {
    $notification = new ResetPasswordNotification($token);
    $notification::createUrlUsing(function($notifiable, $token) {
      return url(route(config('itlogiko.route.name') . 'reset-password', [
        'email' => $notifiable->getEmailForPasswordReset(),
        'token' => $token,
      ], false));
    });
    $this->notify($notification);
  }
}
