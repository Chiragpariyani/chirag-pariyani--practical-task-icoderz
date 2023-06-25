<?php

namespace App\Http\Controllers\Jpanel\company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;


class CompanyController extends Controller
{
    //---------------------------------------Company-----------------------------------------------//
    // ------- Company List----------//
    public function company(){
        $companies = Company::orderBy('id','desc')->get();
        return view('jpanel.company.listCompany',['companies'=>$companies]);
    }

    // -------Add Company----------//
    public function addCompany(){
        return view('jpanel.company.CreateCompany');
    }

    //--------Store Company----------//
    public function storeCompany(Request $request){
        $request->validate([
            'company_name' => 'required',
            'logo' =>'dimensions:min_width=100,min_height=100',
        ]);
       
        if($request->file('logo')) 
        {
            $image = $request->file('logo');
            $thumbnailPath = storage_path('app/public/images/icon/th/');
            $mainImagePath = storage_path('app/public/images/icon/');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $size_x = null;
            $size_y= 80;
            resizeImage($image,$thumbnailPath,$mainImagePath,$imageName,$size_x,$size_y);
        }
        else{
            $imageName = null;
        }
                                                                                                
        $company= new Company;
        $company->name= $request->company_name;
        $company->email= $request->email;
        $company->logo= $imageName;
        $company->website= $request->website;
        $company->save();
        if ($company) {
            return redirect('jpanel/company/list')->with('success', 'Company has been added successfully!');
        } else {
            return redirect('jpanel/company/list')->with('error', 'Something went wrong. Try again.');
        }
    }
      // -------Edit Company----------//
      public function editCompany($id){
          $company = Company::where('id',$id)->first();
        return view('jpanel.company.updateCompany',['company'=>$company]);

    }

      // -------View Company----------//
      public function viewCompany($id){
          $company = Company::where('id',$id)->first();
        return view('jpanel.company.ReadCompany',['company'=>$company]);

    }
     // -------Update Company----------//
     public function updateCompany(Request $request ,$id){
        $request->validate([
            'company_name' => 'required',
        ]);

        if($request->file('logo')) 
        {
            $request->validate([
                'logo' =>'dimensions:min_width=100,min_height=100',
            ]);
            $image = $request->file('logo');
            $thumbnailPath = storage_path('app/public/images/icon/th/');
            $mainImagePath = storage_path('app/public/images/icon/');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $size_x = null;
            $size_y= 80;
            resizeImage($image,$thumbnailPath,$mainImagePath,$imageName,$size_x,$size_y);
         $image = Company::where('id',$id)->update(['logo'=>$imageName]);
        }

        $company = Company::where('id',$id)->update([
            'name'=>$request->company_name,
            'email'=>$request->email,
            'website'=>$request->website,
        ]);
        if ($company) {
            return redirect('jpanel/company/edit/'.$id)->with('success', 'Company details has been Updated successfully!');
        } else {
            return redirect('jpanel/company/edit/'.$id)->with('success', 'Company details has been Updated successfully!');
        }
    }
      // -------Delete Team----------//
      public function deleteCompany(Request $request)
      {
        Company::find($request->id)->delete();
          return response()->json(['status'=>'success','message' => 'Company has been deleted successfully!']);
      }
}
