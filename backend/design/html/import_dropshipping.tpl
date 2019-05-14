{$meta_title=$btr->import_products scope=parent}


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="/upload/css/style.css">
<link rel="stylesheet" href="/upload/css/jquery.fileupload.css">



{*Название страницы*}
<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="heading_page">
            {$btr->import_products|escape}
            <div class="export_block export_users hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-hint="{$btr->general_example|escape}">
                <a class="export_block" href="files/import/example.csv" target="_blank">
                   <i class="fa fa-file"></i>
                </a>
            </div>
        </div>
    </div>
</div>



<div class="container">

    <blockquote>
        <p>Тест описание процесса импорта категорий и товаров поставщика</p>
    </blockquote>

    <br />

    <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Добавить файл...</span>
        <input id="fileupload" type="file" name="files[]" >
    </span>
    <br />

    <div id="progress" class="progress">
        <div class="progress-bar progress-bar-success"></div>
    </div>


    <!-- The container for the uploaded files -->
    <div id="files" class="files"></div>
    <br />
        <button type="button" class="btn btn-warning" id="start_import">Начало импорта >></button>
        <input id="import_filename" name="prodId" type="hidden" value="">
    <br>
    <br>
    <div id="result"></div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Дополнительная информация</h3>
        </div>
        <div class="panel-body">
            <ul>
                <li>Дополнительная информация 1</li>
                <li>Дополнительная информация 2</li>
                <li>Дополнительная информация 3</li>
            </ul>
        </div>
    </div>

</div>


<script src="/upload/js/vendor/jquery.ui.widget.js"></script>
<script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/upload/js/jquery.iframe-transport.js"></script>
<script src="/upload/js/jquery.fileupload.js"></script>
<script src="/upload/js/jquery.fileupload-process.js"></script>
<script src="/upload/js/jquery.fileupload-image.js"></script>
<script src="/upload/js/jquery.fileupload-audio.js"></script>
<script src="/upload/js/jquery.fileupload-video.js"></script>
<script src="/upload/js/jquery.fileupload-validate.js"></script>
<script>
$(function () {

$('#start_import').click(function(evt){

            $.ajax({
                dataType: 'json',
                url: "ajax/start_import.php",
                data: {
                    filename: $('#import_filename').val(),
                    //session_id : session_id,
                },
                success: function(data){
                    var msg = "";

                    if(data.success){
                    //alert(data.success);
                        $('#result').html(data.success);
                    } else {
                    //alert(111);
                    }


                }
            });

    //alert("div clicked");
   // alert($('#import_filename').val());



});

jQuery("#start_import").hide();

    'use strict';

    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : '/upload/server/php/',
        uploadButton = $('<button/>')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Загрузка...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Стоп')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });

    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png|yml)$/i,
        maxFileSize: 100000000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
        data.context = $('<div/>').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Загрузить')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {

        $.each(data.result.files, function (index, file) {

            if (file.url) {

                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);

                var link2 = $('<button>')
                    .attr('type', 'button')
                    .attr('class', 'btn btn-warning')
                    //.attr('id', 'start_import')
                    ;
jQuery("#start_import").show();

                $(data.context.children()[index])
                    .wrap(link);
                $(data.context.children()[index]).text( file.name );


                    $('#import_filename').val(url + 'files/'+ file.name);
                    $('#result').html('')
                    $('div#files').html('')

            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });

    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>

<script src="{$config->root_url}/backend/design/js/piecon/piecon.js"></script>
<script></script>
