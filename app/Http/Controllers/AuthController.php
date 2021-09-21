<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119110,
        'name' => 'Mohamad Zaki Al Fatih',
        'gender' => 'Male',
        'phone' => '081229377132',
        'class' => 'XII RPL 4'];
  }
}