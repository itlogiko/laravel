<?php

namespace itLogiko\Laravel\Models;

use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use function config;
use function route;
use function url;

class AdminModel extends UserModel
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'admins';

  /**
   * Create a new Eloquent model instance.
   *
   * @param array $attributes
   * @return void
   */
  public function __construct(array $attributes = [])
  {
    $this->setTable(config('itlogiko.db.prefix') . $this->getTable());
    parent::__construct($attributes);
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
      return url(route(config('itlogiko.route.name') . 'admin.reset-password', [
        'email' => $notifiable->getEmailForPasswordReset(),
        'token' => $token,
      ], false));
    });
    $this->notify($notification);
  }
}
