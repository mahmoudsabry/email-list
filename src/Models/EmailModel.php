<?php

namespace MS\EmailList\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailModel extends Model
{
    use HasFactory;

    protected $table = "ms_email_list";

    protected $fillable = ['email'];
}
