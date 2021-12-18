<?php
namespace App\Http\Controllers;
use DB;
use Mail; 
use App\Products;
use App\Contactform;
use App\Rates;
use App\Testimonials;
use App\Clients;
use App\HomeContent;
use App\Aboutcontent;
use App\Clientslogo;
use App\BusinessPara;
use App\OurBusiness;
use App\WeThePeople;
use App\WeTeam;
use App\RecognitionPara;
use App\Recognitions;
use App\ComplaincePara;
use App\ComplainceContent;
use App\Contact;
use App\InfraVideo;
use App\InfraPhoto;
use App\Productcategory;
use App\CMS;
use App\Links;
use Illuminate\Http\Request;

class FrontController extends Controller
{
   
   public function index()
    {
		$city='';
		$ip =getenv('REMOTE_ADDR'); // your ip address here
		if($ip!='103.137.84.227' && $ip!='157.47.255.234' && $ip!='49.36.158.173'  && $ip!='157.37.173.7' && $ip!='157.37.173.7' && $ip!='122.180.253.129' && $ip!='49.36.152.227' && $ip!='49.36.154.45' && $ip!='171.79.188.184') {
    $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
    if($query && $query['status'] == 'success')
    {
        $city=$query['city'];
       
    }
		}  
	
// 	if($city!='Jaipur')
// 	{
		$home            = DB::table('home')->where('status',1)->first();
		$about           = DB::table('about')->where('status',1)->first();
		$ourbusiness     = DB::table('ourbusiness')->orderBy('position','asc')->get();
		$ourbusinesspara     = DB::table('ourbusinesspara')->orderBy('id','desc')->first();
		$wethepeople     = DB::table('wethepeople')->latest()->first();
		$weteam          = DB::table('weteam')->get();
		$recognitionpara = DB::table('recognitionpara')->get();
		$recognitions    = DB::table('recognitions')->get();
		$complaince      = DB::table('complaincecontent')->get();
		$complaincepara  = DB::table('complaincepara')->orderBy('c_id','desc')->first();
		$contact         = DB::table('contact')->orderBy('con_id','desc')->first();
		$infra           = DB::table('infravideo')->orderBy('v_id','desc')->first();
		$infraimages     = DB::table('infraphoto')->get();
		$complaincelinks = DB::table('links')->where('position','1')->get();
		$quicklinks      = DB::table('links')->where('position','0')->get();
		$quicklinks2      = DB::table('cms')->where('position','0')->orderBy('pageorder', 'asc')->get();
		$aboutpages      = DB::table('cms')->where('position','2')->orderBy('pageorder', 'asc')->get();
		$complaincepages = DB::table('cms')->where('position','1')->orderBy('pageorder', 'asc')->get();
		
            
	return view('home',['home'=>$home,'about'=>$about,'ourbusiness'=>$ourbusiness,'wethepeople'=>$wethepeople,'weteam'=>$weteam,'recognitionpara'=>$recognitionpara,'recognitions'=>$recognitions,'complaince'=>$complaince,'complaincepara'=>$complaincepara,'contact'=>$contact,'infra'=>$infra,'infraimages'=>$infraimages,'ourbusinesspara'=>$ourbusinesspara,'complaincelinks'=>$complaincelinks,'quicklinks'=>$quicklinks,'quicklinks2'=>$quicklinks2,'aboutpages'=>$aboutpages,'complaincepages'=>$complaincepages ]);
// 	}
// 	else{
// 		$contact         = DB::table('contact')->orderBy('con_id','desc')->first();
// 		return view('block',['contact'=>$contact]);
// 	}
    }
	public function uk()
    {
		$city='';
		
		$home            = DB::table('home')->where('status',1)->first();
		$about           = DB::table('about')->where('status',1)->first();
		$ourbusiness     = DB::table('ourbusiness')->orderBy('position','asc')->get();
		$ourbusinesspara     = DB::table('ourbusinesspara')->orderBy('id','desc')->first();
		$wethepeople     = DB::table('wethepeople')->latest()->first();
		$weteam          = DB::table('weteam')->get();
		$recognitionpara = DB::table('recognitionpara')->get();
		$recognitions    = DB::table('recognitions')->get();
		$complaince      = DB::table('complaincecontent')->get();
		$complaincepara  = DB::table('complaincepara')->orderBy('c_id','desc')->first();
		$contact         = DB::table('contact')->orderBy('con_id','desc')->first();
		$infra           = DB::table('infravideo')->orderBy('v_id','desc')->first();
		$infraimages     = DB::table('infraphoto')->get();
		$complaincelinks = DB::table('links')->where('position','1')->get();
		$quicklinks      = DB::table('links')->where('position','0')->get();
		$quicklinks2      = DB::table('cms')->where('position','0')->orderBy('pageorder', 'asc')->get();
		$quicklinks2      = DB::table('cms')->where('position','0')->orderBy('pageorder', 'asc')->get();
		$aboutpages      = DB::table('cms')->where('position','2')->orderBy('pageorder', 'asc')->get();
		$complaincepages = DB::table('cms')->where('position','1')->orderBy('pageorder', 'asc')->get();
		
            
	return view('home',['home'=>$home,'about'=>$about,'ourbusiness'=>$ourbusiness,'wethepeople'=>$wethepeople,'weteam'=>$weteam,'recognitionpara'=>$recognitionpara,'recognitions'=>$recognitions,'complaince'=>$complaince,'complaincepara'=>$complaincepara,'contact'=>$contact,'infra'=>$infra,'infraimages'=>$infraimages,'ourbusinesspara'=>$ourbusinesspara,'complaincelinks'=>$complaincelinks,'quicklinks'=>$quicklinks,'quicklinks2'=>$quicklinks2,'aboutpages'=>$aboutpages,'complaincepages'=>$complaincepages ]);
	
    }
	
