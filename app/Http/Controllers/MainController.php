<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Allnews;
use App\Event;
use App\Eventpro;
use App\Blag;
use App\Itstartphoto;
use App\Maingalleryphoto;
use App\Konf;
use App\Pub;
use App\Seo;

class MainController extends Controller
{
    public function index()
    {
      $allnews = Allnews::latest()
      ->limit(8)
    	->get();
    	$blag = Blag::latest()
    	->get();
    	$event = Event::latest()
    	->get();
      
    	 $seos = Seo::latest()
      ->where('option', '1')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
    	
      return view('pages.main', compact('allnews', 'event', 'blag', 'titl', 'meta', 'keywords'));
    }
            
            
    public function search(Request $request) 
    { 
      $input = $request->input('search'); 
      // return $input;
      session()->flash('message', $input); 
      return redirect('/search') 
      ->withInput(); 
    }
        
        
    public function eventsolo(Event $solo)
    {
      isset($solo->seo_title) ? $titl = $solo->seo_title : $titl = "AIR";
      isset($solo->seo_description) ? $meta = $solo->seo_description : $meta = "AIR";
      isset($solo->seo_keywords) ? $keywords = $solo->seo_keywords : $keywords = "AIR";
      isset($solo->image) ? $img = $solo->image: $img = 'storage/{{ $event->image }}';

      return view('pages.eventsolo', compact('solo', 'titl', 'meta', 'img', 'keywords'));
    }
  	public function eventprosolo(Eventpro $solo)
    {
      
      return view('pages.eventprosolo', compact('solo'));
    }

    public function blogsolo(Allnews $solo)
    {
      isset($solo->seo_title) ? $titl = $solo->seo_title : $titl = "AIR";
      isset($solo->seo_description) ? $meta = $solo->seo_description : $meta = "AIR";
      isset($solo->seo_keywords) ? $keywords = $solo->seo_keywords : $keywords = "AIR";
      isset($solo->image) ? $img = $solo->image: $img = 'storage/{{ $allnew->image }}';

      return view('pages.blogsolo', compact('solo', 'titl', 'meta', 'img', 'keywords'));
    }
    
    public function rukovodstvo()
    {
      $seos = Seo::latest()
      ->where('option', '2')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.rukovodstvo', compact('titl', 'meta', 'keywords'));
    }

    public function experts()
    {
      $seos = Seo::latest()
      ->where('option', '3')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.experts', compact('titl', 'meta', 'keywords'));
    }

    public function regions()
    {
      $seos = Seo::latest()
      ->where('option', '4')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.regions', compact('titl', 'meta', 'keywords'));
    }

    public function photos()
    {
      $data = Maingalleryphoto::latest('created_at')->paginate(4);
      
    	$seos = Seo::latest()
      ->where('option', '5')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";

      return view('pages.photos', compact('data', 'titl', 'meta', 'keywords'));
    }
    public function photosolo(Maingalleryphoto $solo)
    {
      return view('pages.photosolo', compact('solo'));
    }

    public function itstart()
    {
      $itstartphoto = Itstartphoto::latest()
    	->get();
    	
    	$seos = Seo::latest()
      ->where('option', '6')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.itstart', compact('itstartphoto', 'titl', 'meta', 'keywords'));
    }

    public function robostart()
    {
      $seos = Seo::latest()
      ->where('option', '7')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.robostart', compact ('titl', 'meta', 'keywords'));
    }

    public function nicanoair()
    {
      $seos = Seo::latest()
      ->where('option', '8')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.nicanoair', compact('titl', 'meta', 'keywords'));
    }

    public function publication()
    {
      $konf = Konf::latest()
    	->get();
    	$pub = Pub::latest()
    	->get();
  
      $seos = Seo::latest()
      ->where('option', '9')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.publication', compact('konf', 'pub', 'titl', 'meta', 'keywords'));
    }
    public function konfsolo(Konf $solo){
      return view('pages.konfsolo', compact('solo'));
    }

    public function books()
    {
      $seos = Seo::latest()
      ->where('option', '10')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.books', compact('titl', 'meta', 'keywords'));
    }

    public function creative()
    {
       $seos = Seo::latest()
      ->where('option', '11')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      
      return view('pages.creative', compact('titl', 'meta', 'keywords'));
    }

    public function constract()
    {

       $seos = Seo::latest()
      ->where('option', '12')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.constract', compact('titl', 'meta', 'keywords'));
    }

    public function stazir()
    {
       $seos = Seo::latest()
      ->where('option', '13')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.stazir', compact('titl', 'meta', 'keywords'));
    }

    public function events()
    {
      $event = Event::latest()
    	->get();
    	
    	$seos = Seo::latest()
      ->where('option', '14')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";

      return view('pages.events', compact('event', 'titl', 'meta', 'keywords'));
    }
   public function eventpros()
    {
      $eventpro = Eventpro::latest()
        ->paginate(8);
	$data = Eventpro::latest('created_at')->paginate(8);
      return view('pages.eventpros', compact('eventpro', 'data'));
    }


    public function thenews()
    {
      
    	$data = Allnews::latest('created_at')->paginate(9);
 

       $seos = Seo::latest()
      ->where('option', '15')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";

      return view('pages.thenews', compact( 'data', 'titl', 'meta', 'keywords'));
    }

    public function docs()
    {
      
       $seos = Seo::latest()
      ->where('option', '16')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.docs', compact('titl', 'meta', 'keywords'));
    }

    public function contacts()
    {

       $seos = Seo::latest()
      ->where('option', '17')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.contacts', compact('titl', 'meta', 'keywords'));
    }

    public function glob()
    {
      
       $seos = Seo::latest()
      ->where('option', '18')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.global', compact('titl', 'meta', 'keywords'));
    }

    public function uchdocs()
    {
      
       $seos = Seo::latest()
      ->where('option', '19')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.uchdocs', compact('titl', 'meta', 'keywords'));
    }
  public function agent()
    {  
      return view('pages.agent');
    }

    public function otchet()
    {
      $seos = Seo::latest()
      ->where('option', '20')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.otchet', compact('titl', 'meta', 'keywords'));
    }
    public function shop()
    {
      $seos = Seo::latest()
      ->where('option', '21')
      ->first();
      
      isset($seos->title) ? $titl = $seos->title : $titl = "AIR";
      isset($seos->meta) ? $meta = $seos->meta : $meta = "AIR";
      isset($seos->keywords) ? $keywords = $seos->keywords : $keywords = "AIR";
      
      return view('pages.shop', compact ('titl', 'meta', 'keywords'));
    }
    
    public function search1()
    {
      return view('pages.search');
    }
    public function oplataone()
    {
      return view('pages.form1');
    }
    public function oplatatwo()
    {
      return view('pages.form2');
    }
    public function oplatathree()
    {
      return view('pages.form3');
    }
}
