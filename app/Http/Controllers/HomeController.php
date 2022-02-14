<?php

namespace App\Http\Controllers;

use stdClass;
use Goutte\Client;
use Acme\Client as abc;
use Illuminate\Http\Request;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client as GuzzleHttpClient;
use Symfony\Component\BrowserKit\CookieJar;


class HomeController extends Controller
{

    public function index()
    {
        $client = new Client();
        $crawler = $client->request("GET", "http://tsetmc.com/Loader.aspx?ParTree=15");

        $a = $crawler->filter(".green .table1");
        echo '<pre>';
        print_r($a->getNode(2));
        echo '</pre>';

        // $filter = $client->getCrawler()->filter("div");

/*
        $filter->each(function($e){
            dump($e);
        }); */

    }

    public function testCookie()
    {
        // create cookies and add to cookie jar
        $cookie = new Cookie('flavor', 'chocolate', strtotime('+1 day'));
        $cookieJar = new CookieJar();
        $cookieJar->set($cookie);

        // create a client and set the cookies
        $client = new Client(null, null, $cookieJar);
        $crawler = $client->request("GET", "http://127.0.0.1/oop/");

        dump($crawler->getNode(0));
    }

    public function cookieplace()
    {
        echo 5;
    }

}
