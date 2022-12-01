<div>
    <form id="editUserForm" class="row gy-1 pt-75" wire:submit.prevent="save" novalidate="novalidate">
        <div class="col-12 col-md-6">
            <label class="form-label" for="name"> Name</label>
            <input type="text" id="name" wire:model="name" class="form-control" placeholder="name" data-msg="Please enter your first name">
        </div>
        <div class="col-12 col-md-6">
            <label class="form-label" for="email">Email</label>
            <input type="text" id="email" wire:model="email" class="form-control" placeholder="email" data-msg="Please enter your last name">
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label" for="Phone">Phone</label>
            <input type="text" id="Phone" wire:model="phone" class="form-control">
        </div>
        <div class="col-12 col-md-6">
            <label class="form-label" for="birth_date">birth date</label>
            <input type="date" id="birth_date" wire:model="birth_date" class="form-control">
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label" for="City">City</label>
            <select class="form-select" id="basicSelect" wire:model="city_id">
                <option>Select city</option>
                <option value="1">jedda</option>
                <option value="2">al-riad</option>
                <option value="3">mekka</option>
                <option value="4">ararr</option>
            </select>
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label" for="gender">Gender</label>
            <select class="form-select" id="basicSelect" wire:model="gender">
                <option value="male" selected="">male</option>
                <option value="female">female</option>
            </select>
        </div>

        <div class="mb-1">
            <label class="form-label" for="description">Description</label>
            <textarea class="form-control" id="description" wire:model="description" rows="3" placeholder="Textarea"></textarea>
        </div>


        <div class="col-12 text-end mt-2 pt-50">
            <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
        </div>
    </form>
</div>