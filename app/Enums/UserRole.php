<?php
namespace App\Enums;


enum UserRole:string{
    case Admin = 'admin';
    case Writer = 'writer';
    case Deactivate = 'deactivate';
}