	public function pagedata(Request $request,$slug)
	{
		
		$complaincelinks = DB::table('links')->where('position','1')->get();
		$quicklinks      = DB::table('links')->where('position','0')->get();
		$quicklinks2      = DB::table('cms')->where('position','0')->orderBy('pageorder', 'asc')->get();
		$aboutpages      = DB::table('cms')->where('position','2')->orderBy('pageorder', 'asc')->get();
		$page      = DB::table('cms')->where('slug',$slug)->first();
		$complaincepages = DB::table('cms')->where('position','1')->orderBy('pageorder', 'asc')->get();
		$contact         = DB::table('contact')->orderBy('con_id','desc')->first();
		return view('pages',['complaincelinks'=>$complaincelinks,'quicklinks'=>$quicklinks,'quicklinks2'=>$quicklinks2,'aboutpages'=>$aboutpages,'page'=>$page,'complaincepages'=>$complaincepages,'contact'=>$contact  ]);
	}
	
	public function virtualshow()
	{
		
		return view('virtualshow');
		
	}
	
	public function product(Request $request)
	{
		$complaincelinks = DB::table('links')->where('position','1')->get();
		$quicklinks      = DB::table('links')->where('position','0')->get();
		$quicklinks2      = DB::table('cms')->where('position','0')->orderBy('pageorder', 'asc')->get();
		$aboutpages      = DB::table('cms')->where('position','2')->orderBy('pageorder', 'asc')->get();
		$complaincepages = DB::table('cms')->where('position','1')->orderBy('pageorder', 'asc')->get();
		$product      = DB::table('productcategory')->get(); 
		$categorymaster      = DB::table('categorymaster')->latest('id')->first(); 
	 $contact         = DB::table('contact')->orderBy('con_id','desc')->first();
		
	return view('product',['complaincelinks'=>$complaincelinks,'quicklinks'=>$quicklinks,'quicklinks2'=>$quicklinks2,'aboutpages'=>$aboutpages,'product'=>$product,'categorymaster'=>$categorymaster,'complaincepages'=>$complaincepages,'contact'=>$contact]);
		
	}	
	public function clients(Request $request)
	{
		$complaincelinks = DB::table('links')->where('position','1')->get();
		$quicklinks      = DB::table('links')->where('position','0')->get();
		$quicklinks2      = DB::table('cms')->where('position','0')->orderBy('pageorder', 'asc')->get();
		$aboutpages      = DB::table('cms')->where('position','2')->orderBy('pageorder', 'asc')->get();
		
		$testimonial     = DB::table('testimonials')->get();
		$clients         = Clients::latest()->first();
		$clientslogo         = DB::table('clientslogo')->get();
	    $complaincepages = DB::table('cms')->where('position','1')->orderBy('pageorder', 'asc')->get();
		$contact         = DB::table('contact')->orderBy('con_id','desc')->first();
		return view('clients',['complaincelinks'=>$complaincelinks,'quicklinks'=>$quicklinks,'quicklinks2'=>$quicklinks2,'aboutpages'=>$aboutpages,'testimonial'=>$testimonial,'clients'=>$clients,'clientslogo'=>$clientslogo,'complaincepages'=>$complaincepages ,'contact'=>$contact]); 
		
	}
	
