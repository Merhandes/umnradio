<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUangKasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard.bendahara.index', [
            'users' => $users
        ]);
    }

    public function timeline(){
        $payments = Payment::orderBy('created_at', 'desc')->get();
        return view('dashboard.bendahara.show', [
            'payments' => $payments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = Auth::user();
        $payments = $user->payments;
        return view('dashboard.bendahara.create', [
            'payments' => $payments
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = Auth::user();

        // dd($request);

        $validData = $request->validate([
            'keterangan' => 'required',
            'months' => 'required|array', // Ensure that 'months' is an array
            'months.*' => 'in:jan,feb,mar,apr,may,jun,jul,aug,sep,oct,nov,dec', // Validate each selected month
            'image' => 'required|image|file|max:20480'
        ]);

        if ($request->file('image')) {
            $validData['image'] = $request->file('image')->storePublicly('Payments', 'public');
        }
        $validData['month'] = implode(', ', $request->input('months'));

        $validData['user'] = $user->name;
        $validData['user_id'] = $user->id;
        $validData['status'] = "PENDING";
        // dd($validData);

        Payment::create($validData);
        return redirect('/uang-kas')->with('success', "Payment uploaded.");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        $payments = $user->payments;
        return view('dashboard.bendahara.detail', [
            'user'=>$user,
            'payments'=>$payments
        ]);
    }

    public function change_status(Payment $payment, Request $request){
        $validData = $request->validate([
            'status' => 'required|in:CONFIRMED,PENDING,REJECTED'
        ]);

        $payment->update($validData);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
