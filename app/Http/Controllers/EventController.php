<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $eventos = EventResource::collection(Event::all());
        return ['eventos' => $eventos];
    }
}
