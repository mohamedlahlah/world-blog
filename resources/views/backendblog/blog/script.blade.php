

@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');

        $('#title').on('blur', function() {
            var theTitle = this.value.toLowerCase().trim(),
                slugInput = $('#slug'),
                theSlug = theTitle.replace(/&/g, '-and-')
                                  .replace(/[^a-z0-9-]+/g, '-')
                                  .replace(/\-\-+/g, '-')
                                  .replace(/^-+|-+$/g, '');

            slugInput.val(theSlug);
        });

        var simplemde1 = new SimpleMDE({ element: $("#excerpt")[0] });
        var simplemde2 = new SimpleMDE({ element: $("#body")[0] });

        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            showClear: true
        });

         $('#draft-btn').click(function(e) {
            e.preventDefault();
            $('#published_at').val("");
            $('#post-form').submit();
         });

        var options = {};
      @if($post->exists)
      options = {initialTags: {!! json_encode($post->tags->pluck('name')) !!},};
      @endif
       //$('input[name=post_tags]').tagEditor();
      $('input[name=post_tags]').tagEditor();

</script>
     
    
        {{-- <script "></script>
        </script>
        <script type="text/javascript"> --}}
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('backend/css/jquery.tag-editor.css')}}">
@endsection