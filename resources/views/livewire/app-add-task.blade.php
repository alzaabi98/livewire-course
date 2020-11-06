<div>
    <h3 class="text-center">Add New Task</h3>

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message')}}
    </div>
    @endif
    @error('title')
    <div class="alert alert-danger">
        {{ $message}}
    </div>
    @enderror
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" wire:model="title" class="form-control">
    </div>

    <div class="form-group">
        <button wire:click.prevent="addTask" class="btn btn-primary btn-block">Add</button>
    </div>
    </form>
</div>