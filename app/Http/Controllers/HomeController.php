<?php
namespace App\Http\Controllers;
use DB;
use App\Products;
use App\Categorymaster;
use App\Contactform;
use App\Photogallery;
use App\VideoGallery;
use App\Rates;
use App\ProductImages;
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
use App\User;
use App\Blog;
use App\InfraPhoto;
use App\Productcategory;
use App\CMS;
use App\Links;
use Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }
	
	public function homecontent()
	{
		 $data = DB::table('home')->get();
		
		 return view('admin.home',['data'=>$data]);
	}
	public function blogs()
	{
		
		
		 return view('admin.blogs');
	}
	public function view_blogs()
	{
		$blogs=Blog::all();
		
		 return view('admin.viewblogs',['blogs'=>$blogs]);
	}
	public function edit_blogs($slug)
	{
		$blogs=Blog::where("id",$slug)->first();
		
		 return view('admin.editblog',['blogs'=>$blogs]);
	}
	public function save_blogs(Request $request)
	  {
		  $image = $request->file('image');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(500,400, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
			
		
		$cms=new Blog();
		$cms->title=$request->title;
		$cms->description=$request->description;
		$cms->metakeywords=$request->metakeywords;
		$cms->metadescription=$request->metadescription; 
		$cms->image=$icon; 
		$cms->slug=strtolower(str_replace(" ","-",$request->title));
		$cms->status=$request->status;
		
		$cms->save();
		
		
		return redirect()->back()->with("success","Post has been submitted successfully!");
		
	}
	public function updateblog(Request $request)
	  {
		   $image = $request->file('image');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(500,400, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		else{
			$icon=$request->oldimage;
		}
		$cms=Blog::find($request->id);
		$cms->title=$request->title;
		$cms->description=$request->description;
		$cms->metakeywords=$request->metakeywords;
		$cms->metadescription=$request->metadescription; 
		$cms->slug=strtolower(str_replace(" ","-",$request->title));
		$cms->status=$request->status;
		
		$cms->save();
		
		
		return redirect()->back()->with("success","Post has been updated successfully!");
		
	}
	public function deleteblog(Request $request,$slug)
	  {
		$cms=Blog::find($slug);
		
		
		$cms->delete();
		
		
		return redirect()->back()->with("success","Post has been deleted successfully!");
		
	}
	
	
	public function aboutcontent()
	{
		 $data = DB::table('about')->get();
		
		 return view('admin.about',['data'=>$data]);
	}
	public function adduser()
	{
		 $data = DB::table('about')->get();
		
		 return view('admin.adduser',['data'=>$data]);
	}
	public function editabout(Request $request,$id)
	{
		 $data = DB::table('about')->where('about_id',$id)->first();
		
		 return view('admin.editabout',['data'=>$data]);
	}
	
	
	public function makeuser(Request $request)
	{
		if(isset($_POST['permissions']))
		{
			$permissions=implode(",",$_POST['permissions']);
			
		}
		else{
			
		$permissions='';	
		}
		$user=new User();
		$user->name=$request->name;
		$user->email=$request->email;
		$user->mobile=$request->mobile;
		$user->address=$request->address;
		$user->password=Hash::make($request->password);
		$user->permissions=$permissions;
		$user->save();
		
		return redirect()->back();
		
	}
	public function updateuser(Request $request)
	{
		if(isset($_POST['permissions']))
		{
			$permissions=implode(",",$_POST['permissions']);
			
		}
		else{
			
		$permissions='';	
		}
		$user=User::find($request->id);
		$user->name=$request->name;
		$user->email=$request->email;
		$user->mobile=$request->mobile;
		$user->address=$request->address;
		if($request->password!='')
		{
		$user->password=Hash::make($request->password);
		}
		$user->permissions=$permissions;
		$user->save();
		
		return redirect()->back();
		
	}
	
	
	public function viewuser()
	{
		 $user = User::where('type','0')->get();
		
		
		 return view('admin.viewuser',['user'=>$user]);
	}
	
	public function edituser(Request $request,$id)
	{
		$user = User::where('id',$id)->first();
		
		
		 return view('admin.edituser',['user'=>$user]);
		
	}
	
	
	public function ourbusinesscontent()
	{
		 $data = DB::table('ourbusiness')->get();
		 $para = DB::table('ourbusinesspara')->get();
		
		 return view('admin.ourbusiness',['data'=>$data,'para'=>$para]);
	}
	
	
	public function editbusinesspara(Request $request,$id)
	{
		 
		 $para = DB::table('ourbusinesspara')->where('id',$id)->first();
		
		 return view('admin.editbusinesspara',['para'=>$para]);
	}
	public function editbusiness(Request $request,$id)
	{
		  $data = DB::table('ourbusiness')->where('ob_id',$id)->first();
		
		
		 return view('admin.editbusiness',['data'=>$data]);
	}
	
	
	public function wepeople()
	{
		$wepeople = DB::table('wethepeople')->get();
		$weteam = DB::table('weteam')->get();
		
		 return view('admin.wepeople',['wepeople'=>$wepeople,'weteam'=>$weteam]);
	}
	public function editwepeople(Request $request,$id)
	{
		$wepeople = DB::table('wethepeople')->where('w_id',$id)->first();
		
		
		 return view('admin.editwepeople',['data'=>$wepeople]);
	}
	
	public function editweteam(Request $request,$id)
	{
			$weteam = DB::table('weteam')->where('wt_id',$id)->first();
		
		 return view('admin.editweteam',['weteam'=>$weteam]);
	}
	
	public function recognition()
	{
	    $recognitionpara = DB::table('recognitionpara')->get();
	    $recognitions = DB::table('recognitions')->get();
		
		 return view('admin.recognition',['recognitionpara'=>$recognitionpara,'recognitions'=>$recognitions]);
	}
	
	public function editrecognitionteam(Request $request,$id)
	{
	    
	    $recognitions = DB::table('recognitions')->where('re_id',$id)->first();
		
		 return view('admin.editrecognition',['recognitions'=>$recognitions]);
	}
	
	public function editrecognition(Request $request,$id)
	{
	    
	   $recognitions = DB::table('recognitionpara')->where('re_id',$id)->first();
		
		 return view('admin.editrecognitionpara',['recognitions'=>$recognitions]);
	}
	
	
	
	public function complaince()
	{
		$complaincepara = DB::table('complaincepara')->get();
	    $complaincecontent = DB::table('complaincecontent')->get();
		
		 return view('admin.complaince',['complaincepara'=>$complaincepara,'complaincecontent'=>$complaincecontent]);
	}	
	
	public function products()
	{
		$productcategory = DB::table('productcategory')->get();
		$product   = DB::table('products')
            ->join('productcategory', 'productcategory.id', '=', 'products.category_id')
          
            ->select('products.*', 'productcategory.category_name','productcategory.id as pid')
			
            ->get(); 
	 
		//print_r($product);
		 return view('admin.products',['productcategory'=>$productcategory,'product'=>$product]); 
	}	
	
	
	public function editcompara(Request $request,$id)
	{
		$complaincepara = DB::table('complaincepara')->where('c_id',$id)->first();
	    return view('admin.editcompara',['complaincepara'=>$complaincepara]);
	}	
	
	public function productcategory(Request $request)
	{
	    
	     $data = DB::table('productcategory')->get();
	     $cat = DB::table('categorymaster')->get();
	
		 return view('admin.productcategory',['data'=>$data,'cat'=>$cat]);
	    
	}
	
	public function editcategory(Request $request, $id)
	{
	    
	     $data = DB::table('productcategory')->where('id',$id)->first();
	
		 return view('admin.editcategory',['data'=>$data]);
	    
	}
	
	
	
	public function contact()
	{
		 $data = DB::table('contact')->get();
		
		 return view('admin.contact',['data'=>$data]);
	}
	
	public function editcontact(Request $request,$id)
	{
		 $data = DB::table('contact')->where('con_id',$id)->first();
		
		 return view('admin.editcontact',['data'=>$data]);
	}
	
	public function infrastructure()
	{
		$infraphoto = DB::table('infraphoto')->get();
		$infravideo = DB::table('infravideo')->get();
		
		 return view('admin.infrastructure',['infraphoto'=>$infraphoto,'infravideo'=>$infravideo]);
	}
	
	public function editinfra(Request $request,$id)
	{
		
		$infravideo = DB::table('infravideo')->where('v_id',$id)->first();
		
		 return view('admin.editinfrastructure',['infravideo'=>$infravideo]);
	}
	public function clients(Request $request)
	{
		
		$clients = DB::table('clients')->get();
		$clientslogo = DB::table('clientslogo')->get();
		
		 return view('admin.clients',['clients'=>$clients,'clientslogo'=>$clientslogo]);
	}
	public function testimonials(Request $request)
	{
		
		
		$testimonials = DB::table('testimonials')->get();
		
		 return view('admin.testimonials',['testimonials'=>$testimonials]);
	}
	
	public function editclientpara(Request $request,$id)
	{
		
		$clients = DB::table('clients')->where('id',$id)->first();
		
		
		 return view('admin.editclientpara',['clients'=>$clients]);
	}
	
	public function editclientlogo(Request $request,$id)
	{
		
		
		$clientslogo = DB::table('clientslogo')->where('id',$id)->first();
		
		 return view('admin.editclientlogo',['clientslogo'=>$clientslogo]);
	}
	
	public function edittestimonial(Request $request,$id)
	{
		
		
		$data = DB::table('testimonials')->where('id',$id)->first();
		
		 return view('admin.edittestimonial',['data'=>$data]);
	}
	
	
	
	public function updatehome(Request $request,$id,$id2)
	{
		
		DB::table('home')
              ->where('home_id',$id2)
              ->update(['status' => $id]);
		
		return redirect("home-content");
	}
	
	
	public function videogallery(Request $request)
	{
		
		$vg=DB::table('videogallery')->get();
              
		
		return view("admin.videogallery",['vg'=>$vg]);
	}  
	public function editvideogallery(Request $request,$id)
	{
		
		$vg=DB::table('videogallery')->where('id',$id)->first();
              
		
		return view("admin.editvideogallery",['vg'=>$vg]);   
	}
	public function photogallery(Request $request)
	{
		
		$pg=DB::table('photogallery')->get();
              
		
		return view("admin.photogallery",['pg'=>$pg]);
	}
	public function editphotogallery(Request $request,$id)
	{
		
		$pg=DB::table('photogallery')->where('id',$id)->first();
              
		
		return view("admin.editphotogallery",['pg'=>$pg]);
	}

	public function savevideogallery(Request $request)
	{
		$in=new VideoGallery();
		
		$in->video=$request->youtube;
		
			$in->caption=$request->caption;
		
		$in->save();
		return redirect("videogallery");
		
		
	}
	public function updatevideogallery(Request $request)
	{
		$in=VideoGallery::find($request->id);
		
		$in->video=$request->youtube;
		
			$in->caption=$request->caption;
		
		$in->save();
		return redirect("videogallery");
		
		
	}
	public function savephotogallery(Request $request)
	{
		$image = $request->file('photo');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(400, 400, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		
		$in=new Photogallery();
		
		$in->photo=$icon;
		$in->caption=$request->caption;
		$in->save();
		return redirect("photogallery");
		
		
	}
	public function updatephotogallery(Request $request)
	{
		$image = $request->file('photo');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(400, 400, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		else{
			$icon=$request->oldphoto;
			
		}
		
		$in=Photogallery::find($request->id);
		
		$in->photo=$icon;
		$in->caption=$request->caption;
		$in->save();
		return redirect("photogallery");
		
		
	}
	
	
	public function add(Request $request)
	{
		
		return view('admin.addpage');
	}
		
	public function view(Request $request)
	{
		$pages=DB::table('cms')->get();
		return view('admin.viewpages',['pages'=>$pages]);
	}
		
	public function editpage(Request $request,$id)
	{
		$page=DB::table('cms')->where('id',$id)->first();
		return view('admin.editpage',['page'=>$page]);
	}
		
	public function addlinks(Request $request)
	{
		$page=DB::table('links')->get();
		return view('admin.addlinks',['links'=>$page]);
	}
		
	public function editlinks(Request $request,$id)
	{
		$page=DB::table('links')->where('id',$id)->first();
		return view('admin.editlinks',['links'=>$page]);
	}	
	public function editcomcontent(Request $request,$id)
	{
		$data=DB::table('complaincecontent')->where('c_id',$id)->first();
		return view('admin.editcomcontent',['data'=>$data]);
	}
		
	public function enquiries(Request $request)
	{
		$data=Contactform::orderBy('id','desc')->paginate(10);
		return view('admin.enquiries',['data'=>$data]);
	}
	
	
	
	
	//////////////////////// All Delete starts ////////////////////////////
	
	
	
	public function deletevideogalllery(Request $request,$id)
	{
		
		DB::table('videogallery')->where('id',$id)->delete();
		return redirect("videogallery");
	}
	
	public function deletephotogallery(Request $request,$id)
	{
		
		DB::table('photogallery')->where('id',$id)->delete();
		return redirect("photogallery");
	}
	
	public function deletehome(Request $request,$id)
	{
		
		DB::table('home')->where('home_id',$id)->delete();
		return redirect("home-content");
	}	
	public function deleteabout(Request $request,$id)
	{
		
		DB::table('about')->where('about_id',$id)->delete();
		return redirect("about-content");
	}
	
	public function deletebusiness(Request $request,$id)
	{
		
		DB::table('ourbusiness')->where('ob_id',$id)->delete();
		return redirect("our-business");
	}
	public function deletewepeople(Request $request,$id)
	{
		
		DB::table('wethepeople')->where('w_id',$id)->delete();
		return redirect("we-the-people");
	}
	
	public function deleteweteam(Request $request,$id)
	{
		
		DB::table('weteam')->where('wt_id',$id)->delete();
		return redirect("we-the-people");
	}
	
	
	public function deleterecognition(Request $request,$id)
	{
		
		DB::table('recognitionpara')->where('re_id',$id)->delete();
		return redirect("recognition");
	}
	public function deleterecognitionteam(Request $request,$id)
	{
		
		DB::table('recognitions')->where('re_id',$id)->delete();
		return redirect("recognition");
	}
	
	public function deletevideo(Request $request,$id)
	{
		
		DB::table('infravideo')->where('v_id',$id)->delete();
		return redirect("infrastructure");
	}
	public function deletephoto(Request $request,$id)
	{
		
		DB::table('infraphoto')->where('p_id',$id)->delete();
		return redirect("infrastructure");
	}
	public function deletecompara(Request $request,$id)
	{
		
		DB::table('complaincepara')->where('c_id',$id)->delete();
		return redirect("complaince");
	}
	public function deletecomcontent(Request $request,$id)
	{
		
		DB::table('complaincecontent')->where('c_id',$id)->delete();
		return redirect("complaince");
	}
	
	public function deletecontact(Request $request,$id)
	{
		
		DB::table('contact')->where('con_id',$id)->delete();
		return redirect("contact");
	}
	public function deletepage(Request $request,$id)
	{
		
		DB::table('cms')->where('id',$id)->delete();
		return redirect("view-pages");
	}
	
	public function deletebusinesspara(Request $request,$id)
	{
		
		DB::table('ourbusinesspara')->where('id',$id)->delete();
		return redirect("our-business");
	}
	
	
	
	//////////////////////// All Delete ends ////////////////////////////
	
	public function savevideo(request $request)
	{
		$file = $request->file('video');
		if($file){
           DB::table('home')->update(['status' => '0']);
          
            $filename = $file->getClientOriginalName();
            $path = './video/';
			$file->move($path, $filename);
			
			$hm=new HomeContent();
			$hm->home_video=$filename;
			$hm->status='1';
			$hm->save();
			return redirect("home-content");
           
        }

		
	}
	
	
		public function saveclientspara(request $request)
	{
			
	
		$sc=new Clients();
		$sc->para=$request->description;
		
		$sc->save();
		
		return redirect("clients");

		
	}
		public function updateparacontent(request $request)
	{
			
	
		$sc=Clients::find($request->id);
		$sc->para=$request->description;
		
		$sc->save();
		
		return redirect("clients");

		
	}
	
		public function saveclients(request $request)
	{
			$image = $request->file('photo');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
	
		$sc=new Clientslogo();
		$sc->logo=$icon;
		$sc->title=$request->title;
		
		$sc->save();
		
		return redirect("clients");

		
	}
	
		public function savetestimonials(request $request)
	{
			$image = $request->file('photo');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(200, 200, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
	
		$sc=new Testimonials();
		$sc->photo=$icon;
		$sc->name=$request->name;
		$sc->testimonial=$request->testimonial;
		
		$sc->save();
		
		return redirect("testimonials");

		
	}
	
	
	public function updatetestimonials(request $request)
	{
			$image = $request->file('photo');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(200, 200, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		else{
			
			$icon=$request->oldphoto;
		}
	
		$sc=Testimonials::find($request->id);
		$sc->photo=$icon;
		$sc->name=$request->name;
		$sc->testimonial=$request->testimonial;
		
		$sc->save();
		
		return redirect("testimonials");

		
	}
		public function updateclientslogo(request $request)
	{
			$image = $request->file('photo');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		else{
			
			$icon=$request->oldlogo;
		}
	
		$sc=Clientslogo::find($request->id);
		$sc->logo=$icon;
		$sc->title=$request->title;
		
		$sc->save();
		
		return redirect("clients");

		
	}
		public function savecategory(request $request)
	{
		
		$image = $request->file('image');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		
		
		$image = $request->file('image2');
		if(isset($image))
		{
        $image_name = time() . '2.' . $image->getClientOriginalExtension(); 
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon2=$image_name;
		}
		$image = $request->file('image3');
		if(isset($image))
		{
        $image_name = time() . '3.' . $image->getClientOriginalExtension(); 
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon3=$image_name;
		}
	
		$sc=new Productcategory();
		
		$sc->description=$request->description;
		$sc->category_image=$icon;
		$sc->category_image2=$icon2;
		$sc->category_image3=$icon3;
		$sc->category_name=$request->title; 
		$sc->template=$request->template; 
		$sc->slug=strtolower(str_replace(" ","-",$request->title));
		$sc->save();
		
		return redirect("product-category");

		
	}
	
		public function addproduct(request $request)
	{
     
  if($request->template=='t1')
  {
         $image = $request->file('t1b1baseimage');
		if(isset($image))
		{
        $image_name = time() . '1.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b1baseimage=$image_name;
		}
		
		
        $image = $request->file('t1b2image1');
		if(isset($image))
		{
        $image_name = time() . '2.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b2image1=$image_name;
		}
		
		
			
        $image = $request->file('t1b2image2');
		if(isset($image))
		{
        $image_name = time() . '3.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b2image2=$image_name;
		}
		
		
			
			
        $image = $request->file('t1b2image3');
		if(isset($image))
		{
        $image_name = time() . '4.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b2image3=$image_name;
		}
		
		
				
        $image = $request->file('t1b3image1');
		if(isset($image))
		{
        $image_name = time() . '5.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b3image1=$image_name;
		}
		
		 $image = $request->file('t1b3image2');
		if(isset($image))
		{
        $image_name = time() . '6.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b3image2=$image_name;
		}
      
      
		 $image = $request->file('t1b3image3');
		if(isset($image))
		{
        $image_name = time() . '7.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b3image3=$image_name;
		}
      
      
      $templatedata=array(
          
          "t1b2heading"=>$request->t1b2heading,
          "t1b2description"=>$request->t1b2description,
          "t1b3heading"=>$request->t1b3heading,
          "t1b3description"=>$request->t1b3description,
          "t1b1baseimage"=>$t1b1baseimage,
          "t1b2image1"=>$t1b2image1,
          "t1b2image2"=>$t1b2image2,
          "t1b2image3"=>$t1b2image3,
          "t1b3image1"=>$t1b3image1,
          "t1b3image2"=>$t1b3image2,
          "t1b3image3"=>$t1b3image3
          );
      
      
  }
  
  
  if($request->template=='t2')
  {
         $image = $request->file('t2b1baseimage1');
		if(isset($image))
		{
        $image_name = time() . '1.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b1baseimage1=$image_name;
		}
		
		
		 $image = $request->file('t2b1baseimage2');
		if(isset($image))
		{
        $image_name = time() . '2.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b1baseimage2=$image_name;
		}
		
		
        $image = $request->file('t2b1baseimage3');
		if(isset($image))
		{
        $image_name = time() . '3.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b1baseimage3=$image_name;
		}
		
		
			
        $image = $request->file('t2b2image1');
		if(isset($image))
		{
        $image_name = time() . '4.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b2image1=$image_name;
		}
		
		  
			
        $image = $request->file('t2b3image1');
		if(isset($image))
		{
        $image_name = time() . '6.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b3image1=$image_name;
		}
		
				
        $image = $request->file('t2b3image2');
		if(isset($image))
		{
        $image_name = time() . '7.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b3image2=$image_name;
		}
		
		
				
        $image = $request->file('t2b3image3');
		if(isset($image))
		{
        $image_name = time() . '8.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b3image3=$image_name;
		}		
       
      
      
      $templatedata=array(
          
          "t2b2heading"=>$request->t2b2heading,
          "t2b2description"=>$request->t2b2description,
          "t2b3heading"=>$request->t2b3heading,
          "t2b3description"=>$request->t2b3description,
          "t2b1baseimage1"=>$t2b1baseimage1,
          "t2b1baseimage2"=>$t2b1baseimage2,
           "t2b1baseimage3"=>$t2b1baseimage3,
          "t2b2image1"=>$t2b2image1,
          "t2b3image1"=>$t2b3image1,
           "t2b3image2"=>$t2b3image2,
           "t2b3image3"=>$t2b3image3,
         
          );
      
      
  }

   if($request->template=='t3')
  {
         $image = $request->file('t3b1baseimage1');
		if(isset($image))
		{
        $image_name = time() . '1.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t3b1baseimage1=$image_name;
		}
		
		
		 $image = $request->file('t3b1baseimage2');
		if(isset($image))
		{
        $image_name = time() . '2.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t3b1baseimage2=$image_name;
		}
		

		
			
        $image = $request->file('t3b2image1');
		if(isset($image))
		{
        $image_name = time() . '3.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t3b2image1=$image_name;
		}
		
		  
				
        $image = $request->file('t3b2image2');
		if(isset($image))
		{
        $image_name = time() . '4.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t3b2image2=$image_name;
		}
		
		
					
        $image = $request->file('t3b2image3');
		if(isset($image))
		{
        $image_name = time() . '5.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t3b2image3=$image_name;
		}
			
       
      
      $templatedata=array(
          
          
          "t3b1baseimage1"=>$t3b1baseimage1,
          "t3b1baseimage2"=>$t3b1baseimage2,
           "t3b2heading"=>$request->t3b2heading,
          "t3b2description"=>$request->t3b2description,
          "t3b2image1"=>$t3b2image1,
           "t3b2image2"=>$t3b2image2,
            "t3b2image3"=>$t3b2image3,
         
          );
      
      
  }

    
		
	
		$sc=new Products();
		$sc->category_id=$request->category;
		$sc->product_name=$request->name;
		$sc->product_description=$request->description;
		$sc->template=$request->template;
		$sc->templatedata=json_encode($templatedata);
		$sc->slug=strtolower(str_replace(" ","-",$request->name));
		$sc->save();

		

return redirect("all-products");

		
	}
	
		public function updateproduct(request $request)
	{
     
  if($request->template=='t1')
  {
         $image = $request->file('t1b1baseimage');
		if(isset($image))
		{
        $image_name = time() . '1.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b1baseimage=$image_name;
		}
		else{
			
			$t1b1baseimage=$request->oldt1b1baseimage;
		}
		
		
        $image = $request->file('t1b2image1');
		if(isset($image))
		{
        $image_name = time() . '2.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b2image1=$image_name;
		}
		else{
			
			$t1b2image1=$request->oldt1b2image1;
		}
		
		
			
        $image = $request->file('t1b2image2');
		if(isset($image))
		{
        $image_name = time() . '3.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b2image2=$image_name;
		}
		else{
			
			$t1b2image2=$request->oldt1b2image2;
		}
		
		
		
		
			
			
        $image = $request->file('t1b2image3');
		if(isset($image))
		{
        $image_name = time() . '4.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b2image3=$image_name;
		}
		
		else{
			
			$t1b2image3=$request->oldt1b2image3;
		}
		
		
		
				
        $image = $request->file('t1b3image1');
		if(isset($image))
		{
        $image_name = time() . '5.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b3image1=$image_name;
		}
		else{
			
			$t1b3image1=$request->oldt1b3image1;
		}
		
		
		
		
		 $image = $request->file('t1b3image2');
		if(isset($image))
		{
        $image_name = time() . '6.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b3image2=$image_name;
		}
		
		else{
			
			$t1b3image2=$request->oldt1b3image2;
		}
      
      
		 $image = $request->file('t1b3image3');
		if(isset($image))
		{
        $image_name = time() . '7.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t1b3image3=$image_name;
		}
		else{
			
			$t1b3image3=$request->oldt1b3image3;
		}
      
      
      $templatedata=array(
          
          "t1b2heading"=>$request->t1b2heading,
          "t1b2description"=>$request->t1b2description,
          "t1b3heading"=>$request->t1b3heading,
          "t1b3description"=>$request->t1b3description,
          "t1b1baseimage"=>$t1b1baseimage,
          "t1b2image1"=>$t1b2image1,
          "t1b2image2"=>$t1b2image2,
          "t1b2image3"=>$t1b2image3,
          "t1b3image1"=>$t1b3image1,
          "t1b3image2"=>$t1b3image2,
          "t1b3image3"=>$t1b3image3
          );
      
      
  }
  
  
  if($request->template=='t2')
  {
         $image = $request->file('t2b1baseimage1');
		if(isset($image))
		{
        $image_name = time() . '1.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b1baseimage1=$image_name;
		}
		else{
			
			$t2b1baseimage1=$request->oldt2b1baseimage1;
		}
		
		
		
		 $image = $request->file('t2b1baseimage2');
		if(isset($image))
		{
        $image_name = time() . '2.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b1baseimage2=$image_name;
		}
		else{
			
			$t2b1baseimage2=$request->oldt2b1baseimage2;
		}
		
		
		
        $image = $request->file('t2b1baseimage3');
		if(isset($image))
		{
        $image_name = time() . '3.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b1baseimage3=$image_name;
		}
		else{
			
			$t2b1baseimage3=$request->oldt2b1baseimage3;
		}
		
		
		
			
        $image = $request->file('t2b2image1');
		if(isset($image))
		{
        $image_name = time() . '4.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b2image1=$image_name;
		}
		else{
			
			$t2b2image1=$request->oldt2b2image1;
		}
		  
			
        $image = $request->file('t2b3image1');
		if(isset($image))
		{
        $image_name = time() . '6.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b3image1=$image_name;
		}
		else{
			
			$t2b3image1=$request->oldt2b3image1;
		}
		
				
        $image = $request->file('t2b3image2');
		if(isset($image))
		{
        $image_name = time() . '7.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b3image2=$image_name;
		}
		else{
			
			$t2b3image2=$request->oldt2b3image2;
		}
		
				
        $image = $request->file('t2b3image3');
		if(isset($image))
		{
        $image_name = time() . '8.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t2b3image3=$image_name;
		}
else{
			
			$t2b3image3=$request->oldt2b3image3;
		}		
       
      
      
      $templatedata=array(
          
          "t2b2heading"=>$request->t2b2heading,
          "t2b2description"=>$request->t2b2description,
          "t2b3heading"=>$request->t2b3heading,
          "t2b3description"=>$request->t2b3description,
          "t2b1baseimage1"=>$t2b1baseimage1,
          "t2b1baseimage2"=>$t2b1baseimage2,
           "t2b1baseimage3"=>$t2b1baseimage3,
          "t2b2image1"=>$t2b2image1,
          "t2b3image1"=>$t2b3image1,
           "t2b3image2"=>$t2b3image2,
           "t2b3image3"=>$t2b3image3,
         
          );
      
      
  }

   if($request->template=='t3')
  {
         $image = $request->file('t3b1baseimage1');
		if(isset($image))
		{
        $image_name = time() . '1.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t3b1baseimage1=$image_name;
		}
		else{
			
			$t3b1baseimage1=$request->oldt3b1baseimage1;
		}
		
		
		 $image = $request->file('t3b1baseimage2');
		if(isset($image))
		{
        $image_name = time() . '2.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t3b1baseimage2=$image_name;
		}
		else{
			
			$t3b1baseimage2=$request->oldt3b1baseimage2;
		}

		
			
        $image = $request->file('t3b2image1');
		if(isset($image))
		{
        $image_name = time() . '3.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t3b2image1=$image_name;
		}
		else{
			
			$t3b2image1=$request->oldt3b2image1;
		}

		  
				
        $image = $request->file('t3b2image2');
		if(isset($image))
		{
        $image_name = time() . '4.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t3b2image2=$image_name;
		}
		else{
			
			$t3b2image2=$request->oldt3b2image2;
		}

		
		
					
        $image = $request->file('t3b2image3');
		if(isset($image))
		{
        $image_name = time() . '5.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$t3b2image3=$image_name;
		}
		else{
			
			$t3b2image3=$request->oldt3b2image3;
		}
			
       
      
      $templatedata=array(
          
          
          "t3b1baseimage1"=>$t3b1baseimage1,
          "t3b1baseimage2"=>$t3b1baseimage2,
           "t3b2heading"=>$request->t3b2heading,
          "t3b2description"=>$request->t3b2description,
          "t3b2image1"=>$t3b2image1,
           "t3b2image2"=>$t3b2image2,
            "t3b2image3"=>$t3b2image3,
         
          );
      
      
  }

    
		
	
		$sc=Products::find($request->id);
		$sc->category_id=$request->category;
		$sc->product_name=$request->name;
		$sc->product_description=$request->description;
		$sc->template=$request->template;
		$sc->templatedata=json_encode($templatedata);
		$sc->slug=strtolower(str_replace(" ","-",$request->name));
		$sc->save();

		

return redirect("all-products");

		
	}
	
	
	public function categorymaster(Request $request)
	{
		$ct=new Categorymaster();
		$ct->page_title=$request->pagetitle;
		$ct->page_heading=$request->pageheading;
		$ct->save();
		return redirect("product-category");
		
		
		
	}
	
	public function updatecategory(request $request)
	{
			$image = $request->file('image');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		else
		{
		    
		    $icon=$request->oldphoto;
		}
		$image = $request->file('image2');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon2=$image_name;
		}
		else
		{
		    
		    $icon2=$request->oldphoto2;
		}
		$image = $request->file('image3');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(600, 600, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon3=$image_name;
		}
		else
		{
		    
		    $icon3=$request->oldphoto3;
		}
		
	    	DB::table('productcategory')
        ->where('id',$request->id)
        ->update([
		
		'description' =>$request->description,
		'category_image' =>$icon,
		'category_image2' =>$icon2,
		'category_image3' =>$icon3,
		'category_name' =>$request->title,
		'template' =>$request->template,
		]);
	
		
		return redirect("product-category");

		
	}
	
	
	
	public function saveabout(Request $request)
	{
		$image = $request->file('image');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(300, 550, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		DB::table('about')->update(['status' => '0']);
		$sc=new Aboutcontent();
		$sc->about_image=$icon;
		$sc->about_content=$request->about;
		$sc->status=1;
		$sc->save();
		
		return redirect("about-content");
		
	}
	
	public function updateabout(Request $request)
	{
		$image = $request->file('image');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(550, 550, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		else
		{
		 $icon=$request->oldimg;	
			
		}
		DB::table('about')
        ->where('about_id',$request->id)
        ->update([
		'about_image' =>$icon,
		'about_content' =>$request->about,
		
		]);
		
		return redirect("about-content");
		
	}
	public function saveourbusiness(Request $request)
	{
		$image = $request->file('image');
		if(isset($image))
		{
        $image_name = time().'t' . '.' . $image->getClientOriginalExtension();
        $destinationPath =  public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(500, 500, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);
        $icon=$image_name;
		
		
		}
		///DB::table('ourbusiness')->update(['status' => '0']);
		$sc=new OurBusiness();
		$sc->image=$icon;
		$sc->position=$request->position;
		$sc->image_heading=$request->heading;
		$sc->image_para=$request->para;
		$sc->status='1';
		
		$sc->save();
		
		return redirect("our-business");
		
	}
	
	
	public function updateourbusiness(Request $request)
	{
		$image = $request->file('image');
		if(isset($image))
		{
        $image_name = time().'t' . '.' . $image->getClientOriginalExtension();
        $destinationPath =  public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(550, 550, function($constraint){ 
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);
        $icon=$image_name;
		
		
		}
		else{
			$icon=$request->oldimg;
		}
		
		DB::table('ourbusiness')
        ->where('ob_id',$request->id)
        ->update([
		'image' =>$icon,
		'position' =>$request->position,
		'image_heading' =>$request->heading,
		'image_para' =>$request->para,
		
		]);
		
		
		
		return redirect("our-business");
		
	}
	
	public function savebusinesspara(Request $request)
	{
		
		$sc=new BusinessPara();
		
		$sc->para=$request->description;
		$sc->status='1';
		
		$sc->save();
		 
		return redirect("our-business");
		
	}
	
	public function updatebusinesspara(Request $request)
	{
		DB::table('ourbusinesspara')
        ->where('id',$request->id)
        ->update([
		'para' =>$request->description
		
		]);
		
		
		 
		return redirect("our-business");
		
	}
	
	
	public function savelinks(Request $request)
	{
		
		DB::table('links')->update(['status' => '0']); 
		$sc=new Links();
		$sc->position=$request->position;
		$sc->title=$request->title;
		$sc->link=$request->link;
		$sc->status='1';
		
		
		$sc->save();
		
		
		
		
 
 
		return redirect("add-links");
		
	}
	public function savewepeople(Request $request)
	{
		$image = $request->file('image');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(1920, 630, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		DB::table('wethepeople')->update(['status' => '0']);
		$sc=new WeThePeople();
		$sc->banner=$icon;
		$sc->status='1';
		$sc->description=$request->heading;
		
		$sc->save();
		
		
		
		
 
 
		return redirect("we-the-people");
		
	}
	
	
	public function updatewecontent(Request $request)
	{
		$image = $request->file('image');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(1920, 630, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		else{
			$icon=$request->oldimg;
		}
	DB::table('wethepeople') ->where('w_id',$request->id)->update([
		'banner' => $icon,
		'description' =>$request->heading		
		]);
		
		return redirect("we-the-people");
		
	}
	public function updatewpteam(Request $request)
	{
		$image = $request->file('photo');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(400, 500, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		else{
			$icon=$request->oldphoto;
		}
		DB::table('weteam') ->where('wt_id',$request->id)->update([
		'photo' => $icon,
		'name' =>$request->name,
		'designation' =>$request->designation,
		'qualification' =>$request->qualification,
		'description' =>$request->description,
		
		]);
		
 
 
		return redirect("we-the-people");
		
	}
	public function saveteam(Request $request)
	{
		$image = $request->file('photo');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../uploads');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(150, 150, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		DB::table('weteam')->update(['status' => '0']);
		$sc=new WeTeam();
		$sc->photo=$icon;
		$sc->name=$request->name;
		$sc->designation=$request->designation;
		$sc->qualification=$request->qualification;
		$sc->status='1';
		$sc->description=$request->description;
		
		$sc->save();
		
		
		
		
 
 
		return redirect("we-the-people");
		
	}
	public function saverteam(Request $request)
	{
		$image = $request->file('photo');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../uploads');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(150, 150, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		DB::table('recognitions')->update(['status' => '0']);
		$sc=new Recognitions();
		$sc->photo=$icon;
		$sc->title=$request->title;
		$sc->status='1';
	
		$sc->description=$request->description;
		
		$sc->save();
		
		
		
		
 
 
		return redirect("recognition");
		
	}
	public function updateteam(Request $request)
	{
		$image = $request->file('photo');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../uploads');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(150, 150, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		else{
			
			$icon=$request->oldphoto;
		}
		
		DB::table('recognitions')
              ->where('re_id', $request->id)
              ->update([
			  'photo' => $icon,
			  'title' => $request->title,
			  
			  'description' =>$request->description,
			  
			  ]);
			  
			  
			
 
 
		return redirect("recognition");
		
	}
	public function updaterecognitionpara(Request $request)
	{
		
		DB::table('recognitionpara')
              ->where('re_id', $request->id)
              ->update([
			  'para' =>$request->description
			  
			  ]);
			  
			  
			
 
 
		return redirect("recognition");
		
	}
	
	
	public function saverecognitionpara(Request $request)
	{
		DB::table('recognitionpara')->update(['status' => '0']);
		$rec=new RecognitionPara();
		$rec->para=$request->description;
		$rec->status='1';
		$rec->save();
		return redirect("recognition");
		
		
	}
	
	
	public function savecompliance(Request $request)
	{
		$image = $request->file('photo');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../uploads');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(150, 150, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		DB::table('complaincecontent')->update(['status' => '0']);
		$sc=new ComplainceContent();
		$sc->image=$icon;
		$sc->title=$request->title;	
		$sc->description=$request->description;		
		$sc->status='1';		
		$sc->save(); 
		return redirect("complaince");
		
	}
	
	
	public function updatecomplaince(Request $request)
	{
		$image = $request->file('photo');
		if(isset($image))
		{
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../uploads');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(150, 150, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');

		$image->move($destinationPath, $image_name);
		$icon=$image_name;
		}
		else{
			$icon=$request->oldphoto;
			
		}
		
			DB::table('complaincecontent')
              ->where('c_id', $request->id)
              ->update([
			  'image' =>$icon,
			  'title' =>$request->title,
			  'description' =>$request->description
			 
			  ]);
		
		return redirect("complaince");
		
	}
	
	public function savepara(Request $request)
	{
		DB::table('complaincepara')->update(['status' => '0']);
		$rec=new ComplaincePara();
		$rec->complaince_para=$request->description;
		$rec->status='1';
		$rec->save();
		return redirect("complaince");	
	}
	
	public function updatecompara(Request $request)
	{
		DB::table('complaincepara')
              ->where('c_id', $request->id)
              ->update([
			  'complaince_para' =>$request->description
			  
			  ]);
		return redirect("complaince");	
	}
	
	public function savecontact(Request $request)
	{
		DB::table('contact')->update(['status' => '0']);
		$co=new Contact();
		$co->description=$request->description;
		$co->phone=$request->phone;
		$co->phone2=$request->phone2;
		$co->email1=$request->email1;
		$co->email2=$request->email2;
		$co->address=$request->address;
		$co->google=$request->google;
		$co->facebook=$request->facebook;
		$co->instagram=$request->instagram;
		$co->twitter=$request->twitter;
		$co->youtube=$request->youtube;
		$co->linkedin=$request->linkedin;
		$co->gplus=$request->gplus;
		$co->status='1';
		$co->save();
		
		return redirect("contact");
	}
	public function updatecontact(Request $request)
	{
		
		DB::table('contact')
              ->where('con_id', $request->id)
              ->update([
			  'description' => $request->description,
			  'phone' => $request->phone,
			   'phone2' => $request->phone2,
			  'email1' => $request->email1,
			  'email2' => $request->email2,
			  
			  'address' => $request->address,
			  'google' => $request->google,
			  'facebook' => $request->facebook,
			  'instagram' => $request->instagram,
			  'twitter' => $request->twitter,
			  'youtube' => $request->youtube,
			  'linkedin' => $request->linkedin,
			  'gplus' => $request->gplus,
			  
			  ]);
			  
	
		
		return redirect("contact");
	}
	
	public function saveinfra(Request $request)
	{
		DB::table('infravideo')->update(['status' => '0']);
		
		$in=new InfraVideo();
		$in->para=$request->description;
		$in->video=$request->youtube;
		$in->status='1';
		$in->save();
		
		return redirect("infrastructure");
	}	
	public function updateinfra(Request $request)
	{
		DB::table('infravideo')
              ->where('v_id', $request->id)
              ->update([
			  'para' => $request->description,
			  'video' => $request->youtube			  
			  ]);
		
		return redirect("infrastructure");
	}
	public function saveimages(Request $request)
	{
		$files = $request->file('photo');
		DB::table('infraphoto')->update(['status' => '0']);
 $i=1;
 if(isset($files))
 {
 foreach($files as $image)
 {
				$image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('../thumbnail');
        $resize_image = Image::make($image->getRealPath());
		
		 $resize_image->resize(1920, 630, function($constraint){
		  $constraint->aspectRatio();
		 })->save($destinationPath . '/' . $image_name);

		$destinationPath = public_path('../uploads');
				$image->move($destinationPath, $image_name);
				
				$in=new InfraPhoto();
		
		$in->photo=$image_name;
		$in->status='1';
		$in->save();
 $i++;
 }
 }
		
		
		
		
		return redirect("infrastructure");
	}
	
	
	
	public function savepage(Request $request)
	{
		$cms=new CMS();
		$cms->title=$request->title;
		$cms->pageorder=$request->pageorder; 
		$cms->position=$request->position; 
		$cms->metakeywords=$request->metakeywords;
		$cms->metadescription=$request->metadescription;
		$cms->status=$request->status;
		if($request->template==1)
		{
			
		$image = $request->file('image');
				if(isset($image))
				{
				$image_name = time() .'1.' . $image->getClientOriginalExtension();
				$destinationPath = public_path('../uploads');
				$resize_image = Image::make($image->getRealPath());
				
				 $resize_image->resize(500, 500, function($constraint){
				  $constraint->aspectRatio();
				 })->save($destinationPath.'/'.$image_name);

				$destinationPath = public_path('../uploads');

				$image->move($destinationPath, $image_name);
				$icon=$image_name;
				}	
			
		$cms->image=$icon;
		$cms->description=$request->description;
		
		
		}
		else{
			$slider=array();
			$counter=$request->counter;
			for($i=1;$i<=$counter;$i++)
			{
				$image = $request->file('sliderimage'.$i);
				if(isset($image))
				{
				$image_name = time() .$i.'.' . $image->getClientOriginalExtension();
				$destinationPath = public_path('../uploads');
				$resize_image = Image::make($image->getRealPath());
				
				 $resize_image->resize(250, 250, function($constraint){
				  $constraint->aspectRatio();
				 })->save($destinationPath.'/'.$image_name);

				$destinationPath = public_path('../uploads');

				$image->move($destinationPath, $image_name);
				$icon=$image_name;
				}
				else{
					$icon='';
					
				}
				if(isset($_POST['slidertitle'.$i]))
				{
				$slider[]=array(
				"sliderimage"=>$icon,
				"slidertitle"=>$_POST['slidertitle'.$i],
				"sliderdescription"=>$_POST['sliderdescription'.$i]
				);
				
				}
				
			}
			
			
			
				
				
			$image = $request->file('b1image');
				if(isset($image))
				{
				$image_name = time() .$i.'.' . $image->getClientOriginalExtension();
				$destinationPath = public_path('../uploads');
				$resize_image = Image::make($image->getRealPath());
				
				 $resize_image->resize(250, 250, function($constraint){
				  $constraint->aspectRatio();
				 })->save($destinationPath.'/'.$image_name);

				$destinationPath = public_path('../uploads');

				$image->move($destinationPath, $image_name);
				$b1image=$image_name;
				}		
			$image = $request->file('b2image');
				if(isset($image))
				{
				$image_name = time() .$i.'.' . $image->getClientOriginalExtension();
				$destinationPath = public_path('../uploads');
				$resize_image = Image::make($image->getRealPath());
				
				 $resize_image->resize(250, 250, function($constraint){
				  $constraint->aspectRatio();
				 })->save($destinationPath.'/'.$image_name);

				$destinationPath = public_path('../uploads');

				$image->move($destinationPath, $image_name);
				$b2image=$image_name;
				}		
			$image = $request->file('b3image');
				if(isset($image))
				{
				$image_name = time() .$i.'.' . $image->getClientOriginalExtension();
				$destinationPath = public_path('../uploads');
				$resize_image = Image::make($image->getRealPath());
				
				 $resize_image->resize(250, 250, function($constraint){
				  $constraint->aspectRatio();
				 })->save($destinationPath.'/'.$image_name);

				$destinationPath = public_path('../uploads');

				$image->move($destinationPath, $image_name);
				$b3image=$image_name;
				}

				
			$data=array(			
			"b1image"=>$b1image,
			
			"b1content"=>$request->b1content,
			"b2heading"=>$request->b2heading,
			"b2title"=>$request->b2title,
			"b2image"=>$b2image,
			"b2content"=>$request->b2content,
			"b3heading"=>$request->b3heading,
			"b3title"=>$request->b3title,
			"b3image"=>$b3image,
			"b3content"=>$request->b3content,
			"slider"=>$slider			
			);
			
		$cms->advancedcontent=json_encode($data);	
		}
		$cms->slug=strtolower(str_replace(" ","-",$request->title));
		$cms->template=$request->template;
		$cms->save();
		return redirect("add-pages");
		
	}
	
	
	public function updatepage(Request $request)
	{
		
		$cms=CMS::find($request->id); 
		$cms->title=$request->title;
		$cms->pageorder=$request->pageorder; 
		$cms->position=$request->position; 
		$cms->metakeywords=$request->metakeywords;
		$cms->metadescription=$request->metadescription;
		$cms->status=$request->status;
		if($request->template==1)
		{
			
		$image = $request->file('image');
				if(isset($image))
				{
				$image_name = time() .'1.' . $image->getClientOriginalExtension();
				$destinationPath = public_path('../uploads');
				$resize_image = Image::make($image->getRealPath());
				
				 $resize_image->resize(500, 500, function($constraint){
				  $constraint->aspectRatio();
				 })->save($destinationPath.'/'.$image_name);

				$destinationPath = public_path('../uploads');

				$image->move($destinationPath, $image_name);
				$icon=$image_name;
				}
			else{

                $icon=$request->oldimage;
			}	
			
		$cms->image=$icon;
		$cms->description=$request->description;
		
		
		}
		else{
			$slider=array();
			$counter=$request->counter;
			for($i=1;$i<=$counter;$i++)
			{
				$image = $request->file('sliderimage'.$i);
				if(isset($image))
				{
				$image_name = time() .$i.'.' . $image->getClientOriginalExtension();
				$destinationPath = public_path('../uploads');
				$resize_image = Image::make($image->getRealPath());
				
				 $resize_image->resize(250, 250, function($constraint){
				  $constraint->aspectRatio();
				 })->save($destinationPath.'/'.$image_name);

				$destinationPath = public_path('../uploads');

				$image->move($destinationPath, $image_name);
				$icon=$image_name;
				}
				else{
				$icon=$_POST['oldsliderimage'.$i];
					
				}
				
				$slider[]=array(
				"sliderimage"=>$icon,
				"slidertitle"=>$_POST['slidertitle'.$i],
				"sliderdescription"=>$_POST['sliderdescription'.$i]
				);
				
			}
			
			
			
				
				
			$image = $request->file('b1image');
				if(isset($image))
				{
				$image_name = time() .$i.'1.' . $image->getClientOriginalExtension();
				$destinationPath = public_path('../uploads');
				$resize_image = Image::make($image->getRealPath());
				
				 $resize_image->resize(500, 500, function($constraint){
				  $constraint->aspectRatio();
				 })->save($destinationPath.'/'.$image_name);

				$destinationPath = public_path('../uploads');

				$image->move($destinationPath, $image_name);
				$b1image=$image_name;
				}
             else{
                $b1image=$request->oldb1image;

			 }				 
			$image = $request->file('b2image');
				if(isset($image))
				{
				$image_name = time() .$i.'2.' . $image->getClientOriginalExtension();
				$destinationPath = public_path('../uploads');
				$resize_image = Image::make($image->getRealPath());
				
				 $resize_image->resize(500, 500, function($constraint){
				  $constraint->aspectRatio();
				 })->save($destinationPath.'/'.$image_name);

				$destinationPath = public_path('../uploads');

				$image->move($destinationPath, $image_name);
				$b2image=$image_name;
				}
else{
                $b2image=$request->oldb2image;

			 }						
			$image = $request->file('b3image');
				if(isset($image))
				{
				$image_name = time() .$i.'3.' . $image->getClientOriginalExtension();
				$destinationPath = public_path('../uploads');
				$resize_image = Image::make($image->getRealPath());
				
				 $resize_image->resize(500, 500, function($constraint){
				  $constraint->aspectRatio();
				 })->save($destinationPath.'/'.$image_name);

				$destinationPath = public_path('../uploads');

				$image->move($destinationPath, $image_name);
				$b3image=$image_name;
				}
				else{
                $b3image=$request->oldb3image;

			 }		

				
			$data=array(			
			"b1image"=>$b1image,
			
			"b1content"=>$request->b1content,
			"b2heading"=>$request->b2heading,
			"b2title"=>$request->b2title,
			"b2image"=>$b2image,
			"b2content"=>$request->b2content,
			"b3heading"=>$request->b3heading,
			"b3title"=>$request->b3title,
			"b3image"=>$b3image,
			"b3content"=>$request->b3content,
			"slider"=>$slider			
			);
			
		$cms->advancedcontent=json_encode($data);	
		}
		$cms->slug=strtolower(str_replace(" ","-",$request->title));
		$cms->template=$request->template;
		$cms->save();
		return redirect("editpage/".$request->id);
	}
	
	public function updatelinks(Request $request)
	{
		
		DB::table('links')
              ->where('id', $request->id)
              ->update([
			  'title' => $request->title,
			  'link' => $request->link,
			  'position' => $request->position,
			  	  
			  
			  ]);
		return redirect("add-links");
	}
		
	public function deletelinks(Request $request,$id)
	{
		
		DB::table('links')
              ->where('id', $request->id)->delete();
              
		return redirect("add-links");
	}
		
	public function deleteclientlogo(Request $request,$id)
	{
		
		DB::table('clientslogo')
              ->where('id', $request->id)->delete();
              
		return redirect("clients");
	}		
	public function deletetestimonial(Request $request,$id)
	{
		
		DB::table('testimonials')
              ->where('id', $request->id)->delete();
              
		return redirect("testimonials");
	}
			
	public function deleteclient(Request $request,$id)
	{
		
		DB::table('clients')
              ->where('id', $request->id)->delete();
              
		return redirect("clients");
	}
	
	
	public function deletecategory(Request $request,$id)
	{
		
		DB::table('productcategory')
              ->where('id', $request->id)->delete();
              
		return redirect("product-category");
	}
	public function deleteenquiry(Request $request,$id)
	{
		
		DB::table('contactform')
              ->where('id', $request->id)->delete();
              
		return redirect("enquiries");
	}
	
	public function deleteproducts(Request $request,$id)
	{
		
		DB::table('products')
              ->where('id', $request->id)->delete();
              
		return redirect("all-products");
	}	
	public function deleteuser(Request $request,$id)
	{
		
		DB::table('users')
              ->where('id', $request->id)->delete();
              
		return redirect("view-user");
	}
	
	public function editproducts(Request $request)
	{
		$product=DB::table('products')
              ->where('id', $request->id)->first();
			 
		$productcategory = DB::table('productcategory')->get();	  
		return view('admin.editproduct',['product'=>$product,'productcategory'=>$productcategory]);
		
		
		
	}
}
