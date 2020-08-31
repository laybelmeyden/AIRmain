<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footerform;
use App\Eventsoloform;
use Illuminate\Support\Facades\Storage;
use Validator;

class MessagesController extends Controller

{
    public function footerform(Request $request)
      {
        $validate = Validator::make($request->all(), [
	        'g-recaptcha-response' => 'required|captcha'
        ]);
        if ($validate->fails()) { 
        session()->flash('message', 'Ошибка! Может, попробуете еще раз?');
        return redirect('/#footer');
        }
        
      Footerform::create([
      'name' => request('name'),
      'email' => request('email'),
      'email1' => request('email1'),
      ]);
      $to_name = "AIR";
      $to_email = "info@rusinnovations.com";
        $data= array(
      'name' => request('name'),
      'email' => request('email'),
      'email1' => request('email1'),
      'message3' => request('message3'),

      );
       \Mail::send('email.mail2', $data, function($message1) use ($data, $to_email, $to_name)
    {
        $message1->from($data['email'], $data['name'], $data['message3']);
        $message1->to($to_email)->subject('Message from site');
     });
     session()->flash('message', 'Ваша заявка отправлена!');
     return redirect('/#footer');
    }
    public function eventsoloform(Request $request)
      {
      
      Eventsoloform::create([
      'name' => request('name'),
      'famil' => request('famil'),
      'email' => request('email'),
      'tel' => request('tel'),
      'tel1' => request('tel1'),
      'message' => request('message2'),
      ]);
      
         $data= array(
      'name' => request('name'),
      'famil' => request('famil'),
      'email' => request('email'),
      'tel' => request('tel'),
      'tel1' => request('tel1'),
      'message2' => request('message2'),
      );
       \Mail::send('email.mail1', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_EVENTSOLO');
        $message1->from($data['email'], $data['name'], $data['message2'], $data['famil']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     session()->flash('message', 'Ваша заявка отправлена!');
     return redirect('/');
    }
    
    
     public function podpiska(Request $request)
      {

         $data= array(
      'email' => request('email'),
      );
       \Mail::send('email.mail3', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_PODPISKA');
        $message1->from($data['email']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
      
      return back();
    }
    
    public function jurnal(Request $request)
      {
      
          
        $data = array(
            'fio1'   => $request->get('fio1'),
            'nauch1' => $request->get('nauch1'),
            'tema'    => $request->get('tema'),
            'nazv' => $request->get('nazv'),
            'email' => $request->get('email'),
            'phone'  => $request->get('phone'),
            'a_file'  => $request->file
        );
          
        \Mail::send('email.mail5', $data, function($message1) use($data)
        {   
            $mail_admin = env('MAIL_ADMIN_PODPISKAJURNAL');
             $message1->from($data['email'], $data['fio1'], $data['nauch1'], $data['tema'], $data['nazv'], $data['email'], $data['phone']);
            $message1->to($mail_admin, 'For Admin')->subject('Message from site');
            $message1->attach($data['a_file']->getRealPath(), array(
                'as' => 'a_file.' . $data['a_file']->getClientOriginalExtension(),
                'mime' => $data['a_file']->getMimeType())
            );
        });
        return back();
    }
    
    
    
    
    
     public function krujokrobo(Request $request)
      {
      
         $data= array(
      'imya_fa' => request('imya_fa'),
      'fozrst' => request('fozrst'),
      'email' => request('email'),
      'phone' => request('phone'),

      );
       \Mail::send('email.mail4', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_ROBO');
        $message1->from($data['email'], $data['imya_fa'], $data['fozrst'], $data['email'], $data['phone']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
      
      return back();
    }
    
    
     public function creativform(Request $request)
      {
      
         $data= array(
      'fio1' => request('fio1'),
      'nazv' => request('nazv'),
      'email' => request('email'),
      'phone' => request('phone'),

      );
       \Mail::send('email.mail6', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_CREATIVE');
        $message1->from($data['email']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
      
      return back();
    }
    public function shopform(Request $request)
      {
      
      $data= array(
      'shop_fio' => request('shop_fio'),
      'shop_select' => request('shop_select'),
      'shop_select_2' => request('shop_select_2'),
      'phone' => request('phone'),
      'hidden_item' => request('hidden_item'),
      'email' => request('email'),
      'email_adres' => request('email_adres'),

      );
       \Mail::send('email.mailshop', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_FOOTER');
        $message1->from($data['email'], $data['shop_fio'], $data['shop_select'], $data['shop_select_2'], $data['phone'], $data['hidden_item'], $data['email_adres']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
      
      return redirect('/oplataone');
    }
    public function shopform2(Request $request)
      {
      
         $data= array(
      'shop_fio' => request('shop_fio'),
      'shop_select' => request('shop_select'),
      'shop_select_2' => request('shop_select_2'),
      'phone' => request('phone'),
      'hidden_item' => request('hidden_item'),
      'email' => request('email'),
      'email_adres' => request('email_adres'),

      );
       \Mail::send('email.mailshop', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_FOOTER');
        $message1->from($data['email'], $data['shop_fio'], $data['shop_select'], $data['shop_select_2'], $data['phone'], $data['hidden_item'], $data['email_adres']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
      
      return redirect('/oplatatwo');
    }
    public function shopform3(Request $request)
      {
      
         $data= array(
      'shop_fio' => request('shop_fio'),
      'shop_select' => request('shop_select'),
      'shop_select_2' => request('shop_select_2'),
      'phone' => request('phone'),
      'hidden_item' => request('hidden_item'),
      'email' => request('email'),
      'email_adres' => request('email_adres'),

      );
       \Mail::send('email.mailshop', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_FOOTER');
        $message1->from($data['email'], $data['shop_fio'], $data['shop_select'], $data['shop_select_2'], $data['phone'], $data['hidden_item'], $data['email_adres']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
      
      return redirect('/oplatathree');
    }
    

}