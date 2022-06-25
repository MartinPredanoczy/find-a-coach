<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoachRequest;
use App\Http\Resources\CoachResource;
use App\Models\Coach;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return CoachResource::collection(Coach::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return CoachResource
     */
    public function store(Request $request)
    {
        $coach = Coach::create($request->validated());
        return new CoachResource($coach);
    }

    /**
     * Display the specified resource.
     *
     * @param Coach $coach
     * @return CoachResource
     */
    public function show(Coach $coach)
    {
        return new CoachResource($coach);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Coach $coach
     * @return CoachResource
     */
    public function update(CoachRequest $request, Coach $coach)
    {
        $coach->update($request->validated());
        return new CoachResource($coach);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Coach $coach
     * @return Response
     */
    public function destroy(Coach $coach)
    {
        $coach->delete();

        return response()->noContent();
    }
}
