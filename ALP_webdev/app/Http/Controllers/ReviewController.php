<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('review.index', [
            "pagetitle" => 'Reviews',
            "maintitle" => 'Reviews',
            'review' => Review::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all(); // Retrieve all users for the create form
        $currentUserId = Auth::id(); // Get the currently logged-in user's ID

        return view('review.create', [
            "pagetitle" => 'Add Review',
            "maintitle" => 'Add Review ',
            'user' => $user,
            'currentUserId' => $currentUserId, // Pass the ID to the view
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'rating' => 'required|string',
            'comment' => 'required|string',
        ]);

        Review::create($validated);

        // $user_id = (int) $request->input('user_id');

        // // Create the review
        // Review::create([
        //     'user_id' => $user_id,
        //     'rating' => $request->input('rating'),
        //     'comment' => $request->input('comment'),
        // ]);

        return redirect()->route('review.index')->with('success', 'Review created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {

            $review->delete();

            return redirect()->route('review.index')->with('success', 'Product deleted successfully');
        } else {
            return redirect()->route('review.index')->with('error', 'Unauthorized access');
        }
    }
}
