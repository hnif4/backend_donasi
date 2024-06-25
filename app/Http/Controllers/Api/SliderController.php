<?php
namespace App\Http\Controllers\Api;
use App\Models\Slider;
use App\Http\Controllers\Controller;
class SliderController extends Controller
{
 /**
 * index
 *
 * @return void
 */
 public function index()
 {
 //get data sliders
 $sliders = Slider::latest()->get();
 //return with response JSON
 return response()->json([
 'success' => true,
 'message' => 'List Data Sliders',
 'data' => $sliders,
 ], 200);
 }
}