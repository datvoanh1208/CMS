<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\Finder\Iterator;

use Spatie\ImageOptimizer\OptimizerChainFactory;


class TestController extends Controller
{
    public function index(){

        $optimizerChain = OptimizerChainFactory::create();

        $pathToImage = 'uploads';
        $pathToOutput = 'output';

        $imageDir = realpath('/uploads');

//        foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($imageDir)) as $file) {
//            $optimizerChain->optimize($file);
//        }

        $optimizerChain->optimize($pathToImage);
//        $optimizerChain->optimize($pathToImage, $pathToOutput);
        dd($optimizerChain);
    }
}
