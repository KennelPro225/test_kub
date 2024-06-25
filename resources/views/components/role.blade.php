<div>
    <x-input-label for="Role" :value="__('Role')" />
    <select name="role_id" id=""  class="block mt-1 w-full">
        <option value="">Selection un Profile</option>
        @foreach($roles as $role)
        <option value="{{ $role->id }}">{{$role->label}}</option>
        @endforeach
    </select>
    <x-input-error :messages="$errors->get('role')" class="mt-2" />
</div>