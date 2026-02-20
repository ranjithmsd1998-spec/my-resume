<?php
    use Illuminate\Support\Facades\Route;
    
    Route::get('/details',function(){
        return response()->JSON([
            ['id','18'],
            ['Name','Ranjithkumar M']
        ]);
    });
?>