<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;

class ReviewsController extends Controller
{
    public function create()
    {
        return view('reviewForm');
    }

    public function store(Request $request)
    {
        $review = new Reviews();
        $review->IdAgenda = $request->IdAgenda;
        $review->Rating = $request->Rating;
        $review->Comment = $request->Comment;
        $review->DateReview = $request->DateReview;
        $review->save();

        return redirect()->route('reviews.index')->with('success', 'Review added successfully.');
    }

    public function index()
    {
        $reviews = Reviews::all();
        return view('tableReview', compact('reviews'));
    }

    public function edit($IdReview)
    {
        $review = Reviews::findOrFail($IdReview);
        return view('reviewForm', compact('review'));
    }

    public function update(Request $request, $IdReview)
    {
        $review = Reviews::findOrFail($IdReview);
        $review->update($request->all());
        return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy($IdReview)
    {
        $review = Reviews::findOrFail($IdReview);
        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }
}