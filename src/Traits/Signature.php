<?php

namespace Uzzaircode\Ipay88\Traits;

use Illuminate\Http\Request;

trait Signature
{

    

    public function buildRequestSignature(Request $request)
    {

        $signature = implode([
            $this->merchantKey,
            $this->merchantCode,
            $request->RefNo,
            preg_replace('/[\.\,]/', '', $request->Amount),
            $request->Currency,
        ]);

        return $signature;
    }

    public function generateRequestSignature(Request $request)
    {

        return hash('sha256', $this->buildRequestSignature($request));
    }
}
