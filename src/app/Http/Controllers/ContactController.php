<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Providers\AppServiceProvider;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }

   public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['firstname', 'lastname', 'gender', 'email', 'post','address', 'build', 'content']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
      $contact = $request->only(['firstname', 'lastname', 'gender', 'email', 'post','address', 'build', 'content']);
      Contact::create($contact);
      return view('thanks');
    }


    public function manage()
    {
        $contact = Contact::Paginate(4);
        return view('manage', compact('contact'));
    }


    public function submit(Contact $request)
{
    $firstname = $request->input('firstame');
    $lastname = $request->input('lastname');
    $gender = $request->input('gender');
    $mail = $request->input('mail');
    $post = $request->input('post');
    $address = $request->input('address');
    $build = $request->input('build');
    $content = $request->input('content');

    return view('index');
}





    public function manage2()
    {
        $contact = Contact::paginate(10);
        return view('manage2', ['contact' => $contact]);
    }


    public function search(Contactrequest $request)
    {
        $email = $request->input('email');
        $firstname = $request->input('firstname');
        $gender = $request->input('gender');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

            

        return view('manage', [
            'email' => $email,
            'firstname' => $firstname,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'gender' => $gender,
        ]);
    }

}