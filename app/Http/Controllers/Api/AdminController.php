<?php

namespace App\Http\Controllers\Api;

use Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Landing;


class AdminController extends Controller
{
    public function __construct()
    {
        // We set the guard api as default driver
        auth()->setDefaultDriver('admin');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()], Response::HTTP_BAD_REQUEST);
        }

        if (!auth()->attempt($input)) {
            return response(['message' => 'Invalid Credentials'], Response::HTTP_UNAUTHORIZED);
        }

        $admin = Auth::guard('admin')->user();


        // $scopes = rtrim($scopes, ",");
        $accessToken = $admin->createToken('authToken')->accessToken;

        return response(['message' => 'Logged In Successfully', 'admin' => $admin, 'access_token' => $accessToken]);
    }

    public function fetchLanding(Request $request)
    {
        $landing = Landing::first();

        if(!$landing) {
            return response()->json(['message' => 'User not found'], Response::HTTP_BAD_REQUEST);
        }

        return response([ 'landing' => $landing], Response::HTTP_OK);
    }

    public function updateLanding(Request $request)
    {
        $landing = Landing::first();

        if(!$landing) {
            return response()->json(['message' => 'User not found'], Response::HTTP_BAD_REQUEST);
        }

        $input = $request->all();
        $validator = Validator::make($input, [
            'image_description'  => 'required',
            'info_section_headline_line_1'  => 'required',
            'info_section_headline_line_2'  => 'required',
            'info_section_units'  => 'required',
            'info_section_studios_count'  => 'required',
            'info_section_bedroom_1_count'  => 'required',
            'info_section_bedroom_2_count'  => 'required',
            'info_section_bedroom_3_count'  => 'required',
            'info_section_studios_description'  => 'required',
            'info_section_bedroom_1_description'  => 'required',
            'info_section_bedroom_2_description'  => 'required',
            'info_section_bedroom_3_description'  => 'required',
            'info_section_income_limits'  => 'required',
            'info_section_information_hotline'  => 'required',
            'info_section_tty'  => 'required',
            'info_section_units_description'  => 'required',
            'map_section_name'  => 'required',
            'map_section_address'  => 'required',
            'map_section_description'  => 'required',
            'interest_section_headline'  => 'required',
            'interest_section_disclaimer'  => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()], Response::HTTP_BAD_REQUEST);
        }

        $landing->image_description = $input['image_description'];
        $landing->info_section_headline_line_1 = $input['info_section_headline_line_1'];
        $landing->info_section_headline_line_2 = $input['info_section_headline_line_2'];
        $landing->info_section_units = $input['info_section_units'];
        $landing->info_section_studios_count = $input['info_section_studios_count'];
        $landing->info_section_bedroom_1_count = $input['info_section_bedroom_1_count'];
        $landing->info_section_bedroom_2_count = $input['info_section_bedroom_2_count'];
        $landing->info_section_bedroom_3_count = $input['info_section_bedroom_3_count'];
        $landing->info_section_studios_description = $input['info_section_studios_description'];
        $landing->info_section_bedroom_1_description = $input['info_section_bedroom_1_description'];
        $landing->info_section_bedroom_2_description = $input['info_section_bedroom_2_description'];
        $landing->info_section_bedroom_3_description = $input['info_section_bedroom_3_description'];
        $landing->info_section_income_limits = $input['info_section_income_limits'];
        $landing->info_section_information_hotline = $input['info_section_information_hotline'];
        $landing->info_section_tty = $input['info_section_tty'];
        $landing->info_section_units_description = $input['info_section_units_description'];
        $landing->map_section_name = $input['map_section_name'];
        $landing->map_section_address = $input['map_section_address'];
        $landing->map_section_description = $input['map_section_description'];
        $landing->interest_section_headline = $input['interest_section_headline'];
        $landing->interest_section_disclaimer = $input['interest_section_disclaimer'];

        $landing->save();

        return response([ 'message' => 'Landing Page Updated Successfully'], Response::HTTP_OK);
    }

    public function logout()
    {
        auth()->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });

        return response()->json("Logged out Successfully");
    }
}