	public function video_gallery(Request $request)
	{
		$complaincelinks = DB::table('links')->where('position','1')->get();
		$quicklinks      = DB::table('links')->where('position','0')->get();
		$quicklinks2      = DB::table('cms')->where('position','0')->orderBy('pageorder', 'asc')->get();
		$aboutpages      = DB::table('cms')->where('position','2')->orderBy('pageorder', 'asc')->get();
		
		$testimonial     = DB::table('testimonials')->get();
		$clients         = Clients::latest()->first();
		$clientslogo         = DB::table('clientslogo')->get();
	    $complaincepages = DB::table('cms')->where('position','1')->orderBy('pageorder', 'asc')->get();
		$contact         = DB::table('contact')->orderBy('con_id','desc')->first();
		$vg         = DB::table('videogallery') ->orderBy('id','desc')->get();
		return view('videogallery',['complaincelinks'=>$complaincelinks,'quicklinks'=>$quicklinks,'quicklinks2'=>$quicklinks2,'aboutpages'=>$aboutpages,'testimonial'=>$testimonial,'clients'=>$clients,'clientslogo'=>$clientslogo,'complaincepages'=>$complaincepages ,'contact'=>$contact,'vg'=>$vg]); 
		
	}
	public function blogs(Request $request)
	{
		$complaincelinks = DB::table('links')->where('position','1')->get();
		$quicklinks      = DB::table('links')->where('position','0')->get();
		$quicklinks2      = DB::table('cms')->where('position','0')->orderBy('pageorder', 'asc')->get();
		$aboutpages      = DB::table('cms')->where('position','2')->orderBy('pageorder', 'asc')->get();
		
		$testimonial     = DB::table('testimonials')->get();
		$clients         = Clients::latest()->first();
		$clientslogo         = DB::table('clientslogo')->get();
	    $complaincepages = DB::table('cms')->where('position','1')->orderBy('pageorder', 'asc')->get();
		$contact         = DB::table('contact')->orderBy('con_id','desc')->first();
		$vg         = DB::table('blogs') ->orderBy('id','desc')->get();
		return view('blogs',['complaincelinks'=>$complaincelinks,'quicklinks'=>$quicklinks,'quicklinks2'=>$quicklinks2,'aboutpages'=>$aboutpages,'testimonial'=>$testimonial,'clients'=>$clients,'clientslogo'=>$clientslogo,'complaincepages'=>$complaincepages ,'contact'=>$contact,'vg'=>$vg]); 
		
	}
	public function readpost(Request $request,$slug)
	{
		$complaincelinks = DB::table('links')->where('position','1')->get();
		$quicklinks      = DB::table('links')->where('position','0')->get();
		$quicklinks2      = DB::table('cms')->where('position','0')->orderBy('pageorder', 'asc')->get();
		$aboutpages      = DB::table('cms')->where('position','2')->orderBy('pageorder', 'asc')->get();
		
		$testimonial     = DB::table('testimonials')->get();
		$clients         = Clients::latest()->first();
		$clientslogo         = DB::table('clientslogo')->get();
	    $complaincepages = DB::table('cms')->where('position','1')->orderBy('pageorder', 'asc')->get();
		$contact         = DB::table('contact')->orderBy('con_id','desc')->first();
		$post         = DB::table('blogs')->where('slug',$slug)->first();
		return view('blogs_details',['complaincelinks'=>$complaincelinks,'quicklinks'=>$quicklinks,'quicklinks2'=>$quicklinks2,'aboutpages'=>$aboutpages,'testimonial'=>$testimonial,'clients'=>$clients,'clientslogo'=>$clientslogo,'complaincepages'=>$complaincepages ,'contact'=>$contact,'post'=>$post]); 
		
	}
	
	
	public function photo_gallery(Request $request)
	{
		$complaincelinks = DB::table('links')->where('position','1')->get();
		$quicklinks      = DB::table('links')->where('position','0')->get();
		$quicklinks2      = DB::table('cms')->where('position','0')->orderBy('pageorder', 'asc')->get();
		$aboutpages      = DB::table('cms')->where('position','2')->orderBy('pageorder', 'asc')->get();
		
		$testimonial     = DB::table('testimonials')->get();
		$clients         = Clients::latest()->first();
		$clientslogo         = DB::table('clientslogo')->get();
	    $complaincepages = DB::table('cms')->where('position','1')->orderBy('pageorder', 'asc')->get();
		$contact         = DB::table('contact')->orderBy('con_id','desc')->first();
		$pg         = DB::table('photogallery') ->orderBy('id','desc')->get();
		return view('photogallery',['complaincelinks'=>$complaincelinks,'quicklinks'=>$quicklinks,'quicklinks2'=>$quicklinks2,'aboutpages'=>$aboutpages,'testimonial'=>$testimonial,'clients'=>$clients,'clientslogo'=>$clientslogo,'complaincepages'=>$complaincepages ,'contact'=>$contact,'pg'=>$pg]); 
		
	}
	
	
	public function getproduct(Request $request,$slug)
	{
		$complaincelinks = DB::table('links')->where('position','1')->get();
		$quicklinks      = DB::table('links')->where('position','0')->get();
		$quicklinks2      = DB::table('cms')->where('position','0')->orderBy('pageorder', 'asc')->get();
		$aboutpages      = DB::table('cms')->where('position','2')->orderBy('pageorder', 'asc')->get();
		$complaincepages = DB::table('cms')->where('position','1')->orderBy('pageorder', 'asc')->get();
		$contact         = DB::table('contact')->orderBy('con_id','desc')->first();
	
		$product   = DB::table('products')
            ->join('productcategory', 'productcategory.id', '=', 'products.category_id')
          
            ->select('products.*', 'productcategory.category_name','productcategory.id as pid','productcategory.category_image')
			->where('productcategory.slug',$slug)
            ->get();
         $category= DB::table('productcategory')->where('slug',$slug)->first();    
           //print_r($product);
		///	$productimages = DB::table('productimages')->where('product_id',$product->id)->get();	
$complaincepages = DB::table('cms')->where('position','1')->get();
			
		return view('productsview',['complaincelinks'=>$complaincelinks,'quicklinks'=>$quicklinks,'quicklinks2'=>$quicklinks2,'aboutpages'=>$aboutpages,'product'=>$product,'category'=>$category,'complaincepages'=>$complaincepages,'contact'=>$contact]);
		
	}
	
	
	public function sendenquiry(Request $request)
	{
		if($request->type==1)
		{
			$type='Contact Enquiry';
			$num=0;
		}
		else
		{
			
			$type='Newsletter Subcription'; 
			$check=DB::table('contactform')->where('email',$request->email)->get();
			$num=count($check);
		}
		if($num>=1)
		{
			return "1003";
		}
		
		$con=new Contactform();
		$con->name=$request->name;
		$con->type=$request->type;
		$con->subject=$request->subject;
		$con->email=$request->email;
		$con->phone=$request->mobile;
		$con->message=$request->message;
	    if($con->save())
		{
			$data = array(  
                'name' =>$request->name,
                'type' =>$type,
                'subject' =>$request->subject,
                'email' =>$request->email,
                'phone' =>$request->mobile,
                'query' =>$request->message                
                    );
						 
						 
						 
		 Mail::send('contactemail', $data, function($messages) use ($data) {
				$messages->from('avyaydewan@maamarts.com','Maam Arts');
				$messages->subject("New enquiery/Feedback Signup"); 
				$messages->to('jigar.dewan@maamarts.com');  
				$messages->to('avyaydewan@maamarts.com');  
				$messages->to('maamarts.in@gmail.com'); 
				
			}); 

Mail::send('thanksemail', $data, function($messages) use ($data) {
				$messages->from('info@maamarts.com','Maam Arts');
				$messages->subject("Thanks for Contacting Maam Arts"); 
				$messages->to($_POST['email']);  
			});     			
		
		return "1001";
		}
		
		else{
			
			return "1002";
		}
		
	}
	
	
	public function testemail()
	{
		$data = array(  
                'name' =>'Ankur',
                'type' =>'test',
                'subject' =>'test',
                'email' =>'anksmsn4@yahoo.in',
                'phone' =>'8299639330',
                'query' =>'query'               
                    );
						 
						 
						 
		 Mail::send('contactemail', $data, function($messages) use ($data) {
				$messages->from('info@maamarts.com','Maam Arts');
				$messages->subject("New enquiery/Newsletter Signup"); 
				$messages->to('ankurssri87@gmail.com');  
			});  				 
		 Mail::send('thanksemail', $data, function($messages) use ($data) {
				$messages->from('info@maamarts.com','Maam Arts');
				$messages->subject("New enquiery/Newsletter Signup"); 
				$messages->to('ankurssri87@gmail.com');  
			});     
		
		
	}
}
