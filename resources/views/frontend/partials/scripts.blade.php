<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugins.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js" integrity="sha512-K/oyQtMXpxI4+K0W7H25UopjM8pzq0yrVdFdG21Fh5dBe91I40pDd9A4lzNlHPHBIP2cwZuoxaUSX0GJSObvGA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('frontend/js/scripts.js') }}"></script>
<script src="{{ asset('frontend/js/map-single.js') }}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOU_API_KEY_HERE&libraries=places"></script>
<script src="{{ asset('frontend/js/db-scripts.js') }}"></script>



{{-- <script>
    $('.fuzone input').each(function() {
        $(this).on('change', function() {
            var previewContainer = $('#image-preview-container');
            previewContainer.empty(); // Clear previous previews

            var files = $(this)[0].files;

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();

                reader.onload = (function(file) {
                    return function(e) {
                        // Create a container for the image
                        var container = $("<div class='file-item'></div>").css({
                            width: '150px',
                            height: '150px',
                            position: 'relative'
                        });

                        // Create an image element with object-fit and consistent size
                        var img = $("<img>").attr("src", e.target.result).css({
                            width: '100%',
                            height: '100%',
                            objectFit: 'cover',
                            borderRadius: '8px'
                        });

                        // Create a remove button
                        var removeButton = $("<button class='remove-btn'>&times;</button>")
                            .css({
                                background: 'none',
                                border: 'none',
                                color: 'red',
                                cursor: 'pointer',
                                fontSize: '18px',
                                position: 'absolute',
                                top: '5px',
                                right: '5px'
                            })
                            .on('click', function() {
                                container.remove();
                            });

                        // Append image and remove button to the container
                        container.append(img).append(removeButton);
                        previewContainer.append(container);
                    };
                })(file);

                reader.readAsDataURL(file);
            }
        });
    });
</script> --}}

@stack('script')
