<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncryptionController extends Controller
{
    public function encrypt(){
      $encrypted = Crypt::encryptString('Hello, this is a test message');
      return $encrypted;
    }

    public function decrypt(){
      $decrypted = Crypt::decryptString('eyJpdiI6ImNjek5XNzFwTFovcTRvVFhVeVdwQXc9PSIsInZhbHVlIjoiTWtuRldHTWt6eEp3bXdlVTVyREFpWjNpa0JUeXBMN3hOVUo3RGxOVkxOST0iLCJtYWMiOiIyMjlhMWUyZGM3OTEzYjMzNmE4M2I3MTM3MzU0MzQ0N2IxYTNmY2FjYjUyODY0Yjk5OTUwMjFlODA4M2Q2MjEwIn0=');
      return $decrypted;
    }
}
