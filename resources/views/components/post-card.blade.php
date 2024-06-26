<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .card button:hover {
        opacity: 0.7;
    }
</style>
<div class="card" style="width:265px">
    <img class="" src="{{ asset('assets/sp.jpg') }}" alt="Card image" width="265px" height="265px">
    <div class="card-img-overlay">
        <h4 class="text-white card-title">{{ $post->title }}</h4>
        <p class="text-white card-text">{{ $post->description }}</p>
        <a href="{{ route('site.post.detail', ['slug' => $post->slug]) }}" class="btn btn-primary">Xem chi tiết</a>
    </div>
</div>
