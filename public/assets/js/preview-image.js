function previewImage(el_source, el_target) {
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                if (typeof el_target === 'function') {
                    el_target(e.target.result);
                } else {
                    $(el_target).attr('src', e.target.result);
                }
            }

            reader.readAsDataURL(input.files[0]);
        }
    };
    $(document).on('change', el_source, function(){
        readURL(this);
    });
}
