<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Partner;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerRequest;
use RealRashid\SweetAlert\Facades\Alert;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::with(['service:id,name'])->latest()->paginate(5, ['id', 'name', 'logo','service_id']);

        return view('dashboard.partners.index', ['partners' => $partners]);
    }

    public function create()
    {
        $services=Service::get(['id','name']);
        return view('dashboard.partners.create',compact('services'));
    }

   
    public function store(PartnerRequest $request)
    {
        $logo = uploadImage($request->logo, Partner::PATH);
        $partner =  Partner::create([
            'name' => $request->name,
            'service_id' => $request->service_id,
            'logo' => $logo
        ]);
        if ($partner) {
            toast('created successfully!', 'success');
        } else {
            Alert::error('error ', 'Success Message');
        }
        return redirect()->back();
    }


    public function edit(partner $partner)
    {
        $services=Service::get(['id','name']);
        return view('dashboard.partners.edit', compact('partner','services'));
    }

    public function update(PartnerRequest $request, Partner $partner)
    {

        $logo = $partner->logo;
        if ($request->file('logo')) {
            deleteImage($logo, Partner::PATH);
            $logo = uploadImage($request->logo, partner::PATH);
        }
        $partner =   $partner->update([
            'name' => $request->name,
            'service_id' => $request->service_id,
            'logo' => $logo
        ]);;
        if ($partner) {
            toast(' Your partner has been updated successfully!', 'success');
        } else {
            toast('failed ', 'error');
        }
        return redirect()->back();
    }


    public function destroy(Partner  $partner)
    {
        $logo = $partner->logo;
        $partner = $partner->delete();
        if ($partner == true) {
            deleteImage($logo, Partner::PATH);
            toast('deleted!', 'success');
        } else {
            toast('failed ', 'error');
        }
        return redirect()->back();
    }
}
