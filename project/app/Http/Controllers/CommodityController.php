<?php

namespace App\Http\Controllers;

use App\Commodity;
use Illuminate\Http\Request;

class CommodityController extends Controller
{
    /**
     * Show all the commodities.
     *
     * @return Response
     */
    public function showAllCommodity()
    {
        $commodity = Commodity::with('family')
            ->with('segment')
            ->with('classification')
            ->get();
        return response()->json($commodity);
    }


    /**
     * Show the commodity for the given Id.
     *
     * @param  int  $commodity_id
     * @return Response
     */
    public function showOneCommodity($commodity_id)
    {
        if(!Commodity::find($commodity_id)) {
            return response()->json(['error' => 'no record'], 204);
        }

        $commodity = Commodity::find($commodity_id)
            ->with('family')
            ->with('segment')
            ->with('classification')
            ->first();

        return response()->json($commodity);
    }


    /**
     * Update the commodity for the given Id.
     *
     * @param  Request  $request
     * @param  int  $commodity_id
     * @return Response
     */
    public function updateCommodity(Request $request, $commodity_id)
    {
        $commodity = Commodity::where('id', $commodity_id)
            ->update(array_filter($request->all()));

        if(!$commodity) {
            return response()->json(['error' => 'no update'], 304);
        }

        return response()->json($commodity, 200);
    }


    /**
     * Create the commodity.
     *
     * @param  Request  $request
     * @param  int  $commodity_id
     * @return Response
     */
    public function createCommodity(Request $request)
    {
        $commodity = Commodity::create($request->all());

        if(!$commodity) {
            return response()->json(['error' => 'no update'], 304);
        }

        return response()->json($commodity, 201);
    }


    /**
     * Remove the commodity for the given Id.
     *
     * @param  int  $commodity_id
     * @return Response
     */
    public function removeCommodity($commodity_id)
    {
        Commodity::findOrFail($commodity_id)->delete();

        return response(`Deleted ${commodity_id} successfully`, 200);
    }
}
