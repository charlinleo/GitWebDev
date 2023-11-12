<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Review;

class ReviewController extends Controller
{
    public function Review(){
        return view('review',
        [
            "pagetitle" => "Reviews",
            "maintitle" => "Review",
            'reviews' => Review::all()
        ]);
    }

}
