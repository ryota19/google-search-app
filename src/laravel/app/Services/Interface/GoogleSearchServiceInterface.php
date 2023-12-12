<?php
namespace App\Services\Interface;
use Illuminate\Http\Request; 

interface GoogleSearchServiceInterface 
{
    public function getResult(Request $request): array;
}