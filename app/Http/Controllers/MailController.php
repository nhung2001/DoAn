<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Models\Mails;

class MailController extends Controller
{
    public function index()
    {
        $mails = Mails::orderby('id', 'ASC')->paginate(5);
        return view('backend.mail.index', compact('mails'));
    }
    
    public function mailForm()
    {
        return view('backend.mail.create');
    }

    public function sendMail(Request $request)
    {
        $emailContent = $request->content;
        $emailTilte = $request->title;
        $mails = Mails::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        $customers = User::where('role', '0')->get();
        foreach ($customers as $i) {
            Mail::send('backend.mail.formMail', compact('emailContent', 'emailTilte'), function ($message) use ($i) {
                $message->to($i->email, $i->name);
                $message->subject('Thông báo');
            });
        }
        return redirect()->route('mail')->with('success', 'Đã gửi thông báo thành công!');
    }

    public function showMail($id)
    {
        $mail = Mails::find($id);
        return view('backend.mail.show', compact('mail'));
    }

}
