<!DOCTYPE html>
<html>
<head>
    <link href="css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="create-pdf" method="post" id="tinymce-form" style="visibility: hidden">
    <textarea name="pdf-html" id="tinymce" >
    @include('template')
    </textarea>
    <button type="submit" class="btn btn-primary"> Download PDF</button>
</form>
</body>
</html>
<script src="https://cdn.tiny.cloud/1/xu4mq6vr5nlbyfj1g93vbxz346ow2un5ro2dts6pwje8zsjq/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
<script>
    tinymce.init(
        {
            selector: '#tinymce',
            auto_focus: "tinymce",
            height: "800",
            toolbar_mode: 'floating',
            setup: function (ed) {
                ed.on('init', function(args) {
                    document.getElementById("tinymce-form").style.visibility = "visible";
                });
            }
        });
</script>
<style>
    form {
        text-align: center;
    }

    button {
        margin: 10px;
    }
</style>

