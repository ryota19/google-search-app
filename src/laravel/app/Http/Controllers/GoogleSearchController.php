<?php  
namespace App\Http\Controllers;  

use App\Http\Controllers\Controller;
use App\Services\Interface\GoogleSearchServiceInterface;
use Illuminate\Http\Request;
use Illuminate\View\View; 

class GoogleSearchController extends Controller
{
    public function __construct(
        private GoogleSearchServiceInterface $googleSearchService,
    ){
    }

    public function getResult(Request $request): View
    {
        try {
            $results = $this->googleSearchService->getResult($request);
        } catch (\Exception $e) {
            $errorMessage = 'しばらく時間を置いてから検索を行ってください';
            return view('exception/error-modal', ['error' => $errorMessage]);
        }

        return view('google-search', compact('results'));
    }
}