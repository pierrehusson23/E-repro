<div class="container-fluid">
    <div class="row justify-content-center">
        <h2 class="card-header w-100 m-1 text-center">Uploader une image</h2>
    </div>
    <div class="row justify-content-center">
        <form class="m-2" method="post" action="/file-upload" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
{{--                <label for="name">Nom</label>--}}
                <input type="text" class="form-control" id="name" placeholder="Nom de l'image" name="name">
            </div>
            <div class="form-group">
                <label for="image">Choisir une image</label>
                <input id="image" type="file" name="image">
            </div>
            <button type="submit" class="btn btn-dark d-block w-75 mx-auto">Upload</button>
        </form>
    </div>
</div>

