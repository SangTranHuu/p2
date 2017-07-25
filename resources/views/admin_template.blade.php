@extends('layouts.master')
@section('header-content')
<div class="row">
    <form action="{{ action('TestController@search') }}" method="POST" accept-charset="utf-8">
        {{ csrf_field()}}
        <div class="col-sm-4">
            <div class="form-group">
                <label>Category1</label>
                <select class="form-control" id="main" name="cate_main">
                    <option value="0" selected="selected" disabled="disabled">Category</option>
                    @foreach ($mainCategory as $category)
                    <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                    }
                    option
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Category2</label>
                <select class="form-control" id="l1" name="cate1">
                    <option value="0" selected="selected" disabled="disabled">Category2</option>
                    @foreach ($sub1Category as $category)
                    <option value="{{ $category->category_id}}" class="{{ $category->parent_id }}">
                        {{ $category->name}}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Category3</label>
                <select class="form-control" id="l2" name="cate2">
                    <option value="0" disabled="disabled" selected="selected">Category3</option>
                    @foreach ($sub2Category as $category)
                    <option value="{{ $category->category_id }}" class="{{ $category->parent_id }}">{{ $category->name }}</option>
                    }
                    @endforeach
                </select>
            </div>
        </div>
        
            <div class="col-sm-4">
                <input id="btnSearch" class="btn btn-primary" value="Search" type="submit" name="btnSub">
            </div>
        
    </form>
</div>
    
{{-- <div class="row">
    <div class="col-sm-4">
        <a idhref="{{ action('TestController@search') }}" class="btn btn-primary btnSearch">Search</a>   
    </div>
</div> --}}
@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        // alert($('#main').val());
        $("#l1").children().attr("style", "display : none");
        $("#l2").children().attr("style", "display : none");
        $("#main").change(function(){
            var mainId = $(this).val();
            $("#l2").children().attr("style", "display : none");
            $("#l2").val("0");
            $("#l2 :first-child").attr("style", "display : block");
            displaySub1(mainId);
        });
        $("#l1").change(function(){
            var l1Id = $(this).val();
            displaySub2(l1Id);
        });
    });
    
    
    function displaySub1(mainId){
        $("#l1").children().attr("style", "display : none");
        $("#l1").val("0");
        $("#l1 :first-child").attr("style","display:block");
        $("#l1 ." + mainId).attr("style","display:block");    
    }
    
    function displaySub2(l1Id){
        $("#l2").children().attr("style", "display : none");
        // $("#ward ." + l1Id).attr("style", "display":"block");
        // $("#l2 :first-child").attr("style","display:block");
        $("#l2").val("0");
        $("#l2 :first-child").attr("style","display:block");       
        $("#l2 ." + l1Id).attr("style","display:block");
    }
</script>
{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('.btnSearch').click(function(event) {
            var category = $('#main').val();
            event.preventDefault();
            alert($('#main').val());
            $.ajax({
              url: $(this).attr('href'),
              type: "GET",
              data: {category: category},
              success: function(data) {
                  alert(data); 
              }
            })
        });
    });
</script> --}}
@endsection