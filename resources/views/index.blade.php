<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/decoupled-document/ckeditor.js"></script> --}}
</head>
<body>
    <h1>Document editor</h1>

    <form action="">
        @csrf
    <textarea id="editor" name="konten" class="ckeditor">

    </textarea>
    <button type="submit">save</button>
    </form>
    
</body>
</html>