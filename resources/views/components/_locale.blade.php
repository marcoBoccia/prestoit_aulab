<form action="{{route('locale', $lang)}}" method="POST">
@csrf  
    <button style="background-color: transparent; border: none"   type="submit" class="nav-link active nav-color" href="">
        <span class="fi fi-{{$nation}}"></span>
    </button>
</form>