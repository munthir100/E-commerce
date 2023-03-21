<?php

namespace Modules\Admin\Http\Livewire\Design;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\FeatureView;
use Modules\Admin\Entities\FeatureViewDetail;
use Modules\Admin\Entities\PartsCustomization;

class StoreFeaturesForm extends Component
{
    public $title1, $sub_title1, $title2, $sub_title2, $title3, $sub_title3;
    public $storeId; // Added property to hold store ID

    public function render()
    {
        return view('admin::livewire.design.store-features-form');
    }

    public function save()
    {
        // Validate input fields
        $this->validate([
            'title1' => 'required',
            'sub_title1' => 'required',
            'title2' => 'required',
            'sub_title2' => 'required',
            'title3' => 'required',
            'sub_title3' => 'required',
        ]);

        // Create a new FeatureView instance
        $feature = new FeatureView();
        $feature->save();

        // Create three new FeatureViewDetail instances and associate them with the FeatureView
        $feature->feature_details()->create([
            'title' => $this->title1,
            'subtitle' => $this->sub_title1,
            'icon' => '<i data-feather="star"></i>',
        ]);

        $feature->feature_details()->create([
            'title' => $this->title2,
            'subtitle' => $this->sub_title2,
            'icon' => '<i data-feather="star"></i>',
        ]);

        $feature->feature_details()->create([
            'title' => $this->title3,
            'subtitle' => $this->sub_title3,
            'icon' => '<i data-feather="star"></i>',
        ]);

        // Create a new PartsCustomization instance and associate it with the FeatureView
        PartsCustomization::create([
            'store_id' => Auth::user()->admin->store->id,
            'customizable_id' => $feature->id,
            'customizable_type' => FeatureView::class,
        ]);

        // Reset the input fields
        $this->title1 = $this->sub_title1 = $this->title2 =
            // Reset the input fields
            $this->title1 = $this->sub_title1 = $this->title2 = $this->sub_title2 = $this->title3 = $this->sub_title3 = '';

        // Emit a success message to be displayed by the view
        return redirect()->back()->with('succcess', 'feature created successfully');
    }
}
