<?php
namespace App\Controllers;
use Delight\Auth\Auth;
/*Не реализован*/
 class UserRoule
 {
   protected $status;
   protected $user;
   
   public function __construct(Auth $auth)
   {
       $this->user = $auth;
   }
  
   public function getSatus()
   {
//     $role = $this->user->getRoles();
//    var_dump($role);
   }
 }