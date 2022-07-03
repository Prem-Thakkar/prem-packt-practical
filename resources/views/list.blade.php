@extends('layouts.main')


@section('main_content')
    <div class="col">
        <div class="row productlisting">
            @include('list_ajax')
        </div>

        <h3 class="mt-5 ajax-load">Loading...</h3>
    </div>
@endsection

@section('scripts')

    <script type="text/javascript">
        let page = 1;

        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                page++;
                loadMoreData(page);
            }
        });


        function loadMoreData(page) {
            $.ajax({
                    url: '{{ route('list.load_more_products') }}' + '?page=' + page,
                    type: "get",
                    beforeSend: function() {
                        $('.ajax-load').show();
                    }
                })
                .done(function(data) {
                    if (data.html == " ") {
                        $('.ajax-load').html(   "No more records found");
                        return;
                    }
                    $('.ajax-load').hide();
                    $(".productlisting").append(data);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert('server not responding...');
                });
        }
    </script>
@endsection
