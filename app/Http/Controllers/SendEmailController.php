<?php

namespace App\Http\Controllers;
use App\AddUser;
use App\Email;
use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEMail;
class SendEmailController extends Controller
{

	public function index()
	{
		$contacts = AddUser::get();
		/*$emails = [];
		foreach( $Mails as $e ){
			array_push($emails, $e->email);
		}*/
		return view('admin.email.index', compact('contacts'));
	}
	public function getEmail()
	{
		$emails = Email::get(['email']);
		return response()->json([
			'Data' => $emails,
			], 200);
	}
    public function sendEmail(Request $request)
    {
    	$receiver = $request->email;
    	$receiver = str_replace(' ', '', $receiver);
    	$receiver = preg_split("/[,]/",$receiver);

    	$cc = $request->cc;
    	$cc = str_replace(' ', '', $cc);
    	$cc = preg_split("/[,]/",$cc);

    	$bcc = $request->bcc;
    	$bcc = str_replace(' ', '', $bcc);
    	$bcc = preg_split("/[,]/",$bcc);
    	//die();
    	try
    	{   
    		if( !empty(array_filter($receiver)))	
    		{
    			if( !empty(array_filter($cc)) )
    			{
    				if( !empty(array_filter($bcc)) )
    				{
    					Mail::to($receiver)
		    			->cc($cc)
		    			->bcc($bcc)
		    			->send(new SendEMail( ) );
    				}
    				else
    				{
    					Mail::to($receiver)
		    			->cc($cc)
		    			->send(new SendEMail( ) );
    				}

    			} else {

    				if( !empty(array_filter($bcc)) )
    				{
    					Mail::to($receiver)
		    			->bcc($bcc)
		    			->send(new SendEMail( ) );
    				}
    				else
    				{
    					Mail::to($receiver)
		    			->send(new SendEMail( ) );
    				}
    			}
    		}
    		else 
    		{
    			if( !empty(array_filter($cc)) )
    			{
    				if( !empty(array_filter($bcc)) )
    				{
    					Mail::cc($cc)
		    			->bcc($bcc)
		    			->send(new SendEMail( ) );
    				}
    				else
    				{
    					Mail::cc($cc)
		    			->send(new SendEMail( ) );
    				}

    			} else {

    				if( !empty(array_filter($bcc)) )
    				{
    					Mail::bcc($bcc)
		    			->send(new SendEMail( ) );
    				}
    				else
    				{
    					$request->session()->flash('status', "there is no receiptionist");
    					return back();
    				}
    			}
    		}
    		
    		
    		$request->session()->flash('status', "Your email was sent");
    	} 
    	catch(Exception $e)
    	{
			$request->session()->flash('status', "Your email was not sent");
    	}
    	return back();
    }
}
