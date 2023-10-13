tinymce.init({
    selector: '#tinyEditor',  // change this value according to your HTML
    plugins: [
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
        'media', 'table', 'emoticons','directionality', 'template', 'help'
    ],
    toolbar: 'undo redo | fontsize styles | bold italic | ltr rtl |alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
        'forecolor backcolor emoticons | help',
});