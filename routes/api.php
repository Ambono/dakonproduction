<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Message;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\OrderResource;
use App\Http\Resources\MessageResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//** orders **//
Route::get("/order", function(){
    $order = Order::all();
    return OrderResource::collection($order);
});

Route::post("/order", function(Request $request){
   return Order::create([
       'maladie' => $request ->maladie,
       'produit' => $request ->produit,
       'quantite' => $request ->quantite,
       'complete' => $request ->complete,
       'numeroDeCommande' => $request ->numeroDeCommande
   ]);
});

Route::delete("/order/{orderId}", function($orderId){
   DB::table('orders')->where('orderId', $orderId)->delete();
 return 204;
});
 

//** Message **//
Route::get("/message", function(){
    $message = Message::all();
    return MessageResource::collection($message);
});

Route::post("/message", function(Request $request){
   return Message::create([
       'titre' => $request ->title,
       'prenom' => $request ->taskId,
       'nom' => $request ->waiting,
       'numeroPhone' => $request ->title,
       'lieuDeResidence' => $request ->taskId
        ]);
});

Route::delete("/message/{messageId}", function($messageId){
   DB::table('messages')->where('messageId', $messageId)->delete();
 return 204;
});
 