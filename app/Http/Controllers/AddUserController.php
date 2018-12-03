<?php

namespace App\Http\Controllers;

use App\AddUser;
use App\UserType;
use App\PhoneNumber;
use App\Email;
use App\Status;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public $contact, $type, $phone, $email;
    public function __construct(AddUser $contact, UserType $type, PhoneNumber $phone, Email $email)
    {
        $this->contact = $contact;
        $this->phone = $phone;
        $this->email = $email;
        $this->type = $type;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = $this->contact->paginate(6);
        $types = $this->type->get();
        return view('admin.listUser', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = $this->type->get();
        return view('admin.adduser', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $company = $request->company;
        $type_id = $request->type;
        $phone = $request->phone; //Array
        $email = $request->email; // Array
        $address = $request->address;
        $this->contact->name = $name;
        $this->contact->company = $company;
        $this->contact->type_id = $type_id;
        $this->contact->status_id = 1;
        $this->contact->address = $address;
        if( $this->contact->save() )
        {   
            if( !empty($phone) )
            {
                foreach( $phone as $p )
                {
                    if( !empty($p) )
                    {
                        $this->phone->insert([
                            'phone' => $p,
                            'user_id' => $this->contact->id,
                            ]);
                    }
                }
            }
            if( !empty($email) )
            {
                foreach( $email as $e )
                {
                    if( !empty( $e ) )
                    {
                        $this->email->insert([
                        'email' => $e,
                        'user_id' => $this->contact->id,
                        ]);
                    }
                    
                }
            }
            $request->session()->flash('status', "Great!!! Your task is completed!!!");
        } 
        else
        {

            $request->session()->flash('status', "Great!!! Your task is not completed!!!");
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AddUser  $addUser
     * @return \Illuminate\Http\Response
     */
    public function show(AddUser $addUser, $id)
    {
        $contact = $addUser::find($id);
        return view('admin.showUser', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AddUser  $addUser
     * @return \Illuminate\Http\Response
     */
    public function edit(AddUser $addUser, $id)
    {
        $contact = $this->contact->find($id);
        $types = UserType::get();
        $status = Status::get();
        return view('admin.editUser', compact('contact', 'types', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AddUser  $addUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddUser $addUser, $id)
    {
        $name = $request->name;
        $company = $request->company;
        $type_id = $request->type;
        $phone = $request->phone; //Array
        $email = $request->email; // Array
        $address = $request->address;

        $contact = $this->contact->find( $id );
        $contact->name = $name;
        $contact->company = $company;
        $contact->type_id = $type_id;
        $contact->status_id = $request->status;
        $contact->address = $address;
        if( $contact->save() )
        {
            $this->phone->where('user_id', $id)->delete();
            $this->email->where('user_id', $id)->delete();
            if( !empty($phone) )
            {
                foreach( $phone as $p )
                {
                    if( !empty($p))
                    {
                        $this->phone->insert([
                        'phone' => $p,
                        'user_id' => $id,
                        ]);
                    }
                }
            }
            if( !empty($email) )
            {
                foreach( $email as $e )
                {
                    if( !empty($e))
                    {
                        $this->email->insert([
                            'email' => $e,
                            'user_id' => $id,
                            ]);
                    }
                }
            }
            $request->session()->flash('status', "Great!!! Your task is completed!!!");
        }
        else 
        {

            $request->session()->flash('status', "Great!!! Your task is not completed!!!");
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AddUser  $addUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddUser $addUser, $id)
    {
        $contact = $this->contact->find($id);
        $contact->delete();
        $this->phone->where('user_id', $id)->delete();
        $this->email->where('user_id', $id)->delete();
        return back();
    }
}
