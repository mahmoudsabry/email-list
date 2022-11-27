<?php

Route::get('/', [MS\EmailList\Http\Controllers\EmailListControlers::class, 'index']);