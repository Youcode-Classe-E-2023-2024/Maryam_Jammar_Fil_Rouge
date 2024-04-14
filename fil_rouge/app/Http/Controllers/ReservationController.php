<?php

namespace App\Http\Controllers;

use App\Mail\TicketReservation;
use App\Models\Category;
use App\Models\Event;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paiement($id)
    {
        $categories = Category::all();

        $event = Event::find($id);

        $userRole = "organizer";

        return view('paiement', compact('event', 'userRole', 'categories'));
    }

    public function buy($id)
    {
        $user = Auth::user();
        $event = Event::find($id);

        if ($event && $event->nbr_place > 0) {
            $event->nbr_place -= 1;
            $event->save();

            // Générer le PDF
            $pdf = PDF::loadView('pdf.ticket', compact('event', 'user'));
            $pdfPath = storage_path('app/public/pdfs/ticket_' . $event->id . '.pdf');

            // Enregistrer le PDF localement
            $pdf->save($pdfPath);

            // Envoyer le PDF par e-mail
            Mail::to($user->email)->send(new TicketReservation($event, $user, $pdfPath));

            Session::flash('success', 'Your reservation has been confirmed. An email has been sent to you.');

            return redirect('/');
//            return $pdf->download('ticket.pdf');

        } else {
            return back()->with('error', 'No places available for reservation.');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
