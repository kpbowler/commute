<?php

Route::get('api/commute/deploy',
'Kpbowler\Commute\Http\Controllers\CommuteController@deploy')->middleware('auth.basic');