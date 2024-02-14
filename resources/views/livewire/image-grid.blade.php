<!-- resources/views/livewire/image-grid.blade.php -->

<div style="display: flex; flex-wrap: wrap;">
    @foreach ($images as $image)
        <div style="flex: 1; margin: 10px;">
            <a href="#"><img src="{{ asset('images/fulls/' . $image) }}" style="width: 100%; max-width: 300px; height: auto;" alt="Description of the image" /></a>
        </div>
    @endforeach
</div>

