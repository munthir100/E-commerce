<?php


namespace Modules\Admin\Http\Livewire;

use Livewire\Component;
use Modules\Admin\Entities\Store;
use Illuminate\Support\Facades\Auth;

class CreateSocialMediaLinks extends Component
{
    public $instagram_link,
        $snapchat_link,
        $twitter_link,
        $facebook_user,
        $whatsapp_number,
        $telegram_link,
        $tiktok_link,
        $phone_number,
        $google_play_link,
        $apple_store_link,
        $store;
    function mount()
    {
        $this->store = Auth::user()->admin->store;
        $this->instagram_link = $this->store->instagram_link;
        $this->snapchat_link = $this->store->snapchat_link;
        $this->twitter_link = $this->store->twitter_link;
        $this->facebook_user = $this->store->facebook_user;
        $this->whatsapp_number = $this->store->whatsapp_number;
        $this->telegram_link = $this->store->telegram_link;
        $this->tiktok_link = $this->store->tiktok_link;
        $this->phone_number = $this->store->phone_number;
        $this->google_play_link = $this->store->google_play_link;
        $this->apple_store_link = $this->store->apple_store_link;
    }
    protected  $rules = [
        'instagram_link' => 'nullable|string|max:255',
        'snapchat_link' => 'nullable|string|max:255',
        'twitter_link' => 'nullable|string|max:255',
        'facebook_user' => 'nullable|string|max:255',
        'whatsapp_number' => 'nullable|string|max:255',
        'telegram_link' => 'nullable|string|max:255',
        'tiktok_link' => 'nullable|string|max:255',
        'phone_number' => 'nullable|string|max:255',
        'google_play_link' => 'nullable|string|max:255',
        'apple_store_link' => 'nullable|string|max:255',
    ];
    public function save()
    {
        $data = $this->validate();
        $this->store->update($data);
        $this->dispatchBrowserEvent('addSuccess', ['message' => __("social media links updated successfully")]);
    }

    public function render()
    {
        return view('admin::livewire.create-social-media-links');
    }
}
