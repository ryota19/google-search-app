<?php
namespace App\Services;
use App\Services\Interface\GoogleSearchServiceInterface;
use Illuminate\Http\Request; 
use GuzzleHttp\Client;

class GoogleSearchService implements GoogleSearchServiceInterface
{
    
        
    public function getResult(Request $request): array
    {
        $URL = config('app.google.url');
        $KEY = config('app.google.key');
        $text = $request->input('search');

        // try{
        //     $client = new Client();
        //     $response = $client->request('GET', $URL, [
        //         'query' => [
        //         'key' => config('app.google.key'),
        //         'cx' => config('app.google.engin_id'),
        //         'q' => $text
        //         ]
        //     ]);
        //     $results = json_decode($response->getBody(), true);
        // } catch(\Exception $e) {
        //     throw $e;
        // }

                
        // return $results;

        return $this->mock();
    }

    private function mock()
    {
        return [
            'items' => [
                0 => [
                    "kind" => "customsearch#result",
                    "title" => "焼肉きんぐ 公式サイト｜焼肉 食べ放題・飲み放題",
                    "htmlTitle" => "<b>焼肉</b>きんぐ 公式サイト｜<b>焼肉</b> 食べ放題・飲み放題",
                    "link" => "https://www.yakiniku-king.jp/",
                    "displayLink" => "www.yakiniku-king.jp",
                    "snippet" => "焼肉きんぐで、お腹いっぱい美味しい焼肉をテーブルバイキングで楽しもう！きんぐカルビを始め、当店自慢の名物商品や旬の味覚、トレンドを取り入れた期間限定商品、 ...",
                    "htmlSnippet" => "<b>焼肉</b>きんぐで、お腹いっぱい美味しい<b>焼肉</b>をテーブルバイキングで楽しもう！きんぐカルビを始め、当店自慢の名物商品や旬の味覚、トレンドを取り入れた期間限定商品、&nbsp;...",
                    "cacheId" => "WgQe_YZPBsYJ",
                    "formattedUrl" => "https://www.yakiniku-king.jp/",
                    "htmlFormattedUrl" => "https://www.yakiniku-king.jp/",
                ]
            ]
        ];
    }
}
