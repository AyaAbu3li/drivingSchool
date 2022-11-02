<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class signsAndSignals extends Model
{
    //use HasFactory;
    public $table='signs_and_signals';
    public $primaryKey='id';
    public $incrementing=true;
    public $timestamps=true;
    // protected $table = 'signs_and_signals';
    
}